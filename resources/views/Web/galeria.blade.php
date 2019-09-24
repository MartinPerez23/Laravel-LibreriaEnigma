@extends("web.layout")

@section("contenido")

<!-- Carousel 3D -->

<section>
    <div id="drag-container">
        <div id="spin-container">
            <!-- Add your images (or video) here -->
            @for($i = 0; $i < 8; $i++)
                <a class="fancy_box" rel="carousel_3D" href="{{$libros[$i]->imagen}}">
                    <img class="d-block w-100" src="{{$libros[$i]->imagen}}" alt="{{$libros[$i]->id}}">
                </a>
            @endfor


        <!-- Example image with link -->
            <!--<a target="_blank" href="https://images.pexels.com/photos/139829/pexels-photo-139829.jpeg">
                <img src="https://images.pexels.com/photos/139829/pexels-photo-139829.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
            </a> -->

            <!-- Example add video  -->
            <!-- <video controls autoplay="autoplay" loop>
                <source src="https://player.vimeo.com/external/322244668.sd.mp4?s=338c48ac2dfcb1d4c0689968b5baf94eee6ca0c1&profile_id=165&oauth2_token_id=57447761" type="video/mp4">
            </video> -->

            <!-- Text at center of ground -->
            <p>Ultimos libros añadidos</p>
        </div>
        <div id="ground"></div>
    </div>

    <div id="music-container"></div>
</section>

<!-- Fin Carousel 3D -->

<div class="container-fluid">
    <div class="row">

        @foreach ($libros as $libro)

                <div class="col-12 col-md-3 my-3">
                    <div class="card-deck">
                        <div class="card border-default colortarjetas">
                            <div class="card-body">
                                <a  class="fancy_box" rel="grupo" href=" {{$libro->imagen}}"><img src="{{ $libro->imagen}}" alt=" {{$libro->nombre}}" class="img-fluid"></a>
                                <h4 class="card-title">
                                    {{ $libro->nombre}}
                                </h4>
                                <p class=" text-muted autores">
                                    De: {{ $libro->Autor()->first()->nombreCompleto}}
                                </p>

                                <p class="parrafos">Editorial:
                                    {{$libro->Editorial()->first()->nombre}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

        @endforeach

    </div>
</div>



@endsection
