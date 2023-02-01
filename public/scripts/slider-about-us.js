import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.esm.browser.min.js';

const swiperForFacilities = new Swiper('.mySwiperFacilities', {
  slidesPerView: 1,
  spaceBetween: 30,
  loop: true,
  breakpoints: {
    800: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
});

const swiperForCounter = new Swiper('.mySwiperCounter', {
  slidesPerView: 1,
  spaceBetween: 30,
  loop: true,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
});
