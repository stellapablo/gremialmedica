@extends('adminlayouts.layout')

@section('content')
<h1>Noticias</h1>

    @if ($noticias->count())            
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <th>Titulo</th>
            <th>Descripcion</th>
            <th>Desarrollo</th>
            <th>Fecha</th>
            <th>Estado</th>
            <th>dirección(URL)</th>
            <th>Imagen</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($noticias as $noticia)    
        <tr>
            <td>{{$noticia->id}}</td>
            <td>{{$noticia->titulo}}</td>
            <td>{{$noticia->descripcion}}</td>
            <td>{{$noticia->desarrollo}}</td>
            <td>{{$noticia->fecha}}</td>            
            <td>
                <?php if($noticia->estadoNoticia_id==1){ ?>
                <div style=" width: 175px;">
                    <input type="radio" name="estadoNoticia_id--{{$noticia->id}}" id="estadoNoticia_id" value="1" checked="checked" > Publicada en la Portada<br>
                    <input type="radio" name="estadoNoticia_id--{{$noticia->id}}" id="estadoNoticia_id" value="2"> Publicada<br>
                    <input type="radio" name="estadoNoticia_id--{{$noticia->id}}" id="estadoNoticia_id" value="3"> No Publicada <br>
                </div>
                <?php }
                 if($noticia->estadoNoticia_id==2){ ?>
                <div style=" width: 175px;">
                    <input type="radio" name="estadoNoticia_id--{{$noticia->id}}" id="estadoNoticia_id" value="1"> Publicada en la Portada<br>
                    <input type="radio" name="estadoNoticia_id--{{$noticia->id}}" id="estadoNoticia_id" value="2" checked="checked" > Publicada<br>
                    <input type="radio" name="estadoNoticia_id--{{$noticia->id}}" id="estadoNoticia_id" value="3"> No Publicada <br>
                </div>
                <?php }
                 if($noticia->estadoNoticia_id==3){ ?>
                <div style=" width: 175px;">
                    <input type="radio" name="estadoNoticia_id--{{$noticia->id}}" id="estadoNoticia_id" value="1"> Publicada en la Portada<br>
                    <input type="radio" name="estadoNoticia_id--{{$noticia->id}}" id="estadoNoticia_id" value="2"> Publicada<br>
                    <input type="radio" name="estadoNoticia_id--{{$noticia->id}}" id="estadoNoticia_id" value="3" checked="checked" > No Publicada <br>
                </div>
                <?php }?>
            </td>
            <td>{{$noticia->slug}}</td>
            <td><img widtd="80px" height="80px" src="{{$noticia->imagen}}" /> </td>
        </tr>
        @endforeach
    </tbody>
</table>

        
    @else
        NO HAY NOTICIAS
    @endif
@stop
