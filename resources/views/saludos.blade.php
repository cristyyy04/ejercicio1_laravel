<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludos</title>
</head>
<style>
    .active{
        text-decoration: none;
    color:red;
    background-color:black;
    }
    </style>
<body>
    <h1>Saludos {{$nombre }}</h1>

    <h1>{{ request()->is('/') ? 'Esta en el home':'NO esta en el home'}}</h1>

    <header>
        <?php
        function activarMenu($url){
        return request()->is($url) ? 'active':'';
        }
        ?>
        <nav>
        <a class="{{ activarMenu('/')}}" href="{{ route('home') }}">Inicio</a>

        <a  class="{{activarMenu('saludos/*')}}" href="{{ route('saludos','Jorge')  }}">salones disponibles</a>
        <a class="{{ request()->is('contactos') ? 'active' : '' }}" href="{{ route('contactos') }}">Contacto</a>
    </nav>
    </header>
    @forelse ($consolas as $consola)
        <li>{{$consola}}</li>
    @empty
        <p>No hay consolas</p>
    @endforelse
</body>
</html>
