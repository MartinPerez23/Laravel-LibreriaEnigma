@extends("web.layout")


@section("contenido")


    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1 class="text-center">Registro</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-6 m-2">

            <!-- Formulario -->

                    <form action="{{ route("user.store") }}" method="POST" >
                        @csrf
                    <div class="form-group">

                        <label for="exampleInputEmail1">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese su nombre">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Apellido</label>
                        <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Ingrese su apellido">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="usuario@gmail.com">
                    </div>

                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input id="password" placeholder="*******" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    </div>

                    <div class="form-group ">
                        <label for="password-confirm">Confirmar Contraseña</label>
                        <input id="password-confirm" placeholder="*******" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="form-group">
                        <label for="comentario">Comentarios</label>
                        <textarea class="form-control" name="comentario" id="comentario" rows="5" placeholder="Ingrese un comentario si lo desea"></textarea>
                    </div>

                    <!-- Checkbox -->

                    <div class="form-group">
                        <label>Genero favorito</label>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="generos[]" id="generos[]" value="Comedia">
                                Comedia
                            </label>
                        </div>

                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="generos[]" id="generos[]" value="Romance">
                                Romance
                            </label>
                        </div>

                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="generos[]" id="generos[]" value="Accion">
                                Acción
                            </label>
                        </div>

                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="generos[]" id="generos[]" value="Terror">
                                Terror
                            </label>
                        </div>


                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="generos[]" id="generos[]" value="Adultos">
                                Adultos(+18)
                            </label>
                        </div>

                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="generos[]" id="generos[]" value="Suspenso">
                                Suspenso
                            </label>
                        </div>

                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="generos[]" id="generos[]" value="Policial">
                                Policial
                            </label>
                        </div>
                    </div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn btn-info btn-block">Registrarse</button>
                </form>
            </div>

        </div>
    </div>


@endsection