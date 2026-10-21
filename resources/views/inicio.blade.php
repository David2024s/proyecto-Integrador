<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>

<style>
    main{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column-reverse;
        width: 100%;
        height: 100vh;        
        }
</style>
<body>
    <main>
        @isset($success)
    <div class="alert alert-success">
       <p>{{ $success }}</p> 
    </div>
@endisset

@isset($usuario)
    <div class="card">
        <h3>Detalles del Usuario:</h3>
        <p>Nombre: {{  $usuario->nombre }}</p>
        <p>Apellido: {{  $usuario->apellido }}</p>
        <p>Fecha de nacimiento: {{  $usuario->fecha_nacimiento }}</p>
        <p>telefono: {{  $usuario->telefono }}</p>
        <p>Correo: {{ $usuario->email }}</p>
        <p>ID: {{ $usuario->id }}</p>
    </div>
@endisset
    </main>
    
</body>
</html>