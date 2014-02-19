@extends('adminlayouts.layout')

@section('content')
<style type="text/css">
    #imagen{
        width: 500px;
        margin-bottom: 30px;
    }
</style>
<h1>Editar Galeria</h1>
{{ Form::model($galerium, array('method' => 'PATCH', 'route' => array('galeria.update', $galerium->id))) }}
	<ul>
        <li>
            {{ Form::label('imagen', 'Imagen:') }}
            {{ Form::text('imagen',null, ['onclick'=>'openKCFinder(this)']) }}
        </li>

        <li>
            {{ Form::label('descripcion', 'Descripcion:') }}
            {{ Form::text('descripcion') }}
        </li>

		<li>
			{{ Form::submit('Actualizar', array('class' => 'btn btn-info')) }}
			{{ link_to_route('galeria.show', 'Cancelar', $galerium->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
