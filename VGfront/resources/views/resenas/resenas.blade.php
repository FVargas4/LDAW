@extends('layouts.main')

@section('mainContent')

<div class="bg-white container mt-5 bg-white shadow-sm p-3 mb-5 bg-body rounded" id="table-usr">

<div>
        <div class="container" >
            @if(Session::has('mensaje'))
            <div class="alert alert-success alert-dismissible" role="alert">
                        {{ Session::get('mensaje')}}
                        <button type="button" class="btn Button_alert" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true" class="btn pull-right" >&times;</span>
                        </button>
                        </div>
            </div>
            @endif
      </div>

      <h3 class="text-center mb-3">Reseñas </h3>
        <div class="align-self-center p-2">
          <a href="{{url('/')}}"  class="btn btn-success "> <span class="material-icons-outlined">keyboard_backspace</span></a>
          
        </div>


        <div class="d-flex border-bottom mb-3">

          <div class="me-auto p-2">
              <h1 class="text-left fs-4">Lista Reseñas registradas </h3>
          </div>

         

          <div class="align-self-center p-2">
              <a href="{{url('resenas/create')}}"  class="btn btn-success "> <span class="material-icons-outlined">add_circle</span></a>
              
          </div>
      </div>

      <div class="table-responsive">
        <div class="container center">
                <div class="row">
                
                @foreach($resenas as $resena)

                
                        <div class="card m-2" style="width: 18rem;">
                                
                                <div class="card-body">
                                        
                                        <p class="card-title">Autor: {{ $resena['autor'] }}</p>
                                        <p class="card-title">Titulo:  {{ $resena['titulo'] }}</p>
                                        <p class="card-title">Calificacion: {{ $resena['calificacion'] }}</p>
                                        <p>Descripcion:<p class="card-text">  {{$resena['descripcion'] }}</p></p>
                                        <!--<p>Fecha de Creacion:<p class="card-text">  {{$resena['created_at'] }}</p></p>-->   
                                </div>

                        
                                


                                <div class="container text-center">
                                        <div class="float-sm-right">
                                        <div  class="btn-group" role="group" aria-label="Vertical example">
                                                
                                                <br>

                                                <form action="{{ url('/resenas/'.$resena['id']) }}" method="post" >
                                                        @csrf
                                                        {{ method_field('DELETE')}}
                                                        @can('viewAny', App\Models\users::class)
                                                        <button type="submit" value="delete" class="btn btn-danger m-1" id="btn-submit" onclick="return confirm('¿Estas seguro que quieres borrar?') ;"><i class="bi bi-trash"></i></button>
                                                        @endcan
                                                </form>
                                        
                                        </div>   
                                        </div>                 
                                </div>

                        </div>
                        <br>

                        
                @endforeach
                </div>
                </div>


        </div>
        </div>



@endsection
