

<!--------------Header--------------->
        <header>
            <div class="wrap-header zerogrid">
                <div id="logo" ><a href="#"  style=" text-align: center;" ><img style=" margin-top: -30px;"  src="{{ asset('assets/images/logo-gmh2.png') }}" /></a></div>
                <div class="social">
                    <!--
                        <ul>
                                <li><a href="#"><img src="./images/social/facebook-icon.png" /></a></li>
                                <li><a href="#"><img src="./images/social/google-icon.png" /></a></li>
                                <li><a href="#"><img src="./images/social/twitter-bird-icon.png" /></a></li>
                                <li><a href="#"><img src="./images/social/rss-icon.png" /></a></li>
                        </ul>
                    --------------->

                    <h3 style="text-align: center; width: 90%; float: right;" id="texto_superior_derecho" contenteditable="true">
                        {{ $portada->texto_superior_derecho  }}
                    </h3>

                </div>
                <nav>
                    <div class="wrap-nav">
                        <div class="menu">
                            <ul>
                                <li class="current">{{link_to('/', 'inicio', $attributes = array(), $secure = null);}}</li>
                                <li><a href="{{ action('AfiliadosController@create') }}">Afiliate</a></li>
                                <li>{{link_to('galeria_seccion', 'Galeria', $attributes = array(), $secure = null);}}</li>
                                <li>{{link_to('sobre_nosotros', 'Sobre Nosotros', $attributes = array(), $secure = null);}}</li>
                                <li>{{link_to('/contacto', 'Contacto', $attributes = array(), $secure = null);}}</li>
                            </ul>
                        </div>

                        <div class="minimenu"><div>MENU</div>
                            <select onchange="location = this.value" >
                                <option onclick="location = this.value" value="{{url('/', $parameters = array(), $secure = null);}}">Inicio</option>
                                <option value="{{ action('AfiliadosController@create') }}">Afiliate</option>
                                <option value="{{url('galeria_seccion', $parameters = array(), $secure = null);}}">Galeria</option>
                                <option value="{{url('sobre_nosotros', $parameters = array(), $secure = null);}}">Sobre Nosotros</option>
                                <option value="{{url('/contacto', $parameters = array(), $secure = null);}}">Contacto</option>
                            </select>
                        </div>
                    </div>
                </nav>
            </div>
        </header>