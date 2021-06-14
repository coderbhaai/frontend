$(document).ready(function(){
	var swiper = new Swiper('.swiper-container1', {
      slidesPerView: 1,
      spaceBetween: 10,
      pagination: { el: '.swiper-pagination', clickable: true },
      navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev', clickable: true },
      // effect: 'fade',
      // fadeEffect: { crossFade: true },
      loop: true,
      autoplay: { delay: 2500 },
      // on: {
      //   slideChangeTransitionEnd: function () {
      //     var bg = $('.swiper-slide-active').attr('data-bg')
      //     $('.banner .container').css({ 'background-color': bg })
      //   },
      // } 
  });
  new Swiper('.swiper-container2', {
    slidesPerView: 1,
    spaceBetween: 10,
    // pagination: { el: '.swiper-pagination', clickable: true },
    navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev', clickable: true },
    loop: true,
    autoplay: { delay: 2500 },
    breakpoints: {
      640: { slidesPerView: 2, spaceBetween: 10, },
      768: { slidesPerView: 3, spaceBetween: 10, },
      1400: { slidesPerView: 4, spaceBetween: 10, },
    },
  });
  $(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    if (scroll >= 10) { $(".fixthis").addClass("nav-fix"); }else { $(".fixthis").removeClass("nav-fix"); }
  });
});