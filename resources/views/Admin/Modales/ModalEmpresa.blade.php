<div class="form-group">
	{!!Form::label('cl','Clave:')!!}
	{!!Form::text('clave_emp',null,['id' => 'clave_emp','class'=>'form-control', 'placeholder' =>'Introduzca la clave'])!!}	
</div>
<div class="form-group">
	{!!Form::label('nom','Nombre Empresa:')!!}
	{!!Form::text('nom_emp',null,['id' => 'nom_emp','class'=>'form-control', 'placeholder' =>'Introduzca el nombre de la empresa'])!!}	
</div>
<div class="form-group">
	{!!Form::label('rfc','R.F.C de Empresa:')!!}
	{!!Form::text('rfc_emp',null,['id' => 'rfc_emp','class'=>'form-control', 'placeholder' =>'Introduzca el R.F.C de la empresa'])!!}	
</div>
<div class="form-group">
	{!!Form::label('dir','Dirección de Empresa:')!!}
	{!!Form::text('dir_emp',null,['id' => 'dir_emp','class'=>'form-control', 'placeholder' =>'Introduzca la dirección de la empresa'])!!}	
</div>
<div class="form-group">
	{!!Form::label('tel','Teléfono de Empresa:')!!}
	{!!Form::text('tel_emp',null,['id' => 'tel_emp','class'=>'form-control', 'placeholder' =>'Introduzca el teléfono de la empresa'])!!}
</div>
<div class="form-group">
	{!!Form::label('mail','E-mail de Empresa:')!!}
	{!!Form::email('email_emp',null,['id' => 'email_emp','class'=>'form-control', 'placeholder'=>'Introduzca el correo electronico de la empresa'])!!}	
</div>
<div class="form-group">
	{!!Form::label('tip','Elija un tipo de Empresa:')!!}
	{!!Form::select('tip_emp', [], null, ['id' => 'tip_emp' ,'class' => 'form-control','placeholder' => 'Tipo de Empresa'])!!}	
</div>