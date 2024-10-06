@extends('layout')
<h1>Contactos</h1>
@section('contenido')

<h2>Escríbeme</h2>
@if( session()->has('info') )
	<h3>{{ session('info') }}</h3>

@else
<form method="POST" action="{{ route('messages.store') }}">
    @csrf

    @include('messages.form', [
        'btnText' => 'Crear mensaje',
    ])
</form>

     @endif
<hr>
@stop
