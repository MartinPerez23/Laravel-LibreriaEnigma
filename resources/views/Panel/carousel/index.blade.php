@extends("panel.layout")

@section("contenido")

    <div class="container">
        <h1 class="mt-5 mb-3">Listado del carrousel en home </h1>

        <div class="row">
            <div class="col">
                <a href="{{ route("carousel.create") }}" class="btn btn-dark float-right btn-sm m-3">Nuevo Carousel</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Imagen</th>
                        <th>Habilitada</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>

                    @forelse ($carousel as $img)

                    <!-- datos en la tabla -->

                    <tr>
                        <td><img src="{{$img->imagen}}" alt="{{$img->id}}" width="250"></td>
                        <td><p @if ($img->habilitado == 1) class="text-success" @else class="text-danger" @endif>
                                {{$img->getHabilitadoAttribute()}}</p></td>
                        <!-- botones para borrar o editar -->
                        <td>
                            <div class="btn-group">
                            <a class="btn btn-success btn-sm"
                               href="{{ route("carousel.edit",$img->id) }}">Editar</a>
                            <form action="{{ route("carousel.destroy",$img->id) }}" method="post">
                                @method("DELETE")
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                            </form>
                            </div>
                        </td>

                        <!-- fin botones para borrar o editar -->

                    </tr>
                    <!-- fin datos en la tabla -->
                    @empty

                        <tr>
                            <td colspan="6" class="text-center text-danger">No hay carousels cargados</td>
                        </tr>
                    @endforelse

                    </tbody>
                </table>

            </div>
        </div>
        <div class="row my-4 justify-content-center">
            <div class="col-auto">
                {{ $carousel->links("") }}
            </div>
        </div>
    </div>

@endsection
