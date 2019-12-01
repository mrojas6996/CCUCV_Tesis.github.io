@extends('DashPpal')

@section('cont_InfoDsh_sup')

<h1 class="text-center p-2">Enlaces rápidos</h1>

@endsection

@section('cont_InfoDsh_dwn')

@if (auth()->user()->is_Admin)

<div class="container-fluid pt-0">
	<h3 class=" text-center">Usuarios</h3>

	<div class="container-fluid w-80 border shadow text-white font-weight-bold border-danger">
		<div class="row text-center p-2">
			<div class="col">
				<a href="{{ route('GtnAdmin.index') }}">
					<img class="img-fluid" src="{{ route('resDir') }}/iconos/admin.ico">
				</a>
			</div>
			<div class="col">
				<a href="{{ route('GtnMods.index') }}">
					<img class="img-fluid" src="{{ route('resDir') }}/iconos/mod.ico">
				</a>
			</div>
			<div class="col">
				<a href="{{ route('GtnUsrs.index') }}">
					<img class="img-fluid" src="{{ route('resDir') }}/iconos/user.ico">
				</a>
			</div>
		</div>

		<div class="row text-center">
			<div class="col border bg-danger border-light">Administradores</div>
			<div class="col border bg-danger border-light">Moderadores</div>
			<div class="col border bg-danger border-light">Usuarios</div>
		</div>
	</div>
	@endif

	@if (auth()->user()->is_Admin OR auth()->user()->hasRoles(['mod']))
	<h3 class="p-3 mt-5 text-center">Información</h3>

	<div class="container w-80 border shadow text-secondary font-weight-bold border-warning">

		<div class="row text-center p-2">
			<div class="col">
				<a href="{{ route('blog.index') }}">
					<img class="img-fluid" src="{{ route('resDir') }}/iconos/blog.ico">
				</a>
			</div>
			<div class="col">
				<a href="{{ route('infocoros.index') }}">
					<img class="img-fluid" src="{{ route('resDir') }}/iconos/info.ico">
				</a>
			</div>
			<div class="col">
				<a href="{{ route('fotoMod.index') }}">
					<img class="img-fluid" src="{{ route('resDir') }}/iconos/img.ico">
				</a>
			</div>
		</div>

		<div class="row text-center">
			<div class="col border bg-warning border-light">Blog</div>
			<div class="col border bg-warning border-light">Info. general</div>
			<div class="col border bg-warning border-light">Fotos</div>
		</div>
	</div>

	<h3 class="p-3 mt-5 text-center">Administración</h3>

	<div class="container w-80 border border-success shadow">

		<div class="row text-center p-2">
			<div class="col">
				<a href="/Dashboard/asis">
					<img class="img-fluid" src="{{ route('resDir') }}/iconos/asist.ico">
				</a>
			</div>
			<div class="col">
				<a href="/Dashboard/gcal">
					<img class="img-fluid" src="{{ route('resDir') }}/iconos/gcal.ico">
				</a>
			</div>
			<div class="col">
				<a href="/Dashboard/cont">
					<img class="img-fluid" src="{{ route('resDir') }}/iconos/cont.ico">
				</a>
			</div>
		</div>

		<div class="row text-center font-weight-bold text-white">
			<div class="col border bg-success border-light">Asistencias</div>
			<div class="col border bg-success border-light">Calendario</div>
			<div class="col border bg-success border-light">Contabilidad</div>
		</div>
	</div>
	@endif

	<h3 class="p-3 mt-5 text-center">General</h3>

	<div class="container w-80 border border-info shadow text-white font-weight-bold">

		<div class="row text-center p-2">
			<div class="col">
				<a href="/Dashboard/const">
					<img class="img-fluid" src="{{ route('resDir') }}/iconos/const.ico">
				</a>
			</div>
			<div class="col">
				<a href="/Dashboard/repo">
					<img class="img-fluid" src="{{ route('resDir') }}/iconos/parts.ico">
				</a>
			</div>
			<div class="col">
				<a href="/">
					<img height="128px" class="img-fluid" src="{{ route('resDir') }}/logo.jpg">
				</a>
			</div>
		</div>

		<div class="row text-center">
			<div class="col border bg-info border-light">Constancias</div>
			<div class="col border bg-info border-light">Partituras</div>
			<div class="col border bg-info border-light">Portal Web</div>
		</div>
	</div>
</div>

@endsection
