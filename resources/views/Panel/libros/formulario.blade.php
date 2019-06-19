
@extends("panel.layout")

@section("contenido")

<div class="container">
    <div class="row my-5">
        <div class="col-12">
            @if(isset($libro))
                <h1 class="h3">Editando Libro</h1>
            @else
                <h1 class="h3">Nuevo Libro</h1>
            @endif
        </div>
    </div>
    <div class="row justify-content-lg-start">
        <div class="col-auto">
            @if(isset($libro))
                <form action="{{ route("libros.update",$libro->id) }}" method="POST" enctype="multipart/form-data">
                    @method("PUT")
            @else
                <form action="{{ route("libros.store") }}" method="POST" enctype="multipart/form-data">
            @endif

                @csrf

                <div class="form-group">
                    <label for="nombre">Nombre</label>
                        @if(isset($libro))
                            <input type="text" class="form-control" id="nombre" name="nombre"
                                   placeholder="Ingrese el nombre"
                                   value="{{ $libro->nombre }}">
                        @else
                            <input type="text" class="form-control" id="nombre" name="nombre"
                                   placeholder="Ingrese el nombre" value="{{ old("nombre") }}">
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="precio">Autor</label>
                        <select class="form-control w-100" name="id_autor">
                            <option selected>Seleccione el Autor</option>
                            @foreach($autor as $id => $nombre)
                                @if(isset($libro) && $id == $libro->id_autor)
                                    <option value="{{ $id }}" selected>{{ $nombre }}</option>
                                @else
                                    <option value="{{ $id }}">{{ $nombre }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="precio">Editorial</label>
                        <select class="form-control w-100" name="id_editorial">
                            <option selected>Seleccione la Editorial</option>
                            @foreach($editorial as $id => $nombre)
                                @if(isset($libro) && $id == $libro->id_editorial)
                                    <option value="{{ $id }}" selected>{{ $nombre }}</option>
                                @else
                                    <option value="{{ $id }}">{{ $nombre }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="w-100">Imagen</label>

                            <div class="custom-file">
                                <input type="file" name="imagen" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="inputGroupFile01">Elige imagen</label>
                            </div>


                            @isset($libro)
                                <div class="row mt-4">
                                    <div class="col-auto">
                                        <label class="w-100" >Imagen actual del libro:</label>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12">

                                        <img src="{{ $libro->imagen }}" alt="{{$libro->id}}" width="250">
                                    </div>
                                </div>
                            @endisset
                    </div>
                    <div class="form-check form-check-inline mt-4">
                        <input class="form-check-input" type="radio" name="habilitado" id="habilitada" value="1"
                               @if(isset($libro) && $libro->habilitado == "Si") checked @endif>
                        <label class="form-check-label" for="habilitada">Habilitada</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="habilitado" id="habilitada" value="0"
                               @if(isset($libro) && $libro->habilitado == "No") checked @endif>
                        <label class="form-check-label" for="habilitada">Deshabilitada</label>
                    </div>
                    @if(isset($libro))
                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-primary">Editar Libro</button>
                        </div>
                    @else
                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-primary">Crear Libro</button>
                        </div>
                    @endif

                </form>
            </div>
    </div>
</div>
@endsection