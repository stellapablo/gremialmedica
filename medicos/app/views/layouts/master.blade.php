<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
    <head>

        <!-- Basic Page Needs
      ================================================== -->
        <meta charset="utf-8">
        <title>Gremial Médica Hospitalaria</title>
        <meta name="description" content="Free Html5 Templates and Free Responsive Themes Designed by Kimmy | zerotheme.com">
        <meta name="author" content="www.zerotheme.com">
        <link rel="icon" href="{{ URL::to('assets/images/logo-gmh2.png') }}" rel='icon' type='image/x-icon'/>


        <!-- CSS
      ================================================== -->
        <style type="text/css">
            .captionCarrucel {
                display: block;
                position: absolute;
                z-index: 2;
                font-size: 20px;
                text-shadow: none;
                color: #fff;
                background: #000;
                background: rgba(0,0,0, .8);
                left: 0;
                right: 0;
                bottom: 0;
                padding: 10px 20px;
                margin: 0;
                max-width: none;
            }
        </style>

        
        {{ HTML::style('assets/css/zerogrid.css'); }}
        {{ HTML::style('assets/css/style.css'); }}
        {{ HTML::style('assets/css/responsive.css'); }}
        {{ HTML::style('assets/css/responsiveslides.css'); }}

       
        



        
         {{ HTML::script('assets/librerias/ckeditor/jquery-ui-1.9.2.custom/js/jquery-1.8.3.js') }}
         {{ HTML::script('assets/js/responsiveslides.js') }}
           <script type="text/javascript">
            $(function() {
                $("#slider").responsiveSlides({
                    auto: true,
                    pager: false,
                    nav: true,
                    speed: 500,
                    maxwidth: 962,
                    namespace: "centered-btns"
                });
            });
        </script>     
	
        

        
    </head>
    <body>
        @yield('content')

        @include('layouts.footer')
    </body>
</html>