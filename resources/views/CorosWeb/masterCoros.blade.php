
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<title>@yield('titulo')</title>

		<!-- Scripts -->
		<script src="{{ asset('js/app.js') }}" defer></script>

		<!-- Fonts -->
		<link rel="dns-prefetch" href="//fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

		<!-- Styles -->
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	</head>

	<body style="background-color: #F5F5F5; font-size: 1.17rem">

		<!--EL NAVBAR-->
		<header class="shadow-sm fixed-top">
			<nav class="navbar navbar-expand-sm navbar-light bg-info">

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- Brand -->
				<a class="navbar-brand" href="{{ route('ppal_Coros') }}">
					<img class="d-inline-block align-top rounded-circle" id="logo" src="{{ route('resDir') }}/logo.jpg" width="50px" alt="logo coro de conciertos" />
				</a>

				<!-- Links -->
				<div class="collapse navbar-collapse justify-content-end" id="nav-content">   

				<ul class="navbar-nav">

					<li class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle text-white" data-toggle="dropdown" id="navbardrop">Sobre nosotros</a>

						<div class="dropdown-menu shadow-sm">
							<a href="{{ route('sobreCoro') }}/hist" class="dropdown-item">Nuestra Historia</a>
							<a href="{{ route('sobreCoro') }}/mv" class="dropdown-item">Misión y Visión</a>
							<a href="{{ route('sobreCoro') }}/val" class="dropdown-item">Valores</a>
							<a href="{{ route('sobreCoro') }}/recs" class="dropdown-item">Reconocimientos</a>
						</div>
					</li>

					{{-- <li class="nav-item dropdown">

						<a href="#" class="nav-link dropdown-toggle text-white" data-toggle="dropdown" id="navbardrop">Presentaciones</a>

						<div class="dropdown-menu shadow-sm">
							<a href="#" class="dropdown-item">2013</a>
							<a href="#" class="dropdown-item">2014</a>
							<a href="#" class="dropdown-item">2015</a>
							<a href="#" class="dropdown-item">2016</a>
							<a href="#" class="dropdown-item">2017</a>
						</div>
					</li> --}}
					
					<li class="nav-item dropdown">

						<a href="#" class="nav-link dropdown-toggle text-white" data-toggle="dropdown" id="navbardrop">Intranet</a>

						<div class="dropdown-menu shadow-sm">
							<a href="/login" class="dropdown-item text-left">Iniciar Sesión</a>
						</div>

					</li>

					<li class="nav-item"><a href="#" class="nav-link text-warning">¿Quiere audicionar?</a></li>
			
				</ul>
			</nav>
		</header>


		<!--SEPARADOR DEL NAVBAR-->
		<div class="container-fluid mt-3"><br><br></div>

		<!--EL MAXI CONTENEDOR-->
		<div class="container border border-primary mt-4 mb-4 bg-light">
			<div class="row border border-info">
				
				<!--EL PRINCIPAL-->
				<div class="col-md m-3 m-lg-5">
					@yield('cont_Ppal')
				</div>
				
				<!--LOS WIDGETS-->
				<div class="col-4 border-left border-success p-lg-5 p-3 text-center">
					
					<div class="container-fluid p-0 m-0">
						<h4 class="pb-2">Calendario de eventos</h4>
						<iframe class="col-sm" src="https://calendar.google.com/calendar/embed?height=320&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=America%2FCaracas&amp;src=bXJvamFzczY5OTZAZ21haWwuY29t&amp;src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;src=ZXMudmUjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&amp;src=Y2xhc3Nyb29tMTEzNDA5MjEyMTk0NTY2OTkzODIyQGdyb3VwLmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%233366CC&amp;color=%235A9A08&amp;color=%231F753C&amp;color=%23161719&amp;showTitle=0&amp;showCalendars=0&amp;showTabs=0&amp;showPrint=0&amp;showDate=1&amp;showNav=1" style="border-width:0" height="320" frameborder="0" scrolling="yes"></iframe>
						
						<iframe src="" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
					</div>

					<h4 class="pb-2">Redes sociales:</h4>

					<div class="container-fluid p-0 m-0">
						<p class="pb-2">Twitter:</p>

						<a class="twitter-timeline" data-lang="es" data-height="480" data-theme="dark" data-link-color="#2B7BB9" href="https://twitter.com/CC_UCV?ref_src=twsrc%5Etfw">Tweets by CC_UCV</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
					</div>

					<div class="container-fluid p-0 m-0">
						<p class="pb-2">Facebook</p>
						<iframe class="col-sm" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FCCUCVOficial%2F&tabs=timeline&width=240&height=480&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=false&appId" width="240" height="480" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
					</div>
				</div>
			</div>
		</div>

		<!--EL FOOTER-->
		<footer class="bg-dark">
			<div class="container-fluid">
				<div class="row">
					<div class="col m-3 text-secondary border-secondary border-right">
						<p>DERECHOS RESERVADOS:</p>
						<p>Coro de conciertos de la U.C.V.</p>
						<p>TinyMCE</p>
						<p>StackOverflow</p>
					</div>
					<div class="col m-3 text-secondary">
						<p>CIUDAD UNIVERSITARIA DE CARACAS</p>
						<p>Complejo Aula Magna, sótanos del aula magna</p>
						<p>Salon del coro de conciertos, bajando la rampa</p>
						<p>Telefonos +58212-xxx-xxxx</p>
						<p>Correo: xxx(at)xxxx.com</p>
					</div>
					<div class="col m-3 pl-5 text-secondary border-secondary border-left">
						<p>Información sobre la U.C.V.</p>
						<p>Enlaces de interés</p>
					</div>
				</div>
			</div>
		</footer>

	</body>

</html>