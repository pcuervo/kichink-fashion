(function($){
	"use strict";
	$(function(){

		/*------------------------------------*\
			#ON LOAD
		\*------------------------------------*/

		/**
		* sidr
		**/
		$('.menu').sidr({
			name: 'sidr'
		});



		/*------------------------------------*\
			#Triggered events
		\*------------------------------------*/




		/*------------------------------------*\
			#RESPONSIVE
		\*------------------------------------*/

	});
})(jQuery);

/*------------------------------------*\
	#ON LOAD
\*------------------------------------*/

//Show lightbox and run cycle
function cycleSlider(){
	$('.cycle-slideshow').cycle({
		fx 			: "scrollHorz",
		swipe 		: "true",
		timeout 	: "0",
		centerHorz 	: "true",
		centerVert 	: "true"
	});
}




/*------------------------------------*\
	#Triggered events
\*------------------------------------*/

//Scrol past the cover
function scrollDown(){
	var position = $('.product-grid').offset().top;
	position = position - 20;
	$('html, body').animate({scrollTop: position}, 650);
}




/*------------------------------------*\
	#RESPONSIVE
\*------------------------------------*/