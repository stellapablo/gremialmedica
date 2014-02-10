@extends('layouts.master')
@include('layouts.header')
@section('content')

<section id="content">
    <div class="wrap-content zerogrid">
        <div class="row block05">
            <div class="title" id="titulo_principal" contenteditable="true" >{{ $sobreNosotros->titulo_principal  }}</div>
            <div class="col-2-3">
                <div class="wrap-col">
                    <article>
                        <div id="subtitulo_principal" contenteditable="true">
                            {{ $sobreNosotros->subtitulo_principal  }}
                        </div>
                        <div class="info" id="subtitulo_principal_descripcion" contenteditable="true">
                            {{ $sobreNosotros->subtitulo_principal_descripcion  }}
                        </div>
                        <div id="contenido" contenteditable="true">
                            {{ $sobreNosotros->contenido  }}
                        </div>
                    </article>

                </div>
            </div>
            <div class="col-1-3">
                <div class="wrap-col">
                    <div class="box">
                        <div class="heading" id="titulo_derecha_primero" contenteditable="true">
                            {{ $sobreNosotros->titulo_derecha_primero  }}
                        </div>
                        <div class="content" id="titulo_derecha_descripcion_primero" contenteditable="true">
                            {{ $sobreNosotros->titulo_derecha_descripcion_primero  }}
                        </div>
                    </div>
                    <div class="box">
                        <div class="heading" id="titulo_derecha_segundo" contenteditable="true">
                            {{ $sobreNosotros->titulo_derecha_segundo  }}
                        </div>
                        <div class="content">
                            <div class="list" id="titulo_derecha_descripcion_segundo" contenteditable="true">
                                {{ $sobreNosotros->titulo_derecha_descripcion_segundo  }}
                            </div>
                        </div>
                    </div>
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
        $('#titulo_principal').ckeditor();
        $('#titulo_principal').ckeditor().on('getData.ckeditor', function(event, editor, data) {
            CKEDITOR.config.saveSubmitURL = 'actualizarsobre_nosotros';
        });
        
        $('#subtitulo_principal').ckeditor();
        $('#subtitulo_principal').ckeditor().on('getData.ckeditor', function(event, editor, data) {
            CKEDITOR.config.saveSubmitURL = 'actualizarsobre_nosotros';
        });
        
        $('#subtitulo_principal_descripcion').ckeditor();
        $('#subtitulo_principal_descripcion').ckeditor().on('getData.ckeditor', function(event, editor, data) {
            CKEDITOR.config.saveSubmitURL = 'actualizarsobre_nosotros';
        });
        
        $('#contenido').ckeditor();
        $('#contenido').ckeditor().on('getData.ckeditor', function(event, editor, data) {
            CKEDITOR.config.saveSubmitURL = 'actualizarsobre_nosotros';
        });
        
        $('#titulo_derecha_primero').ckeditor();
        $('#titulo_derecha_primero').ckeditor().on('getData.ckeditor', function(event, editor, data) {
            CKEDITOR.config.saveSubmitURL = 'actualizarsobre_nosotros';
        });
        
        $('#titulo_derecha_descripcion_primero').ckeditor();
        $('#titulo_derecha_descripcion_primero').ckeditor().on('getData.ckeditor', function(event, editor, data) {
            CKEDITOR.config.saveSubmitURL = 'actualizarsobre_nosotros';
        });
        
        $('#titulo_derecha_segundo').ckeditor();
        $('#titulo_derecha_segundo').ckeditor().on('getData.ckeditor', function(event, editor, data) {
            CKEDITOR.config.saveSubmitURL = 'actualizarsobre_nosotros';
        });
        
        $('#titulo_derecha_descripcion_segundo').ckeditor();
        $('#titulo_derecha_descripcion_segundo').ckeditor().on('getData.ckeditor', function(event, editor, data) {
            CKEDITOR.config.saveSubmitURL = 'actualizarsobre_nosotros';
        });
    });
    
</script>
@stop