@extends('public.index')
	@section('contenido')
		{!!Html::style('css/cssinicio.min.css')!!}
		<div class="row">
		</div>
		@section('scripts')
			{!!Html::script('js/config/seccioninicio.min.js')!!}
		@endsection
	@endsection
