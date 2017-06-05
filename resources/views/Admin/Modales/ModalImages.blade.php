<div class="form-group">
	{!!Form::label('clv','Clave Imagen:')!!}
	{!!Form::text('clv_image', null, ['id' => 'clv_image', 'class' => 'form-control'])!!}
</div>
<div class="form-group">
	<form enctype="multipart/form-data" id="formulario">
		{!!Form::label('ruta', 'Seleccione una imagen;')!!}
		{!!Form::file('ruta_image',['id' => 'ruta_image'])!!}
	</form>
</div>
<div class="form-group">
	{!!Form::label('prod', 'Selecione un producto')!!}
	{!!Form::select('sel_pro',[], null,['id' => 'sel_pro', 'class' => 'form-control', 'placeholder' => 'Seleccione un producto'])!!}
</div>