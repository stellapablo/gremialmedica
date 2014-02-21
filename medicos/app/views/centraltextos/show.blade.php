@extends('adminlayouts.layout')

@section('content')

<h1>Texto Central</h1>

<p>{{ link_to_route('centraltextos.index', 'Volver Al Listado De textos Centrales') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Texto</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $centraltexto->texto }}}</td>
                    <td>{{ link_to_route('centraltextos.edit', 'Editar', array($centraltexto->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('centraltextos.destroy', $centraltexto->id))) }}
                            {{ Form::submit('Eliminar', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
