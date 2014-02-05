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
                        <a href={{ action('AfiliadosController@create') }}><i class="fa fa-edit fa-fw"></i> Nuevo</a>
                    </li>
                    <li>
                        <a href="morris.html">Grid</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
<!--            <li>
                <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
            </li>-->
        </ul>
        <!-- /#side-menu -->
    </div>
    <!-- /.sidebar-collapse -->
</nav>