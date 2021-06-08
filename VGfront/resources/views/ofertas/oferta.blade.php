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
        <div class="d-inline">
          <a href="{{url('/ofertas')}}"  class="btn btn-success "> <span class="material-icons-outlined">keyboard_backspace</span></a>  
        </div>


   
      <div class="d-flex border-bottom mb-3">
      </div>  

      @if ($oferta == null)
      <div class="me-auto p-2">
        <h5>No hay ofertas registradas </h5>
    </div>
      @else
               
                    <table class="table table-sm">
                      @foreach ($oferta as $juego)
                      <thead id="center">
                        <tr>
                          @if($juego['estado'] == 'Completada')
                          <th style="text-align:right;"><div style="position:relative;left:60px;">Info de contacto</div></th>
                          <th ></th>
                          @else
                          <th scope="col">Juego</th>
                          <th scope="col">Oferta</th>
                          @endif
                        </tr>
                      </thead>
                    
                      <tbody id="ofertaIndex">
                        <tr>
                          <td id="center">
                              @if($juego['estado'] == 'Completada')
                                  <p>{{$juego['NombreUsuarioProp']}}</p>
                                  <p>{{$juego['telefonoPro']}}</p>
                                  <p>{{$juego['emailPro']}}</p>
                              @else
                                  <p>{{$juego['TituloJuegoPropuesto']}}</p>
                                  <p>{{$juego['ConsolaJuegoPropuesto']}}</p>
                                  <p>{{$juego['CondicionJuegoPropuesto']}}</p>
                              @endif
                          </td>
                          <td id="center">
                              @if( $juego['id_juego_ofertado'] == NULL )
                              <br><br>
                                  <a href="{{url('/ofertas/'.$juego['id'].'/edit')}}"class="btn btn-success">
                                      Ofertar
                                  </a>
                              @else
                                  @if($juego['estado'] == 'Completada')
                                      <p>{{$juego['NombreUsuarioOfer']}}</p>
                                      <p>{{$juego['telefonoOf']}}</p>
                                      <p>{{$juego['emailOf']}}</p>
                                  @else
                                      <p>{{$juego['TituloJuegoOfertado']}}</p>
                                      <p>{{$juego['ConsolaJuegoOfertado']}}</p>
                                      <p>{{$juego['CondicionJuegoOfertado']}}</p>
                                  @endif
                              @endif
                          </td>
                          
                        </tr>
                        @endforeach 
                      </tbody>
                    </table>



        @endif
        @endforeach 
  </div>
@endsection