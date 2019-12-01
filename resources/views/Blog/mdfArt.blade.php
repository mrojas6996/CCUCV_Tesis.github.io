<!--Archivo de modificacion-->

<head>
	<script src="/js/tinymce/tinymce.min.js"></script>
	<script>
		tinymce.init({
			selector: 'textarea',
			language: 'es',
			plugins: 'code',
		});
	</script>
</head>

@extends('DashPpal')

@section('cont_InfoDsh_sup')
	<div class="container-fluid">
		<h3>Área de Modificacion</h3>
		<p>Modificando: {{ Auth::user()->name }}</p>
	</div>
@endsection

@section('cont_InfoDsh_dwn')

	<div class="container-fluid">
		<form name="crearArticulo" method="POST" action="{{ route('blog.update', $blgArt->id) }}">
			@method('PATCH') 
			@csrf

			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text" id="inputGroup-sizing-default">Título de la entrada</span>
				</div>
				<input type="text" class="form-control" name="titulo" value="{{ $blgArt->titulo }}">
			</div>

			<div class="input-group mb-3">
				<textarea class="form-control" rows="10" name="contenido">{{ $blgArt->contenido }}</textarea>
			</div>

			<a class="btn btn-primary" href="{{ route('blog.index') }}" role="button">Volver atrás</a>
			<button type="submit" name="submit" class="btn btn-success ml-2">Terminar</button>
		
	    </form>
	</div>

	<footer>
		<br><br>
		<a class="text-secondary"> DERECHOS RESERVADOS (C) 2019, EDITOR DE TEXTO TinyMCE</a> <br>
		<a class="text-secondary" href="https://www.tiny.cloud">Página oficial de TinyMCE</a>
	</footer>

@endsection