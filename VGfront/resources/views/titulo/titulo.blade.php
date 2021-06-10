
@extends('layouts.main')





  @section('mainContent')
    
</div>

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

    <h3 class="text-center mb-3">Títulos </h3>
        <div class="align-self-center p-2">
          <a href="{{url('/')}}"  class="btn btn-success "> <span class="material-icons-outlined">keyboard_backspace</span></a>
          
        </div>
    <div class="table-responsive">

    

      <div class="d-flex border-bottom mb-3">

          <div class="me-auto p-2">
              <h1 class="text-left fs-4">Lista Títulos registrados </h3>
          </div>

         
          @can('create', App\Models\Titulo::class)
          <div class="align-self-center p-2">
              <a href="{{url('titulo/create')}}"  class="btn btn-success "> <span class="material-icons-outlined">add_circle</span></a>
              
          </div>
          @endcan

          <div class="align-self-center p-4">
                 <a type="button" href="{{url('resenas')}}" class="btn btn-info"><span class="bi bi-book"></span></a>
            </div> 

      </div>
      <div class="table-responsive">
        <div class="container center">
           <div class="row">
               @foreach($titulo as $titu)
               
                    <div class="card m-3" style="width: 18rem;">
                          @if($titu['aprobado'] == '0') 
                            <div class="card-body">
                                  
                                    <p class="card-title">Titulo: {{ $titu['nombre'] }}</p>
                                    <p>Descripcion:<p class="card-text">  {{$titu['condicion'] }}</p></p>
                                    <p class="card-text">Consola:  {{$titu['consola'] }}</p>
                                    
                                    <p class="card-text">Aprobado</p>
                                  
                                    
                                     
                            </div>
                          
                          @else

                                <p class="text-center">Título no aprobado por administrador</p>

                          @endif
                      <div class="container text-center">
                        <div class="float-sm-right">
                   
                          @can('admin',App\Models\Titulo::class)
                            <div  class="btn-group" role="group" aria-label="Vertical example">
                                <a href="{{url('/titulo/'.$titu['id'].'/edit')}}" >
                                    <button type="button" class="btn btn-success m-1">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>  
                                </a>
                                <br>
                       
                       
                                <form action="{{ url('/titulo/'.$titu['id']) }}" method="post" >
                                    @csrf
                                    {{ method_field('DELETE')}}
                                  <button type="submit" value="delete" class="btn btn-danger m-1" id="btn-submit" onclick="return confirm('¿Estas seguro que quieres borrar?') ;"><i class="bi bi-trash"></i></button>
                               </form>
                    
                            </div>  
                          @endcan
                                  
                         
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