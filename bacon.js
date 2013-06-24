(function ($) {
	$.fn.bacon = function() {

		var timer;
		var t = 1;

		$(this).mouseenter(function(e){

			timer = setTimeout(function() {

				if ( t > 5 ) {
					t = 1;
				}

				var $bacon = $('<audio/>', {
					id: 'bacon', 
					src: baconopt.file + t + '.m4a',
					preload: 'auto',
					autoplay: 'autoplay',
				});

				t++;

			}, 300);

		});

		$(this).mouseleave(function(e){
			clearTimeout(timer);
		})

		//return the jquery object for chaining to continue
		return this;
	}

	$(document).ready(function(){
		$('section').bacon();
	});
}(jQuery));