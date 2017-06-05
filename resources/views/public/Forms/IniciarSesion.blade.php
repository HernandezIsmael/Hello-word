{!!Form::open()!!}
	<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModaLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header divmodal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
					<h4 class="modal-title" id="titulo">Iniciar Sesión</h4>
				</div>
				<div class="modal-body">
					<input type="hidden" name"_token" value="{{ csrf_token() }}" id="token_inicio">
					<div class="form-group">
						{!!Form::label('usuario','Usuario')!!}
						{!!Form::text('user',null,['id' => 'user','class'=>'form-control inputmodal-color', 'placeholder' =>'Introduzca su nombre de usuario o correo'])!!}
					</div>
					<div class="form-group">
						{!!Form::label('cont','Contraseña:')!!}
						{!!Form::password('psw',['id' => 'psw','class'=>'form-control inputmodal-color', 'placeholder'=>'Escriba su contraseña'])!!}
					</div>				
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
					{!!link_to('#', $title = 'Login', $attributes = ['id' => 'btn_login', 'class' => 'btn btn-primary'], $secure = null )!!}
				</div>
			</div>
		</div>
	</div>

{!!Form::close()!!}

