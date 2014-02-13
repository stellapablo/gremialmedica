@extends('adminlayouts.layout')

@section('content')
<?php
// Obtenemos y traducimos el nombre del día

date_default_timezone_set("America/Argentina/Buenos_Aires");
$dia=date("l");
if ($dia=="Monday") $dia="Lunes";
if ($dia=="Tuesday") $dia="Martes";
if ($dia=="Wednesday") $dia="Miércoles";
if ($dia=="Thursday") $dia="Jueves";
if ($dia=="Friday") $dia="Viernes";
if ($dia=="Saturday") $dia="Sabado";
if ($dia=="Sunday") $dia="Domingo";

// Obtenemos el número del día
$dia2=date("d");

// Obtenemos y traducimos el nombre del mes
$mes=date("F");
if ($mes=="January") $mes="Enero";
if ($mes=="February") $mes="Febrero";
if ($mes=="March") $mes="Marzo";
if ($mes=="April") $mes="Abril";
if ($mes=="May") $mes="Mayo";
if ($mes=="June") $mes="Junio";
if ($mes=="July") $mes="Julio";
if ($mes=="August") $mes="Agosto";
if ($mes=="September") $mes="Setiembre";
if ($mes=="October") $mes="Octubre";
if ($mes=="November") $mes="Noviembre";
if ($mes=="December") $mes="Diciembre";

// Obtenemos el año
$ano=date("Y");

// Imprimimos la fecha completa
$diaActual = "$dia, $dia2 de $mes del año $ano";
$hora = date('H:i:s');
$diaCompleto = $diaActual.' | '.$hora.' Hs';
?>

<h1>Nueva Noticia</h1>
<div class="panel-body">
    <div class="row">
        <div class="col-lg-12">
            {{ Form::open(array('action' => 'noticiasController@guardarNoticia',
                                'class' =>'form-horizontal'
                        ))
            }}
            </div>        
            <div class="form-group">
                <label>Estado Noticia</label>                
                {{ Form::select('estadoNoticia_id', $estadoNoticia, ' ', array('id' =>'estadoNoticia_id')); }}
            </div>
        
            <div class="form-group">
                <label>URL Noticia</label>
                {{ Form::input('text', 'slug',null,['class'=>'form-control input-mini']) }}
                
            </div>
        
            <div class="form-group">
                <label>Imagen (dirección)</label>
                {{ Form::input('text', 'imagen',null,['class'=>'form-control input-mini','onclick'=>'openKCFinder(this)']) }}
                
            </div>
        
            <div class="form-group">
                <label>Fecha</label>
                {{ Form::input('text', 'fecha',$diaCompleto,['class'=>'form-control input-mini']) }}
                
            </div> 
            <div class="form-group">
                <label>Titulo</label>                
                {{Form::textarea('titulo', null, array(
                    'id'      => 'titulo',
                    'rows'    => 3,
                    'class'=>'form-control'
                ));}}
            </div>
            
            <div class="form-group">
                <label>Descripción</label>                
                {{Form::textarea('descripcion', null, array(
                    'id'      => 'descripcion',
                    'rows'    => 3,
                    'class'=>'form-control'
                ));}}
            </div>

            <div class="form-group">
                <label>Desarrollo</label>                
                {{Form::textarea('desarrollo', null, array(
                    'id'      => 'desarrollo',
                    'rows'    => 30,
                    'class'=>'form-control'
                ));}}
            </div>
            <div>
                {{ Form::submit('Guardar', array('class' => 'btn btn-info')) }}
            </div>
        
        </div>        
    </div>
{{ HTML::script('assets/librerias/ckeditor/jquery-ui-1.9.2.custom/js/jquery-1.8.3.js') }}

        {{ HTML::script('assets/librerias/ckeditor/ckeditor.js') }}
        {{ HTML::script('assets/librerias/ckeditor/adapters/jquery.js') }}
    <script type="text/javascript">
CKEDITOR.config.toolbar = 'Full';

CKEDITOR.config.toolbar_Full =
[
    ['Source','-','Save','NewPage','Preview','-','Templates'],
    ['Cut','Copy','Paste','PasteText','PasteFromWord','-','Print', 'SpellChecker', 'Scayt'],
    ['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
    ['Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField'],
    '/',
    ['Bold','Italic','Underline','Strike','-','Subscript','Superscript'],
    ['NumberedList','BulletedList','-','Outdent','Indent','Blockquote'],
    ['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
    ['Link','Unlink','Anchor'],
    ['Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak'],
    '/',
    ['Styles','Format','Font','FontSize'],
    ['TextColor','BGColor'],
    ['Maximize', 'ShowBlocks','-','About'],
    ['savebtn']
];
        
    CKEDITOR.config.extraPlugins = 'link';
    CKEDITOR.config.filebrowserBrowseUrl = "{{ URL::to('assets/librerias/ckeditor/plugins/kcfinder/browse.php?type=files') }};"
    CKEDITOR.config.filebrowserImageBrowseUrl = "{{ URL::to('assets/librerias/ckeditor/plugins/kcfinder/browse.php?type=images') }};";
    CKEDITOR.config.filebrowserFlashBrowseUrl = "{{ URL::to('assets/librerias/ckeditor/plugins/kcfinder/browse.php?type=flash') }};";
    CKEDITOR.config.filebrowserUploadUrl = "{{ URL::to('assets/librerias/ckeditor/plugins/kcfinder/upload.php?type=files') }};";
    CKEDITOR.config.filebrowserImageUploadUrl = "{{ URL::to('assets/librerias/ckeditor/plugins/kcfinder/upload.php?type=images') }};";
    CKEDITOR.config.filebrowserFlashUploadUrl = "{{ URL::to('assets/librerias/ckeditor/plugins/kcfinder/upload.php?type=flash') }};";

    $(document).ready(function() {
        $('#titulo').ckeditor();
        $('#descripcion').ckeditor();
        $('#desarrollo').ckeditor();
    });
    
</script>

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