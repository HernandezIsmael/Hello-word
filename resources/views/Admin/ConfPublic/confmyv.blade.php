@extends('Admin.Admin')
	@section('content')
		@include('Alerts.Alert')
		<div class="row">
			<div class="panel panel-default material-panel">
				<h5 class="panel-heading material-panel__heading">Misión y Visión</h5>
				<div class="panel-body material-panel__body" id= "panelbody">
					<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token_">	
				</div>
			</div>
			<div class="preloader" style="display: none;"></div>
			<div id="render">{!!$tabla->render()!!}</div>
			<button id="btn_reg" class="btn btn-primary">Agregar</button>
			<button id="btn_table" class="btn btn-primary">Consultar</button>	
		</div>
		<div id="div-table" style="display: none;">
			<table class="table col-md-6 table-striped" id="tablemyv">
				<thead>
					<th class="col-lg-2 col-md-2 col-sm-2">Clave</th>
					<th class="col-lg-2 col-md-2 col-sm-2">Titulo</th>
					<th class="col-lg-4 col-md-4 col-sm-4">Descripción</th>
					<th class="col-lg-2 col-md-2 col-sm-2">Editar</th>
					<th class="col-lg-2 col-md-2 col-sm-2">Eliminar</th>
				</thead>
				@foreach($tabla as $myv)
				@endforeach
			</table>
		</div>
		<div id="div-reg" style="display: none;">
			<div class="form-group">
				{!!Form::label('id', 'Clave:')!!}
				{!!Form::text('clv_myv', null, ['id' => 'clv_myv', 'class' => 'form-control', 'placeholder' => 'Ingrese la clave'])!!}
			</div>
			<div class="form-group">
				{!!Form::label('tit', 'Titulo:')!!}
				{!!Form::text('tit_myv', null, ['id' => 'tit_myv', 'class' => 'form-control', 'placeholder' => 'Ingrese el titulo que llevará'])!!}
			</div>
			<div class="form-group">
				{!!Form::label('des','Descripción:')!!}
				{!!Form::textarea('des_myv', null, ['id' => 'des_myv', 'class' => 'form-control', 'placeholder' => 'Introduzca información detallada a mostrar'])!!}	
			</div>
			{!!link_to('#', $title = 'Registrar', $attributes = ['id' => 'btn_cremyv', 'class' => 'btn btn-primary'], $secure = null )!!}
			{!!link_to('#', $title = 'Editar', $attributes = ['id' => 'btn_updmyv', 'class' => 'btn btn-success'], $secure = null )!!}
			{!!link_to('#', $title = 'Eliminar', $attributes = ['id' => 'btn_delmyv', 'class' => 'btn btn-danger'], $secure = null )!!}	
		</div>
		@section('scripts')
			{!!Html::script('js/config/misionvision.min.js')!!}
		@endsection
	@endsection