<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>LibreriaEnigma</title>

    <base href="{{ asset("") }}">
    @include("panel.partials.css")
    @yield("css")


</head>


<body>

@php
    $navbar = [
        "Lista Carousel Home" => "carousel.index",
        "Lista Libros" => "libros.index",
        "Lista Usuarios" => "usuarios.index"
    ];

@endphp

@include("panel.partials.header",["secciones" => $navbar])

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


@if (Session::has("ok"))
    <div class="alert alert-success">
        <ul>

            <li>{{ session("ok") }}</li>

        </ul>
    </div>
@endif


{{-- CONTENIDO --}}

@yield("contenido")

@include("panel.partials.footer")

@include("panel.partials.js")

@yield("js")

</body>

</html>