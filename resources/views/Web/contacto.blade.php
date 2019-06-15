@extends("web.layout")


@section("contenido")



<!-- ##### Breadcumb Area Start ##### -->
<section class="breadcumb-area bg-img d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/bg-8.jpg);">
</section>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Contact Area Start ##### -->
<section class="contact-information-area mt-5">
    <div class="container">
        <div class="row">

            <!-- Single Contact Information -->
            <div class="col-12 col-lg-6">
                <div class="single-contact-information mb-100">
                    <div class="section-text">
                        <h3>Contactanos</h3>
                        <p>Puede contactarnos directamente o puede enviarnosla en este formulario, donde nuestro personal le responderá lo antes posible.</p>
                    </div>
                    <!-- Single Contact Information -->
                    <div class="contact-content d-flex">
                        <p>Dirección</p>
                        <p>Av. Corrientes 2037 - Buenos Aires</p>
                    </div>
                    <!-- Single Contact Information -->
                    <div class="contact-content d-flex">
                        <p>Tel</p>
                        <p>+54 11 5032 0076</p>
                    </div>
                    <!-- Single Contact Information -->
                    <div class="contact-content d-flex">
                        <p>E-mail</p>
                        <p>contacto@davinci.com.ar</p>
                    </div>
                </div>
            </div>

            <!-- Single Contact Information -->
            <div class="col-12 col-lg-6">
                <section class="contact-form-area mb-100">
                    <div class="container">

                        <div class="row">
                            <div class="col-12">
                                <!-- Contact Form -->
                                <form action="#" method="post">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="nombre" placeholder="Ingrese su nombre">
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="email" class="form-control" name="email" placeholder="Ingrese su email">
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="asunto" placeholder="Asunto">
                                        </div>
                                        <div class="col-12">
                                            <textarea name="mensaje" class="form-control" id="message" cols="30" rows="10" placeholder="Mensaje"></textarea>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn palatin-btn mt-50">Enviar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </div>
    </div>
</section>
<!-- ##### Contact Area End ##### -->

<!-- ##### Google Maps ##### -->
<div class="map-area mb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.9923481442092!2d-58.396008699999996!3d-34.604355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccaea670d4e67%3A0x2198c954311ad6d9!2sEscuela+de+Arte+Multimedial+da+Vinci!5e0!3m2!1ses!2sar!4v1549203396703" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>




@endsection