@extends('Admin.Admin')
	@section('content')
		@include('Alerts.Alert')
		<div class="row">
			<div class="panel panel-default material-panel">
				<h5 class="panel-heading material-panel__heading">Configuración de Inicio</h5>
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
			<table class="table col-md-6 table-striped" id="tableinicio">
				<thead>
					<th class="col-lg-1 col-md-1 col-sm-1">Clave</th>
					<th class="col-lg-1 col-md-1 col-sm-1">Titulo</th>
					<th class="col-lg-3 col-md-3 col-sm-3">Imagen</th>
					<th class="col-lg-5 col-md-5 col-sm-5">Descripción</th>
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
				{!!Form::text('clv_ini', null, ['id' => 'clv_ini', 'class' => 'form-control', 'placeholder' => 'Ingrese la clave'])!!}
			</div>
			<div class="form-group">
				{!!Form::label('tit', 'Titulo:')!!}
				{!!Form::text('tit_ini', null, ['id' => 'tit_ini', 'class' => 'form-control', 'placeholder' => 'Ingrese el titulo que llevará'])!!}
			</div>
			<div class="form-group">
				{!!Form::label('img', 'Seleccione una imagen')!!}
				{!!Form::file('ruta_ini', ['id' => 'ruta_ini', 'class' => 'form-control', 'placeholder' => 'Seleccione una imagen'])!!}
			</div>
			<div class="form-group">
				{!!Form::label('des','Descripción:')!!}
				{!!Form::textarea('des_ini', null, ['id' => 'des_ini', 'class' => 'form-control', 'placeholder' => 'Introduzca información detallada a mostrar'])!!}	
			</div>
			{!!link_to('#', $title = 'Registrar', $attributes = ['id' => 'btn_creinicio', 'class' => 'btn btn-primary'], $secure = null )!!}
			{!!link_to('#', $title = 'Editar', $attributes = ['id' => 'btn_updinicio', 'class' => 'btn btn-success'], $secure = null )!!}
			{!!link_to('#', $title = 'Eliminar', $attributes = ['id' => 'btn_delinicio', 'class' => 'btn btn-danger'], $secure = null )!!}
		</div>
		@section('scripts')
			{!!Html::script('js/config/inicio.min.js')!!}
		@endsection
	@endsection
