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


/**
* Masonry layout for product grid
**/
function runMasonry(container, item){
	var $container = $(container).masonry();
	$container.imagesLoaded( function() {
		$container.masonry({
			itemSelector: item
		});
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