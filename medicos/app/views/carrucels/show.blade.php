@extends('adminlayouts.layout')

@section('content')

<h1>Imagen Carrucel</h1>

<p>{{ link_to_route('carrucels.index', 'Volver Al Listado de Imagenes') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Imagen</th>
				<th>Texto</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td><img src="{{ $carrucel->imagen }}" style="width: 20%; height: 20%;"></td>
					<td>{{{ $carrucel->texto }}}</td>
                    <td>{{ link_to_route('carrucels.edit', 'Editar', array($carrucel->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('carrucels.destroy', $carrucel->id))) }}
                            {{ Form::submit('Eliminar', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
