@extends('Admin.Admin')
	@section('content')
	<table class="table">
		<thead>
			<th>Clave Sucursal</th>
			<th>Sucursal</th>
			<th>Dirección</th>
			<th>Teléfono</th>
		</thead>
		@foreach($sucursales as $sucursal)
		<tbody>
			<td>{{ $sucursal->Sml_IdSucursal}}</td>
			<td>{{ $sucursal->Sucursal }}</td>
			<td>{{ $sucursal->Direccion }}</td>
			<td>{{ $sucursal->Telefono }}</td>
		</tbody>
		@endforeach
	</table>
@stop