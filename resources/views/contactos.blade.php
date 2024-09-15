<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactos</title>
</head>
<style>
    .active{
        text-decoration: none;
    color:red;
    background-color:black;
    }
    </style>
<body>
    <?php
    function activarMenu($url){
    return request()->is($url) ? 'active':'';
    }
    ?>
    <h1>Contactos</h1>
    <h1>{{ request()->is('/') ? 'Esta en el home':'NO esta en el home'}}</h1>

    <header>
        <nav>
        <a class="{{ activarMenu('/')}}" href="{{ route('home') }}">Inicio</a>

        <a  class="{{activarMenu('saludos/*')}}" href="{{ route('saludos','Jorge')  }}">saludos</a>
        <a class="{{ request()->is('contactos') ? 'active' : '' }}" href="{{ route('contactos') }}">Contacto</a>
    </nav>
    </header>
    <form action="contacto" method="post">
        <label for="">Nombre
        <input type="text" name="nombre">
      {{$errors->first('nombre')}}</label>
        <label for="">E-mail
        <input type="email" name="mail">
        {{$errors->first('mail')}}</label>
        <label for="">Mensaje
       <textarea name="mensaje" id="" cols="30" rows="10">
       </textarea>{{$errors->first('mensaje')}}</label>
       <input type="submit" value="Enviar">
     </form>

</body>
</html>
