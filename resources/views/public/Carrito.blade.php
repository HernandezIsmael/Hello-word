@extends('public.index')
	
	@section('contenido')
<div id="viewcart text-center" >
		<div class="container text-center">
			<div class="page-header">
				<h1><i class="fa fa-shopping-cart"></i> Carrito de Compras</h1>
			</div>
		<div class="table-cart">
			@if(count($cart))

				<p>
					<a href="{{ route('cart-trash') }}" class="btn btn-danger"> Vaciar Carrito <i class="fa fa-trash"></i>
						
					</a>
				</p>
				<div class="table-responsive">
					<table class="table table-striped table-hover table-bordered">
						<thead>
							<tr>
								<th>Imagen</th>
								<th>Producto</th>
								<th>Precio</th>
								<th>Cantidad</th>
								<th>Subtotal</th>
								<th>Quitar</th>
							</tr>
						</thead>
						<body>
							@foreach($cart as $item)
							<tr>
								<td><img src="../images/Miel2.png"></td>
								<td>{{ $item->Vch_NombreProducto }}</td>
								<td>${{ number_format($item->Flt_PrecioUnitario,2) }}</td>
								<td>
									<input type="number" 
									min="1"
									max="100"
									value="{{ $item->quantity }}"
									id="product_{{ $item->Vch_IdProducto }}" 
									>
									<a href="#"
									class="btn btn-warning btn-update-item"
									data-href="{{ route('cart-update',$item->Vch_IdProducto)}}"
									data-id="{{ $item->Vch_IdProducto }}" 
									>
									<i class="fa fa-refresh"></i>
										
									</a>

								</td>
								<td>
									${{ number_format($item->Flt_PrecioUnitario * $item->quantity,2) }}
								</td>
								<td>
									<a href="{{route('cart-delete', $item->Vch_IdProducto) }}" class="btn btn-danger">
										<i class="fa fa-remove"></i>
									</a>
								</td>
							</tr>
							@endforeach
						</body>
						
					</table><hr>

					<h3>
						<span class="label label-success">
							Total: $ {{ number_format($total,2) }}
						</span>

					</h3>
					
				</div>
				@else
					<h3><span class="label label-warning">No hay productos en el Carrito </span></h3>
				@endif

		</div>
			<p>
				<a class="btn btn-primary" href="../CatProduct"><i class="fa fa-chevron-circle-left"></i> Seguir Comprando </a>
				<a class="btn btn-primary" href="{{ route('order-detail')}}"><i class="fa fa-chevron-circle-right"></i> Continuar </a>
			</p>
	</div>
</div>
	@stop