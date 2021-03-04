<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="{{ asset('css/general.css') }} ">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body class=" mh-100 mw-100">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <ul class="navbar-nav">

                    @if(Route::is('home'))
                        <li class="nav-item "><a class="nav-link active" href="{{ url('/') }}"> Home </a></li>
                    @else
                        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}"> Home </a></li>
                    @endif

                    @if(Route::is('loginform'))
                        <li class="nav-item"><a class="nav-link active" href="{{ url('/loginform') }}"> Login </a></li>
                    @else
                        <li class="nav-item"><a class="nav-link" href="{{ url('/loginform') }}"> Login </a></li>
                    @endif
                </ul>
            </div>
        </nav>
        @if(isset($msg))
            <div>
                {{ $msg }}
            </div>
        @endif
        <div class="container">
            @yield('behind')
        </div>   
    </body>
</html>