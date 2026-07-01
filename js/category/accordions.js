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
      $header.on('click', function () {
        $(this).closest('.category-left-filters__slot').toggleClass('active');
      });
    }
  });
});