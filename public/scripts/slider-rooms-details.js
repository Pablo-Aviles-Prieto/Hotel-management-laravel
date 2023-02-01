import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.esm.browser.min.js';

const swiperForRoomsDetails = new Swiper('.mySwiperDetails', {
  slidesPerView: 1,
  spaceBetween: 30,
  loop: true,
  breakpoints: {
    800: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});
