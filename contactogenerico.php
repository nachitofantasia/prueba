<section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Envianos tu Consulta</h2>
        <p>Te ofrecemos distintos canales para comunicarte con nosotros.</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

       

        <div class="row gy-4">

            <div class="col-lg-4">
                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                    <i class="bi bi-geo-alt flex-shrink-0"></i>
                    <div>
                        <h3>Villa Luro</h3>
                        <p>Capital Federal</p>
                    </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                    <i class="bi bi-telephone flex-shrink-0"></i>
                    <div>
                        <h3>Contactanos</h3>
                        <p>011 5600-6601</p>
                    </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                    <i class="bi bi-envelope flex-shrink-0"></i>
                    <div>
                        <h3>Email</h3>
                        <p>asesoresdeseguroscontacto@gmail.com</p>
                    </div>
                </div><!-- End Info Item -->

            </div>

            <div class="col-lg-8">
                <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                    data-aos-delay="200">
                    <div class="row gy-4">

                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Nombre y Apellido" required="">
                        </div>

                        <div class="col-md-6 ">
                            <input type="email" class="form-control" name="email" placeholder="Email" required="">
                        </div>

                        <div class="col-md-12">
                            <select name="" id="marca" class="form-control" required="" onchange="desbloquear();">
                                <option value="">Marca</option>
                                <option value="">Chevrolet</option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <select name="" id="modelo" class="form-control" required="" disabled>
                                <option value="">Modelo</option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <select name="" id="ano" class="form-control" required="" disabled>
                                <option value="">Año</option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <input type="text" class="form-control" name="subject" placeholder="Asunto" required="">
                        </div>

                        <div class="col-md-12">
                            <textarea class="form-control" name="message" rows="6" placeholder="Mensaje"
                                required=""></textarea>
                        </div>

                        <div class="col-md-12 text-center">
                            <div class="loading">Cargando</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Su mensaje fue enviado con exito. Muchas gracias!</div>

                            <button type="submit">Enviar Mensaje</button>
                        </div>

                    </div>
                </form>
            </div><!-- End Contact Form -->

        </div>
        <br><br>
        

        <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
            <iframe style="border:0; width: 100%; height: 270px;"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13131.115851168568!2d-58.51239372775518!3d-34.63502566187093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcc9b68fab95b5%3A0xbaf48a44b765c9eb!2sVilla%20Luro%2C%20Cdad.%20Aut%C3%B3noma%20de%20Buenos%20Aires!5e0!3m2!1ses!2sar!4v1736886233118!5m2!1ses!2sar"
                frameborder="0" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div><!-- End Google Maps -->

    </div>

</section><!-- /Contact Section -->