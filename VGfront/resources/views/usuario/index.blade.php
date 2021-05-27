@extends('layouts.main')

@section('pageTitle', "VGTrade - Usuarios")

@section('mainContent')

@if(Session::has('mensaje'))
<div class="container" style=" min-height: 500px;">
    
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
        <a href="{{url('/panel')}}"  class="btn btn-success "> <span class="material-icons-outlined">keyboard_backspace</span></a>
        <br>
        </div>
    <div class="table-responsive">

   
     <br>

  
     <div class="d-flex border-bottom mb-3">
        <div class="me-auto p-2">
            <h1 class="text-left fs-4">Lista de reportes creados</h3>
        </div>
        <div class="align-self-center p-2">
        <a href="{{url('reporte/create')}}"  class="btn btn-success "> <span class="material-icons-outlined">add_circle</span></a>
        <br>
        </div>
       
    </div>


    <table class="table table-hover px-3 " >
        
        <h3 class="pt-3"><strong>Reportes</strong></h3>
        <br>
        <thead >
            <tr>
                <th scope="col">Nombre del niño</th>
                <th scope="col">Quien reporta</th>
                <th scope="col">Area</th>
                <th scope="col">Calificacion</th>
                <th scope="col">Documento de drive</th>
                
                
            </tr>
        </thead>
        <tbody>
            
            <tr scope="row">
               
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>

                
              
                
                <td>
                <a href="">
                
                            <button type="button" class="btn btn-primary my-1 d-flex justify-content-center align-items-center">
                                <i class="far fa-eye"></i>
                            </button>      
                </a>
                <a href="">
                
                              <button type="button" class="btn btn-success my-1 d-flex justify-content-center align-items-center">
                                <i class="bi bi-pencil-square"></i>
                            </button>      
                </a>

                

                <form action="" method="post">
                /*@csrf
                {{ method_field('DELETE')}}*/

                

                <!--<button type="submit" class="btn btn-danger" onclick="return confirm('¿Quieres borrar?')" value="Borrar">Borrar</button>-->


                <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-danger my-1 d-flex justify-content-center align-items-center" 

                    value="Borrar"><i class="bi bi-trash"></i>
                                
                    </button>

                   <!-- Modal eliminar-->
                   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">¿Estás seguro de eliminar?</h5>
                            <button type="button" class="btn" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                       
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn button-donar">Eliminar</button>


                             
                        </div>
                        </div>
                    </div>
                    </div>
                
                </form>

                </td>
            </tr>
          
        
        </tbody>
    </table>
</div>
</div>
@endsection