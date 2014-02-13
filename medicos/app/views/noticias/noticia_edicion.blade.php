@extends('layouts.master')
@include('layouts.header')
@section('content')

<section id="content">
    <div class="wrap-content zerogrid">
        <div class="row block05">
            <div class="title"><div>NOTICIAS</div></div>
            <div class="col-1">
                <div class="wrap-col">
                    @if ($noticias->count())            
                        @foreach ($noticias as $noticia)
                            <div id="titulo" contenteditable="true"> {{$noticia->titulo}}</div>
                            <div id="fecha" contenteditable="true">{{$noticia->fecha}}</div>
                            <article>
                                <img src="{{$noticia->imagen}}" />

                                <div id="desarrollo" contenteditable="true">{{$noticia->desarrollo}}</div>
                            </article>
                        @endforeach
                    @else
                    NO HAY NOTICIAS
                    @endif
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

    CKEDITOR.config.saveSubmitURL = '{{$slug}}/actualizarNoticia';
    
    $(document).ready(function() {
        $('#titulo').ckeditor();
        $('#titulo').ckeditor().on('getData.ckeditor', function(event, editor, data) {
            //CKEDITOR.config.saveSubmitURL = 'a';
        });
        
        $('#fecha').ckeditor();
        $('#fecha').ckeditor().on('getData.ckeditor', function(event, editor, data) {
            //CKEDITOR.config.saveSubmitURL = 'a';
        });
        
        $('#desarrollo').ckeditor();
        $('#desarrollo').ckeditor().on('getData.ckeditor', function(event, editor, data) {
            //CKEDITOR.config.saveSubmitURL = 'a';
        });
    });
    
</script>
@stop