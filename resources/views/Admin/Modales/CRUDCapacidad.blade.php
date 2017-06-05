{!!Form::open()!!}
	<div class="modal fade" id="modal-cap" tabindex="-1" role="dialog" aria-labelledby="myModaLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header divmodal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
					<h4 class="modal-title">Registro de Cargo de Usuario</h4>
				</div>
				<div class="modal-body">
					<input type="hidden" name"_token" value="{{ csrf_token() }}" id="token_cap">
					<div class="form-group">
						{!!Form::label('cl','Clave:')!!}
						{!!Form::text('clv_cap',null,['id'=> 'clv_cap','class'=>'form-control', 'placeholder' =>'Introduzca la clave'])!!}
					</div>
					<div class="form-group">
						{!!Form::label('capa','Capacidad del producto:')!!}
						{!!Form::text('capaci',null,['id' => 'capaci','class'=>'form-control', 'placeholder'=>'Introduzca la presentación del producto'])!!}
					</div>	
				</div>
				<div class="modal-footer">
					{!!link_to('#', $title = 'Registrar Cargo', $attributes = ['id' => 'btn_crecap', 'class' => 'btn btn-primary'], $secure = null )!!}
					{!!link_to('#', $title='Editar Cargo', $attributes = ['id'=>'btn_upcap', 'class'=>'btn btn-success'], $secure = null)!!}
					{!!link_to('#', $title='Eliminar Cargo', $attributes = ['id'=>'btn_delcap', 'class'=>'btn btn-danger'], $secure = null)!!}
				</div>	
			</div>
		</div>
	</div>
{!!Form::close()!!}