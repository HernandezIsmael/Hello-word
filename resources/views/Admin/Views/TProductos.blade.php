@extends('Admin.Admin')
	@section('content')
		@include('Admin.Modales.CRUDTipoPro')
		@include('Alerts.Alert')
		<div class="row">
			<div class="panel panel-default material-panel">
				<h5 class="panel-heading material-panel__heading">Tipos de Producto</h5>
				<div class="panel-body material-panel__body">
					<table class="table col-md-6 table-striped" id="tabtipro">
						<thead>
							<th class="col-lg-2 col-md-2 col-sm-2">Clave</th>
							<th class="col-lg-6 col-md-6 col-sm-6">Tipo de Producto</th>
							<th class="col-lg-2 col-md-2 col-sm-2">Edidar</th>
							<th class="col-lg-2 col-md-2 col-sm-2">Eliminar</th>
						</thead>
						@foreach($tabla as $tip)
						@endforeach
					</table>
					<div class="preloader"></div>
				</div>
			</div>
			<div id="render">{!!$tabla->render()!!}</div>
			<button id="btn_newtpro" class="btn btn-primary">Nueva Tipo de Producto</button>
		</div>
		@section('scripts')
			{!!Html::script('js/HoneyHope.min.js')!!}
			{!!Html::script('js/HoneyHopePuro.min.js')!!}
			{!!Html::script('js/tipopro.min.js')!!}
		@endsection
	@endsection