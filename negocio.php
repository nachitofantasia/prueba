<?php
  include 'common/header.php';
?>

<main class="main">


    <!-- About Section -->
    <section id="about" class="about section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>¿Quiénes Somos?<br></h2>
            <p>Bienvenidos a [Nombre de la Empresa], tu socio estratégico en seguros con más de 15 años de trayectoria.
                Somos un equipo de productores asesores de seguros con amplia experiencia y una sólida alianza con las
                mejores compañías del mercado. Nuestra especialización abarca una amplia gama de riesgos, adaptándonos a
                las necesidades específicas de cada sector y actividad.
                Nuestra misión es ser el aliado que necesitas para potenciar tu crecimiento y proteger lo que más
                valoras. Ofrecemos un asesoramiento experto y personalizado, diseñado para adaptarse a las
                particularidades de tu negocio, permitiéndote enfocarte en tus proyectos sin preocuparte por los
                imprevistos.
                En [Nombre de la Empresa], nos destacamos por nuestra experiencia, integridad y compromiso con la
                excelencia. Trabajamos junto a vos para encontrar las soluciones de seguros más adecuadas y ayudarte a
                alcanzar tus objetivos con la máxima seguridad y tranquilidad.
                Estamos aquí para construir contigo un futuro sólido y exitoso. ¡Conéctate con nosotros y descubre cómo
                nuestra experiencia y conocimiento pueden ser el impulso que tu emprendimiento necesita!</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">
                <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
                    <img src="img/cyrcotiza.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore
                        magna aliqua.
                    </p>
                    <ul>
                        <li><i class="bi bi-check2-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo
                                consequat.</span></li>
                        <li><i class="bi bi-check2-circle"></i> <span>Duis aute irure dolor in reprehenderit in
                                voluptate velit.</span></li>
                        <li><i class="bi bi-check2-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea
                                commodo</span></li>
                    </ul>
                    <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                </div>

            </div>

        </div>

    </section><!-- /About Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Contacto</h2>
            <p>Te ofrecemos distintos canales para comunicarte con nosotros.</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
                <iframe style="border:0; width: 100%; height: 270px;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13131.115851168568!2d-58.51239372775518!3d-34.63502566187093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcc9b68fab95b5%3A0xbaf48a44b765c9eb!2sVilla%20Luro%2C%20Cdad.%20Aut%C3%B3noma%20de%20Buenos%20Aires!5e0!3m2!1ses!2sar!4v1736886233118!5m2!1ses!2sar"
                    frameborder="0" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div><!-- End Google Maps -->

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
                                <input type="text" name="name" class="form-control" placeholder="Nombre" required="">
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Email" required="">
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

        </div>

    </section><!-- /Contact Section -->

</main>

<?php
  include 'common/footer.php';
?>