<div class="form-group">
	{!!Form::label('clv', 'Clave del Producto')!!}
	{!!Form::text('clave_prod', null, ['id' => 'clave_prod', 'class' => 'form-control', 'placeholder' => 'Introduzca una clave para el producto'])!!}
</div>
<div class="form-group">
	{!!Form::label('nom','Nombre del Producto:')!!}
	{!!Form::text('nom_prod', null, ['id' => 'nom_prod', 'class' => 'form-control', 'placeholder' => 'Introduza el nombre del producto'])!!}
</div>
<div class="form-group">
	{!!Form::label('cap','Capacidad del producto:')!!}
	{!!Form::select('cap_prod',[],null,['id' => 'cap_prod', 'class' => 'form-control', 'placeholder' => 'Seleccione la capacidad del producto'])!!}
</div>
<div class="form-group">
	{!!Form::label('pres', 'Presentación del producto:')!!}
	{!!Form::select('pres_prod',[],null,['id' => 'pres_prod', 'class' => 'form-control', 'placeholder' => 'Seleccione la presentación del producto'])!!}
</div>
<div class="form-group">
	{!!Form::label('tip', 'Tipo de Producto:')!!}
	{!!Form::select('tip_prod', [] , null, ['id' => 'tip_prod', 'class' => 'form-control', 'placeholder' => 'Seleccione el tipo de producto'])!!}
</div>
<div class="form-group">
	{!!Form::label('res', 'Descripción del producto:')!!}
	{!!Form::text('res_prod',null,['id' => 'res_prod', 'class'=> 'form-control', 'placeholder' => 'Introduzca una breve descripción'])!!}
</div>
<div class="form-group">
	{!!Form::label('des','Descripción detallada del Producto:')!!}
	{!!Form::textarea('des_prod', null, ['id' => 'des_prod', 'class' => 'form-control', 'placeholder' => 'Introduzca información detallada acerca del producto'])!!}
</div>
<div class="form-group">
	{!!Form::label('pre','Precio unitario del Producto:')!!}
	{!!Form::number('pre_prod','',['id' => 'pre_prod','class' => 'form-control', 'placeholder' => 'Introduza el precio unitario por producto'])!!}
</div>
<div class="form-group">
	{!!Form::label('canti','Cantidad de Producto:')!!}
	{!!Form::number('cantidad_prod','',['id' => 'cantidad_prod', 'class' => 'form-control', 'placeholder' => 'Introduzca la cantidad de productos existentes'])!!}
</div>
<div class="form-group">
	{!!Form::label('iva', 'I.V.A. del producto:')!!}
	{!!Form::select('iva_prod',[], null, ['id' => 'iva_prod', 'class' => 'form-control', 'placeholder' => 'Seleccione le I.V.A. correspondiente'])!!}
</div>