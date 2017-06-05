{!!Form::open()!!}
	<div class="modal fade" id="modal-tipro" tabindex="-1" role="dialog" aria-labelledby="myModaLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header divmodal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
					<h4 class="modal-title">Registro de Tipo de Productos</h4>
				</div>
				<div class="modal-body">
					<input type="hidden" name"_token" value="{{ csrf_token() }}" id="token_tpro">
					<div class="form-group">
						{!!Form::label('cl','Clave:')!!}
						{!!Form::text('clv_tipro',null,['id'=> 'clv_tipro','class'=>'form-control', 'placeholder' =>'Introduzca la clave'])!!}
					</div>
					<div class="form-group">
						{!!Form::label('nom','Tipo del producto:')!!}
						{!!Form::text('tipro',null,['id' => 'tipro','class'=>'form-control', 'placeholder'=>'Introduzca el tipo de producto'])!!}
					</div>
				</div>
				<div class="modal-footer">
					{!!link_to('#', $title = 'Registrar Tipo de Producto', $attributes = ['id' => 'btn_cretipro', 'class' => 'btn btn-primary'], $secure = null )!!}
					{!!link_to('#', $title='Editar Tipo de Producto', $attributes = ['id'=>'btn_uptipro', 'class'=>'btn btn-success'], $secure = null)!!}
					{!!link_to('#', $title='Eliminar Tipo de Producto', $attributes = ['id'=>'btn_detipro', 'class'=>'btn btn-danger'], $secure = null)!!}
				</div>	
			</div>
		</div>
	</div>
{!!Form::close()!!}