@extends('adminlayouts.layout')

@section('content')

<h1>Texto Central</h1>

{{ Form::open(array('route' => 'centraltextos.store')) }}
	<ul>
        <li>
            {{ Form::label('texto', 'Texto:') }}
            {{ Form::textarea('texto') }}
        </li>

		<li>
			{{ Form::submit('Guardar', array('class' => 'btn btn-info')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop


