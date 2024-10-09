@extends('layout')
<h1>Contactos</h1>
@section('contenido')

<h2>Escríbeme</h2>
@if( session()->has('info') )
	<h3>{{ session('info') }}</h3>

@else
<form method="POST" action="{{ route('usuarios.store') }}">
    @csrf
    @include('users.form', ['user' => new App\Models\User])

</form>

     @endif
<hr>
@stop
