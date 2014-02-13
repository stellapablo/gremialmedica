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
            @if ($noticias->count())
            
            @foreach ($noticias as $noticia)
            
            <div class="col-1-4">
                
                <div class="wrap-col">
                    <a href="noticia/{{$noticia->slug}}">
                        <img src="{{$noticia->imagen}}" />
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

        
        
        
        
        

@stop