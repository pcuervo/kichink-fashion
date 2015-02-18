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
* Check if .item elemets have been loaded and execute mansory
**/
function itemsExist(){

	var interval 	= 0,
		itemsLenght = 0;

	interval = setInterval(function(){
		var itemsLenght = $('.product-grid .item').length;

		if ( itemsLenght > 0 ){
			runMasonry('.product-grid', '.item');
			clearInterval(interval);
		}

	}, 200);

}

function allright(){
	var $container = 'lalala';
	var position = $('.product-grid').offset().top;
	position = position - 20;
	console.log('bottom');
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
		$container.masonry( 'reloadItems' );
		$container.masonry( 'layout' );
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