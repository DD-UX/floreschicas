(function($){
  $(document).ready(function(){
    
    // Home Slider init
    var home_slider = new Swiper ('.home-slider', {
      // Optional parameters
      loop: true,
      
      // Navigation arrows
      nextButton: '.swiper-button-next',
      prevButton: '.swiper-button-prev'
    });
  });
})(jQuery)