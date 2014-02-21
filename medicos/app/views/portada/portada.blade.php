@extends('layouts.master')




@section('content')
@include('layouts.header')
@include('layouts.carrucel')

<!--------------Content--------------->
<section id="content">
    <div class="wrap-content zerogrid">

        <div class="row block01" id="texto_central" > 
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
                    <a href="noticia/{{$noticia->slug}}">
                                <?php
                                        if($noticia->imagen!=''){
                                ?>
                                        <img src="{{$noticia->imagen}}" />
                                <?php }; ?>
                    </a>
                    <h2>
                        <a href="noticia/{{$noticia->slug}}">
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

        
        
        
        
        

@stop