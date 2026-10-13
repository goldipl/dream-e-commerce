$(function () {
  const $filterBtn = $('.category-left-filters-box__button');
  const $filtersWrapper = $('.category-left-filters');
  const $mainArrow = $filterBtn.find('img');

  if ($filterBtn.length && $filtersWrapper.length) {
    $filterBtn.on('click', function () {
      $filtersWrapper.toggleClass('show');
      $mainArrow.toggleClass('rotate');
    });
  }

  $('.category-left-filters__slot').each(function () {
    const $header = $(this).find('.header');

    if ($header.length) {
      $header.attr({
        role: 'button',
        tabindex: '0',
        'aria-expanded': $(this).hasClass('active')
      });
      $header.on('click', function () {
        const $slot = $(this).closest('.category-left-filters__slot');
        const isExpanded = $slot.toggleClass('active').hasClass('active');
        $(this).attr('aria-expanded', isExpanded);
      });
      $header.on('keydown', function (event) {
        if (event.key === 'Enter' || event.key === ' ') {
          event.preventDefault();
          $(this).trigger('click');
        }
      });
    }
  });

  const $panel = $('#mobileFiltersPanel');
  const $mobileFilterToggle = $('.mobile-filter-toggle');
  const $filterCount = $('.mobile-filter-count');
  const $filterInputs = $panel.find('input[type="checkbox"]');

  if (!$('.products-grid-container').length) {
    $('.mobile-catalog-toolbar__views').hide();
  }

  if (window.matchMedia('(max-width: 991px)').matches) {
    $('.category-left-filters__slot').removeClass('active');
    $('.category-left-filters__slot .header').attr('aria-expanded', false);
  }

  const updateSelectedFilters = () => {
    const selectedCount = $filterInputs.filter(':checked').length;
    $filterCount.text(selectedCount).prop('hidden', selectedCount === 0);
    $mobileFilterToggle
      .toggleClass('is-active', selectedCount > 0)
      .attr('aria-label', selectedCount > 0 ? `Filtry, wybrano: ${selectedCount}` : 'Filtry');
  };

  const closeFilters = () => {
    $panel.removeClass('filters-open');
    $('body').removeClass('filters-open');
    $mobileFilterToggle.attr('aria-expanded', 'false').trigger('focus');
  };

  $mobileFilterToggle.on('click', function () {
    $panel.addClass('filters-open');
    $('body').addClass('filters-open');
    $(this).attr('aria-expanded', 'true');
    $panel.find('.category-filters-close').trigger('focus');
  });

  $panel.find('.category-filters-close, .category-filters-apply, .category-filters-backdrop').on('click', closeFilters);

  $panel.find('.category-filters-clear').on('click', function () {
    $filterInputs.prop('checked', false);
    updateSelectedFilters();
  });

  $filterInputs.on('change', updateSelectedFilters);
  updateSelectedFilters();

  $(document).on('keydown', function (event) {
    if (event.key === 'Escape' && $panel.hasClass('filters-open')) {
      closeFilters();
    }
  });

  $(window).on('resize', function () {
    if (window.matchMedia('(min-width: 992px)').matches && $panel.hasClass('filters-open')) {
      $panel.removeClass('filters-open');
      $('body').removeClass('filters-open');
      $mobileFilterToggle.attr('aria-expanded', 'false');
    }
  });

  $('.catalog-view-toggle').on('click', function () {
    const view = $(this).data('view');
    const isListView = view === 'list';
    $('.products-grid-container').toggleClass('is-list-view', isListView);
    $('.catalog-view-toggle')
      .removeClass('is-active')
      .attr('aria-pressed', 'false');
    $(this).addClass('is-active').attr('aria-pressed', 'true');
  });
});