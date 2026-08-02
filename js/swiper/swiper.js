document.querySelectorAll('.main-page-swiper .swiper').forEach((swiperEl) => {
  if (swiperEl) {
    new Swiper(swiperEl, {
      direction: 'horizontal',
      loop: true,
      watchOverflow: true,
      observer: true,
      observeParents: true,

      pagination: {
        el: swiperEl.querySelector('.swiper-pagination'),
        clickable: true,
      },

      navigation: {
        nextEl: swiperEl.querySelector('.swiper-button-next'),
        prevEl: swiperEl.querySelector('.swiper-button-prev'),
      },

      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
    });
  }
});

const newsSwiperEl = document.querySelector('.news-swiper');

if (newsSwiperEl) {
  new Swiper(newsSwiperEl, {
    direction: 'horizontal',
    loop: true,
    watchOverflow: true,
    observer: true,
    observeParents: true,

    slidesPerView: 1,
    spaceBetween: 20,

    breakpoints: {
      992: {
        slidesPerView: 2,
        spaceBetween: 30
      }
    },

    pagination: {
      el: newsSwiperEl.querySelector('.swiper-pagination'),
      clickable: true,
    },

    navigation: {
      nextEl: newsSwiperEl.querySelector('.swiper-button-next'),
      prevEl: newsSwiperEl.querySelector('.swiper-button-prev'),
    },

    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
  });
}

const recommendedProductsSwiperEl = document.querySelector('.recommended-products-swiper');

if (recommendedProductsSwiperEl) {
  new Swiper(recommendedProductsSwiperEl, {
    direction: 'horizontal',
    loop: false,
    watchOverflow: true,
    observer: true,
    observeParents: true,
    grabCursor: true,
    speed: 400,
    slidesPerView: 1,
    spaceBetween: 16,

    breakpoints: {
      576: {
        slidesPerView: 2,
        spaceBetween: 16
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 24
      },
      1200: {
        slidesPerView: 4,
        spaceBetween: 30
      }
    },

    navigation: {
      nextEl: recommendedProductsSwiperEl.querySelector('.swiper-button-next'),
      prevEl: recommendedProductsSwiperEl.querySelector('.swiper-button-prev'),
    },
  });
}

const articleMoreNewsSwiperEl = document.querySelector('.article-more-news-swiper');

if (articleMoreNewsSwiperEl) {
  new Swiper(articleMoreNewsSwiperEl, {
    direction: 'horizontal',
    loop: false,
    watchOverflow: true,
    observer: true,
    observeParents: true,
    grabCursor: true,
    speed: 400,
    slidesPerView: 1,
    spaceBetween: 24,

    breakpoints: {
      576: {
        slidesPerView: 2,
        spaceBetween: 24
      },
      992: {
        slidesPerView: 3,
        spaceBetween: 32
      }
    },

    navigation: {
      nextEl: articleMoreNewsSwiperEl.querySelector('.swiper-button-next'),
      prevEl: articleMoreNewsSwiperEl.querySelector('.swiper-button-prev'),
    },
  });
}