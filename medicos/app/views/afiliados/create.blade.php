@extends('layouts.master')
@include('layouts.header')
@section('content')

<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block05">
			<div class="title"><span>Formulario de Afiliación</span></div>
			<div class="col-2-3">
				<div class="wrap-col">
					<article>
                                            <div class="comment">
<!--inicio-->
{{ Form::open(array('route' => 'afiliados.store')) }}
            <div>                
                {{ Form::input('text', 'empleado_nro',null) }}
                Empleado nro
            </div>

            <div>                
                {{ Form::input('text', 'afiliado_nro',null,['class'=>'form-control input-mini']) }}
                Afiliado nro
            </div>

            <div>
                {{ Form::input('text', 'ayn',null) }}
                Apellido y Nombre
            </div>

            <div>                
                {{ Form::input('text', 'fecha_nac',null) }}
                Fecha nacimiento
            </div>

            <div>
                {{ Form::input('text', 'nacionalidad',null) }}
                Nacionalidad
            </div>

            <div>
                {{ Form::input('text','dni',null) }}
                DNI
            </div>

            <div>
                {{ Form::input('text', 'localidad',null) }}
                Localidad
            </div>

            <div>
                {{ Form::input('text', 'domicilio',null) }}
                Domicilio
            </div>
            
            <div>
                {{ Form::input('text', 'puntaje',null) }}
                Puntaje
            </div>

            <div>                
                {{ Form::input('text', 'estado_civil',null) }}
                Estado civil
            </div>

            <div>                
                {{ Form::input('text', 'ministerio',null) }}
                Ministerio
            </div>

            <div>
                {{ Form::input('text', 'reparticion',null) }}
                Reparticion
            </div>

            <div>
                {{ Form::input('text', 'grupo',null) }}
                Grupo
            </div>

            <div>
                {{ Form::input('text', 'fecha_alta',null) }}
                Fecha alta
            </div>

            <div>
                {{ Form::input('text', 'fecha_baja',null) }}
                Fecha baja
            </div>

            <div>
                {{ Form::input('text', 'remuneraciones',null) }}
                Remuneraciones
            </div>

            <div>
                {{ Form::input('text', 'funciones',null) }}
                Funciones
            </div>

            <div>
                <textarea name="observaciones" class="form-control"></textarea>
                Observaciones
            </div>
            <div>
                {{ Form::submit('Guardar', array('class' => 'btn btn-info')) }}
            </div>
            {{ Form::close() }}
<!--fin-->
                                            </div>
                                        </article>
                                </div>
                        </div>
                        
			<div class="col-1-3">
				<div class="wrap-col">
					<div class="box">
						<div class="heading"><h2>Ofrecemos:</h2></div>
						<div class="content">							
							<p>Lorem ipsum dolor slo onsec tueraliquet Morbi nec In Curabitur lreaoreet nisl lorem in pellente e vidicus pannel impirus sadintas velisurabitur lreaoreet nisl lorem in pellente vidicus pannel</p>
						</div>
					</div>
				</div>
			</div>
                </div>
        </div>
</section>





<!--<h1>Nuevo Afiliado</h1>
<div class="panel-body">
    <div class="row">
        <div class="col-lg-4">
            
        </div>
    </div>
</div>-->
@if ($errors->any())
<ul>
    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
</ul>
@endif

@stop


