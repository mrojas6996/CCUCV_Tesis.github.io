@extends('DashPpal')

@section('cont_InfoDsh_sup')

	<div><h1>Página de administración de entradas</h1> <br><br></div>

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

		@foreach($texts as $text)

			<section>
				<table class="table table-bordered table-striped table-info">
					<tr>
						<td class="container-fluid">
							<div>
								<h4>{{ $text->descrip }}</h4>
							</div>
						</td>
						<td class="align-middle">
							<a class="btn btn-primary" href="{{ route('infocoros.edit', $text->id) }}">Modificar</a>
						</td>
					</tr>
				</table>
			</section>

		@endforeach

	</div>
@endsection