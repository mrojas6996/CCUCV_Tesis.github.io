@extends('DashPpal')

@if (!empty($docs))
	@switch($docs)
		@case('cont')
			@section('cont_InfoDsh_sup')
			<h3>Contabilidad</h3><br>
			@endsection

			@section('cont_InfoDsh_dwn')
			<iframe src="https://docs.google.com/spreadsheets/d/1kukjT4JpLx6mUGQsUfU2ZhFvb27_vl56_eGpoowLoSM/edit?usp=sharing" class="container-fluid flex-row" frameborder="0" height="600"></iframe>
			@endsection
			@break

		@case('asis')
			@section('cont_InfoDsh_sup')
			<h3>Asistencias</h3><br>
			@endsection

			@section('cont_InfoDsh_dwn')
			<iframe src="https://docs.google.com/spreadsheets/d/1kukjT4JpLx6mUGQsUfU2ZhFvb27_vl56_eGpoowLoSM/edit?usp=sharing" class="container-fluid flex-row" frameborder="0" height="600"></iframe>
			@endsection
			@break

		@case('gcal')
			@section('cont_InfoDsh_sup')
			<h3>Calendario de Google</h3><br>
			@endsection

			@section('cont_InfoDsh_dwn')
						<iframe class="container-fluid flex-row" src="https://calendar.google.com/calendar/embed?height=4800&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=America%2FCaracas&amp;src=bXJvamFzczY5OTZAZ21haWwuY29t&amp;src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;src=ZXMudmUjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&amp;src=Y2xhc3Nyb29tMTEzNDA5MjEyMTk0NTY2OTkzODIyQGdyb3VwLmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%233366CC&amp;color=%235A9A08&amp;color=%231F753C&amp;color=%23161719&amp;showTitle=0&amp;showCalendars=0&amp;showTabs=0&amp;showPrint=0&amp;showDate=1&amp;showNav=1" style="border-width:0" width="640" height="480" frameborder="0" scrolling="yes"></iframe>
			@endsection
			@break

		@case('const')
			@section('cont_InfoDsh_sup')
			<h3>Constancias de Ausencia</h3><br>
			@endsection

			@section('cont_InfoDsh_dwn')
			<iframe src="https://drive.google.com/file/d/1TZyiMEM9pIfazTrSC7Nlr5_xDfrTfKAw/preview" class="container-fluid flex-row" frameborder="0" height="600"></iframe>
			@endsection
			@break

		@case('repo')
			@section('cont_InfoDsh_sup')
			<h3>Repositorio digital de partituras</h3><br>
			@endsection

			@section('cont_InfoDsh_dwn')
			<iframe src="https://drive.google.com/embeddedfolderview?id=1H3IJIeoYi6Y07GBfU83gJxWFCV7_P_br#list" class="container-fluid flex-row" frameborder="0" height="600"></iframe>
			@endsection
			@break

		@default
			Default case...
			@php
				var_export($doc);
			@endphp
	@endswitch	
@endif


