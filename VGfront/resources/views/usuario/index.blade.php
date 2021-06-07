@extends('layouts.main')

@section('pageTitle', "VGTrade - Usuarios")

@section('mainContent')

@if(Session::has('mensaje'))
<div class="container" style=" height: 80px;">
    
    <!--<div class="alert alert-success alert-dismissible" role="alert">-->
    <div class="alert alert-success alert-dismissible" role="alert">
                
                
                {{ Session::get('mensaje')}}
                
                <button type="button" class="btn Button_alert" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true" class="btn pull-right" >&times;</span>
                </button>
                </div>
    </div>
    
</div>
@endif
<div class="bg-white container mt-5 bg-white shadow-sm p-3 mb-5 bg-body rounded" id="table-usr">


    <h3 class="text-center mb-3">Usuarios </h3>
    <div class="align-self-center p-2">
        <a href="{{url('/')}}"  class="btn btn-success "> <span class="material-icons-outlined">keyboard_backspace</span></a>
        <br>
        </div>
    <div class="table-responsive">

   
     <br>

  
     <div class="d-flex border-bottom mb-3">
        <div class="me-auto p-2">
            <h1 class="text-left fs-4">Lista de Usuarios</h3>
        </div>
        <div class="align-self-center p-2">
        <a href="{{url('usuario/create')}}"  class="btn btn-success "> <span class="material-icons-outlined">add_circle</span></a>
        <br>
        </div>
       
    </div>


    <table class="table table-hover m-2 p-3" >
        
        <h3 class="pt-3"><strong>Usuarios</strong></h3>
        <br>
        <thead >
            <tr>
                <th scope="col">Nombre del Usuario</th>
                <th scope="col">Telefono</th>
                <th scope="col">Email</th>
                <th scope="col">Contraseña</th>
                
                
            </tr>
        </thead>
        <tbody>
            @foreach($usuario as $item)
            <tr scope="row">
               
                <td class="text-center">{{$item['name']}}</td>
                <td class="text-center">{{$item['telefono']}}</td>
                <td class="text-center">{{$item['email']}}</td>
                <td class="text-center">{{$item['password']}}</td>
                <td class="text-center"></td>

                
              
                
                <td>
                <a href="{{url('usuario/'.$item['id'].'/edit')}}">
                
                              <button type="button" class="btn btn-success my-1 d-flex justify-content-center align-items-center">
                                <i class="bi bi-pencil-square"></i>
                            </button>      
                </a>

                

                <form action="{{ url('/usuario/'.$item['id']) }}" method="post" >
                    @csrf
                    {{ method_field('DELETE')}}
                    <button type="submit" value="delete" class="btn btn-danger my-1 d-flex justify-content-center align-items-center" id="btn-submit" onclick="return confirm('¿Estas seguro que quieres borrar?') ;"><i class="bi bi-trash"></i></button>
                </form>

                </td>
            </tr>
            @endforeach
        
        </tbody>
    </table>
</div>
</div>
@endsection