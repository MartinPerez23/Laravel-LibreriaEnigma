<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>LibreriaEnigma</title>

    <base href="{{ asset("public") }}">
    @include("web.partials.css")
    @yield("css")


</head>


<body>

@php
    $navbar = [
        "Home" => "web.index",
        "Formulario" => "web.formulario",
        "Galeria" => "web.galeria"
    ];

@endphp

@include("web.partials.header",["secciones" => $navbar])

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

@include("web.partials.footer")

@include("web.partials.js")

@yield("js")

</body>

</html>