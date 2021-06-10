@extends('layouts.main')

@section('pageTitle', "VGTrade")

@section('mainContent')
    <h1 class="text-center text-light">Let's trade</h1>
  
        
    <div class="mt-3 container">

         <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="img/prueba/prueba.jpg" width="10%" class="center">
                    </div>
                    <div class="carousel-item">
                    <img src="img/prueba/haloreach.jpg" width="10%" class="center">
                    </div>
                    <div class="carousel-item">
                    <img src="img/prueba/maxresdefault.jpg" width="10%" class="center">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
        </div>

        <div class="mt-5">

        <div class="table-responsive">
            
        <div class="container center py-3">
                <div class="row">
                <h2 class="text-center text-white">Reseñas </h2>
            @foreach($resenas as $resena)
      
            <div class="card m-2" style="width: 20rem;">
                    
                    <div class="card-body">
                            
                            <p class="card-title">Autor: {{ $resena['autor'] }}</p>
                            <p class="card-title">Titulo:  {{ $resena['titulo'] }}</p>
                            <p class="card-title">Calificacion: {{ $resena['calificacion'] }}</p>
                            <p>Descripcion:<p class="card-text">  {{$resena['descripcion'] }}</p></p>
                            <!--<p>Fecha de Creacion:<p class="card-text">  {{$resena['created_at'] }}</p></p>-->   
                    </div>
                    
                    <br>
            </div>
            <br>
            @endforeach            
            
            
           


     
                </div>
        </div>
        </div>

     </div>
@endsection
