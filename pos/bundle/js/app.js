$(document).ready(function(){
	var swiper = new Swiper('.swiper-container', {
      slidesPerView: 1,
      spaceBetween: 10,
      pagination: { el: '.swiper-pagination', clickable: true },
      navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev', clickable: true },
      effect: 'fade',
      fadeEffect: { crossFade: true },
      loop: true,
      autoplay: { delay: 2500 },
      on: {
        slideChangeTransitionEnd: function () {
          var bg = $('.swiper-slide-active').attr('data-bg')
          $('.banner .container').css({ 'background-color': bg })
        },
      } 
    });
    var swiper2 = new Swiper('.swiper-container2', {
      slidesPerView: 1,
      spaceBetween: 10,
      pagination: { el: '.swiper-pagination', clickable: true },
      navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev', clickable: true },
      effect: 'fade',
      fadeEffect: { crossFade: true },
      // loop: true,
      // autoplay: { delay: 2500 },
    });
});