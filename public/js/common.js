document.addEventListener("DOMContentLoaded", function() {
   
   
   
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8,
          disableDefaultUI: true
        });
 
        var marker = new google.maps.Marker({
            position: {lat: -34.397, lng: 150.644},
            icon: "images/.png",
            map: map,
          });
	  }
	  
	  $(window).scroll(function() {
		if($(window).scrollTop() > 0) {
			$(".scroll-up").css("display","block");
		} else {
			$(".scroll-up").css("display","none");
		}
	}); 
  
	$(".scroll-up").click(function() {
	  $("html, body").animate({ scrollTop: 0 }, "slow");
	  return false;
	});


 	// INITIALIZARE SWIPER
 	 // *************************************************
 	//AJAX submit a form
	$('.submitFormBtn').click(function(){
		$(this).addClass('ajax-loading');
		$(this).prop('disabled', true);
		$.ajax({
			context: this,
			type: $(this).attr('formmethod'),
			data: $(this).closest('form').serialize(),
			url: $('base').attr('href')+$(this).attr('formaction'),
		}).done(function(data){
			$(this).closest('form').children('.error').html(data);
			$(this).removeClass('ajax-loading');
			$(this).prop('disabled', false);
			if(data.indexOf("class='green'") >= 0) $(this).closest('form')[0].reset();
		});

		return false;
	});

	//OFF CANVAS
	$('.toggle-off-canvas').click(function(){
		var pageBody = $('body');
		var offCanvas = $('#off-canvas');
		var pageWrapper = $('#wrapper');

		if(pageBody.hasClass('off-canvas-enabled')){
			offCanvas.addClass('animation-leave');
			setTimeout(function(){
				offCanvas.removeClass('animation-enter animation-enter-active').addClass('animation-leave-active');
				pageWrapper.removeClass('animation-enter-active-wrapper').addClass('animation-leave-active-wrapper');

				setTimeout(function(){
					pageBody.removeClass('off-canvas-enabled');
					pageWrapper.removeClass('animation-leave-active-wrapper');
					offCanvas.removeClass('animation-leave animation-leave-active');
				}, 500);

			}, 250);
		}
		else{
			pageBody.addClass('off-canvas-enabled');
			offCanvas.addClass('animation-enter');
			setTimeout(function() {
				offCanvas.addClass('animation-enter-active');
				pageWrapper.addClass('animation-enter-active-wrapper');
			}, 250);
		}
	});

	// more magic goes here...
    
})