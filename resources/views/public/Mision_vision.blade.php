@extends('public.index')
	@section('contenido')
		{!!Html::style('css/cssinicio.min.css')!!}
		<div class="row" style="margin-top: 50px; margin-bottom: 50px;"></div>	
		@section('scripts')
			{!!Html::script('js/config/myv.min.js')!!}
		@endsection
	@endsection			