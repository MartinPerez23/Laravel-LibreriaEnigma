
@extends("panel.layout")

@section("contenido")

<div class="container">
    <div class="row my-5">
        <div class="col-12">
            @if(isset($carousel))
                <h1 class="h3">Editando Carousel</h1>
            @else
                <h1 class="h3">Nuevo Carousel</h1>
            @endif
        </div>
    </div>
    <div class="row justify-content-lg-start">
        <div class="col-auto">
            @if(isset($carousel))
                <form action="{{ route("carousel.update",$carousel->id) }}" method="POST" enctype="multipart/form-data">
                    @method("PUT")
            @else
                <form action="{{ route("carousel.store") }}" method="POST" enctype="multipart/form-data">
            @endif

                @csrf

                        <label class="w-100"><p>Imagen</p></label>

                            <div class="custom-file">
                                <input type="file" name="imagen" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="inputGroupFile01">Elige imagen</label>
                            </div>


                            @isset($carousel)
                                <div class="row mt-4">
                                    <div class="col-auto">
                                        <label class="w-100" ><p>Imagen actual del carousel:</p></label>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12">

                                        <img src="{{ $carousel->imagen }}" alt="{{$carousel->id}}" width="250">
                                    </div>
                                </div>
                            @endisset
                    <div class="form-check form-check-inline mt-4">
                        <input class="form-check-input" type="radio" name="habilitado" id="habilitada" value="1"
                               @if(isset($carousel) && $carousel->habilitado == 1) checked @endif>
                        <label class="form-check-label" for="habilitada">Habilitada</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="habilitado" id="habilitada" value="0"
                               @if(isset($carousel) && $carousel->habilitado == 0) checked @endif>
                        <label class="form-check-label" for="habilitada">Deshabilitada</label>
                    </div>
                    @if(isset($carousel))
                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-primary">Editar Carousel</button>
                        </div>
                    @else
                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-primary">Crear Carousel</button>
                        </div>
                    @endif

                </form>
            </div>
    </div>
</div>
@endsection