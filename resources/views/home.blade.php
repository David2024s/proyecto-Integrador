<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('styles/home.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="cont-logo">
            <p>conecta y aprende</p>
        </div>
        <div class="cont-nav">
            <ul>
                <li><a href="">Inicio</a></li>
                <li><a href="#">Como funciona</a></li>
                <li><a href="{{ route('login') }}">Iniciar sesión</a></li>
            </ul>
            <button type="button"><a href="{{ route('register') }}">Registrarse</a></button>
        </div>
    </header>
    <main>
        <section class="hero-section">
            <div class="hero-titulo">
                <span>Aprender juntos es mejor</span>
                <div class="cont-texto">
                    <h1>Conecta y Aprende</h1>
                    <h2>Una plataforma de apoyo académico entre estudiantes.</h2>
                    <p>Encuentra compañeros que te ayuden en lo que necesitas o
                        comparte lo que sabes. Juntos llegamos más lejos.</p>
                </div>
                <div class="cont-button">
                    <button class="btn-hero">Comenzar</button>
                    <button class="btn-hero btn-hero-2">Registrarse</button>
                </div>
            </div>
            <div class="hero-img">
                <img src="{{ asset('img/hero-img.svg') }}" alt="hero-img">
            </div>
        </section>

        <section class="aprende-section">
            <span>Simple y humano</span>
            <div class="cont-texto">
                <p>Aprende en tres pasos</p>
            </div>
            <div class="cont-tarjetas">
                <div class="tarjeta">
                    <p class="p-num">01</p>
                    <p class="p-titulo">Busca</p>
                    <p>Encuentra tutores por materia, horario y
                        modalidad.</p>
                </div>

                <div class="tarjeta">
                    <p class="p-num">02</p>
                    <p class="p-titulo">Conecta</p>
                    <p>Revisa perfiles y agenda una sesión con
                        confianza.</p>
                </div>

                <div class="tarjeta">
                    <p class="p-num">03</p>
                    <p class="p-titulo">Aprende</p>
                    <p>Resuelve tus dudas y valora la
                        experiencia.</p>
                </div>
            </div>

        </section>

        <section class="beneficio-section">
            <h3>Beneficios de utilizar nuestra plataforma</h3>

            <div class="cont-icon">
                <div class="icon">
                    <div class="img-icon">
                        <img src="img/SVGRepo_iconCarrier.svg" alt="" srcset="">

                    </div>
                    <div class="icon-texto">
                        <p style="font-weight: bold;">Aprendizaje
                            Directo</p>
                        <p>Resuelve tus dudas en
                            tiempo real con tutores
                            que entienden tus
                            desafíos.</p>
                    </div>

                </div>




                <div class="icon">
                    <div class="img-icon">
                        <img src="img/calendar.svg" alt="" srcset="">
                    </div>
                    <div class="icon-texto">
                        <p style="font-weight: bold;">Flexibilidad de
                            Horarios</p>
                        <p>
                            Agenda sesiones en los
                            momentos que mejor se
                            adapten a tu rutina de
                            estudio</p>
                    </div>


                </div>


                <div class="icon">
                    <div class="img-icon">
                        <img src="img/coins.svg" alt="" srcset="">
                    </div>
                    <div class="icon-texto">
                        <p style="font-weight: bold;">Precios
                            Accesibles</p>
                        <p>
                            Encuentra tutores con
                            tarifas transparentes y
                            que se me ajusten a tu
                            presupuesto estudiantil.</p>
                    </div>
                </div>



                <div class="icon">
                    <div class="img-icon">
                        <img src="img/SVGRepo_iconCa.svg" alt="" srcset="">
                    </div>
                    <div class="icon-texto">
                        <p style="font-weight: bold;">Gana Experiencia
                            Enseñando</p>
                        <p>
                            Comparte tu saber,
                            ayuda a otros y
                            fortalece tu propio
                            aprendizaje.</p>
                    </div>
                </div>

            </div>
        </section>

        <section class="preguntas-section">
            <span>¿Qué sigue?</span>
            <h3>¿Listo para empezar?<br>
                Explora y conecta con otros estudiantes</h3>
            <p>Busca apoyo por materia, agenda una sesión o comparte tus conocimientos con otros estudiantes.<br>
                La comunidad está lista para ayudarte.</p>
            <div class="cont-botones-pregunta">
                <button class="boton-pregunta boton-pregunta-1">Explorar tutores</button>
                <button class="boton-pregunta boton-pregunta-2">Ver preguntas frecuentes</button>
            </div>

        </section>

    </main>
    <footer>
        <div class="cont-footer">
            <div class="cont-logo-footer">
                <p>Conecta y Aprende</p>
                <span>Una plataforma de apoyo académico entre
                    estudiantes. Busca ayuda, comparte tus
                    conocimientos y aprende juntos.</span>
            </div>
            <div class="cont-links-footer">
                <div class="links-footer link-plataforma">
                    <p>Plataforma</p>
                    <ul>
                        <li><a href="">Inicio</a></li>
                        <li><a href="">Cómo funciona</a></li>
                        <li><a href="">Trabaja de tutor</a></li>
                    </ul>
                </div>
                <div class="links-footer link-ayuda">
                    <p>Ayuda</p>
                    <ul>
                        <li><a href="">Soporte</a></li>
                        <li><a href="">Contacto</a></li>
                        <li><a href="">Preguntas frecuentes</a></li>
                    </ul>
                </div>

            </div>
        </div>  
       <hr>
        <div class="cont-footer2">
            <p>© 2024 Conecta y Aprende. Todos los derechos reservados.</p>
            <div class="cont-redes">
                <a href="#">Facebook</a>
                <a href="#">Twitter</a>
                <a href="#">Instagram</a>
            </div>
        </div>

    </footer>
</body>

</html>