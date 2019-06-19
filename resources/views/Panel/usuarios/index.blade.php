@extends("panel.layout")

@section("contenido")


    <div class="container">
        <h1 class="mt-5 mb-3">Listado de usuarios</h1>

        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Email</th>
                        <th>Comentario</th>
                        <th>Genero Favorito</th>
                        <th>Habilitado</th>
                        <th>Admin</th>
                    </tr>
                    </thead>
                    <tbody>


                    @foreach ($usuarios as $user)

                    <!-- datos en la tabla -->

                    <tr>
                        <td>
                           {{$user->nombre}}
                        </td>
                        <td>
                            {{$user->apellido}}
                        </td>
                        <td>
                            {{$user->email}}
                        </td>
                        <td>
                            {{$user->comentario}}
                        </td>
                        <td>
                            <ul>
                                @foreach ($user->getGeneroFavoritoAttribute($user->id) as $genero)
                                    <li>{{$genero}}</li>
                                @endforeach
                            </ul>
                        </td>
                        <td>
                            <p @if ($user->habilitado == "Si") class="text-success" @else class="text-danger" @endif>
                                {{$user->getHabilitadoAttribute()}}
                            </p>
                        </td>
                        <td>
                            <p @if ($user->admin == "Si") class="text-success" @else class="text-danger" @endif>
                                {{$user->getAdminAttribute()}}
                            </p>
                        </td>
                    </tr>


                    @endforeach

                    </tbody>
                </table>

            </div>
        </div>
        <div class="row my-4 justify-content-center">
            <div class="col-auto">
                {{ $usuarios->links("") }}
            </div>
        </div>
    </div>

@endsection
