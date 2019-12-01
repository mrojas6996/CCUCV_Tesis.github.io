@extends('DashPpal')

@section('cont_InfoDsh_sup')
<div class="container-fluid">
<h3>Modificador de fotografías públicas</h3><br />

<p class="alert-danger">Por favor asegurese de que los enlaces de Google Drive pertenezcan a fotos compartidas públicamente</p>

<p class="alert-info">Recuerde seleccionar la sección correcta de la imagen</p>

<form method="post" action="{{ route('fotoMod.update', $foto->id) }}">
	@method('PATCH')
	@csrf
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="titulo">Título de la imagen</label>
			<input type="text" class="form-control" name="titulo" placeholder="Título de la foto" value="{{ $foto->titulo }}">
		</div>

		<div class="form-group col-md-6">
			<label for="seccion">Pertenencia</label>
			<select name="seccion" class="form-control">
				<option value="principal" selected>Carrousel Principal</option>
				<option value="historico">Carrousel Histórico</option>
				<option value="publico">Ninguno (usable en cualquier lugar)</option>
			</select>
		</div>
	</div>

	<div class="form-group row">
		<div class="form-group col-md-12">
			<label for="url">URL / Link de la imagen</label>
			<input type="text" class="form-control" name="URL" placeholder="URL de la imagen" value="{{ $foto->URL }}">
		</div>
	</div>

	<button type="submit" class="btn btn-primary">Registrar imagen</button>
</form>
</div><br> <br>
@endsection

@section('cont_InfoDsh_dwn')
<div class="container-fluid text-center">
	<h3>Vista previa actual</h3>
	<img src="{!! $foto->URL !!}" class="img-fluid">
</div>
@endsection
