@extends('layouts.main')

@section('mainContent')

<div class="bg-white container mt-5 bg-white shadow-sm p-3 mb-5 bg-body rounded" id="table-usr">


<div class="container">
           <div class="row">
           <h3>Reseñas</h3>
               @foreach($resenas as $resena)

               
                    <div class="card mt-3" style="width: 18rem;">
                        
                            <div class="card-body">
                                    
                                    <p class="card-title">Autor: {{ $resena['autor'] }}</p>
                                    <p class="card-title">Titulo:  {{ $resena['titulo'] }}</p>
                                    <p class="card-title">Calificacion: {{ $resena['calificacion'] }}</p>
                                    <p>Descripcion:<p class="card-text">  {{$resena['descripcion'] }}</p></p>
                                    <!--<p>Fecha de Creacion:<p class="card-text">  {{$resena['created_at'] }}</p></p>-->
                                    
                                     
                            </div>

                      <div class="container text-center">
                        <div class="float-sm-right">
                            
                        </div>                 
                      </div>


                     </div>
                  <br>
               @endforeach
           </div>
        </div>


</div>



@endsection
