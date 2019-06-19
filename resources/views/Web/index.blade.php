@extends("web.layout")

@section("contenido")

    <div id="carouselIndicators" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">

            <!-- foreach para que recorra el array de fotos-->

            @foreach($carousel as $ca)
                @if($ca->habilitado == "Si")
                    <li data-target="#carouselIndicators" data-slide-to="{{$ca->id}}" class="bordeamarillo @if($ca == array_first($carousel)) {{'active'}} @endif "></li>
                @endif
            @endforeach


        </ol>
        <div class="carousel-inner">

            <!-- otro foreach para que recorra el array de fotos-->
            @foreach($carousel as $ca)
                @if($ca->habilitado == "Si")
                    <div class="carousel-item @if($ca == array_first($carousel))  {{'active'}} @endif">
                        <img class="d-block w-100" src="{{$ca->imagen}}" alt="{{$ca->id}}">
                    </div>
                @endif
            @endforeach

        </div>
        <a class="carousel-control-prev bg-warning" href="#carouselIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only bg-warning">Previous</span>
        </a>
        <a class="carousel-control-next bg-warning" href="#carouselIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Fin de carousel -->

    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h1 class="center-block">Libreria enigma</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h3>Bienvenido</h3>

                <p class="parrafos">Hola, queriamos agradecer tu visita con un descuento del 10% solo por comprar por la pagina oficial de la mejor librería de Argentina.</p>
            </div>
            <div class="col-12 col-md-4">
                <a href="img/1.jpg" class="fancy_box" rel="main"><img src="img/1.jpg" alt="libros" class="img-fluid"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4">
                <a href="img/2.jpg" class="fancy_box" rel="main"><img src="img/2.jpg" alt="libros" class="img-fluid"></a>
            </div>
            <div class="col-12 col-md-8">
                <h3>Nuestros servicios</h3>
                <p class="parrafos">La librería Enigma se caracterizó - y se caracteriza - por ofrecer un especial surtido de libros importados, gracias a las buenas relaciones mantenidas con proveedores del exterior. Al igual que el apoyo recibido por parte de las empresas editoriales argentinas que permitió satisfacer las demandas de una clientela con diversos intereses. Con el correr del tiempo y la tenacidad en procura de dar a los lectores un servicio de excelencia.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-8">
                <h3>¿Le interesaría saber acerca de sus libros favoritos?</h3>
                <p class="parrafos">La librería tiene un formulario que si lo llena, le mandaremos todo tipo de noticias acerca de su genero literario favorito!!</p>
            </div>
            <div class="col-12 col-md-4">
                <a href="img/3.jpg" class="fancy_box" rel="main"><img src="img/3.jpg" alt="libros" class="img-fluid"></a>
            </div>
        </div>

    </div>
@endsection
