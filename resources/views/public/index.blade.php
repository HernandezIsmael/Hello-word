<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta property="og:url" content="http://honeyhope.com" />
	<meta property="og:title" content="Honey Hope S.A" />
	<meta property="og:description" content="Empresa dedicada a la venta de productos derivados de la miel" />
	<title>Honey Hope</title>
	{!!Html::style('css/bootstrap.min.css')!!}
	{!!Html::style('css/cssindex.min.css')!!}
	{!!Html::style('css/main.css')!!}
	{!!Html::style('css/font-awesome.min.css')!!}
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top cambiante" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navindex">
					<span class="sr-only">Despegar / Ocultar Menu</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>	
				</button>
				<a class="navbar-brand" href="#">Honey Hope</a>
			</div>
			<!--Inicia Menú-->
			<div class="collapse navbar-collapse" id="navindex">
				<ul class="nav navbar-nav">
					<li id="li_inicio"><a href="#" >Inicio</a></li>
					<li id="li_productos"><a href="#">Productos</a></li>
					<li id="li_nosotros"><a href="#" >Nosotros</a></li>
					<li id="li_sucursales"><a href="#">Nuestras Sucursales</a></li>
					
					<li id="li_contactanos"><a href="#">Contactanos</a></li>	
				</ul>
				<form action="" class="navbar-form navbar-right">
					<button type="button" class="btn btn-default btn_sesion" id="idmodal">Iniciar Sesión</button>
				</form>	
			</div>
		</div>
	</nav>
	<header class="intro">
		<img id="logof0">
	</header>
	<section class="container" id="main_index">
		 @yield('contenido')
	</section>
	@include('public.Forms.IniciarSesion')
	<div id="fb-root"></div>
	<!--div class="fb-share-button" data-href="https://honeyhope.com/" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fhoneyhope.com%2F&amp;src=sdkpreparse">Compartir</a></div-->
	<footer class="footer-index">
		<div class="container-logo">
			<img class="logo-footer" id="logof1">
		</div>
		<div class="container-text">
			<p class="text-footer">Honey Hope S.A de C.V. Todos los derechos reservados</p>
		</div>
		<div class="container-social">
			<p class="text-social">Buscanos también en nuestras redes sociales</p>
			<a id="fb" href="www.facebook.com"><img id="logof2"></a>
			<a id="tw" href=""><img id="logof3" src=""></a>
			<a id="insta" href=""><img id="logof4" src=""></a>
		</div>
	</footer>
</body>
{!!Html::script('js/jquery-3.1.0.min.js')!!}
{!!Html::script('js/bootstrap.min.js')!!}
{!!Html::script('js/homepublic.min.js')!!}
<!--script type="text/javascript">
	(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script-->
{!!Html::script('js/Login.min.js')!!}

{!!Html::script('js/main.js')!!}
{!!Html::script('js/pinterest_grid.js')!!}

@section('scripts')
@show
</html>