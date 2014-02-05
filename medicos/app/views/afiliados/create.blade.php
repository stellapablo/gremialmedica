@extends('adminlayouts.layout')

@section('content')

<h1>Nuevo Afiliado</h1>
<div class="panel-body">
    <div class="row">
        <div class="col-lg-4">
            {{ Form::open(array('route' => 'afiliados.store','class'=>'form-horizontal')) }}
            <div class="form-group">
                <label>Empleado nro</label>
                {{ Form::input('text', 'empleado_nro',null,['class'=>'form-control']) }}
            </div>

            <div class="form-group">
                <label>Afiliado nro</label>
                {{ Form::input('text', 'afiliado_nro',null,['class'=>'form-control input-mini']) }}
            </div>

            <div class="form-group">
                <label>Apellido y Nombre</label>
                {{ Form::input('text', 'ayn',null,['class'=>'form-control']) }}
            </div>

            <div class="form-group">
                <label>Fecha nacimiento</label>
                {{ Form::input('text', 'fecha_nac',null,['class'=>'form-control']) }}
            </div>

            <div class="form-group">
                <label>Nacionalidad</label>
                {{ Form::input('text', 'nacionalidad',null,['class'=>'form-control']) }}
            </div>

            <div class="form-group">
                <label>DNI</label>
                {{ Form::input('text','dni',null,['class'=>'form-control']) }}
            </div>

            <div class="form-group">
                <label>Localidad</label>
                {{ Form::input('text', 'localidad',null,['class'=>'form-control']) }}
            </div>

            <div class="form-group">
                <label>Domicilio</label>
                {{ Form::input('text', 'domicilio',null,['class'=>'form-control']) }}
            </div>
            
            <div class="form-group">
                <label>Puntaje</label>
                {{ Form::input('text', 'puntaje',null,['class'=>'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::submit('Guardar', array('class' => 'btn btn-info')) }}
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <label>Estado civil</label>
                {{ Form::input('text', 'estado_civil',null,['class'=>'form-control']) }}
            </div>

            <div class="form-group">
                <label>Ministerio</label>
                {{ Form::input('text', 'ministerio',null,['class'=>'form-control']) }}
            </div>

            <div class="form-group">
                <label>Reparticion</label>
                {{ Form::input('text', 'reparticion',null,['class'=>'form-control']) }}
            </div>

            <div class="form-group">
                <label>Grupo</label>
                {{ Form::input('text', 'grupo',null,['class'=>'form-control']) }}
            </div>

            <div class="form-group">
                <label>Fecha alta</label>
                {{ Form::input('text', 'fecha_alta',null,['class'=>'form-control']) }}
            </div>

            <div class="form-group">
                <label>Fecha baja</label>
                {{ Form::input('text', 'fecha_baja',null,['class'=>'form-control']) }}
            </div>

            <div class="form-group">
                <label>Remuneraciones</label>
                {{ Form::input('text', 'remuneraciones',null,['class'=>'form-control']) }}
            </div>

            <div class="form-group">
                <label>Funciones</label>
                {{ Form::input('text', 'funciones',null,['class'=>'form-control']) }}
            </div>

            <div class="form-group">
                <label>Observaciones</label>
                <textarea name="observaciones" class="form-control"></textarea>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
@if ($errors->any())
<ul>
    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
</ul>
@endif

@stop


