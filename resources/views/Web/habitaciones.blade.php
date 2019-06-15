@extends("web.layout")


@section("contenido")




    <!-- ##### Breadcumb Area Start ##### -->
<section class="breadcumb-area bg-img d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/bg-6.jpg);">

</section>
<!-- ##### Breadcumb Area End ##### -->


<!-- ##### Rooms Area Start ##### -->
<section class="rooms-area section-padding-0-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6">
                <div class="section-heading text-center">
                    <div class="line-"></div>
                    <h2>La mejor opción</h2>
                    <p>
                        Encuentre la habitación que más se adecúe a sus necesidades, todas con aire acondicionado, wifi y <b class="text-danger">netflix</b>.
                    </p>
                </div>
            </div>
        </div>

            {{-- Chequear si tiene valor o no el array que obtengo del controlador --}}
            {{--@foreach($tipoHabitaciones as $tipoHabitacion)--}}
            @forelse($tipoHabitaciones as $tipoHabitacion)


                <div class="row mt-2 pb-3">
                    <div class="col-12">
                        <h3>{{ $tipoHabitacion->nombre }}:</h3>
                    </div>
                </div>


                <div class="row">
                    {{--
                     @forelse -> chequea si la variable que le paso tiene contenido count($var) > 0 hace el foreach...
                     @empty -> Qué queremos mostrar si esa variable está vacia

                     @endforelse
                     --}}
                    @forelse( $tipoHabitacion->habitaciones as $habitacion)

                        <!-- Single Rooms Area -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="single-rooms-area wow fadeInUp" data-wow-delay="100ms">
                                <!-- Thumbnail -->
                                <div class="bg-thumbnail bg-img" style="background-image: url({{ $habitacion->imagen }});"></div>
                                <!-- Price -->
                                <p class="price-from">Por ${{ $habitacion->precio }}/noche</p>
                                <!-- Rooms Text -->
                                <div class="rooms-text">
                                    <div class="line"></div>
                                    <h4>{{ $habitacion->nombre }}</h4>
                                    <p>{{ $habitacion->descripcion }}</p>
                                </div>
                                <!-- Book Room -->

                                    @if($habitacion->disponibilidad)

                                        <a href="#" class="book-room-btn btn palatin-btn">Reservar</a>

                                    @else

                                        <button disabled class="disabled book-room-btn btn btn-danger">¡Ocupada!</button>

                                    @endif


                            </div>
                        </div>
                    @empty
                            <p class="text-danger">No tenemos cargadas habitaciones todavia</p>
                    @endforelse

                </div>

                <hr>
            @empty
                <p class="text-danger">No tenemos cargadas habitaciones todavia</p>
            @endforelse



        <div class="row">
            <div class="col-12">
                <!-- Pagination -->
                <div class="pagination-area wow fadeInUp" data-wow-delay="400ms">
                    <nav>
                        <ul class="pagination">
                            <li class="page-item active"><a class="page-link" href="#">01.</a></li>
                            <li class="page-item"><a class="page-link" href="#">02.</a></li>
                            <li class="page-item"><a class="page-link" href="#">03.</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- ##### Rooms Area End ##### -->



@endsection