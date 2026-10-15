<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('styles/home.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <header>
        <div class="cont-logo">
            <p>conecta y aprendeS</p>
        </div>
        <div class="cont-nav">
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Como funciona</a></li>
                <li><a href="#">Iniciar secion</a></li>
            </ul>
            <button type="button"><a href="#">Registrarse</a></button>
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

    </main>
</body>

</html>