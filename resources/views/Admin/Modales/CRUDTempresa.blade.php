{!!Form::open()!!}
	<div class="modal fade" id="modal-tempresa" tabindex="-1" role="dialog" aria-labelledby="myModaLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header divmodal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
					<h4 class="modal-title">Registro de Tipo de Empresas</h4>
				</div>
				<div class="modal-body">
					<input type="hidden" name"_token" value="{{ csrf_token() }}" id="token_compra">
					<div class="form-group">
						{!!Form::label('cl','Clave:')!!}
						{!!Form::text('clv_temp',null,['id'=> 'clv_temp','class'=>'form-control', 'placeholder' =>'Introduzca la clave'])!!}
					</div>
					<div class="form-group">
						{!!Form::label('nom','Tipo de Empresa:')!!}
						{!!Form::text('t_emp',null,['id' => 't_emp','class'=>'form-control', 'placeholder'=>'Escriba el tipo de empresa'])!!}
					</div>
				</div>
				<div class="modal-footer">
					{!!link_to('#', $title = 'Registrar Tipo de Empresa', $attributes = ['id' => 'btn_creemp', 'class' => 'btn btn-primary'], $secure = null )!!}
					{!!link_to('#', $title='Editar Tipo de Empresa', $attributes = ['id'=>'btn_upemp', 'class'=>'btn btn-success'], $secure = null)!!}
					{!!link_to('#', $title='Eliminar Tipo de Empresa', $attributes = ['id'=>'btn_delemp', 'class'=>'btn btn-danger'], $secure = null)!!}
				</div>	
			</div>
		</div>
	</div>
{!!Form::close()!!}