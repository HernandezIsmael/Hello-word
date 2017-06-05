@extends('Admin.Admin')
	@section('content')
		@include('Admin.Modales.CRUDPresentacion')
		@include('Alerts.Alert')
		<div class="row">
			<div class="panel panel-default material-panel">
				<h5 class="panel-heading material-panel__heading">Presentación de Productos</h5>
				<div class="panel-body material-panel__body">
					<table class="table col-md-6 table-striped" id="tablepres">
						<thead>
							<th class="col-lg-2 col-md-2 col-sm-2">Clave</th>
							<th class="col-lg-6 col-md-6 col-sm-6">Presentación</th>
							<th class="col-lg-2 col-md-2 col-sm-2">Edidar</th>
							<th class="col-lg-2 col-md-2 col-sm-2">Eliminar</th>
						</thead>
						@foreach($tabla as $pre)
						@endforeach
					</table>
					<div class="preloader"></div>
				</div>
			</div>
			<div id="render">{!!$tabla->render()!!}</div>
			<button id="btn_newpres" class="btn btn-primary">Nueva Presentación</button>
		</div>
		@section('scripts')
			{!!Html::script('js/HoneyHope.min.js')!!}
			{!!Html::script('js/HoneyHopePuro.min.js')!!}
			{!!Html::script('js/presentacion.min.js')!!}
		@endsection
	@endsection