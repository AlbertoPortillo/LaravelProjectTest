<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="{{ asset('css/general.css') }} ">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <ul class="navbar-nav">            
                    @if(Route::is('home-inside'))
                        <li class="nav-item active"><a class="nav-link" class="active" href="{{ url('/home') }}"> Home </a></li>
                    @else
                        <li class="nav-item"><a class="nav-link"href="{{ url('/home') }}"> Home </a></li>
                    @endif
                    @if(Route::is('crear-paciente'))
                        <li class="nav-item active"><a class="nav-link" class="active" href="{{ url('/create-pacient') }}"> <i class="fa fa-user-plus"></i> </a></li>
                    @else
                        <li class="nav-item"><a class="nav-link"href="{{ url('/create-pacient') }}"> <i class="fa fa-user-plus"></i> </a></li>
                    @endif
            
                </ul>
                <a class="nav-link" href="{{ url('/logout') }}"> <span class="navbar-text" >LogOut</span></a>
            </div>
        </nav>        
        @if(isset($msg))
            <div class="alert alert-warning" role="alert">
                {{ $msg }}
            </div>
        @endif
        <div class="container">
            @yield('behind')
        </div>   
    </body>
</html>