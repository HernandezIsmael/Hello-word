<div class="form-group">
	{!!Form::label('cl','Usuario:')!!}
	{!!Form::text('clave',null,['id' => 'clave_user','class'=>'form-control inputmodal-color', 'placeholder' =>'Introduzca la clave'])!!}
</div>
<div class="form-group">
	{!!Form::label('mail','E-Mail:')!!}
	{!!Form::email('email',null,['id' => 'mail_user','class'=>'form-control inputmodal-color', 'placeholder'=>'Escriba su correo Electronico'])!!}
</div>
<div class="form-group">
	{!!Form::label('nom','Nombre:')!!}
	{!!Form::text('nombre',null,['id' => 'nom_user','class'=>'form-control inputmodal-color', 'placeholder'=>'Escriba el nombre de usuario'])!!}
</div>
<div class="form-group">
	{!!Form::label('ape','Apellido Paterno:')!!}
	{!!Form::text('ap',null,['id' => 'ap_user','class'=>'form-control inputmodal-color', 'placeholder'=>'Apellido Paterno'])!!}
</div>
<div class="form-group">
	{!!Form::label('apm','Apellido Materno:')!!}
	{!!Form::text('am',null,['id' => 'am_user','class'=>'form-control inputmodal-color', 'placeholder'=>'Apellido Materno'])!!}
</div>
<div class="form-group">
	{!!Form::label('tele','Telefono:')!!}
	{!!Form::text('tel',null,['id' => 'tel_user','class'=>'form-control inputmodal-color', 'placeholder'=>'Numero de teléfono a 10 digitos'])!!}
</div>
<div class="form-group">
	{!!Form::label('sexo','Sexo:')!!}
	{!!Form::text('sex',null,['id' => 'sex_user','class'=>'form-control inputmodal-color', 'placeholder'=>'Maculino/Femenino'])!!}
</div>
<div class="form-group">
	{!!Form::label('rf','R.F.C.:')!!}
	{!!Form::text('rfc',null,['id' => 'rfc_user','class'=>'form-control inputmodal-color', 'placeholder'=>'Introduzca su R.F.C.'])!!}
</div>
<div class="form-group">
	{!!Form::label('sucrl','Sucursal:')!!}
	{!!Form::select('suc',[],null, ['id' => 'suc', 'class' => 'form-control','placeholder' => 'Elija una sucursal'])!!}
</div>
<div class="form-group">
	{!!Form::label('tipo','Tipo Usuario:')!!}
	{!!Form::select('tuser', [], null, ['id' => 'tuser' ,'class' => 'form-control','placeholder' => 'Elija un tipo de usuario'])!!}
</div>
<div class="form-group">
	{!!Form::label('cargo','Cargo:')!!}
	{!!Form::select('cargo', [], null, ['id' => 'cargo' ,'class' => 'form-control','placeholder' => 'Elija un tipo de cargo'])!!}
</div>
<div class="form-group">
	{!!Form::label('foto','Foto de Perfil:')!!}
	{!!Form::file('foto_perfil',['id' => 'foto_perfil'])!!}
</div>
<div class="form-group">
	{!!Form::label('password','Contraseña:')!!}
	{!!Form::text('psw',null,['id' => 'psw_user','class'=>'form-control', 'placeholder'=>'Escriba alguna contraseña'])!!}
</div>