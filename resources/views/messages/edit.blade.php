@extends('layout')

@section('contenido')
	<h1>Editar mensaje</h1>
	<form method="POST" action="{{ route('messages.update', $message->id) }}">
		{!! method_field('PUT') !!}
		@include('messages.form', [
			'btnText' => 'Actualizar',
      		'showFields' => ! $message->mensaje,

		])
	</form>
@stop
