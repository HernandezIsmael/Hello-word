@extends('Admin.Admin')
	@section('content')
		@include('Admin.Modales.CRUDImagesPro')
		@include('Alerts.Alert')
		<div class="row">
			<div class="panel panel-default material-panel">
				<h5 class="panel-heading material-panel__heading">Imagenes para Productos Honey Hope</h5>
				<div class="panel-body material-panel__body">
					<table class="table col-md-6 table-striped" id="tableimg">
						<thead>
							<th class="col-lg-1 col-md-1 col-sm-1 col-xs-1">Clave</th>
							<th class="col-lg-4 col-md-4 col-sm-4 col-xs-1">Imagen</th>
							<th class="col-lg-3 col-md-3 col-sm-3 col-xs-1">Producto</th>
							<th class="col-lg-2 col-md-2 col-sm-2 col-xs-1">Edidar</th>
							<th class="col-lg-2 col-md-2 col-sm-2 col-xs-1">Eliminar</th>
						</thead>
						@foreach($tabla as $img)
						@endforeach
					</table>
					<div class="preloader"></div>
				</div>
			</div>
			<div id="render">{!!$tabla->render()!!}</div>
			<button id="btn_newimg" class="btn btn-primary">Nuevo imagen de producto</button>	
		</div>
		@section('scripts')
			{!!Html::script('js/HoneyHope.min.js')!!}
			{!!Html::script('js/imgspro.min.js')!!}
		@endsection
	@endsection