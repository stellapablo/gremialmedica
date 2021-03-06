@extends('layouts.master')




@section('content')
@include('layouts.header')

<!--------------Content--------------->
<section id="content">
    <div class="wrap-content zerogrid">

        <div class="row block01" id="texto_central" contenteditable="true"> 
            {{ $sobre_nosotros->titulo_principal  }}
        </div>

        <div class=divider></div>

        <div class="row block02">
            <div class="col-1-3">
                <div class="wrap-col">
                    <a href="#"><h2><span>P</span>rimero</h2></a>
                    <p>Lorem ipsum dolor slo onsec tueraliquet Morbi nec In Curabitur lreaoreet nisl lorem in pellente.</p>
                </div>
            </div>
            <div class="col-1-3">
                <div class="wrap-col">
                    <a href="#"><h2><span>S</span>egundo</h2></a>
                    <p>Lorem ipsum dolor slo onsec tueraliquet Morbi nec In Curabitur lreaoreet nisl lorem in pellente.</p>
                </div>
            </div>
            <div class="col-1-3">
                <div class="wrap-col">
                    <a href="#"><h2><span>T</span>ercero</h2></a>
                    <p>Lorem ipsum dolor slo onsec tueraliquet Morbi nec In Curabitur lreaoreet nisl lorem in pellente.</p>
                </div>
            </div>
            <div class="col-1-3">
                <div class="wrap-col">
                    <a href="#"><h2><span>C</span>uarto</h2></a>
                    <p>Lorem ipsum dolor slo onsec tueraliquet Morbi nec In Curabitur lreaoreet nisl lorem in pellente.</p>
                </div>
            </div>
            <div class="col-1-3">
                <div class="wrap-col">
                    <a href="#"><h2><span>Q</span>into</h2></a>
                    <p>Lorem ipsum dolor slo onsec tueraliquet Morbi nec In Curabitur lreaoreet nisl lorem in pellente.</p>
                </div>
            </div>
            <div class="col-1-3">
                <div class="wrap-col">
                    <a href="#"><h2><span>S</span>exto</h2></a>
                    <p>Lorem ipsum dolor slo onsec tueraliquet Morbi nec In Curabitur lreaoreet nisl lorem in pellente.</p>
                </div>
            </div>
        </div>

        <div class="row block03">
            <div class="title"><span>Novedades</span></div>

            <div class="col-1-4">
                <div class="wrap-col">
                    <img src="{{ asset('assets/images/imagenes_carrucel/20140122_093947.jpg') }}" />
                    <h2>Noticia 1</h2>
                    <p>Aliquam viverra convallis auctor. Sed accumsan libero quis mi commodo et suscipit enim lacinia. </p>
                </div>
            </div>
            <div class="col-1-4">
                <div class="wrap-col">
                    <img src="{{ asset('assets/images/imagenes_carrucel/20140122_093827.jpg') }}" />
                    <h2>Noticia 2</h2>
                    <p>Aliquam viverra convallis auctor. Sed accumsan libero quis mi commodo et suscipit enim lacinia. </p>
                </div>
            </div>
            <div class="col-1-4">
                <div class="wrap-col">
                    <img src="{{ asset('assets/images/imagenes_carrucel/20140122_120209.jpg') }}" />
                    <h2>Noticia 3</h2>
                    <p>Aliquam viverra convallis auctor. Sed accumsan libero quis mi commodo et suscipit enim lacinia. </p>
                </div>
            </div>
            <div class="col-1-4">
                <div class="wrap-col">
                    <img src="{{ asset('assets/images/imagenes_carrucel/20140122_093947.jpg') }}"  />
                    <h2>Noticia 4</h2>
                    <p>Aliquam viverra convallis auctor. Sed accumsan libero quis mi commodo et suscipit enim lacinia. </p>
                </div>
            </div>
        </div>

        <div class="row block03 gallery">
            <div class="title"><span>Galeria de Fotos</span></div>
            <div class="col-1-2">
                <div class="wrap-col">
                    <a href="#"><img src="{{ asset('assets/images/imagenes_carrucel/20140122_093947.jpg') }}"  class="grayscale"/></a>
                </div>
            </div>
            <div class="col-1-2">
                <div class="wrap-col">
                    <a href="#"><img src="{{ asset('assets/images/imagenes_carrucel/20140122_093827.jpg') }}" class="grayscale"/></a>
                </div>
            </div>
            <div class="col-1-2">
                <div class="wrap-col">
                    <a href="#"><img src="{{ asset('assets/images/imagenes_carrucel/20140122_120209.jpg') }}" class="grayscale"/></a>
                </div>
            </div>
            <div class="col-1-2">
                <div class="wrap-col">
                    <a href="#"><img src="{{ asset('assets/images/imagenes_carrucel/20140122_093947.jpg') }}" class="grayscale"/></a>
                </div>
            </div>
            <div class="col-1-2">
                <div class="wrap-col">
                    <a href="#"><img src="{{ asset('assets/images/imagenes_carrucel/20140122_093827.jpg') }}" class="grayscale"/></a>
                </div>
            </div>
        </div>

    </div>
