@extends('Admin.Admin')
	@section('content')
		@include('Admin.Modales.CRUDApiario')
		@include('Alerts.Alert')
		<div class="row">
			<div class="panel panel-default material-panel">
				<h5 class="panel-heading material-panel__heading">Apiarios</h5>
				<div class="panel-body material-panel__body">	
					<table class="table col-md-6 table-striped" id="tableapi">
						<thead>
							<th class="col-lg-2 col-md-2 col-sm-2">Clave apiario</th>
							<th class="col-lg-3 col-md-3 col-sm-3">Nombre apiario</th>
							<th class="col-lg-3 col-md-3 col-sm-3">Sucursal</th>
							<th class="col-lg-2 col-md-2 col-sm-2">Edidar</th>
							<th class="col-lg-2 col-md-2 col-sm-2">Eliminar</th>
						</thead>
						@foreach($tabla as $apiario)
						@endforeach
					</table>
					<div class="preloader"></div>
				</div>
			</div>	
			<div id="render">{!!$tabla->render()!!}</div>
			<button id="btn_newapiario" class="btn btn-primary">Nuevo tipo de usuario</button>
		</div>
		@section('scripts')
			{!!Html::script('js/HoneyHope.min.js')!!}
			{!!Html::script('js/apiarios.min.js')!!}
		@endsection
	@endsection