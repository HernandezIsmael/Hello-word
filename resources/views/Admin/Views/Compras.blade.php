@extends('Admin.Admin')
	@section('content')
		@include('Admin.Modales.CRUDCompras')
		@include('Alerts.Alert')
		<div class="row">
			<div class="panel panel-default material-panel">
				<h5 class="panel-heading material-panel__heading">Compra de Articulos</h5>
				<div class="panel-body material-panel__body">
					<table class="table col-md-6 table-striped" id="tablecompra">
						<thead>
							<th class="col-lg-2 col-md-2 col-sm-2">Clave</th>
							<th class="col-lg-2 col-md-2 col-sm-2">Compra</th>
							<th class="col-lg-2 col-md-2 col-sm-2">Cantidad</th>
							<th class="col-lg-2 col-md-2 col-sm-2">Empresa</th>
							<th class="col-lg-2 col-md-2 col-sm-2">Precio</th>
							<th class="col-lg-2 col-md-2 col-sm-2">Editar</th>
							<th class="col-lg-2 col-md-2 col-sm-2">Eliminar</th>
						</thead>
						@foreach($tabla as $tuser)
						@endforeach
					</table>
					<div class="preloader"></div>
				</div>
			</div>			
			<div id="render">{!!$tabla->render()!!}</div>
			<button id="btn_newcompra" class="btn btn-primary">Nuevo tipo de usuario</button>
		</div>
		@section('scripts')
			{!!Html::script('js/HoneyHope.min.js')!!}
			{!!Html::script('js/compras.min.js')!!}
		@endsection
	@endsection