@extends('DashPpal')

<html>

<head>
    <title>Mi Primer Blog</title>
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    
</head>

<body>
    @if(Auth::check())
    <section>
        <div >
            <h1>Bienvenidos al area de Administracion, {{Auth::user()->name}} 
            </h1>
            <form name="crearArticulo" method="POST" action="{{URL::route('crear_nuevo_articulo')}}">
                {{ csrf_field() }}
                <p>
                    <input type="text" name="titulo" placeholder="Titulo del articulo" value="" />
                </p>
                <p>
                    <textarea name="contenido" placeholder="Contenido del articulo"></textarea>
                </p>
                <p>
                    <input type="submit" name="submit" />
                </p>
            </form>
        </div>
    </section>
    @else
    <section>
        <div>
            Inscribase
        </div>

    @endif
</body>

</html>