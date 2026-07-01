$(function () {
  $('footer .date-year').html(new Date().getFullYear());

  const toggleMainWrapperClass = () => {
    const isMenuOpen = $('.nav-link.dropdown-toggle.show').length > 0;
    $('#main-wrapper').toggleClass('opened-menu', isMenuOpen);
  };

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
});