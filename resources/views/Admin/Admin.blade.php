<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Administrador</title>
	{!!Html::style('css/bootstrap.min.css')!!}
	{!!Html::style('css/cssadmin.min.css')!!}
	{!!Html::style('css/font-awesome.min.css')!!}
</head>
<body>
	<nav class="navbar navbar-default navbar-static-top" role="navigation">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">Administrador Honey Hope</a>
			<a href="#" class="btn btn-default nav-settings" id="menu-toggle"><i class="fa fa-cogs" aria-hidden="true"></i>
			</a>
			<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".menu-admin">
				<span class="sr-only">Despegar / Ocultar Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>	
			</button>
		</div>
		<!--Inicia Menú lateral-->
		<div class="navbar-default sidebar" role="navigation">
			<div class="sidebar-nav menu-admin">
				<br>
				<ul class="nav" id="side-menu">
					<li>
			        	<div class="circular" id="picprofile"></div>
			        	<h4 id="id_name">{!!Auth::user()->name!!}&nbsp; <a href="#" data-toggle="collapse" data-target="#toggleconfig" data-parent="#sidenav01" class="collapsed"><span class="fa fa-sort-desc"></span></a></h4>
			        	<div class="info">
				        	<div class="collapse" id="toggleconfig" style="height: 0px;">
		            			<ul class="nav nav-list">
			             			<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>&nbsp; Perfil</a></li>
			             			<li><a href="{!!URL::to('../logout')!!}"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp; Logout</a></li>
		            			</ul>
		          			</div>	
		          		</div>	        	
			        </li>
			        <li class="descripcion">
			        	<h3>Menú</h3>
			        </li>
					<li>
						<a href="#">
							<i class="fa fa-home" aria-hidden="true"></i>&nbsp; Home<span class="faarrow"></span>
						</a>
					</li>
					<li>
						<a href="#" data-toggle="collapse" data-target="#toggleniveles" data-parent="#side-menu" class="collapsed">
							<i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Registros<span class="faarrow"></span>
						</a>
						<div class="collapse" id="toggleniveles" style="height: 0px;">	
							<ul class="nav nav-list">
								<li>
									<a href="#" id="users">
										<i class="fa fa-users" aria-hidden="true"></i>&nbsp; Usuarios
									</a>
									<a href="#" id="store">
										<i class="fa fa-shopping-bag" aria-hidden="true"></i>&nbsp; Compras
									</a>
									<a href="#" id="empresa">
										<i class="fa fa-building" aria-hidden="true"></i>&nbsp; Empresas
									</a>
									<a href="#" id="Productos">
										<i class="fa fa-tag" aria-hidden="true"></i>&nbsp; Productos
									</a>
									<a href="#" id="Apiarios">
										<i class="fa fa-book" aria-hidden="true"></i>&nbsp; Apiarios
									</a>
									<a href="#" id="Miel">
										<i class="fa fa-truck" aria-hidden="true"></i>&nbsp; Miel
									</a>
									<a href="#" id="Cap">
										<i class="fa fa-balance-scale" aria-hidden="true"></i>&nbsp; Capacidad
									</a>
									<a href="#" id="Cargo">
										<i class="fa fa-male" aria-hidden="true"></i>&nbsp; Cargo
									</a>
									<a href="#" id="TUser">
										<i class="fa fa-user" aria-hidden="true"></i>&nbsp; Tipo de Usuario
									</a>
									<a href="#" id="Pres">
										<i class="fa fa-gift" aria-hidden="true"></i>&nbsp; Presentación
									</a>
									<a href="#" id="TiEmp">
										<i class="fa fa-briefcase" aria-hidden="true"></i>&nbsp; Tipo de Empresa
									</a>
									<a href="#" id="TiPro">
										<i class="fa fa-bookmark" aria-hidden="true"></i>&nbsp; Tipo de Producto
									</a>
									<a href="#" id="img">
										<i class="fa fa-picture-o" aria-hidden="true"></i>&nbsp; Agregar Imagenes de Productos
									</a>
								</li>
							</ul>
						</div>	
					</li>
					<li>
						<a href="#">
							<i class="fa fa-area-chart" aria-hidden="true"></i> Modulo Estadistico<span class="faarrow"></span>
						</a>	
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div id="configsidebar">
		<div id="sidebar-wrapper">
			<ul class="sidebar-nav">
				<li class="sidebar-brand">
					<a href="">
						Configuraciones
					</a>
				</li>
				<li>
					<a href="#" id="confinicio">Inicio</a>
				</li>
				<li><a href="#" id="Nosotros">Nosotros</a></li>
				<li><a href="#" id="NSuc">Nuestras Empresas</a></li>
				<li><a href="">Acerca de</a></li>
			</ul>	
		</div>	
	</div>
	<div class="container" id="contenido">
		@yield('content')
	</div>		
</body>
{!!Html::script('js/jquery-3.1.0.min.js')!!}
{!!Html::script('js/bootstrap.min.js')!!}
{!!Html::script('js/admin.min.js')!!}
@section('scripts')
@show		
</html>