(function ($) {
	'use strict';
   $('.slider-area').slick({
  arrow:true,
  dots:true,
  prevArrow:'<span class="lnr lnr-arrow-left"></span> <button type="button" class="slick-prev">Prev</button>',
  nextArrow:'<button type="button" class="slick-next">Next</button><span class="lnr lnr-arrow-right"></span>',
});
  $('.testimonai-slider-content').slick();
  $('.logo-carosul').slick({
  infinite: true,
  slidesToShow: 5,
});
})(jQuery)
