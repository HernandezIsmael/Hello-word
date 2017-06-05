@extends('public.index')
	@section('contenido')
	<div class="container text-center">
		<div class="page-header">
		<h1><i class="fa fa-shopping-cart"></i>Detalle del producto</h1>
		</div>
			@foreach($productos as $producto)
				<div class="row">
					<div class="col-md-6">
						<div class="product-block">
							<img src="../images/Miel2.png" border="none" width="180px" height="180px">
						</div>
					</div>

					<div class="col-md-6">
						<div class="product-block">
							<h3>{{ $producto->Vch_NombreProducto }}</h3><hr>
							<div class="product-info panel">
								<p>Clave: {{ $producto->Vch_IdProducto }}</p>
							<p>Existencias: {{ $producto->Int_Cantidad }}</p>
							<P>Presentacion: {{ $producto->Vch_Presentacion}}</P>
							<P>Tipo: {{ $producto->Vch_TipoProducto}}</P>
							<P>Descripcion: {{ $producto->Vch_Descripcion}}</P>
							<h3><span class="label label-success">Precio:  $ {{ number_format($producto->Flt_PrecioUnitario,2) }}</span></h3>
							<p>
								<strong><a class="btn btn-warning btn-block" href="{{ route('cart-add', $producto->Vch_IdProducto)}}"> COMPRAR <i class="fa fa-cart-plus fa-2x"></i> </a></STRONG>
							</p>

							</div>
						</div>
					</div>
					
				</div>
		@endforeach
		<a class="btn btn-primary" href="../CatProduct"><i class="fa fa-chevron-circle-right"></i> Regresar</a>
	</div>
@stop