@extends('adminlayouts.layout')

@section('content')
<h1>Noticias</h1>

    @if ($noticias->count())   

<table class="table table-striped table-bordered" id="tablaNoticias">
    <thead>
        <tr>
            <th>Id</th>
            <th>Titulo</th>
            <th>Descripcion</th>            
            <th>Fecha</th>
            <th>Estado</th>
            <th>dirección(URL)</th>
            <th>Imagen</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($noticias as $noticia)    
        <tr>
            <td>{{$noticia->id}}</td>
            <td>{{$noticia->titulo}}</td>
            <td>{{$noticia->descripcion}}</td>
            <td>{{$noticia->fecha}}</td>            
            <td>
                <div style=" width: 175px;">
                <?php if($noticia->estadoNoticia_id==1){ ?>
                
                    <input type="radio" name="estadoNoticia_id--{{$noticia->id}}" id="estadoNoticia_id--{{$noticia->id}}" value="1" checked="checked" onchange="actualizarEstadoNoticia(this)"> Publicada en la Portada<br>
                    <input type="radio" name="estadoNoticia_id--{{$noticia->id}}" id="estadoNoticia_id--{{$noticia->id}}" value="2" onchange="actualizarEstadoNoticia(this)" > Publicada<br>
                    <input type="radio" name="estadoNoticia_id--{{$noticia->id}}" id="estadoNoticia_id--{{$noticia->id}}" value="3" onchange="actualizarEstadoNoticia(this)" > No Publicada <br>
                
                <?php }
                 if($noticia->estadoNoticia_id==2){ ?>
                
                    <input type="radio" name="estadoNoticia_id--{{$noticia->id}}" id="estadoNoticia_id--{{$noticia->id}}" value="1" onchange="actualizarEstadoNoticia(this)"> Publicada en la Portada<br>
                    <input type="radio" name="estadoNoticia_id--{{$noticia->id}}" id="estadoNoticia_id--{{$noticia->id}}" value="2" checked="checked"  onchange="actualizarEstadoNoticia(this)"> Publicada<br>
                    <input type="radio" name="estadoNoticia_id--{{$noticia->id}}" id="estadoNoticia_id--{{$noticia->id}}" value="3" onchange="actualizarEstadoNoticia(this)"> No Publicada <br>
                
                <?php }
                 if($noticia->estadoNoticia_id==3){ ?>
                
                    <input type="radio" name="estadoNoticia_id--{{$noticia->id}}" id="estadoNoticia_id--{{$noticia->id}}" value="1" onchange="actualizarEstadoNoticia(this)"> Publicada en la Portada<br>
                    <input type="radio" name="estadoNoticia_id--{{$noticia->id}}" id="estadoNoticia_id--{{$noticia->id}}" value="2" onchange="actualizarEstadoNoticia(this)"> Publicada<br>
                    <input type="radio" name="estadoNoticia_id--{{$noticia->id}}" id="estadoNoticia_id--{{$noticia->id}}" value="3" checked="checked"  onchange="actualizarEstadoNoticia(this)"> No Publicada <br>
                
                <?php }?>
                </div>
            </td>
            
            <td>{{$noticia->slug}}</td>
            <td>
                <?php
                if($noticia->imagen!=''){
                ?>
                <img widtd="80px" height="80px" src="{{$noticia->imagen}}" /> 
                <?php }; ?>
            </td>
            <td><a class="btn btn-info btn-xs" href="{{URL::action('noticiasController@editarNoticiaActual', [$noticia->slug]);}}">Editar</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ HTML::script('assets/librerias/jquery-ui-1.10.4.custom/js/jquery-1.10.2.js') }}
{{ HTML::script('assets/librerias/jquery-ui-1.10.4.custom/js/jquery-ui-1.10.4.custom.js') }}
<script type="text/javascript">
    function actualizarEstadoNoticia(radio){
       //alert(radio.value)
       
       
        $.ajax({
            async:true,
            type: 'POST',
            url: 'actualizarEstadoNoticia',
            data: {id: radio.id,valor:radio.value},
             success: function(data){
                  // restults(data);                   
               }
        });
       
    }
</script>


<script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
        $('#tablaNoticias').dataTable({
            "oLanguage": {
                "sUrl": "{{URL::to('assets/librerias/datatables-1.9.4/es_ES.txt')}}"
            },
        });
    });
</script>
    @else
        NO HAY NOTICIAS
    @endif
@stop
