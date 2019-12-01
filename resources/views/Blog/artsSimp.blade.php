@extends('CorosWeb.masterCoros')

<!--Archivo para mostrar artículos de blog-->


@section('titulo')
	{{ $blgArt->titulo }} - Coro de Conciertos UCV
@endsection

@section('cont_Ppal')

	<div class="container-fluid pt-2">
		<h2>{{ $blgArt->titulo }}</h2>
		<br>
		<p>{!! $blgArt->contenido !!}</p>
		<p>
			<small>Publicado por:
				<b>{{ $blgArt->Autor->name }}</b> en
				<b>{{ $blgArt->created_at }}</b>
			</small>
		</p>
	</div>

	<small><a href="javascript:history.back(-1);">Volver atrás</a></small>

@endsection

