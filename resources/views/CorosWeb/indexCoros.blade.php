<!--Archivo indice de la página principal-->
@extends('CorosWeb.masterCoros')
@include('CorosWeb.carrousels')

@section('titulo')
	Coro de Conciertos - Página principal
@endsection

@section('cont_Ppal')

	{{-- EL CARROUSEL PRINCIPAL --}}
	<div class="container-fluid">
		@yield('principal')
	</div>
	
	<br>

	{{-- COMIENZAN LOS ARTICULOS DEL BLOG --}}

	<section id="principal">
		<section id="contenido">
			@foreach($atcs as $item)
				<article>
					<table class="table table-bordered table-striped">
						<tr>
							<td>
								<h2><a href="{{ route('blog.show', $item->id) }}" class="text-dark">{{ $item->titulo }}</a></h2>
								<p>
									{!! str_limit($item->contenido, 160); !!}
								</p>
								<p>
									<small>Publicado por:
										<b>{{ $item->Autor->name }}</b> en
										<b>{{ $item->created_at }}</b>
									</small>
								</p>
								<div class="text-right mt-4">
									<a href="{{ route('blog.show', $item->id) }}"><small>Continuar leyendo...</small></a>
								</div>
							</td>
						</tr>
					</table>
				</article>
			@endforeach 
		</section>

		{{$atcs->links()}}

	</section>
@endsection