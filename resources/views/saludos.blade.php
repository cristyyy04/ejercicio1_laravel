<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludos</title>
</head>
<body>
    <h1>Saludos {{$nombre }}</h1>

    <header>
        <nav>
        <a href="{{ route('home') }}">Inicio</a>
        <a href="{{ route('saludos','Jorge') }}">Saludos</a>
        <a href="{{ route('contactos') }}">Contactos</a>
    </nav>
    </header>
</body>
</html>
