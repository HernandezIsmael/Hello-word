{!!Form::open()!!}
	<div class="modal fade" id="modal-compra" tabindex="-1" role="dialog" aria-labelledby="myModaLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header divmodal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
					<h4 class="modal-title">Registro de Compra de Articulos</h4>
				</div>
				<div class="modal-body">
					<input type="hidden" name"_token" value="{{ csrf_token() }}" id="token_compra">
					@include('Admin.Modales.ModalCompra')
				</div>
				<div class="modal-footer">
					{!!link_to('#', $title = 'Registrar Compra', $attributes = ['id' => 'btn_crecompra', 'class' => 'btn btn-primary'], $secure = null )!!}
					{!!link_to('#', $title='Editar Compra', $attributes = ['id'=>'btn_upcompra', 'class'=>'btn btn-success'], $secure = null)!!}
					{!!link_to('#', $title='Eliminar Compra', $attributes = ['id'=>'btn_delcompra', 'class'=>'btn btn-danger'], $secure = null)!!}
				</div>	
			</div>
		</div>
	</div>
{!!Form::close()!!}