// swiper
var swiper = new Swiper(".swiper_head", {
  spaceBetween: 30,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

var swiper = new Swiper(".swiper_product-sale", {
  slidesPerView: 1,
  // rewind: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    730: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1200: {
      slidesPerView: 3,
    },
  },
});

var swiper = new Swiper(".swiper_social-instagram", {
  slidesPerView: 2.5,
  slidesPerGroup: 1,
  autoHeight: false,
  grid: {
    rows: 1,
  },
  spaceBetween: 20,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    1200: {
      slidesPerGroup: 3,
      grid: {
        rows: 2,
      },
    },
  },
});


// search modal
const search = document.querySelector('.search');
const searchIcon = document.querySelector('.search-icon');
const close = document.querySelector('.close');

searchIcon.addEventListener('click', () => {
  search.classList.add('active');
  searchIcon.classList.add('active');
  close.classList.add('active');
})
close.addEventListener('click', () => {
  search.classList.remove('active');
  searchIcon.classList.remove('active');
  close.classList.remove('active');
})


// gamburger
const icon = document.querySelector('.nav-icon');
const nav = document.querySelector('.menu-header_mobi');
const navbar = document.querySelector('.nav-bar');

icon.addEventListener('click', () => {
  icon.classList.toggle('icon-active');
  nav.classList.toggle('nav-active');
  navbar.classList.toggle('navbar-active');
});


// MODAL photo
const btnOpen = document.getElementById("open__btn");
const molad = document.getElementById('wrapper-modal');
const overlay = document.getElementById('overlay');
const closeImg = document.getElementById('close-img');


// btnOpen.addEventListener('click',()=>{
//     molad.classList.add('active');
// })

// const closeModal = () =>{
//     molad.classList.remove('active');

// }

// closeImg.addEventListener('click',()=>{
//      molad.classList.remove('active');
// })

// overlay.addEventListener('click',closeModal);


// sort product

let sortItemsCoffe = document.querySelector('.orderby');

// sort product coffee
const urlCoffe = 'http://millor/product-category/all-product/freshly-roasted-coffee';
if(urlCoffe === 'http://millor/product-category/all-product/freshly-roasted-coffee'){
  sortItemsCoffe.classList.add('orderby-coffe');
}

const sortItemsCoffes = document.querySelectorAll('orderby-coffe option');
sortItemsCoffes.forEach(el => el.addEventListener('click', () => {
  const data_value = el.getAttribute('data-value');
  window.location.href = "/product-category/all-product/freshly-roasted-coffee?orderby=" + data_value;
}));




