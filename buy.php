<?php 
	$item_id = $_GET["id"];
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Tu tienda - Kichink!</title>
		<link rel="shortcut icon" href="images/favicon.ico">
		<link rel="stylesheet" href="style.css">
		<meta name="description" content="">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="cleartype" content="on">
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<!-- -->
		<!-- #Typekit code goes here -->
		<!-- -->
	</head>
	<body>
		<!--[if lt IE 9]>
			<p class="chromeframe">Estás usando una versión <strong>vieja</strong> de tu explorador. Por favor <a href="http://browsehappy.com/" target="_blank"> actualiza tu explorador</a> para tener una experiencia completa.</p>
		<![endif]-->
		<div class="[ container ]" id="item-container">
			<header class="[ header-front ]">
				<div class="[ wrapper ] [ shown--small ]">
					<div class="[ row ]">
						<div class="[ columna xmall-4 ][ menu__item ]">
							<a href="#">
								<i class="icon-menu"></i>
							</a>
						</div>
						<div class="[ columna xmall-4 ]">
							<h1>
								<a href="/">
									<img src="images/logo-tienda.png" alt="Tu tienda" title="Inicio" />
								</a>
							</h1>
						</div>
						<div class="[ columna xmall-4 ][ text-right ][ menu__item ]">
							<a href="#" class="">
								<i class="icon-cart"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="[ wrapper ][ shown--medium ]">
					<div class="[ row ]">
						<div class="[ columna xmall-4 ][ text-left ][ menu__item ]">
							<a href="/" class="">
								<i class="icon-menu"></i>
							</a>
						</div>
						<div class="[ columna xmall-4 ]">
							<h1>
								<a href="/">
									<img src="images/logo-tienda.png" alt="Tu tienda" title="Inicio" />
								</a>
							</h1>
						</div>
						<div class="[ columna xmall-4 ][ ][ text-right ][ menu__item ]">
							<a href="#" class="">
								<i class="icon-lang"></i>
							</a>
							<a href="#" class="">
								<i class="icon-login"></i>
							</a>
							<a href="#" class="">
								<i class="icon-help"></i>
							</a>
							<a href="#" class="">
								<i class="icon-cart"></i>
							</a>
						</div>
					</div>
					<h2 class="[ text-center ]">ALEXIA ULIBARRI</h2>
				</div><!-- .wrapper -->
			</header>
			<div class="[ main ] [ row ]" >
				<section class="[ slider ]">
					<img src="images/producto.jpg" alt="">
					<img src="images/producto.jpg" alt="">
					<img src="images/producto.jpg" alt="">
				</section><!-- cover -->
				<section>
					<article class="[ product__info ] [ row ]" id="item-detail">
						<div class="[ product__info--name ] [ columna xmall-6 ]">
							<h2 class="[ text-center ] [ title ]">Hello?</h2>
						</div><!-- product__info--name -->
						<div class="[ product__info--price ] [ columna xmall-6 ]">
							<p class="[ text-center font-serif ] [ precio ]"></p>
						</div><!-- product__info--price -->
						<div class="[ product__info--description ] [ description ] [ columna xmall-12 ]">
							<p class="[  ]"></p>
						</div><!-- product__info--price -->
					</article>
					<article class="[ product__options ] [ row ]">
						<h2 class="[ text-center ] [ opcioncompra ]">Opciones de compra</h2>
						<div id="opc" class="btn-group" data-toggle="buttons"></div>
						<p class="[ text-center font-serif ]">Tallas</p>
						<div class="[ text-center ]">
							<a href="#" class="[ inline-block ] [ disabled ]">XS</a>
							<a href="#" class="[ inline-block ]">S</a>
							<a href="#" class="[ inline-block ] [ selected ]">M</a>
							<a href="#" class="[ inline-block ]">L</a>
							<a href="#" class="[ inline-block ] [ disabled ]">XL</a>
						</div>
						<p class="[ text-center font-serif ]">Colores</p>
						<div class="[ text-center ]">
							<a href="#" class="[ inline-block ]">azul</a>
							<a href="#" class="[ inline-block ] [ selected ]">negro</a>
							<a href="#" class="[ inline-block ]">blanco</a>
						</div>
					</article>
					<article class="[ product__extra ] [ row ]">
						<h2 class="[ text-center ]">Información adicional</h2>
						<p class="[ text-center font-serif ]">Disponibilidad</p>
						<p>Disponible inmediatamente</p>
						<p class="[ text-center font-serif ]">Formas de pago</p>
						<p>Tarjeta de crédito y efectivo</p>
					</article>
					<article class="[ product__buy ] [ row ]">
						<h2 class="[ text-center font-serif ]">$1,200</h2>
						<div class="[ text-center ]">
							<a href="#" class="[ boton ]" id="buy_buton" data-id="<?php echo $item_id ?>">Lo quiero</a>
						</div>
					</article>
				</section><!-- product-grid -->
			</div><!-- main -->
		</div><!-- container -->
		<footer>
			<div class="[ wrapper ]">
				<p class="[ text-center ]">Esta tienda en línea está protegida y encriptada con SSL de 256 bits y es operada por <img src="#" alt=""></p>
				<div class="[ text-center ]">
					<a class="[ inline-block ]" href="#">Términos y condiciones</a>
					<a class="[ inline-block ]" href="#">Políticas de privacidad</a>
				</div>
			</div>
		</footer>
	</body>

	<!-- scripts de Kichink! -->
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//www.kichink.com/v2/themes/js/loginForm.js"></script>
    <script type="text/javascript" src="//www.kichink.com/v2/themes/js/searchbox.js"></script>
    <script type="text/javascript" src="//www.kichink.com/v2/themes/js/gridProdukts.js?v=<?= @$v ?>"></script>
    <script type="text/javascript" src="//www.kichink.com/v2/themes/js/shoppingkart.js?v=<?= @$v ?>"></script>
    <script type="text/javascript" src="//www.kichink.com/js/jquery.callapi.js"></script>
    <script type="text/javascript" src="//www.kichink.com/assets_verticales/js/ajaxq.jquery.js"></script>
    <script type="text/javascript" src="//www.kichink.com/v2/themes/js/smoothprodukts.js"></script>
	<script>
		$(document).ready(function() {      
			var store_id = 146;  
			var item_id = <?php echo $item_id; ?>    
            $.ajax({
                type: "POST",
                data: {
                    store_id: store_id,
                    limit: 1,
                    item_id: item_id,
                    offset: 0
                },
                url: "https://www.kichink.com/api/stores/get_store_items",
                success: function(data) {
                    $("#loading-items").hide();
                    var ajax_request = jQuery.parseJSON(data.toString());
                    console.log(ajax_request.data[0]);
                    load_item(ajax_request.data[0], false);
                }
            });
        });

        function load_item(data, animated) {
            if (data != undefined) { 
                v = window.location.pathname.split("/");
                var time = 1000;
                $("#item-container").show();
                var store_name = (v[1] == "buy") ? v[3] : v[2];

                if (!animated) {
                    time = 0;
                } else {
                    $("#items").fadeOut("slow");
                    //$("#categories").fadeOut("slow");
                    if ($("#menu-shopping").width() < $(".container").width())
                        $("#menu-shopping").fadeOut();
                    document.title = store_name.charAt(0).toUpperCase() + store_name.slice(1) + ": " + data.name;
                    window.history.replaceState({}, '', "/buy/" + data.id + "/" + store_name + window.location.search);
                }

                $("#item-container").find("#buy_button").data("id", data.id);
                $("#item-container").find("#buy_button").removeClass("disabled");
                $("#item-container #preview").find(".ribbon").remove();
                if (data.ribbon) {
                    if (data.ribbon == "vendido") {
                        $("#item-container").find("#buy_button").addClass("disabled");
                    }
                    if (data.ribbon == "ultimos articulos") {
                        if (parseInt(data.units_available) <= parseInt(data.ultimos_inventarios)) {
                            $("#item-container #preview").append("<div class='ribbon'>" + data.ribbon + "</div>");
                        }
                    } else {
                        $("#item-container #preview").append("<div class='ribbon'>" + data.ribbon + "</div>");
                    }
                }

                if (data.sku) {
                    $(".sku-item").show();
                    $(".sku-item .sku").html(data.sku);
                }

                if (data.display_options) {
                    for (var x in data.display_options) {
                        $(".options table").append('<tr><td width="50%">' + data.display_options[x].option_name + '</td><td width="50%">' + data.display_options[x].option_values + '</td></tr>');
                    }
                }

                $(".myownbanner").hide();

                $("#item-container").find(".title").html(data.name);

                var val = $("#item-container").find(".description p").html(data.description);

                if (!data.description)
                    $("#item-container").find(".description").hide();
                else
                    $("#item-container").find(".description").show();


                var aplicar_descuento = (parseInt(data.discount) > 0) ? (parseFloat(data.price) - parseFloat(data.discount_price)).toFixed(2) : data.price;

				var p = aplicar_descuento.toString();
				var precio = p.split(".");
				console.log(precio)
				$("#item-container").find("#item-detail .precio").html("$" + precio[0].toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",") + "." + "<sup>" + precio[1] + "</sup>");

				if (parseInt(data.discount) > 0) {
    				precio = data.price.toString().split(".");
    					$("#item-container").find("#item-detail .precio").append("<div class='discount'><p>Precio Regular</p><span class='items-price'>$" + precio[0].toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",") + "." + precio[1] + "</span></div>");
                }

                var disp = "Art&iacute;culo no disponible";
                switch (data.disponibilidad[0].type) {
                    case "ava_inme":
                    {
                        disp = "Disponible inmediatamente";
                        break;
                    }
                    case "ava_date":
                    {
                        disp = "Disponible a partir de " + data.disponibilidad[0].value + " d&iacute;as";
                        break;
                    }
                    default:
                    {
                        disp = "Disponible en " + data.disponibilidad[0].value + " d&iacute;as";
                        break;
                    }
                }

                if (data.purchase_options.length > 0) {
                    if (data.purchase_options[0].length > 0) {
                        $(".opcioncompra").show();
                        for (var it in data.purchase_options[0]) {
                            $(".opcioncompra #opc").append('<label data-label="' + data.purchase_options[0][it].label.toLowerCase() + '" class="btn btn-default ' + ((data.purchase_options[0][it].units > 0) ? "" : "disabled") + '"><input type="radio" ' + ((data.purchase_options[0][it].units > 0) ? "" : "disabled") + ' name="options" id="option1" value="' + data.purchase_options[0][it].po_label + '">' + data.purchase_options[0][it].label + '</label>');
                        }
                    }
                } else 
                	$(".opcioncompra").hide();

                $("#opc").find("label").each(function(i, e) {
                    if (!$(e).hasClass("disabled")) {
                        $(e).click(function() {
                            $("#opc").find("label[data-label!='" + $(e).data().label + "']").removeClass("active");
                            $(e).toggleClass("active");
                			$("#buy_button").data("purchase_option", $("#opc").find("label.active input[type=radio]").val());
            			});
        			}
                });

                $("#item-container").find("#item-detail .disponibilidad").html(disp);

                if (parseInt(data.units_availible) == 1)
                	$("#item-container").find("#item-detail .unico").show();
                else
                    $("#item-container").find("#item-detail .unico").hide();

                if (parseInt(data.physical) != 1)
                	$("#item-container").find("#item-detail .digital").show();
                else
                    $("#item-container").find("#item-detail .digital").hide();

                if (data.images.length > 0)
                    if (data.images[0].bordered != undefined)
                        $("#item-container").find("a.fb").attr("href", "https://www.facebook.com/sharer/sharer.php?u=https://www.kichink.com/buy/" + data.id + "&t=" + store_name + ": " + data.name + "&i=" + data.images[0].bordered);

                $("#item-container").find("a.tw").attr("href", "https://twitter.com/intent/tweet?hashtags=Kichink,ILoveOnlineShopping&text=He%20visto%20" + data.name + "%20en%20" + store_name + "&url=https://www.kichink.com/buy/" + data.id);
                $('.sp-wrap').Smoothprodukts({
                    data: data,
                    type: "thumbnails"
                });

                $("#item-container").animate({bottom: 0}, time, function() {});
            }
        }

        function strip_tags(input, allowed) {
        	allowed = (((allowed || '') + '')
                .toLowerCase()
                .match(/<[a-z][a-z0-9]*>/g) || [])
                .join(''); // making sure the allowed arg is a string containing only tags in lowercase (<a><b><c>)
                            var tags = /<\/?([a-z][a-z0-9]*)\b[^>]*>/gi,
                            commentsAndPhpTags = /<!--[\s\S]*?-->|<\?(?:php)?[\s\S]*?\?>/gi;
            return input.replace(commentsAndPhpTags, '')
                    .replace(tags, function($0, $1) {
                        return allowed.indexOf('<' + $1.toLowerCase() + '>') > -1 ? $0 : '';
                    });
        }

        function close_item_container(animated) {
            $("#item-container").find("#thumb").attr("src", "");
            animated = (animated) ? animated : false;
            v = window.location.pathname.split("/");
            store_name = (v[1] == "buy") ? v[3] : v[2];
            window.history.replaceState({}, '', "/stores/" + store_name + window.location.search);
            document.title = store_name;
            if (animated) {
                $("#item-container").animate({bottom: -1170}, 500, function() {
                    $("#item-container").hide();
                    $("#categories").fadeIn(500);
                    $(".myownbanner").show();
                    $("#items").fadeIn(500);
                    if ($("#menu-shopping").width() < $(".container").width()) {
                        $("#menu-shopping").fadeIn(500);
                    }
                });
            } else {
                $("#item-container").css("bottom", -1170);
                $("#item-container").hide();
                $(".myownbanner").show();
                $("#categories").fadeIn(500);
                $("#items").fadeIn(500);
                if ($("#menu-shopping").width() < $(".container").width()) {
                    $("#menu-shopping").fadeIn(500);
                }
            }
        }


        function msieversion() {
            var ua = window.navigator.userAgent;
            var msie = ua.indexOf("MSIE ");

            if (msie > 0)      // If Internet Explorer, return version number
                return(parseInt(ua.substring(msie + 5, ua.indexOf(".", msie))));
            else                 // If another browser, return 0
                return 100;

            return 0;
        }
	</script>
</html>