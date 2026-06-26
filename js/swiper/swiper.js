const swiper = new Swiper('.swiper', {
    direction: 'horizontal',
    loop: true,
  
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
  
});

const newsSwiper = new Swiper('.news-swiper', {
  direction: 'horizontal',
  loop: true,
  
  slidesPerView: 1,
  spaceBetween: 20,

  breakpoints: {
    992: {
      slidesPerView: 2,
      spaceBetween: 30 
    }
  },

  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  
});

const recommendedProductsSwiper = new Swiper('.recommended-products-swiper', {
  direction: 'horizontal',
  loop: true,
  slidesPerView: 1,
  spaceBetween: 16,

  // Responsive dynamic breakpoints layout configuration
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
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
});