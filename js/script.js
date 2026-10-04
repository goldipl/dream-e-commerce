$(function () {
  $('footer .date-year').html(new Date().getFullYear());

  const toggleMainWrapperClass = () => {
    const isMenuOpen = $('.nav-link.dropdown-toggle.show').length > 0;
    $('#main-wrapper').toggleClass('opened-menu', isMenuOpen);
  };

  const initAccountSidebarActiveLink = () => {
    const pageName = window.location.pathname.split('/').pop().toLowerCase();
    const activePage = /address|adres/.test(pageName)
      ? 'adresy'
      : /order|zamow/.test(pageName)
        ? 'zamowienia'
        : /billing|rozlicz/.test(pageName)
          ? 'rozliczenia'
          : /data|dane/.test(pageName)
            ? 'dane'
            : '';

    $('.account-sidebar').each(function () {
      $(this).find('.account-sidebar__link').each(function () {
        const isActive = $(this).data('account-page') === activePage;
        $(this).toggleClass('account-sidebar__link--active', isActive);

        if (isActive) {
          $(this).attr('aria-current', 'page');
        } else {
          $(this).removeAttr('aria-current');
        }
      });
    });
  };

  initAccountSidebarActiveLink();
  $(document).on('click', toggleMainWrapperClass);

  const initCategoryCardTooltips = () => {
    $('.product-card__action-buttons .action-btn, .product-card .cart-btn').each(function () {
      if ($(this).find('.tooltip').length) {
        return;
      }

      const label = $(this).attr('aria-label') || 'Akcja';
      $('<span class="tooltip"></span>').text(label).prependTo(this);
    });
  };

  const initProductImageZoom = () => {
    const $productPage = $('.product-page-container');
    const $zoomButton = $('.btn-zoom-gallery');

    if (!$productPage.length || !$zoomButton.length || typeof bootbox === 'undefined') {
      return;
    }

    $zoomButton.on('click', function (event) {
      event.preventDefault();

      const $galleryImage = $('.product-gallery__img');
      const imageSrc = $galleryImage.attr('src') || '';
      const imageAlt = $galleryImage.attr('alt') || 'Zdjęcie produktu';

      const modalContent = `
        <div style="position:relative;text-align:center;">
          <button type="button" class="btn-zoom-gallery product-image-modal__close" aria-label="Zamknij">
            <span class="tooltip">Zamknij</span>
            <i class="fa-solid fa-xmark" aria-hidden="true"></i>
          </button>
          <img src="${imageSrc}" alt="${imageAlt}" style="display:block;max-width:100%;max-height:80vh;margin:0 auto;" />
        </div>
      `;

      const dialog = bootbox.dialog({
        message: modalContent,
        closeButton: false,
        backdrop: true,
        className: 'product-image-modal',
        size: 'large',
        buttons: {}
      });

      dialog.find('.product-image-modal__close').on('click', function () {
        dialog.modal('hide');
      });

      $(document).on('click', '.modal-backdrop', function () {
        dialog.modal('hide');
      });
    });
  };

  const initLoadMoreProducts = () => {
    const $grid = $('.products-grid-container');
    const $loadMoreButton = $('.btn-load-more');

    if (!$grid.length || !$loadMoreButton.length) {
      return;
    }

    const $cards = $grid.find('.product-card');
    const initialVisibleCount = 12;
    const batchSize = 6;
    let visibleCount = initialVisibleCount;

    if ($cards.length <= initialVisibleCount) {
      $loadMoreButton.hide();
      return;
    }

    $cards.each(function (index) {
      $(this).toggle(index < initialVisibleCount);
    });

    const updateButtonLabel = () => {
      const remainingCount = $cards.length - visibleCount;
      const nextBatchCount = Math.min(batchSize, remainingCount);

      if (nextBatchCount <= 0) {
        $loadMoreButton.hide();
        return;
      }

      $loadMoreButton.show();
      $loadMoreButton.text(`Wczytaj więcej produktów (${nextBatchCount})`);
    };

    updateButtonLabel();

    $loadMoreButton.on('click', () => {
      const nextVisibleCount = Math.min(visibleCount + batchSize, $cards.length);

      $cards.each(function (index) {
        $(this).toggle(index < nextVisibleCount);
      });

      visibleCount = nextVisibleCount;
      updateButtonLabel();
    });
  };

  const initActiveFilterBadges = () => {
    const $removeButtons = $('.remove-filter-btn');
    const $clearAllButton = $('.clear-all-btn');

    if (!$removeButtons.length && !$clearAllButton.length) {
      return;
    }

    const updateClearButtonVisibility = () => {
      const visibleBadges = $('.filter-badge:visible');
      if ($clearAllButton.length) {
        $clearAllButton.toggle(visibleBadges.length > 0);
      }
    };

    $removeButtons.on('click', function () {
      $(this).closest('.filter-badge').hide();
      updateClearButtonVisibility();
    });

    $clearAllButton.on('click', function () {
      $('.filter-badge').hide();
      updateClearButtonVisibility();
    });

    updateClearButtonVisibility();
  };

  initCategoryCardTooltips();
  initLoadMoreProducts();
  initActiveFilterBadges();
  initProductImageZoom();
});

/**
 * Adres dostawy toggle
 * Switches between the collapsed (invoice address) view and the
 * expanded (custom address form + saved address list) view.
 *
 * Append to ./js/script.js
 */
$(function () {
  const $collapsedView = $("#address-collapsed-view");
  const $expandedView = $("#address-expanded-view");
  const $checkboxes = $("#toggle-different-address, #toggle-different-address-expanded");

  $checkboxes.on("change", function () {
    const isChecked = $(this).is(":checked");

    // Keep both checkbox instances (collapsed + expanded headers) in sync
    $checkboxes.prop("checked", isChecked);

    if (isChecked) {
      $collapsedView.hide();
      $expandedView.prop("hidden", false).show();
    } else {
      $expandedView.hide().prop("hidden", true);
      $collapsedView.show();
    }
  });

  // Selecting a saved address auto-checks it and unchecks the others
  $(".address-list__item input[name='saved-address']").on("change", function () {
    if ($(this).is(":checked")) {
      $(".address-list__item input[name='saved-address']")
        .not(this)
        .prop("checked", false);
      $(".address-list__item").removeClass("address-list__item--active");
      $(this).closest(".address-list__item").addClass("address-list__item--active");
    }
  });
});

$(document).ready(function () {
  var $loginDropdown = $('.login-dropdown');
  var $loginToggle = $('.login-toggle');

  if ($loginDropdown.length && $loginToggle.length) {
    $loginDropdown.on('show.bs.dropdown', function () {
      $loginToggle.addClass('active').attr('aria-expanded', 'true');
    });

    $loginDropdown.on('hide.bs.dropdown', function () {
      $loginToggle.removeClass('active').attr('aria-expanded', 'false');
    });
  }
});