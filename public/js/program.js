// var swiper = new Swiper(".mySwiper", {
//   slidesPerView: 3,
//   spaceBetween: 30,
//   slidesPerGroup: 3,
//   loop: true,
//   loopFillGroupWithBlank: true,
//   pagination: {
//     el: ".swiper-pagination",
//     clickable: true,
// },
// navigation: {
//     nextEl: "#prev",
//     prevEl: "#next",
// },
// });

//Save current slide per view
var currentSlidesPerView;

function updateSwiperSlides(windowWidth) {
  var totalSlidesPerView;
  if (windowWidth > 1000) {
    totalSlidesPerView = 3;
  } else if (windowWidth > 800) {
    totalSlidesPerView = 2;
  } else {
    totalSlidesPerView = 1;
  }

  if (currentSlidesPerView === totalSlidesPerView) return;

  currentSlidesPerView = totalSlidesPerView;

  //Initialize Swiper
  new Swiper('.mySwiper', {
    slidesPerView: currentSlidesPerView,
    spaceBetween: 70,
    slidesPerGroup: currentSlidesPerView,
    loop: true,
    loopFillGroupWithBlank: false,
    pagination: {
      el: '#swiperPag',
      clickable: true,
    },
    navigation: {
      nextEl: '#prev',
      prevEl: '#next',
    },
  });
}

//OnLoad: (check the screen size when the page loads)
$(document).ready(function () {
  windowWidth = $(window).width();
  updateSwiperSlides(windowWidth);

  //onResize (check the screen size when the page resizes)
  $(window).resize(function () {
    windowWidth = $(window).width();
    updateSwiperSlides(windowWidth);
  });
});