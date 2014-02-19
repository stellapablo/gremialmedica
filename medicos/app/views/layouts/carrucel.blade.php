
            @if ($carrucel->count())
            
            
<div class="featured">
    <div class="wrap-featured zerogrid">
        <div class="slider">
            <div class="rslides_container">
                <ul class="rslides" id="slider">
                    @foreach ($carrucel as $carru)
                    <li>
                        <img src= " {{ $carru->imagen }} " />
                        <p class="captionCarrucel">
                                {{ $carru->texto }}
                        </p>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
            
            @else
                NO HAY IMAGENES
            @endif