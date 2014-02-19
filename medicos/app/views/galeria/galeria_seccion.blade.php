@extends('layouts.master')
@include('layouts.header')
@section('content')


@if ($galeria->count())

<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03 gallery">
			<div class="title"><span>GALERIA</span></div>
			@foreach ($galeria as $gal)
			<div class="col-1-4">
				<div class="wrap-col">
					<a href="#"><img src="{{$gal->imagen}}" class="grayscale"/></a>
					<center><h2>{{$gal->descripcion}}</h2></center>
				</div>
			</div>
                        @endforeach
		</div>
	</div>
</section>

            
            @else
                NO HAY IMAGENES
            @endif
@stop