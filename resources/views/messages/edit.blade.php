@extends('layout')

@section('contenido')
    <h1>Editar mensaje</h1>
    <form method="POST" action="{{ route('messages.update', $message->id) }}">
        @csrf <!-- Agregar token CSRF correctamente -->
        {!! method_field('PUT') !!}

        @include('messages.form', [
            'btnText' => 'Actualizar',
        ])
    </form>
@stop
