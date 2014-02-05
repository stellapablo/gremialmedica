@extends('adminlayouts.layout')

@section('content')

<h1>Afiliados</h1>

<p>{{ link_to_route('afiliados.create', 'Nuevo afiliado') }}</p>

@if ($afiliados->count())
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">

        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Afilidado </th>
                            <th>Apellido y nombre </th>
                            <th>Fecha nacimiento</th>
                            <th>Dni</th>
                            <th>Localidad</th>
                            <th>Domicilio</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($afiliados as $afiliado)
                        <tr>
                            <td>{{{ $afiliado->afiliado_nro }}}</td>
                            <td>{{{ $afiliado->ayn }}}</td>
                            <td>{{{ $afiliado->fecha_nac }}}</td>
                            <td>{{{ $afiliado->dni }}}</td>
                            <td>{{{ $afiliado->localidad }}}</td>
                            <td>{{{ $afiliado->domicilio }}}</td>
                             <td>{{ link_to_route('afiliados.edit', 'Editar', array($afiliado->id), array('class' => 'btn btn-info btn-xs')) }}</td>
                            <td>
                                    {{ Form::open(array('method' => 'DELETE', 'route' => array('afiliados.destroy', $afiliado->id))) }}
                                {{ Form::submit('Eliminar', array('class' => 'btn btn-danger btn-xs')) }}
                                {{ Form::close() }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
</div>

@else
There are no afiliados
@endif

@stop
