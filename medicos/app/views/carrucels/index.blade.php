@extends('adminlayouts.layout')

@section('content')

<h1>Listado Imagenes del Carrucel</h1>

<p>{{ link_to_route('carrucels.create', 'Agregar Nueva Imagen') }}</p>

@if ($carrucels->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Imagen</th>
				<th>Texto</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($carrucels as $carrucel)
				<tr>
                                    <td><img src="{{ $carrucel->imagen }}" style="width: 20%; height: 20%;"></td>
					<td>{{{ $carrucel->texto }}}</td>
                    <td>{{ link_to_route('carrucels.edit', 'Editar', array($carrucel->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('carrucels.destroy', $carrucel->id))) }}
                            {{ Form::submit('ELIMINAR', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	No Hay Imagenes Para El Carrucel
@endif

@stop
