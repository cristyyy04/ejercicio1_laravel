@extends('layout')
<h1>Contactos</h1>
@section('contenido')

<h2>Escríbeme</h2>
@if( session()->has('info') )
	<h3>{{ session('info') }}</h3>
@else
<form method="POST" action="{{ route('messages.store') }}">
    @csrf
    <p>
        <label for="nombre">Nombre
            <input type="text" name="nombre" value="{{ old('nombre') }}">
            <span class="error">{!! $errors->first('nombre', ':message') !!}</span>
        </label>
    </p>
    <p>
        <label for="mail">E-mail
            <input type="email" name="mail" value="{{ old('mail') }}">
            {!! $errors->first('mail', '<span class="error">:message</span>') !!}
        </label>
    </p>
    <p>
        <label for="mensaje">Mensaje
            <textarea name="mensaje" cols="30" rows="10">{{ old('mensaje') }}</textarea>
            {!! $errors->first('mensaje', '<span class="error">:message</span>') !!}
        </label>
    </p>
    <input type="submit" value="Enviar">
</form>

     @endif
<hr>
@stop
