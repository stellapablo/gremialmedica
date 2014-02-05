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

                    <h3 style="text-align: center; width: 90%; float: right;" id="textoSuperiorDerecho" contenteditable="true">
                        Gremial Médica Hospitalaria<br>
                        Frace breve  de Bienvenida Hasta ochenta y nueve (89) caracteres
                    </h3>

                </div>
                <nav>
                    <div class="wrap-nav">
                        <div class="menu">
                            <ul>
                                <li class="current"><a href="index.html">Inicio</a></li>
                                <li><a href="index.html">Afiliate</a></li>
                                <li><a href="index.html">Galeria</a></li>
                                <li><a href="index.html">Sobre Nosotros</a></li>
                                <li><a href="index.html">Contacto</a></li>
                            </ul>
                        </div>

                        <div class="minimenu"><div>MENU</div>
                            <select onchange="location = this.value">
                                <option></option>
                                <option value="index.html">Afiliate</option>
                                <option value="index.html">Galeria</option>
                                <option value="index.html">Sobre Nosotros</option>
                                <option value="index.html">Contacto</option>
                            </select>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        <div class="featured">
            <div class="wrap-featured zerogrid">
                <div class="slider">
                    <div class="rslides_container">
                        <ul class="rslides" id="slider">
                            <li><img src= " {{ asset('assets/images/imagenes_carrucel/20140122_093827.jpg') }} " />
                                <p class="captionCarrucel">
                                    Lorem ipsum dolor sit amet, ea unum veri debitis cum. No viris accumsan consulatu per. Ei amet sonet est, assum choro scriptorem id eos. Ad autem adipisci his. Mel et facete concludaturque.
                                    Oblique torquatos adolescens cu est. Vix no antiopam conclusionemque. Cum tamquam debitis mnesarchum ne, ex duo magna errem. Ei sit persius perfecto splendide, pro tamquam debitis et.
                                    
                                </p>
                            </li>
                            <li><img src="{{ asset('assets/images/imagenes_carrucel/20140122_093947.jpg') }}"/></li>
                            <li><img src="{{ asset('assets/images/imagenes_carrucel/20140122_120209.jpg') }}"/></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>