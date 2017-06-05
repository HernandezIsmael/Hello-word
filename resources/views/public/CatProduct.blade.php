@extends('public.index')
	@section('contenido')
	<div id="products">
		@foreach($productos as $producto)

				<div class="product white-panel text-center">
				<h3>{{ $producto->Vch_NombreProducto }}</h3><hr>
				<img src="images/miel2.png" border="none" width="180px" height="180px">
					<div class="product-info panel">
						<p>Clave: {{ $producto->Vch_IdProducto }}</p>
						<p>Existencias: {{$producto->Int_Cantidad }}</p>
						<h3><span class="label label-success">Precio: ${{ number_format($producto->Vch_Precio,2) }}</span></h3>
						<a class="btn btn-warning" href="{{ route('cart-add', $producto->Vch_IdProducto) }}"><i class="fa fa-cart-plus"></i> la quiero</a>
						<a class="btn btn-primary" href="{{route('product-detail',$producto->Vch_IdProducto)}}"><i class="fa fa-chevron-circle-right"></i> leer mas</a>
					</div>
				</div>
		@endforeach
</div>
@stop