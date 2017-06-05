{!!Form::open(['files' => true])!!}
	<div class="modal fade" id="modal-images" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden= "true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
					<h4 class="modal-title">Registro de Apiarios</h4>
				</div>
				<dir class="modal-body">
					<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token_img">
					@include('Admin.Modales.ModalImages')	
				</dir>
				<div class="modal-footer">
					{!!link_to('#', $title = 'Subir Imagen', $attributes = ['id' => 'btn_creimg', 'class' => 'btn btn-primary'], $secure = null )!!}
					{!!link_to('#', $title='Editar Imagen', $attributes = ['id'=>'btn_updimg', 'class'=>'btn btn-success'], $secure = null)!!}
					{!!link_to('#', $title='Eliminar Imagen', $attributes = ['id'=>'btn_delimg', 'class'=>'btn btn-danger'], $secure = null)!!}	
				</div>
			</div>
		</div>
	</div>
{!!Form::close()!!}