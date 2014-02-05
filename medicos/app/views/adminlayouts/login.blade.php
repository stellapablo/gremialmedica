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
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                        </div>
                        <div class="panel-body">
                            {{ Form::open(array('url' => 'login', 'method' => 'POST')); }}

                            @if(Session::get('msg'))
                            <div class="alert alert-error">
                                <p>{{ Session::get('msg') }}</p>
                            </div>
                            @endif
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button class="btn btn-lg btn-success btn-block">Login</button>
                            </fieldset>
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>