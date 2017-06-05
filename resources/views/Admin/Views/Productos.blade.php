@extends('Admin.Admin')
	@section('content')
		@include('Admin.Modales.CRUDProducto')
		@include('Alerts.Alert')
		<div class="row">
			<div class="panel panel-default material-panel">
				<h5 class="panel-heading material-panel__heading">Productos Honey Hope</h5>
				<div class="panel-body material-panel__body">
					<table class="table col-md-6 table-striped" id="tableprod">
						<thead>
							<th>Clave Producto</th>
							<th>Producto</th>
							<th>Capacidad</th>
							<th>Presentación</th>
							<th>Tipo Producto</th>
							<th>Resumen</th>
							<th>Descripción</th>
							<th>Precio</th>
							<th>Cantidad</th>
							<th>I.V.A.</th>
							<th>Editar</th>
							<th>Eliminar</th>
						</thead>
						@foreach($tabla as $producto)
						@endforeach
					</table>
					<div class="preloader"></div>
				</div>
			</div>
			<div id="render">{!!$tabla->render()!!}</div>
			<button id="btn_newprod" class="btn btn-primary">Nuevo Producto</button>
		</div>
		@section('scripts')
			{!!Html::script('js/HoneyHope.min.js')!!}
			{!!Html::script('js/productos.min.js')!!}
		@endsection
	@endsection