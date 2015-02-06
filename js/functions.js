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
function openLightbox(){
	$('.cycle-slideshow').cycle({
		slides 		: ".image-single",
		fx 			: "scrollHorz",
		swipe 		: "true",
		timeout 	: "0",
		centerHorz : "true",
		centerVert : "true"
	});
	$('.lightbox').show();
}




/*------------------------------------*\
	#Triggered events
\*------------------------------------*/





/*------------------------------------*\
	#RESPONSIVE
\*------------------------------------*/