<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login - Project1</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div class="container-fluid">
            <hr>
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong>Login to Project1</strong>
                        </div>
                        <div class="panel-body">
                            <form action="">
                                <div class="form-group">
                                    <input type="text" name="username" id="username" placeholder="Username" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" placeholder="Enter Password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
