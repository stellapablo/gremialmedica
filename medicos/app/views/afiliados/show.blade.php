@extends('adminlayouts.layout')

@section('content')


<h1>Mostrar Afiliado</h1>

<p>{{ link_to_route('afiliados.index', 'Volver al Listado de Afiliados') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Empleado_nro</th>
				<th>Afiliado_nro</th>
				<th>Ayn</th>
				<th>Fecha_nac</th>
				<th>Dni</th>
				<th>Localidad</th>
				<th>Domicilio</th>
				<th>Nacionalidad</th>
				<th>Estado_civil</th>
				<th>Reparticion</th>
				<th>Ministerio</th>
				<th>Grupo</th>
				<th>Fecha_alta</th>
				<th>Fecha_baja</th>
				<th>Puntaje</th>
				<th>Remuneraciones</th>
				<th>Funciones</th>
				<th>Observaciones</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $afiliado->empleado_nro }}}</td>
					<td>{{{ $afiliado->afiliado_nro }}}</td>
					<td>{{{ $afiliado->ayn }}}</td>
					<td>{{{ $afiliado->fecha_nac }}}</td>
					<td>{{{ $afiliado->dni }}}</td>
					<td>{{{ $afiliado->localidad }}}</td>
					<td>{{{ $afiliado->domicilio }}}</td>
					<td>{{{ $afiliado->nacionalidad }}}</td>
					<td>{{{ $afiliado->estado_civil }}}</td>
					<td>{{{ $afiliado->reparticion }}}</td>
					<td>{{{ $afiliado->ministerio }}}</td>
					<td>{{{ $afiliado->grupo }}}</td>
					<td>{{{ $afiliado->fecha_alta }}}</td>
					<td>{{{ $afiliado->fecha_baja }}}</td>
					<td>{{{ $afiliado->puntaje }}}</td>
					<td>{{{ $afiliado->remuneraciones }}}</td>
					<td>{{{ $afiliado->funciones }}}</td>
					<td>{{{ $afiliado->observaciones }}}</td>
                    <td>{{ link_to_route('afiliados.edit', 'Edit', array($afiliado->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('afiliados.destroy', $afiliado->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