</section>

        
        
        
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
        
    CKEDITOR.config.extraPlugins = 'link,savebtn';
    CKEDITOR.config.filebrowserBrowseUrl = "{{ URL::to('assets/librerias/ckeditor/plugins/kcfinder/browse.php?type=files') }};"
    CKEDITOR.config.filebrowserImageBrowseUrl = "{{ URL::to('assets/librerias/ckeditor/plugins/kcfinder/browse.php?type=images') }};";
    CKEDITOR.config.filebrowserFlashBrowseUrl = "{{ URL::to('assets/librerias/ckeditor/plugins/kcfinder/browse.php?type=flash') }};";
    CKEDITOR.config.filebrowserUploadUrl = "{{ URL::to('assets/librerias/ckeditor/plugins/kcfinder/upload.php?type=files') }};";
    CKEDITOR.config.filebrowserImageUploadUrl = "{{ URL::to('assets/librerias/ckeditor/plugins/kcfinder/upload.php?type=images') }};";
    CKEDITOR.config.filebrowserFlashUploadUrl = "{{ URL::to('assets/librerias/ckeditor/plugins/kcfinder/upload.php?type=flash') }};";

    $(document).ready(function() {
        $('#texto_superior_derecho').ckeditor();
        $('#texto_superior_derecho').ckeditor().on('getData.ckeditor', function(event, editor, data) {
            CKEDITOR.config.saveSubmitURL = 'actualizarPortada';
        });
        
        $('#texto_central').ckeditor();
        $('#texto_central').ckeditor().on('getData.ckeditor', function(event, editor, data) {
            CKEDITOR.config.saveSubmitURL = 'actualizarPortada';
        });
        
        $('#footer_titulo_primero').ckeditor();
        $('#footer_titulo_primero').ckeditor().on('getData.ckeditor', function(event, editor, data) {
            CKEDITOR.config.saveSubmitURL = 'actualizarPortada';
        });
        
        $('#footer_titulo_segundo').ckeditor();
        $('#footer_titulo_segundo').ckeditor().on('getData.ckeditor', function(event, editor, data) {
            CKEDITOR.config.saveSubmitURL = 'actualizarPortada';
        });
        
        $('#footer_titulo_tercero').ckeditor();
        $('#footer_titulo_tercero').ckeditor().on('getData.ckeditor', function(event, editor, data) {
            CKEDITOR.config.saveSubmitURL = 'actualizarPortada';
        });
        
        $('#footer_titulo_primero_descripcion').ckeditor();
        $('#footer_titulo_primero_descripcion').ckeditor().on('getData.ckeditor', function(event, editor, data) {
            CKEDITOR.config.saveSubmitURL = 'actualizarPortada';
        });
        
        $('#footer_titulo_segundo_descripcion').ckeditor();
        $('#footer_titulo_segundo_descripcion').ckeditor().on('getData.ckeditor', function(event, editor, data) {
            CKEDITOR.config.saveSubmitURL = 'actualizarPortada';
        });
        
        $('#footer_titulo_tercero_descripcion').ckeditor();
        $('#footer_titulo_tercero_descripcion').ckeditor().on('getData.ckeditor', function(event, editor, data) {
            CKEDITOR.config.saveSubmitURL = 'actualizarPortada';
        });
    });
    
</script>
@stop