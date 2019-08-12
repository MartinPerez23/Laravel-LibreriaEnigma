<header>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-4 col-md-1 my-6 fondologo">
                <a href="{{route("panel.index")}}"><img src="img/icono.png" alt="logo" class="img-fluid"></a>
            </div>
        </div>
    </div>
</header>

<!-- Comienzo navbar -->

<nav class="navbar colornavbar justify-content-between navbar-expand-lg navbar-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="navbar-nav mr-auto">

            @foreach($navbar as $nombre => $url)

            <li class="nav-item">
                <a class="nav-link" href="{{ route($url) }}">
                    {{ $nombre }}</a>
            </li>
            @endforeach


            <li><a href="{{ route("web.index") }}" class="btn btn-dark">Volver al Home</a></li>
        </ul>
        <div class="top-right">
            <p>{{Auth::user()->apellido}}, {{Auth::user()->nombre}}</p>
            {{-- boton cerrar sesion --}}
            <a class="btn btn-danger" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                Cerrar Sesión
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

        </div>
    </div>
</nav>
