<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido al sistema de MOVIES</title>
</head>
<body>
        {{-- Contenido del email
        {{ var_dump($msg) }}  --}}
        {{-- $msg[''] --}}
        <h1>
            <p>Nuevo usuario registrado</p>
        </h1>
        <p>
            <strong>Nombre: </strong> {{ $msg['name'] }}
        </p>
        <p>
            <strong>Apellido: </strong> {{ $msg['lastname'] }}
        </p>
        <p>
            <strong>Email: </strong> {{ $msg['email'] }}
        </p>
        <p>
            <strong>Fecha de nacimiento: </strong> {{ $msg['birthdate'] }}
        </p>
</body>
</html>