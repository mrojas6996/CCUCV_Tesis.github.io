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

<div class="container-fluid"><h3>Modificando {{ $histCoro->descrip }}</h3></div>

@endsection

@section('cont_InfoDsh_dwn')

	<div class="container-fluid">
		<form name="mdfHist" method="POST" action="{{ route('infocoros.update', $histCoro->id) }}">
			@method('PATCH') 
			@csrf

			<div class="input-group mb-3">
				<textarea class="form-control" rows="10" name="info">{{ $histCoro->info }}</textarea>
			</div>

			<a class="btn btn-primary" href="{{ route('infocoros.index') }}" role="button">Volver atrás</a>
			<button type="submit" name="submit" class="btn btn-success ml-2">Terminar</button>
		
	    </form>
	</div>

	<footer>
		<br><br>
		<a class="text-secondary"> DERECHOS RESERVADOS (C) 2019, EDITOR DE TEXTO TinyMCE</a> <br>
		<a class="text-secondary" href="https://www.tiny.cloud">Página oficial de TinyMCE</a>
	</footer>

@endsection