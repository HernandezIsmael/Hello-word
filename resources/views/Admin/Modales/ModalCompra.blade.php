<div class="form-group">
	{!!Form::label('cl','Clave:')!!}
	{!!Form::text('clv_compra',null,['id'=> 'clv_compra','class'=>'form-control', 'placeholder' =>'Introduzca la clave'])!!}
</div>
<div class="form-group">
	{!!Form::label('nombre','Articulo:')!!}
	{!!Form::text('nom_art',null,['id'=> 'nom_art','class'=>'form-control', 'placeholder' =>'Introduzca el nombre del articulo comprado'])!!}
</div>
<div class="form-group">
	{!!Form::label('cant','Cantidad de Articulos:')!!}
	{!!Form::text('cant_art',null,['id'=> 'cant_art','class'=>'form-control', 'placeholder' =>'Introduzca el nombre del articulo comprado'])!!}
</div>
<div class="form-group">
	{!!Form::label('emp','Empresa:')!!}
	{!!Form::select('emp',[],null, ['id' => 'emp', 'class' => 'form-control','placeholder' => 'Elija una empresa'])!!}
</div>
<div class="form-group">
	{!!Form::label('precio','Precio todal de Articulos:')!!}
	{!!Form::text('precio_art',null,['id'=> 'precio_art','class'=>'form-control', 'placeholder' =>'Introduzca el nombre del articulo comprado'])!!}
</div>