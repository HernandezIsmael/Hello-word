{!!Form::open()!!}
	<div class="modal fade" id="modal-prod" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden= "true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
					<h4 class="modal-title">Registro de Productos Honey</h4>
				</div>
				<dir class="modal-body">
					<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token_prod">
					@include('Admin.Modales.ModalProducto')
				</dir>
				<div class="modal-footer">
					{!!link_to('#', $title = 'Registrar Cargo', $attributes = ['id' => 'btn_crepro', 'class' => 'btn btn-primary'], $secure = null )!!}
					{!!link_to('#', $title='Editar Cargo', $attributes = ['id'=>'btn_updpro', 'class'=>'btn btn-success'], $secure = null)!!}
					{!!link_to('#', $title='Eliminar Cargo', $attributes = ['id'=>'btn_delpro', 'class'=>'btn btn-danger'], $secure = null)!!}	
				</div>
			</div>
		</div>
	</div>
{!!Form::close()!!}