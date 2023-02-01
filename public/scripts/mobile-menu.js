const mobileBtn = document.querySelector('#mobile-menu-btn');
const mobileMenu = document.querySelector('.mobile-menu');
const mobileMnuIcon = document.querySelector(
  '.container-nav-navbar-mobile-menu-btn'
);

const mobileMenuHandler = () => {
  mobileMenu.classList.toggle('mobile-menu--closed');
  mobileMnuIcon.classList.toggle('container-nav-navbar-mobile-menu-btn--open');
};

mobileBtn.addEventListener('click', mobileMenuHandler);
