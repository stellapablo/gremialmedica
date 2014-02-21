@extends('adminlayouts.layout')

@section('content')

<h1>Textos Centrales</h1>

<p>{{ link_to_route('centraltextos.create', 'Nuevo Texto Central') }}</p>

@if ($centraltextos->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Texto</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($centraltextos as $centraltexto)
				<tr>
					<td>{{{ $centraltexto->texto }}}</td>
                    <td>{{ link_to_route('centraltextos.edit', 'Editar', array($centraltexto->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('centraltextos.destroy', $centraltexto->id))) }}
                            {{ Form::submit('Eliminar', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	No Hay Texto
@endif

@stop
