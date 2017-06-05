@extends('Admin.Admin')
	@section('content')
		@include('Alerts.Alert')
		<div class="row">
			<div class="panel panel-default material-panel">
				<h5 class="panel-heading material-panel__heading">Configuración Sucursales</h5>
				<div class="panel-body material-panel__body" id= "panelbody">
					<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token_">	
				</div>
				<div class="preloader" style="display: none;"></div>
			</div>
			<div id="render">{!!$tabla->render()!!}</div>
			<button id="btn_reg" class="btn btn-primary">Agregar</button>
			<button id="btn_table" class="btn btn-primary">Consultar</button>
		</div>
		<div id="div-table" style="display: none;">
			<table class="table col-md-6 table-striped" id="tablesuc">
				<thead>
					<th class="col-lg-1 col-md-1 col-sm-1">Clave</th>
					<th class="col-lg-4 col-md-4 col-sm-4">Imagen</th>
					<th class="col-lg-2 col-md-3 col-sm-3">Horarios</th>
					<th class="col-lg-3 col-md-3 col-sm-3">Sucursal</th>
					<th class="col-lg-1 col-md-1 col-sm-1">Editar</th>
					<th class="col-lg-1 col-md-1 col-sm-1">Eliminar</th>
				</thead>
				@foreach($tabla as $inicio)
				@endforeach
			</table>
		</div>
		<div id="div-reg" style="display: none;">
			<div class="form-group">
				{!!Form::label('id', 'Clave:')!!}
				{!!Form::text('clv_nsuc', null, ['id' => 'clv_nsuc', 'class' => 'form-control', 'placeholder' => 'Ingrese la clave'])!!}
			</div>
			<div class="form-group">
				{!!Form::label('img', 'Seleccione una imagen')!!}
				{!!Form::file('ruta_nsuc', ['id' => 'ruta_nsuc', 'class' => 'form-control', 'placeholder' => 'Seleccione una imagen'])!!}
			</div>
			<div class="form-group">
				{!!Form::label('hrs','Horarios:')!!}
				{!!Form::textarea('hrs_nsuc', null, ['id' => 'hrs_nsuc', 'class' => 'form-control', 'placeholder' => 'Introduzca el horario de atención de la sucursal'])!!}	
			</div>
			<div class="form-group">
				{!!Form::label('sucrl','Sucursal:')!!}
				{!!Form::select('suc',[],null, ['id' => 'suc', 'class' => 'form-control','placeholder' => 'Elija una sucursal'])!!}
			</div>
			{!!link_to('#', $title = 'Registrar', $attributes = ['id' => 'btn_crensuc', 'class' => 'btn btn-primary'], $secure = null )!!}
			{!!link_to('#', $title = 'Editar', $attributes = ['id' => 'btn_updnsuc', 'class' => 'btn btn-success'], $secure = null )!!}
			{!!link_to('#', $title = 'Eliminar', $attributes = ['id' => 'btn_delnsuc', 'class' => 'btn btn-danger'], $secure = null )!!}
		</div>
		@section('scripts')
			{!!Html::script('js/config/nsucursales.min.js')!!}
		@endsection
	@endsection