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