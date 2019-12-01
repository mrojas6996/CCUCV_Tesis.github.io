@extends('CorosWeb.masterCoros')
@include('CorosWeb.carrousels')

@section('cont_Ppal')

	{{-- EL CARROUSEL HISTÓRICO --}}
	<div class="container-fluid">
		@yield('histórico')
	</div>
    <br>


	@if (!empty($histLinks) OR !empty($texts))

		@foreach ($texts as $histItem)
		@switch($histLinks)

			@case('hist')
				@section('titulo')
					Nuestra Historia
				@endsection
					
				@if ($histItem->sxn==='hist')
					<div>{!! $histItem->info !!}</div>
				@endif
			@break

			@case('mv')
				@section('titulo')
					Misión y Visión
				@endsection

				@if($histItem->sxn==='mv')
					<div>{!! $histItem->info !!}</div>
				@endif
			@break

			@case('val')
				@section('titulo')
					Valores
				@endsection

				@if($histItem->sxn==='val')
					<div>{!! $histItem->info !!}</div>
				@endif
			@break

			@case('recs')
				@section('titulo')
					Reconocimientos
				@endsection

				@if($histItem->sxn==='recs')
					<div>{!! $histItem->info !!}</div>
				@endif
			@break

			@default
			@endswitch
		@endforeach
	@else
		<p class="alert-danger">¡¡ERROR, FALTA UNA O MAS VARIABLES!!</p>
	@endif
@endsection