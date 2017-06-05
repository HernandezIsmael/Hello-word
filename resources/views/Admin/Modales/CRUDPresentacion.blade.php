{!!Form::open()!!}
	<div class="modal fade" id="modal-pres" tabindex="-1" role="dialog" aria-labelledby="myModaLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header divmodal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
					<h4 class="modal-title">Registro de Presentación de Productos</h4>
				</div>
				<div class="modal-body">
					<input type="hidden" name"_token" value="{{ csrf_token() }}" id="token_pres">
					<div class="form-group">
						{!!Form::label('cl','Clave:')!!}
						{!!Form::text('clv_pres',null,['id'=> 'clv_pres','class'=>'form-control', 'placeholder' =>'Introduzca la clave'])!!}
					</div>
					<div class="form-group">
						{!!Form::label('nom','Presentación del producto:')!!}
						{!!Form::text('pres',null,['id' => 'pres','class'=>'form-control', 'placeholder'=>'Introduzca la presentación del producto'])!!}
					</div>
				</div>
				<div class="modal-footer">
					{!!link_to('#', $title = 'Registrar Tipo de Empresa', $attributes = ['id' => 'btn_crepres', 'class' => 'btn btn-primary'], $secure = null )!!}
					{!!link_to('#', $title='Editar Tipo de Empresa', $attributes = ['id'=>'btn_uppres', 'class'=>'btn btn-success'], $secure = null)!!}
					{!!link_to('#', $title='Eliminar Tipo de Empresa', $attributes = ['id'=>'btn_delpres', 'class'=>'btn btn-danger'], $secure = null)!!}
				</div>	
			</div>
		</div>
	</div>
{!!Form::close()!!}