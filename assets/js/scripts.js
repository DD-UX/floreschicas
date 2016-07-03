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
        success_msg = form.find('.success-msg'),
        btn = form.find('button.btn[type="submit"]'),
		btn_text = btn.find(".text"),
		btn_ok = btn.find(".icon-sent"),
		btn_loading = btn.find(".icon-loading");
    
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
        beforeSend: function() {
			btn.prop('disabled', true);
			btn_loading.show();
			btn_text.hide();
        },
        success: function(data) {
          var response = JSON.parse(data) || {
            type: null
          };
          
          // Validar formulario desde el lado del cliente con lo que viene desde el servidor
          if ( response.type === "error" ) {
            success_msg.hide();
            error_msg.text(response.msg).show();
            btn.prop('disabled', false);
			btn_loading.hide();
			btn_text.show();
          } else if ( response.type === "success" ){
            error_msg.hide();
            success_msg.text(response.msg).show();
			btn_ok.show();
			btn_loading.hide();
          } else {
            success_msg.hide();
            error_msg.text("Ha ocurrido un error. Intente nuevamente más tarde.").show();
            btn.prop('disabled', false);
			btn_loading.hide();
			btn_text.show();
          }
        }
       });
    });    
  });
})(jQuery)