@extends('adminlayouts.layout')

@section('content')

<h1>Editar Texto Central</h1>
{{ Form::model($centraltexto, array('method' => 'PATCH', 'route' => array('centraltextos.update', $centraltexto->id))) }}
	<ul>
        <li>
            {{ Form::label('texto', 'Texto:') }}
            {{ Form::textarea('texto') }}
        </li>

		<li>
			{{ Form::submit('Actualizar', array('class' => 'btn btn-info')) }}
			{{ link_to_route('centraltextos.show', 'Cancel', $centraltexto->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
