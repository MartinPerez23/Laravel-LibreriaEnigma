@extends("web.layout")

@section("contenido")

<div class="container-fluid">
    <div class="row">

        @foreach ($libros as $libro)

            @if ($libro->habilitado ==1)

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

            @endif
        @endforeach

    </div>
</div>

@endsection