{!!Form::open()!!}
	<div id="msj-user" class="alert alert-success alert-dismissible" role="alert" style="display:none">
    	<strong> Usuario Agregado Correctamente.</strong>
	</div>
	<div class="modal fade" id="modaluser" tabindex="-1" role="dialog" aria-labelledby="myModaLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header divmodal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
				<h4 class="modal-title" id="titulo">Usuarios</h4>
			</div>
			<div class="modal-body">
				<input type="hidden" name"_token" value="{{ csrf_token() }}" id="token_user">
				@include('Admin.Modales.ModalUser')			
			</div>
			<div class="modal-footer">
				{!!link_to('#', $title = 'Registrar Usuario', $attributes = ['id' => 'btn_creuser', 'class' => 'btn btn-primary'], $secure = null )!!}
					{!!link_to('#', $title='Editar Usuario', $attributes = ['id'=>'btn_upuser', 'class'=>'btn btn-success'], $secure = null)!!}
					{!!link_to('#', $title='Eliminar Usuario', $attributes = ['id'=>'btn_deluser', 'class'=>'btn btn-danger'], $secure = null)!!}
			</div>
		</div>
	</div>
</div>
{!!Form::close()!!}