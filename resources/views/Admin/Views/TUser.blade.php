@extends('Admin.Admin')
	@section('content')
		@include('Admin.Modales.CRUDTUser')
		@include('Alerts.Alert')
		<div class="row">
			<div class="panel panel-default material-panel">
				<h5 class="panel-heading material-panel__heading">Tipo de Usuarios</h5>
				<div class="panel-body material-panel__body">
					<table class="table col-md-6 table-striped" id="tabletuser">
						<thead>
							<th class="col-lg-2 col-md-2 col-sm-2">Clave</th>
							<th class="col-lg-6 col-md-6 col-sm-6">Tipo de Usuario</th>
							<th class="col-lg-2 col-md-2 col-sm-2">Edidar</th>
							<th class="col-lg-2 col-md-2 col-sm-2">Eliminar</th>
						</thead>
						@foreach($tabla as $tuser)
						@endforeach
					</table>
					<div class="preloader"></div>
				</div>
			</div>			
			<div id="render">{!!$tabla->render()!!}</div>
			<button id="btn_newtuser" class="btn btn-primary">Nuevo tipo de usuario</button>
		</div>
		@section('scripts')
			{!!Html::script('js/HoneyHope.min.js')!!}
			{!!Html::script('js/HoneyHopePuro.min.js')!!}
			{!!Html::script('js/tuser.min.js')!!}
		@endsection
	@endsection
	