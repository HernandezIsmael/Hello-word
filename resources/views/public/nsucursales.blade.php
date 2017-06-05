@extends('public.index')
	@section('contenido')
		{!!Html::style('css/cssinicio.min.css')!!}
		<div class="row" id="rowcontainer">
		</div>
		@section('scripts')
			{!!Html::script('js/config/seccionnsuc.min.js')!!}
		@endsection
		<!--div class="content-inicio">
			<p></p>
			<p></p>
			<div class="row">
				<div class="col-md-11 col-md-offset-1">
					<p><h1>Nuestras Sucursales</h1></p>
				</div>
				<p></p>
				<p></p>
				<p></p>
			</div>
			<div class="row">
		        <div class="col-md-4 col-md-offset-1">
			        <img src="{{ asset('/images/Sucursal1.jpeg') }}">
			    </div>
			    <div class="col-md-7">
					<p>COLONIA CENTRO , HUEJUTLA DE REYES, HGO. C.P. 43000</p>
					<p>	Horarios de Atencion: Lun-Vie 8am-2pm 2pm-5pm Sab 9am-1pm</p>
					<p>	Tel. 324 235 2675</p>
				</div>
			</div>
			<p></p>
			<div class="row">
				<div class="col-md-4 col-md-offset-1">
					<img src="{{ asset('/images/Sucursal2.jpeg') }}">
				</div>
				<div class="col-md-7">
					<p>CALLE ZARAGOZA NO. 1010	COL. LA PIRAGUA	68380	.</p>
					<p>	Horarios de Atencion: Lun-Vie 8am-1pm Sab 10am-2pm</p>
					<p>	Tel. 324 235 2675</p>
				</div>
			</div>
			<p></p>
			<div class="row">
			    <div class="col-md-4 col-md-offset-1">
				 	<img src="{{ asset('/images/Sucursal3.jpeg') }}">
				</div>
			    <div class="col-md-7">
					<p>	AV. 5 DE MAYO NO 1253	CENTRO TUXTEPEC	68300</p>
					<p>	Horarios de Atencion: Lun-Vie 8am-2pm</p>
					<p>	Tel. 324 235 2675</p>
				</div>
			</div>
		</div-->
	@endsection	
