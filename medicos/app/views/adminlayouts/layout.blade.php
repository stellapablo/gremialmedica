<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Administrador Gremial Medica </title>
        <!-- Core CSS - Include with every page -->
        {{ HTML::style('admin/css/bootstrap.min.css') }}
        {{ HTML::style('admin/font-awesome/css/font-awesome.css') }}
        {{ HTML::style('admin/css/plugins/morris/morris-0.4.3.min.css') }}
        {{ HTML::style('admin/css/plugins/timeline/timeline.css') }}
        {{ HTML::style('admin/css/sb-admin.css') }}
    </head>
    <body>
        <div id="wrapper">
            @include('adminlayouts.navbartop')
            @include('adminlayouts.navbarstatic')

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <!--<h1 class="page-header">Afiliados</h1>-->
                    </div>
                </div>
                <!-- /.row -->  
                <div class="row">
                          @yield('content')
                </div>
            </div>

        </div>
        <!-- /#wrapper -->

        <!-- Core Scripts - Include with every page -->
        {{ HTML::script('admin/js/jquery-1.10.2.js') }}
        {{ HTML::script('admin/js/bootstrap.min.js') }}
        {{ HTML::script('admin/js/plugins/metisMenu/jquery.metisMenu.js') }}

        <!-- Page-Level Plugin Scripts - Dashboard -->
        {{ HTML::script('admin/plugins/morris/raphael-2.1.0.min.js') }}
        {{ HTML::script('admin/js/plugins/morris/morris.js') }}
        {{ HTML::script('admin/js/sb-admin.js') }}
        {{ HTML::script('admin/js/demo/dashboard-demo.js') }}
        
        {{ HTML::script('assets/librerias/ckeditor/ckeditor.js') }}
        {{ HTML::script('assets/librerias/ckeditor/adapters/jquery.js') }}

        <!-- Page-Level Demo Scripts - Dashboard - Use for reference -->
    </body>

</html>
