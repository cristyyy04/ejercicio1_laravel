<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      .active {
            text-decoration: underline;
          color: red;
            background-color: black;
        }
    </style>
</head>
<body>
    <h1>Home</h1>
    <h1>{{ activeMenu('/') ? 'Esta en el home' : 'NO esta en el home' }}</h1>

    <header>
        <nav>
            <a class="{{ activeMenu('/') }}" href="{{ route('home') }}">Inicio</a>
            <a class="{{ activeMenu('saludos/*')  }}" href="{{ route('saludos', 'Jorge') }}">Saludos</a>
            <a class="{{ activeMenu('contactos') }}" href="{{ route('contactos') }}">Contacto</a>
        </nav>
    </header>
</body>
</html>
