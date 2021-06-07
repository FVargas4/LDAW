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
      @foreach ($array as $juego)
    <h3 class="text-center mb-3">{{$juego['nombre']}}</h3>
        <div class="align-self-center p-2">
          <a href="{{url('/')}}"  class="btn btn-success "> <span class="material-icons-outlined">keyboard_backspace</span></a>
          
        </div>
    <div class="table-responsive">
      <div class="container">
        <table class="table table-sm">
          <tbody>
            <tr>
              <td scope="col">Titulo: {{$juego['nombre']}}</td>
              <td scope="col">Consola: {{$juego['consola1']}}</td>
              <td scope="col">Condición: {{$juego['condicion1']}}</td>
              <td></td>
            </tr>
          </tbody>
        </table>
      <div class="d-flex border-bottom mb-3">

          <div class="me-auto p-2">
              <h5>Lista de Ofertas registradas </h5>
          </div>

          <div class="align-self-center p-2">
              <a href="{{url('juegofisico/create')}}"  class="btn btn-success "> <span class="material-icons-outlined">add_circle</span></a>
              
          </div>

      </div>  

       


          <table class="table table-sm">
            <thead>
              <tr>
                <th scope="col">Titulo</th>
                <th scope="col">Consola</th>
                <th scope="col">Condición</th>
                <th scope="col"></th>
              </tr>
            </thead>
           
            <tbody>
              <tr>
                <td>{{$juego['nombre']}}</td>
                <td>{{$juego['consola1']}}</td>
                <td>{{$juego['condicion1']}}</td>
                <td>  
                  <a href="{{url('/juegofisico/'.$juego['id'])}}" class="btn btn-primary">
                    <i class="bi bi-eye"></i>
                  </a>                              
                    <a href="{{url('/juegofisico/'.$juego['id'].'/edit')}}" class="btn btn-success">
                      <i class="bi bi-pencil-square"></i>
                    </a>
                    <form action="{{ url('/juegofisico/'.$juego['id'])}}" class="d-inline" method="post" >
                      @csrf
                      {{ method_field('DELETE')}}
                    <button type="submit" value="delete" class="btn btn-danger" id="btn-submit" onclick="return confirm('¿Estas seguro que quieres borrar?') ;"><i class="bi bi-trash"></i></button>
                    </form>
                </td>
              </tr>
              @endforeach 
            </tbody>
          </table>
           </div>
        </div>
   
  </div>
@endsection