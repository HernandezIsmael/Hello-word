<div class="form-group">
	{!!Form::label('clv', 'Clave Registro Miel:')!!}
	{!!Form::text('clv_miel', null, ['id' => 'clv_miel', 'class' => 'form-control', 'placeholder' => 'Introzuca una clave para el registro de miel'])!!}
</div>
<div class="form-group">
	{!!Form::label('api', 'Apiario de la Cosecha:')!!}
	{!!Form::select('sec_api', [], null, ['id' => 'sec_api', 'class' => 'form-control', 'placeholder' => 'Seleccione el apiario'])!!}
</div>
<div class="form-group">
	{!!Form::label('cant','Cantidad de Cosecha (Mililitros):')!!}
	{!!Form::number('cant_miel','',['id' => 'cant_miel','class' => 'form-control'])!!}
</div>
<div class="form-group">
	{!!Form::label('fec', 'Fecha de Registro:')!!}
	{!!Form::date('fec_miel',\Carbon\Carbon::now(),['id' => 'fec_miel', 'class' => 'form-control'])!!}
</div>