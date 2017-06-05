@extends('Admin.Admin')
	@section('content')
		@include('Admin.Modales.CRUDCargo')
		@include('Alerts.Alert')
		<div class="row">
			<div class="panel panel-default material-panel">
				<h5 class="panel-heading material-panel__heading">Cargo de Usuarios</h5>
				<div class="panel-body material-panel__body">
					<table class="table col-md-6 table-striped" id="tablecargo">
						<thead>
							<th class="col-lg-2 col-md-2 col-sm-2">Clave Cargo</th>
							<th class="col-lg-2 col-md-2 col-sm-6">Cargo</th>
							<th class="col-lg-2 col-md-2 col-sm-2">Editar</th>
							<th class="col-lg-2 col-md-2 col-sm-2">Eliminar</th>
						</thead>
						@foreach($tabla as $car)
						@endforeach
					</table>
					<div class="preloader"></div>
				</div>
			</div>
		</div>
		<div id="render">{!!$tabla->render()!!}</div>
		<button id="btn_newcargo" class="btn btn-primary">Registrar Cargo</button>
	@endsection	
	@section('scripts')
		{!!Html::script('js/HoneyHope.min.js')!!}
		{!!Html::script('js/HoneyHopePuro.min.js')!!}
		{!!Html::script('js/cargo.min.js')!!}
	@endsection