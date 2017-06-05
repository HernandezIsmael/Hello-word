@extends('Admin.Admin')
	@section('content')
		@include('Admin.Modales.InsertaUser')
		<div class="row">
			<div class="panel panel-default material-panel">
				<h5 class="panel-heading material-panel__heading">Usuarios Honey Hope</h5>
				<div class="panel-body material-panel__body">
						<table class="table col-md-6 table-striped" id="tableuser">
							<thead>
								<th class="col-lg-1 col-md-1 col-sm-1">Usuario</th>
								<th class="col-lg-1 col-md-1 col-sm-1">Email</th>
								<th class="col-lg-1 col-md-1 col-sm-1">Nombre</th>
								<th class="col-lg-1 col-md-1 col-sm-1">Apellido Paterno</th>
								<th class="col-lg-1 col-md-1 col-sm-1">Apellido Materno</th>
								<th class="col-lg-1 col-md-1 col-sm-1">Teléfono</th>
								<th class="col-lg-1 col-md-1 col-sm-1">Sexo</th>
								<th class="col-lg-1 col-md-1 col-sm-1">R.F.C</th>
								<th class="col-lg-1 col-md-1 col-sm-1">Sucursal</th>
								<th class="col-lg-1 col-md-1 col-sm-1">Tipo Usuario</th>
								<th class="col-lg-1 col-md-1 col-sm-1">Cargo</th>
								<th class="col-lg-1 col-md-1 col-sm-1">Imagen</th>
								<th class="col-lg-1 col-md-1 col-sm-1">Editar</th>
								<th class="col-lg-1 col-md-1 col-sm-1">Eliminar</th>
							</thead>
						</table>
					<div class="preloader"></div>
				</div>	
			</div>
		</div>
		<br><br>
		<button id="btn_newuser" class="btn btn-primary">Nuevo Usuario</button>
		@section('scripts')
			{!!Html::script('js/HoneyHope.min.js')!!}
			{!!Html::script('js/users.min.js')!!}
		@endsection
	@endsection
		
