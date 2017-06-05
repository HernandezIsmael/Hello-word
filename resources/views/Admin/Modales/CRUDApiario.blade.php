{!!Form::open()!!}
	<div class="modal fade-scale" id="modal-api" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden= "true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
					<h4 class="modal-title">Registro de Apiarios</h4>
				</div>
				<dir class="modal-body">
					<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token_api">
					@include('Admin.Modales.ModalApiario')
				</dir>
				<div class="modal-footer">
					{!!link_to('#', $title = 'Registrar Cargo', $attributes = ['id' => 'btn_creapi', 'class' => 'btn btn-primary'], $secure = null )!!}
					{!!link_to('#', $title='Editar Cargo', $attributes = ['id'=>'btn_updapi', 'class'=>'btn btn-success'], $secure = null)!!}
					{!!link_to('#', $title='Eliminar Cargo', $attributes = ['id'=>'btn_delapi', 'class'=>'btn btn-danger'], $secure = null)!!}	
				</div>
			</div>
		</div>
	</div>
{!!Form::close()!!}