<style>
    .crop{
         float:left;
         margin: auto;
         overflow:hidden; /* IMPORTANTE: extraido de https://www.anieto2k.com/2009/09/08/3-tecnicas-de-hacer-crop-con-css/ */
         max-height:350px;
     }
</style>
@section('principal')
{{--  --}}

<div id="carrppal" class="carousel slide" data-ride="carousel" style="min-height: 350px;">
	<div class="carousel-inner" >

		<div class="carousel-item active">
			<img src="https://4.bp.blogspot.com/-SFLKtZzD7YI/V6P_IGolRuI/AAAAAAAABeM/9a7fk0FvzSoT-PwRAQg8e-PbLDvDcwRFACPcB/s1600/Ccucv.jpg" class="d-block w-100" alt="..." class="img-fluid">
		</div>

		@foreach ($foto as $fotos)
			@if ($fotos->seccion == 'principal')
				<div class="carousel-item crop">
					<img src="{!! $fotos->URL !!}" class="d-block w-100" alt="...">
				</div>
			@endif
		@endforeach

	</div>

	<a class="carousel-control-prev" href="#carrppal" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>

	<a class="carousel-control-next" href="#carrppal" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>

@endsection



@section('historico')
{{--  --}}
<div id="carrhist" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner" style="min-height: 350px">

		<div class="carousel-item active">
			<img src="https://4.bp.blogspot.com/-SFLKtZzD7YI/V6P_IGolRuI/AAAAAAAABeM/9a7fk0FvzSoT-PwRAQg8e-PbLDvDcwRFACPcB/s1600/Ccucv.jpg" class="d-block w-100" alt="...">
		</div>

		@foreach ($foto as $fotos)
			@if ($fotos->seccion == 'historico')
				<div class="carousel-item crop">
					<img src="{!! $fotos->URL !!}" class="d-block w-100" alt="...">
				</div>
			@endif
		@endforeach

	</div>

	<a class="carousel-control-prev" href="#carrhist" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>

	<a class="carousel-control-next" href="#carrhist" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
@overwrite