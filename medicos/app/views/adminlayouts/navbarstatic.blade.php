<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="side-menu">
<!--            <li>
                <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>-->
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Afiliados<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ action('AfiliadosController@create') }}"><i class="fa fa-edit fa-fw"></i> Nuevo</a>
                    </li>
                    <li>
                        <a href="morris.html">Grid</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"> Noticias<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('nueva/noticia', $parameters = array(), $secure = null);}}"><i class="fa fa-edit fa-fw"></i> Nueva Noticia</a>
                    </li>
                    <li>
                        <a href="{{url('/listado/noticias', $parameters = array(), $secure = null);}}"><i class="fa fa-edit fa-fw"></i>Listado Notica</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"> Carrucel<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ action('CarrucelsController@index') }}"><i class="fa fa-edit fa-fw"></i> Listado</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"> Galeria<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ action('GaleriaController@index') }}"><i class="fa fa-edit fa-fw"></i> Listado Imagenes</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{url('edicion/sobre_nosotros', $parameters = array(), $secure = null);}}">Sobre Nosotros (Edición)<span class="fa arrow"></span></a>
            </li>
            <li>
                <a href="{{url('edicion/portada/', $parameters = array(), $secure = null);}}">Portada (Edición)<span class="fa arrow"></span></a>
            </li>
<!--            <li>
                <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
            </li>-->
        </ul>
        <!-- /#side-menu -->
    </div>
    <!-- /.sidebar-collapse -->
</nav>