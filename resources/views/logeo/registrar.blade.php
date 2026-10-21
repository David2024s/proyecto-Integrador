<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('styles/logeo/login.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
</head>

<body>
    <main>
        <div class="contenido">

            <div class="cont-form">
                <span>Conecta Y Aprende</span>
                <h1>Iniciar sesión</h1>
                <form action="{{ route('login.submit') }}" method="POST">
                    @csrf
                    <label for="email">
                        
                        <span class="span-form">
                            Correo:
                        </span>
                         <span class="material-symbols-outlined">
                            person
                        </span>
                    </label>
                    <input type="email" name="email" placeholder="Correo electrónico" required>
                    
                    <label for="password">
                        <span class="span-form">contraseña:</span>
                        <span class="material-symbols-outlined">
                            lock
                        </span>
                       
                        
                    </label>
                        <input type="password" name="password" placeholder="Contraseña" required>
                    <button type="submit">Ingresar</button>
                </form>
                <button class="btn-salir">
                    <a href="">salir</a>

                </button>
                
                <hr>
                <button class="btn-crear-cuenta">
                    <a href="">
                        <span class="material-symbols-outlined">
                            person_add
                        </span>
                        Crear Cuenta
                    </a>
                </button>
            </div>

        </div>

    </main>
</body>

</html>