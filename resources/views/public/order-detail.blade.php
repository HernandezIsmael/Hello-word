@extends('public.index')
	@section('contenido')

		<div class="container text-center">
			<div class="page-header">
				<h1><i class="fa fa-shopping-car"></i> Detalle del Pedido</h1>
				
			</div>

			<div class="page">
				<div class="table-responsive">
					<h3>Datos del Usuario</h3>
					<table class="table table-striped table-hover table-bordered">
						
						
					</table>
				</div>

				<div class="table-responsive">
				<h3>Datos del Pedido</h3>
					<table class="table table-striped table-hover table-bordered">
						<tr>
							<th>Producto</th>
							<th>Precio</th>
							<th>Cantidad</th>
							<th>Subtotal</th>
						</tr>
						@foreach($cart as $item)
						<tr>
							<td>{{ $item->Vch_NombreProducto}}</td>
							<td>{{number_format($item->Flt_PrecioUnitario,2)}}</td>
							<td>{{ $item->quantity}}</td>
							<td>{{number_format($item->Flt_PrecioUnitario * $item->quantity,2) }}</td>
						</tr>
						@endforeach
					</table>
					
				</div>
			</div>
		</div>


@stop