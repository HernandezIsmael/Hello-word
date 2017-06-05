{!!Form::open()!!}
	<div class="modal fade" id="modal-cargo" tabindex="-1" role="dialog" aria-labelledby="myModaLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
					<h4 class="modal-title">Registro de Cargo de Usuario</h4>
				</div>
				<div class="modal-body">
					<input type="hidden" name"_token" value="{{ csrf_token() }}" id="token_cargo">
					@include('Admin.Modales.ModalCargo')	
				</div>
				<div class="modal-footer">
					{!!link_to('#', $title = 'Registrar Cargo', $attributes = ['id' => 'btn_crecargo', 'class' => 'btn btn-primary'], $secure = null )!!}
					{!!link_to('#', $title='Editar Cargo', $attributes = ['id'=>'btn_upcargor', 'class'=>'btn btn-success'], $secure = null)!!}
					{!!link_to('#', $title='Eliminar Cargo', $attributes = ['id'=>'btn_delcargo', 'class'=>'btn btn-danger'], $secure = null)!!}
				</div>	
			</div>
		</div>
	</div>
{!!Form::close()!!}