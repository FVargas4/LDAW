<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
             
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <title>Equipo 5 - LDAW</title>
      </head>
      <body class="bg-dark">
        <br>
        <h1 class="text-center text-light">Equipo 5 - LDAW</h1>
        <h2 class="text-center text-light">Integrantes del equipo</h2>
        <br>
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{url('pi')}}">Integrantes del equipo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <span class="navbar-text">
                        
                    </span>
                </div>
            </div>
        </nav>
        <br>
        <div class="row">
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body text-center">
                  <h5 class="card-title">Carlos Ayala Medina</h5>
                  <img src="{{ url('img/integrantes/perfildeusuario.jpg') }}" alt="profile image" />
                  <p class="card-text">A01703682</p>
                  <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam minus sapiente autem veritatis accusantium ab consequuntur error, animi ipsam, cupiditate mollitia cum officiis qui harum asperiores. Impedit beatae vitae amet.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                <div class="card-body text-center">
                  <h5 class="card-title">Fernando Vargas Álvarez</h5>
                  <img src="{{ url('img/integrantes/FerVargas.jpg') }}" alt="profile image" />
                  <p class="card-text">A01066270 </p>
                  <p class="card-text">Mi experiencia en el desarrollo de aplicaciones web no rebasa los límites impuestos
                    en el bloque pasado; sin embargo, soy una persona a la que le gusta aprender constantemente y por ello 
                    me gusta investigar más acerca de muchos temas relacinados. Me considero un desarrollador medio por ser 
                    dedicado para encontrar la solución a posibles probemas que nos encontremos. </p>
                </div>
              </div>
            </div>      
          </div>
          <br>
          <div class="row">
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body text-center">
                  <h5 class="card-title">Victor Omar Molina</h5>
                  <img src="{{ url('img/integrantes/perfildeusuario.jpg') }}" alt="profile image" />
                  <p class="card-text">A01423485</p>
                  <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui debitis at officia porro molestias. Voluptatibus explicabo laboriosam amet illum, itaque voluptate quo quis quam blanditiis quia consequatur consequuntur, cumque nostrum?</p>
                </div>
              </div>
            </div>
          </div>
        
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
      </body>
</html>