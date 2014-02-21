@extends('layouts.master')
@include('layouts.header')
@section('content')

<section id="content">
    <div class="wrap-content zerogrid">
        <div class="row block05">
                <div class="title"><span>NOTICIAS</span></div>
            <div class="col-1">
                <div class="wrap-col">
            @if ($noticias->count())            
                @foreach ($noticias as $noticia)
                {{$noticia->titulo}}
                {{$noticia->fecha}}
                    <article>
                <?php
                if($noticia->imagen!=''){
                ?>
                        <img src="{{$noticia->imagen}}" />
                <?php }; ?>
                       {{$noticia->desarrollo}}
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
@stop