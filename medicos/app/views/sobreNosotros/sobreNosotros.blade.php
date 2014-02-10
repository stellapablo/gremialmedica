@extends('layouts.master')
@include('layouts.header')
@section('content')

<section id="content">
    <div class="wrap-content zerogrid">
        <div class="row block05">
            <div class="title">
            
                    {{ $sobreNosotros->titulo_principal  }} 
            
            </div>
            <div class="col-2-3">
                <div class="wrap-col">
                    <article>
                        {{ $sobreNosotros->subtitulo_principal  }}
                        <div class="info">{{ $sobreNosotros->subtitulo_principal_descripcion  }}</div>
                        {{ $sobreNosotros->contenido  }}
                    </article>

                </div>
            </div>
            <div class="col-1-3">
                <div class="wrap-col">
                    <div class="box">
                        <div class="heading">{{ $sobreNosotros->titulo_derecha_primero  }}</div>
                        <div class="content">
                            {{ $sobreNosotros->titulo_derecha_descripcion_primero  }}
                        </div>
                    </div>
                    <div class="box">
                        <div class="heading">{{ $sobreNosotros->titulo_derecha_segundo  }}</div>
                        <div class="content">
                            <div class="list">
                                {{ $sobreNosotros->titulo_derecha_descripcion_segundo  }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop