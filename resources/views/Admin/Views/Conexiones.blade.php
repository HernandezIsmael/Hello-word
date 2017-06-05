@extends('Admin.Admin')
	@section('content')
	<table class="table">
		<thead>
			<th>Clave Conexión</th>
			<th>Nombre</th>
			<th>Servidor</th>
			<th>Base de Datos</th>
			<th>Usuario</th>
			<th>Contraseña</th
		</thead>
		@foreach($conexiones as $con)
		<tbody>
			<td>{{ $con->Sml_IdCon }}</td>
			<td>{{ $con->Vch_Nombre }}</td>
			<td>{{ $con->Vch_NombreServidor }}</td>
			<td>{{ $con->Vch_NombreBase }}</td>
			<td>{{ $con->Vch_Usuario }}</td>
			<td>{{ $con->Vch_Pasww }}</td>
		</tbody>
		@endforeach
	</table>
@stop