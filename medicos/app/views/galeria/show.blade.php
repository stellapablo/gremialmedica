@extends('adminlayouts.layout')

@section('content')

<h1>Galeria</h1>

<p>{{ link_to_route('galeria.index', 'Volver a Galeria') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Imagen</th>
                        <th>Descripcion</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td><img src="{{ $galerium->imagen }}" style="width: 20%; height: 20%;"></td>
					<td>{{{ $galerium->descripcion }}}</td>
                    <td>{{ link_to_route('galeria.edit', 'Editar', array($galerium->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('galeria.destroy', $galerium->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
