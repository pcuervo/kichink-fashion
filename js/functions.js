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

function fillSlideshow(images){

	if( images.length <= 1){
		$('.cycle-controls').hide();
			$.each(images, function(i, val){
			image_html = '<img class="[ single-image ]" src="'+val.bordered+'" alt="">';
			$('.slideshow').append(image_html);
		});
	} else {
		$.each(images, function(i, val){
			image_html = '<img src="'+val.bordered+'" alt="">';
			$('.slideshow').append(image_html);
		});
		//runCycle();
	}

}// fillSlideshow

function runCycle(){
	$('.js-cycle-slideshow').cycle({
		fx: 			'scrollHorz',
		centerHorz: 	true,
		centerVert: 	true,
		swipe: 			true,
		timeout: 		0,
		prev: 			'.cycle-prev',
		next: 			'.cycle-next',
		log: 			true
	});
}// runCycle

function mostrarDisponibilidad(disponiblilidad_obj){
	var disp;
	switch (disponiblilidad_obj.type) {
		case "ava_inme":
		{
			disp = "Disponible inmediatamente";
			break;
		}
		case "ava_date":
		{
			disp = "Disponible a partir de " + disponiblilidad_obj.value + " d&iacute;as";
			break;
		}
		default:
		{
			disp = "Disponible en " + disponiblilidad_obj.value + " d&iacute;as";
			break;
		}
	}
	$('.js-disponibilidad').text(disp);
}

function fillStoreDetails(name, description, logo, cover){
	document.title = name + ' - Kichink!';
	$('.store-name').text(name);
	$('.store-description').text(description);
	$('.cover').css('background-image', 'url('+cover+')');
	$('.logo').attr('src', logo);
}// fillStoreDetails

function fillMenuCategories(categories){
	$.each(categories, function(i, category){
		//console.log(category);
		var menu_item_html = '<li><a href="#">'+category.name+'</a>';

		if(category.subcats.length == 0){
			menu_item_html += '</li>';
			$('#menu ul').append(menu_item_html);
			return true;
		}

		// Agregar subcategorías
		menu_item_html += ' \
				<label for="fof" class="toggle-sub" onclick="">&#9658;</label> \
				<input type="checkbox" name="nav" id="fof" class="sub-nav-check"/> \
				<ul id="fof-sub" class="sub-nav"> \
					<label for="fof" class="[ toggle back ]" onclick="" title="Back">Atras</label> \
					<li class="sub-heading">'+category.name+'</li>';
		$.each(category.subcats, function(j, subcat){ menu_item_html += '<li><a href="#">'+subcat.name+'</a></li>'; });
		menu_item_html += '</ul></li>';
		$('#menu ul').append(menu_item_html);
	});
}// fillMenuCategories

/**
* Show/hide related products in the single page
**/
function toggleRelatedProducts(clickedElement){
	if ( $('.product-grid-wrapper').hasClass('hide') ){
		runMasonry('.product-grid', '.item');
		//$(clickedElement).hide();
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

function fillRelatedProducts(related_products){
	$.each(related_products, function(i, product){
		// related-product-grid
		console.log(product);
	})
}// fillRelatedProducts


/*------------------------------------*\
	#RESPONSIVE
\*------------------------------------*/