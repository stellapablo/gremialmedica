@extends('adminlayouts.layout')

@section('content')
<style type="text/css">
    #imagen{
        width: 500px;
        margin-bottom: 30px;
    }
</style>
<h1>Editar imagen del  Carrucel</h1>
{{ Form::model($carrucel, array('method' => 'PATCH', 'route' => array('carrucels.update', $carrucel->id))) }}
	<ul>
        <li>
            {{ Form::label('imagen', 'Imagen:') }}
            {{ Form::text('imagen',null, ['onclick'=>'openKCFinder(this)']) }}
        </li>

        <li>
            {{ Form::label('texto', 'Texto:') }}
            {{ Form::textarea('texto') }}
        </li>

		<li>
			{{ Form::submit('Actualizar', array('class' => 'btn btn-info')) }}
			{{ link_to_route('carrucels.show', 'Cancelar', $carrucel->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif
<script type="text/javascript">

function openKCFinder(field) {
    window.KCFinder = {
        callBack: function(url) {
            field.value = url;
            window.KCFinder = null;
        }
    };
    window.open('{{ URL::to("assets/librerias/ckeditor/plugins/kcfinder/browse.php?type=files") }};' , 'kcfinder_textbox',
        'status=0, toolbar=0, location=0, menubar=0, directories=0, ' +
        'resizable=1, scrollbars=0, width=800, height=600'
    );
}

</script>
@stop
