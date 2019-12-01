@extends('DashPpal')

@section('cont_InfoDsh_sup')
<h3>Página de fotografías públicas</h3><br />

<p>Las fotografías aquí cargadas permanecerán disponibles de forma pública en los carrouseles, también se pueden usar en cualquier otro lugar siempre que se especifique</p><br>

<p class="alert-danger">Por favor asegurese de que los enlaces de Google Drive pertenezcan a fotos compartidas públicamente</p>

<form method="post" action="{{ route('fotoMod.store') }}">
	@csrf
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="titulo">Título de la imagen</label>
			<input type="text" class="form-control" name="titulo" placeholder="Título de la foto">
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
			<input type="text" class="form-control" name="URL" placeholder="URL de la imagen">
		</div>
	</div>

	<button type="submit" class="btn btn-primary">Registrar imagen</button>
</form>

@endsection

@section('cont_InfoDsh_dwn')
<br><div class="dropdown-divider alert-dark"></div><br>
<h3>Fotos registradas:</h3>

<div class="pt-3">
	<section id="principal">
		<section id="contenido" class="row">
			@foreach($foto as $data)
				<article class="col-md-6">
					<table class="table table-bordered table-striped">
						<tr>
							<td class="container-fluid border-info">
								<h4>{{$data->titulo}}</h4>
								
								<img class="img-thumbnail" alt="{{ $data->titulo }}" src="{!! $data->URL !!}">
								 
								<footer><small>Pertenece a: {{ $data->seccion }}</small></footer>
							</td>
							<td class="border-info border-left-0" style="background-color: #39454D">
								<a href="{{ route('fotoMod.edit', $data->id) }}" class="btn btn-outline-info mb-2">Modificar</a>
								<form action="{{ route('fotoMod.destroy', $data->id) }}" method="post">
									@csrf
									@method('DELETE')
									<button class="btn btn-outline-danger" type="submit">Eliminar</button>
								</form>
							</td>
						</tr>
					</table>
				</article>
			@endforeach 
		</section>

		{{-- {{$articulos->links()}} --}}

	</section>
</div>
@endsection