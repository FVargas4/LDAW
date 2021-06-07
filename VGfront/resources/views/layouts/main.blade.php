<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('pageTitle')</title>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <!--Custom CSS-->
        <link rel="stylesheet" href="{{ url('css/main.css')}}">
        

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
        {{-- iconos de google --}}
        <link rel="stylesheet" href="{{ asset('css/material-icons.min.css') }}">

        <link rel="sytlesheet" href="{{ asset('css/cards.css')}}">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">




        <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    
    
         <!-- Prueba-->

        <!-- jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

        <!-- bootstrap -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
        
         <!-- Google Icons-->
         <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

         <!-- Font awesome-->
         <script src="https://kit.fontawesome.com/76fa277871.js" crossorigin="anonymous"></script>

      </head>
      <body class="bg-dark">
        <h2 class="text-center text-light px-2">@yield('tituloM')</h2>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand mx-3" href="{{url('/')}}"> <img src="{{asset('img/prueba/prueba.jpg')}}" class="img-fluid"
                alt="cuadro responsive" width='70'> </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapse_target">
            <ul class="navbar-nav">

                <li class="nav-item px-2">
                    <a class="nav-link " href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="{{url('/titulo')}}">Titulos</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link " href="{{url('/ofertas')}}">Ofertas</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link " href="{{url('/juegofisico')}}">Juegos Fisicos</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link " href="{{url('/usuario')}}">Usuarios</a>
                </li>
                <li class="nav-item dropdown d-flex">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Iniciar Sesion
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>

            </ul>

        </div>
        </nav>

        <main class="container">
            @yield('mainContent')
        </main>


        <!-- JQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
        @stack('scripts')
        </body>

</html>