<!DOCTYPE html>
<?php
	$site_url 				= 'https://s3.amazonaws.com/kchnk-themes/aires-de-campo';
	$store 					= new stdClass();
	$item 					= new stdClass();
	$store->id 				= 146;
	$store->name 			= "ALEXIA ULIBARRI";
	$store->description 	= "Simona FW14";
	$store->logo 			= "images/logo-tienda.jpg";
	$store->cover 			= "images/cover-tienda.jpg";
	//$hasSession = empty($this->session->userdata['username']) ? false : true;

	//info de los meta:og
	$og_title = $store->name." - Kichink!";
	$og_description = "Simona FW14";
	$og_url = "http://htmls.kichink.com/";
	$og_images = array("images/logo-tienda.jpg");
?>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php echo $store->name; ?> - Kichink!</title>
		<link rel="shortcut icon" href="images/favicon.ico">
		<link rel="stylesheet" href="style.css">
		<meta name="description" content="<?php echo $og_description; ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="cleartype" content="on">

		<!-- Metas para compartir -->
		<meta property="og:title" content="<?php echo $og_title ?>" />
		<meta property="og:description" content="<?php echo $og_description ?>" />
		<meta property="og:url" content="<?php echo $og_url ?>"/>

		<!-- Lo requiere Kichink! -->
		<link rel="stylesheet" type="text/css" href="//www.kichink.com/v2/themes/css/searchbox.css" media="screen"/>
		<link rel="stylesheet" type="text/css" href="//www.kichink.com/v2/themes/css/shoppingcart.css" />
		<link rel="stylesheet" type="text/css" href="//www.kichink.com/v2/themes/css/login.css" />
		<link rel="stylesheet" type="text/css" href="//www.kichink.com/v2/themes/css/smoothprodukts.css" />

		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<!-- -->
		<!-- #Typekit code goes here -->
		<!-- -->
	</head>
	<body>
		<!--[if lt IE 9]>
			<p class="chromeframe">Estás usando una versión <strong>vieja</strong> de tu explorador. Por favor <a href="http://browsehappy.com/" target="_blank"> actualiza tu explorador</a> para tener una experiencia completa.</p>
		<![endif]-->
		<div class="container">
			<header class="[ ]">
				<div class="[ wrapper ] [ shown--small ]">
					<div class="[ row ]">
						<div class="[ columna xmall-6 ][ menu__item ]">
							<a href="#">
								<i class="icon-menu"></i>
							</a>
						</div>
						<div class="[ columna xmall-6 ][ text-right ][ menu__item ]">
							<a class="[ carrito_button ]" href="#"></a>
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
							<a class="[ carrito_button ]" href="#"></a>
						</div>
					</div>
				</div><!-- .wrapper -->
			</header>
			<div class="[ main ]">
				<section class="[ cover ]" style="background-image: url('<?php echo $store->cover ?>'); ">
					<h1 class="[ center-full ]">
						<a href="/">
							<img class="[ img-circle ]" src="images/logo-tienda.png" alt="Tu tienda" title="Inicio" />
						</a>
					</h1>
					<h2 class="[ center-full ]"><?php echo $store->name; ?></h2>
					<h3 class="[ center-full ] [ font-serif ]"><?php echo $store->description; ?></h3>
					<a href="#" class="">
						<i class="icon-angle-down"></i>
					</a>
				</section><!-- cover -->

				<section class="[ row ]">
					<ul class="[ product-grid ]">

					</ul>
					<article class="[ product ] [ columna xmall-12 medium-4 large-3 ]">
						<!-- NOTICES -->
						<div class="[ ribbon ]">
							<p class="[ sold ] [ hide ]">Vendido</p>
							<p class="[ new ] [ hide ]">Nuevo</p>
						</div>
						<img src="images/producto.jpg" alt="">
						<div class="[ product__info ]">
							<div class="[ product__info--name ]">
								<h2 class="[ text-center ]">Nombre del producto</h2>
							</div><!-- product__info--name -->
							<div class="[ product__info--price ]">
								<p class="[ text-center font-serif ]">$1,200</p>
							</div><!-- product__info--price -->
						</div>
					</article><!-- product -->
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
		$(document).ready(function(){
			// Carga carrito dinámicamente
			$(".carrito_button").ShoppingKart({
				text: '<i class="icon-cart"></i>',
				store_id: '<?= @$store->id ?>',
				button: "#buy_button",
				placement: "right",
				checkoutURI: "https://www.kichink.com/checkout",
				showOnPurchase: true,
				});
			});

			// Carga productos dinámicamente
			var store_id = 146;
			$(".product-grid").GridProdukts({
				store_id: store_id,
				limit: 24,
				pagination: "scroll",
				remoteURI:"https://www.kichink.com"
			});
		</script>
	</body>
</html>