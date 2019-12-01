@extends('DashPpal')

@section('cont_InfoDsh_sup')

<div><h1>Página de administración de entradas</h1></div><br>

<div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>

@endsection

@section('cont_InfoDsh_dwn')

<div>
	<section id="principal">
		<section id="contenido">
			@foreach($articulos as $articulo)
				<article>
					<table class="table table-bordered table-striped">
						<tr>
							<td class="container-fluid border-info">
								<h4>{{$articulo->titulo}}</h4>
								<p>
									<small>Posted by
										<b>{{$articulo->Autor->name}}</b> at
										<b>{{$articulo->created_at}}</b>
									</small>
								</p>
							</td>
							<td class="border-info border-left-0" style="background-color: #39454D">
								<a href="{{ route('blog.edit', $articulo->id) }}" class="btn btn-outline-info mb-2">Modificar</a>
								<form action="{{ route('blog.destroy', $articulo->id) }}" method="post">
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

		{{$articulos->links()}}

	</section>
</div>

	<a class="btn btn-primary" href="{{ route('blog.create') }}" role="button">Añadir nueva entrada</a>
@endsection

<!--extraído de codigojavalibre.com-->