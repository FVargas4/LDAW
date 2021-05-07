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

      </head>
      <body class="bg-dark">
        <br>
        <h1 class="text-center text-light">Equipo 5 - LDAW</h1>
        <h2 class="text-center text-light">@yield('tituloM')</h2>
        <br>
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
                    <a class="nav-link" href="#">Titulos</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link " href="#">Ofertas</a>
                </li>

            </ul>

        </div>
        </nav>
        <br>

        <main class="containers-fluid">
            @yield('mainContent')
        </main>


        <!-- JQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
        @stack('scripts')

</html>