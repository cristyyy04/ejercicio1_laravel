<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactos</title>
    <style>
        .active {
            text-decoration: underline;
            color: red;
        }
        .error {
            color: red;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <h1>Contactos</h1>
    <h1>{{ request()->is('/') ? 'Esta en el home' : 'NO está en el home' }}</h1>

    <header>
        <nav>
            <a class="{{ activeMenu('/') }}" href="{{ route('home') }}">Inicio</a>
            <a class="{{ activeMenu('saludos/*') }}" href="{{ route('saludos', 'Jorge') }}">Saludos</a>
            <a class="{{ activeMenu('contactos') }}" href="{{ route('contactos') }}">Contacto</a>
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
