{!!Form::open(['files' => true])!!}
	<div class="modal fade" id="modal-edittuser" tabindex="-1" role="dialog" aria-labelledby="myModaLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header divmodal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
					<h4 class="modal-title">Registro Tipo de Usuarios</h4>
				</div>
				<div class="modal-body">
					<input type="hidden" name"_token" value="{{ csrf_token() }}" id="token_tipouser">
					@include('Admin.Modales.ModalTUser')	
				</div>
				<div class="modal-footer">
					{!!link_to('#', $title = 'Registrar Tipo', $attributes = ['id' => 'btn_cretuser', 'class' => 'btn btn-primary'], $secure = null )!!}
					{!!link_to('#', $title='Editar Tipo', $attributes = ['id'=>'btn_uptuser', 'class'=>'btn btn-success'], $secure = null)!!}
					{!!link_to('#', $title='Eliminar Tipo', $attributes = ['id'=>'btn_deltuser', 'class'=>'btn btn-danger'], $secure = null)!!}
				</div>
			</div>
		</div>
	</div>
{!!Form::close()!!}