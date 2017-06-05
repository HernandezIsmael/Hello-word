<div class="form-group">
	{!!Form::label('clv', 'Clave Apiario:')!!}
	{!!Form::text('clave_api', null, ['id' => 'clave_api', 'class' => 'form-control', 'placeholder' => 'Introduzca una clave para el apiario'])!!}
</div>
<div class="form-group">
	{!!Form::label('nom', 'Nombre de Apiario:')!!}
	{!!Form::text('nom_api',null,['id' => 'nom_api', 'class' => 'form-control', 'placeholder' => 'Introduzca un nombre para indetificar el apiario'])!!}
</div>
<div class="form-group">
	{!!Form::label('suc', 'Sucursal:')!!}
	{!!Form::select('suc_api', [], null, ['id' => 'suc_api', 'class' => 'form-control', 'placeholder' => 'Especifique en que sucursal se encuentra el apiario'])!!}
</div>