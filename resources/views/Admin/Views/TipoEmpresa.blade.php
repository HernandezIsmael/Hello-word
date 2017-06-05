@extends('Admin.Admin')
	@section('content')
		@include('Alerts.Alert')
		@include('Admin.Modales.CRUDTempresa')
		<div class="row">
			<div class="panel panel-default material-panel">
				<h5 class="panel-heading material-panel__heading">Tipos de Empresas de Proveedores</h5>
				<div class="panel-body material-panel__body">
					<table class="table col-md-6 table-striped" id="tabletemp">
						<thead>
							<th class="col-lg-2 col-md-2 col-sm-2">Clave Tipo Empresa</th>
							<th class="col-lg-6 col-md-6 col-sm-6">Tipo de Empresa</th>
							<th class="col-lg-2 col-md-2 col-sm-2">Editar</th>
							<th class="col-lg-2 col-md-2 col-sm-2">Eliminar</th>
						</thead>
						@foreach($tabla as $tip)
						@endforeach
					</table>
					<div class="preloader"></div>
				</div>
			</div>
			<div id="render">{!!$tabla->render()!!}</div>
			<button id="btn_newtempr" class="btn btn-primary">Nuevo tipo de Empresa</button>
		</div>
	@endsection
	@section('scripts')
		{!!Html::script('js/HoneyHope.min.js')!!}
		{!!Html::script('js/HoneyHopePuro.min.js')!!}
		{!!Html::script('js/tempresa.min.js')!!}
	@endsection