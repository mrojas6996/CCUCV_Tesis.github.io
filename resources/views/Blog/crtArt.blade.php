<!--Archivo de creacion-->
<head>
	<script src="/js/tinymce/tinymce.min.js"></script>
	<script>
		tinymce.init({
			selector:'textarea',
			language:'es',
			plugins: 'code'
		});
	</script>
</head>

<!--TINYMCE FUE OBTENIDO DE SU PÁGINA WEB, DERECHOS RESERVADOS: https://www.tiny.cloud/-->

@extends('DashPpal')

@section('cont_InfoDsh_sup')
	<div class="container-fluid">
		<h3>Añadiendo nueva entrada</h3>
	</div>
@endsection

@section('cont_InfoDsh_dwn')
	@if(Auth::check())
		<div class="container-fluid">
			<form name="crearArticulo" method="POST" action="{{ route('blog.store') }}">
				@csrf

				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text" id="inputGroup-sizing-default">Título de la entrada</span>
					</div>
					<input type="text" class="form-control" name="titulo" placeholder="Título de la entrada" required>
				</div>

				<div class="input-group">
					<textarea class="form-control" name="contenido" placeholder="Contenido de la entrada" rows="10"></textarea>
				</div>

				<div class="mt-3">
					<a class="btn btn-primary" href="{{ route('blog.index') }}" role="button">Volver atrás</a>
					<button type="submit" name="submit" class="btn btn-success ml-2">Terminar</button>					
				</div>


			</form>
		</div>

	@else

	<section>
		<div>
			Inscribase
		</div>

	@endif

	<footer>
		<br><br>
		<a class="text-secondary"> DERECHOS RESERVADOS (C) 2019, EDITOR DE TEXTO TinyMCE</a> <br>
		<a class="text-secondary" href="https://www.tiny.cloud">Página oficial de TinyMCE</a>
	</footer>

@endsection