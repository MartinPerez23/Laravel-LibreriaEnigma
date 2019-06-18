@extends("panel.layout")

@section("contenido")
    <div class="container">
        <h1 class="mt-5 mb-3">Listado de libros</h1>
        <div class="row">
            <div class="col">
                <a href="{{ route("libros.create") }}" class="btn btn-dark float-right btn-sm m-3">Nuevo Libro</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Autor</th>
                        <th>Editorial</th>
                        <th>Imagen</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>


                    @foreach ($libros as $libro)

                    <!-- datos en la tabla -->

                    <tr>
                        <td>
                            {{$libro->nombre}}
                        </td>
                        <td>
                            {{$libro->Autor()->first()->nombreCompleto}}
                        </td>
                        <td>
                            {{$libro->Editorial()->first()->nombre}}
                        </td>
                        <td><img src="{{$libro->imagen}}" alt="{{$libro->nombre}}" width="50"></td>

                        <!-- botones para borrar o editar -->

                        <td>
                            <div class="btn-group">
                                <a class="btn btn-success btn-sm"
                                   href="{{ route("libros.edit",$libro->id) }}">Editar</a>
                                <form action="{{ route("libros.destroy",$libro->id) }}" method="post">
                                    @method("DELETE")
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                                </form>
                            </div>
                        </td>

                        <!-- fin botones para borrar o editar -->

                    </tr>

                    @endforeach

                    </tbody>
                </table>

            </div>
        </div>
        <div class="row my-4 justify-content-center">
            <div class="col-auto">
                {{ $libros->links("") }}
            </div>
        </div>
    </div>


@endsection
