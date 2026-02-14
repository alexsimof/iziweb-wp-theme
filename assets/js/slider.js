
// swiper in about page

const swiper = new Swiper('.team-swiper', {

  slidesPerView: "auto",
  spaceBetween: 20,

  loop: true,


  pagination: {
    el: '.swiper-pagination',
  },


  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

});


// slider in home page for mobile screen

const serviceSwiper = new Swiper('.services-swiper', {
  // Optional parameters
  slidesPerView: 'auto',
  centeredSlides: true,
  spaceBetween: 20,

  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },


});