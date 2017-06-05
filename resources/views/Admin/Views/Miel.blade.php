@extends('Admin.Admin')
	@section('content')
		@include('Admin.Modales.CRUDMiel')
		@include('Alerts.Alert')
		<div class="row">
			<div class="panel panel-default material-panel">
				<h5 class="panel-heading material-panel__heading">Registro de Miel</h5>
				<div class="panel-body material-panel__body">
					<table class="table col-md-6 table-striped" id="tablehoney">
						<thead>
							<th class="col-lg-2 col-md-2 col-sm-2">Registro</th>
							<th class="col-lg-3 col-md-3 col-sm-3">Apiario</th>
							<th class="col-lg-1 col-md-1 col-sm-1">Cantidad (ml)</th>
							<th class="col-lg-2 col-md-2 col-sm-2">Fecha de Registro</th>
							<th class="col-lg-2 col-md-2 col-sm-2">Editar</th>
							<th class="col-lg-2 col-md-2 col-sm-2">Eliminar</th>
						</thead>
						@foreach($tabla as $m)
						@endforeach
					</table>
					<div class="preloader"></div>
				</div>
			</div>
			<div id="render">{!!$tabla->render()!!}</div>
			<button id="btn_newreg" class="btn btn-primary">Nuevo Registro de Miel</button>
		</div>
		@section('scripts')
			{!!Html::script('js/HoneyHope.min.js')!!}
			{!!Html::script('js/miel.min.js')!!}
		@endsection
	@endsection