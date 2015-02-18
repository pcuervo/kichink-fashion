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

/**
* Scroll past the cover
**/
function scrollDown(){
	var position = $('.product-grid').offset().top;
	position = position - 20;
	$('html, body').animate({scrollTop: position}, 650);
}

/**
* Change language
**/
function changeLang(lang) {
	var ajax = $.post("https://www.kichink.com/home/change_lang", {lang: lang}, function(data) {})
	.success(function() {
		location.reload();
	})
	.error(function() {
		alert("Hubo un error al hacer el cambio. Por favor recarga la pagina e intente de nuevo");
	});
}


/**
* Show/hide related products in the single page
**/
function toggleRelatedProducts(){
	console.log('toggleRelatedProducts');
	if ( $('.product-grid-wrapper').hasClass('hide') ){
		runMasonry('.product-grid', '.item');
		$('.product-grid-wrapper').fadeIn('fast');
		$('.product-grid-wrapper').removeClass('hide').addClass('open');
		return;
	}

	if ( $('.product-grid-wrapper').hasClass('open') ){
		$('.product-grid-wrapper').fadeOut('fast');
		$('.product-grid-wrapper').removeClass('open').addClass('hide');
		return;
	}
}


/*------------------------------------*\
	#RESPONSIVE
\*------------------------------------*/