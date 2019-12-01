@extends ('layouts.app')

@section('content')

<div class="container">
	<div class="row">
 		<nav class="nav flex-column col-sm border border-info p-0">

 			<div class="nav-link bg-info text-center font-weight-bold text-light">Menú de opciones</div>

 			<!--Validador de Administrador-->

 			@if (auth()->user()->is_Admin)

 			<div class="nav-link dropright">
 				
 				<a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Gestión de usuarios</a>

 				 <div class="dropdown-menu shadow-sm">
 				 	<a class="nav-link" href="{{ route('GtnAdmin.index') }}">Administradores</a>
    			<a class="nav-link" href="{{ route('GtnMods.index') }}">Moderadores</a>
    			<a class="nav-link" href="{{ route('GtnUsrs.index') }}">Usuarios</a>
  			</div>

 			</div>
 				
 			@endif

 				@if (auth()->user()->is_Admin OR auth()->user()->hasRoles(['mod']))

          <div class="nav-link dropright">
            <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Gestión de Info. pública</a>
              <div class="dropdown-menu shadow-sm">
                <a class="nav-link" href="{{ route('infocoros.index') }}">Gestor de info. sobre el coro</a>
                <a class="nav-link" href="{{ route('blog.index') }}">Gestionar Blog</a>
                <a class="nav-link" href="{{ route('fotoMod.index') }}">Gestionar Fotografías</a>
              </div>
          </div>

          <div class="nav-link dropright">
            <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Gestión de documentos</a>
              <div class="dropdown-menu shadow-sm">
                <a class="nav-link" href="/Dashboard/cont">Gestionar Contabilidad</a>
                <a class="nav-link" href="/Dashboard/gcal">Gestionar Calendario</a>
                <a class="nav-link" href="/Dashboard/asis">Asistencias</a>
              </div>
          </div>

 				@endif

        <a class="nav-link" href="/Dashboard/const">Constancias de asistencia</a>
        <a class="nav-link" href="/Dashboard/repo">Repositorio Digital de Partituras</a>
        <a class="nav-link" href="/Dashboard">Página Principal de Administración</a>
        <a class="nav-link" href="/">Inicio del portal web</a>
  			<div class="dropdown-divider"></div>
  			<p class="text-secondary p-4 text-justify" href="#" tabindex="-1" aria-disabled="true">Derechos reservados (C) 2019 Coro de Conciertos de la U.C.V.</p>

		</nav>
  
  			<div class="col-sm-9">

          <!--Para la información superior-->
          <div class="flex-sm-row text-center pt-4">@yield('cont_InfoDsh_sup')</div>
          
          <!--Para la información inferior, que pueden ser acciones-->
          <div class="flex-sm-row">@yield('cont_InfoDsh_dwn')</div>

  			</div>
	</div>
</div>
@endsection