@extends('Admin.Admin')
	@section('content')
		@include('Admin.Modales.CRUDEmpresa')
		@include('Alerts.Alert')
		<div class="row">
			<div class="panel panel-default material-panel">
				<h5 class="panel-heading material-panel__heading">Empresas de Proveedores</h5>
				<div class="panel-body material-panel__body">
					<table class="table col-md-6 table-striped" id="tableemp">
						<thead>
							<th class="col-lg-2 col-md-2 col-sm-2">Clave empresa</th>
							<th class="col-lg-2 col-md-2 col-sm-2">Nombre empresa</th>
							<th class="col-lg-2 col-md-2 col-sm-2">R.F.C.</th>
							<th class="col-lg-2 col-md-2 col-sm-2">Dirección</th>
							<th class="col-lg-2 col-md-2 col-sm-2">Teléfono</th>
							<th class="col-lg-2 col-md-2 col-sm-2">E-mail</th>
							<th class="col-lg-2 col-md-2 col-sm-2">Tipo empresa</th>
							<th class="col-lg-2 col-md-2 col-sm-2">Editar</th>
							<th class="col-lg-2 col-md-2 col-sm-2">Eliminar</th>
						</thead>
						@foreach($tabla as $empresa)
						@endforeach
					</table>
					<div class="preloader"></div>
				</div>
			</div>	
			<div id="render">{!!$tabla->render()!!}</div>
			{!!link_to('#', $title = 'Nueva Empresa', $attributes = ['id' => 'btn_newemp', 'class' => 'btn btn-primary'], $secure = null )!!}
		</div>
		@section('scripts')
			{!!Html::script('js/HoneyHope.min.js')!!}
			{!!Html::script('js/empresas.min.js')!!}
		@endsection	
	@endsection
	

