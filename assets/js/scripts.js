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
    
    
    // Contact form
    var form = $('#contact_form'),
        error_msg = form.find('.error-msg'),
        success_msg = form.find('.success-msg');
    
    form.on('submit', function(e){
      e.preventDefault();
      $.ajax({
        type: "POST",
        url: form.attr("action"),
        data: form.serialize(),
        error: function(e){
          console.error(e);
          success_msg.hide();
          error_msg.text("Ha ocurrido un error. Intente nuevamente más tarde.").show();
        },
        success: function(data) {
          var response = JSON.parse(data) || {
            type: null
          };
          
          // Validar formulario desde el lado del cliente con lo que viene desde el servidor
          if ( response.type === "error" ) {
            success_msg.hide();
            error_msg.text(response.msg).show();
          } else if ( response.type === "success" ){
            error_msg.hide();
            success_msg.text(response.msg).show();
          } else {
            success_msg.hide();
            error_msg.text("Ha ocurrido un error. Intente nuevamente más tarde.").show();
          }
        }
       });
    });    
  });
})(jQuery)