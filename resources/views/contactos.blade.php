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
    .error{
        color: red;
        font-size: 18px;
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
    @if (session()->has('info'))
        {{ session('info')}}


    @else

    <form action="contacto" method="post">
        @csrf
        <p>   <label for="">Nombre
        <input type="text" name="nombre" value="{{old('nombre')}}">
      {!!$errors->first('nombre','<span class=error>:message</span>')!!}</label></p>
      <p> <label for="">E-mail
        <input type="email" name="mail" value="{{old('mail')}}">
        {!!$errors->first('mail','<span class=error>:message</span>')!!}</label></p>
        <p>  <label for="">Mensaje
       <textarea name="mensaje"  cols="30" rows="10">
        {{old('mensaje')}}
       </textarea>{!!$errors->first('mensaje','<span class=error>:message</span>')!!}</label></p>
       <input type="submit" value="Enviar">
     </form>

     @endif
</body>
</html>
