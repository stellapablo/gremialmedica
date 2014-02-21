@extends('layouts.master')




@section('content')
@include('layouts.header')
@include('layouts.carrucel')

<!--------------Content--------------->
<section id="content">
    <div class="wrap-content zerogrid">

        <div class="row block01" id="texto_central" contenteditable="true"> 
            {{ $portada->texto_central  }}
        </div>

        <div class=divider></div>

        <div class="row block02">
        @if ($Centraltexto->count())
        @foreach ($Centraltexto as $Central)
        
            <div class="col-1-3">
                <div class="wrap-col">
<?php
            $myvalue = $Central->texto;
            $array = explode(' ',trim($myvalue));
            //echo $array[0];

            foreach ($array as $key => $value) {

                if($key==0)
                {
                   $primeraLetra = substr($value,0,1);//primera letra
                   $palabra = substr($value,1);

                    echo '<p><a href="#"><h2><span>'.$primeraLetra.'</span>';
                    echo $palabra.'</a></h2>';
                }else{
                echo $value;
                echo " ";
                }

            }
            echo "</p>";
?>
                </div>
            </div>
        @endforeach
        @endif
        </div>

        <div class="row block03">
            <div class="title"><span>Novedades</span></div>
            @if ($noticias->count())
            
            @foreach ($noticias as $noticia)
            
            <div class="col-1-4">
                
                <div class="wrap-col">
                    <a href="{{$noticia->slug}}">
                                <?php
                                        if($noticia->imagen!=''){
                                ?>
                                        <img src="{{$noticia->imagen}}" />
                                <?php }; ?>
                    </a>
                    <h2>
                        <a href="{{$noticia->slug}}">
                            {{$noticia->titulo}}
                        </a>
                    </h2>
                    {{$noticia->descripcion}}
                </div>
                
            </div>
            @endforeach
            @else
                NO HAY NOTICIAS
            @endif
        </div>

        <div class="row block03 gallery">
            <div class="title"><span>Galeria de Fotos</span></div>
            @if ($galeria->count())
            @foreach ($galeria as $galeri)
            <div class="col-1-2">
                <div class="wrap-col">
                    <a href="#"><img src="{{ $galeri->imagen; }}"  class="grayscale"/></a>
                </div>
            </div>
            @endforeach 
            @else
                NO HAY imagenes
            @endif
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