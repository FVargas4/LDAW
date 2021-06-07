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

    <h3 class="text-center mb-3">Ofertas</h3>
        <div class="align-self-center p-2">
          <a href="{{url('/')}}"  class="btn btn-success "> <span class="material-icons-outlined">keyboard_backspace</span></a>
          
        </div>
    <div class="table-responsive">

      <div class="d-flex border-bottom mb-3">

          <div class="me-auto p-2">
              <h1 class="text-left fs-4">Lista de Ofertas registradas </h3>
          </div>

          <div class="align-self-center p-2">
              <a href="{{url('ofertas/create')}}"  class="btn btn-success "> <span class="material-icons-outlined">add_circle</span></a>
              
          </div>

      </div>
        
        <div class="container">
          <table class="table table-sm">
            @foreach ($array as $juego)
            <thead id="center">
              <tr>
                @if($juego['estado'] == 'Completada')
                <th style="text-align:right;"><div style="position:relative;left:60px;">Info de contacto</div></th>
                <th ></th>
                @else
                <th scope="col">Juego</th>
                <th scope="col">Oferta</th>
                @endif
                <th scope="col">Estado</th>
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
                <td id="center">
                    {{$juego['estado']}}
                    <br><br>
                    @if($juego['estado'] == 'Completada')
                        <form action="{{ url('/ofertas/'.$juego['id'])}}" method="post" >
                            @csrf
                            {{ method_field('DELETE')}}
                        <button type="submit" value="delete" class="btn btn-danger" id="btn-submit" onclick="return confirm('¿Estas seguro que quieres borrar la oferta?') ;"><i class="bi bi-trash"></i></button>
                        </form>
                    @else
                        
                   
                    <form action="{{ url('/ofertas/'.$juego['id'])}}" class="d-inline" method="post" >
                        @csrf
                        {{ method_field('PATCH')}}
                        <input type="hidden" class="form-control" value="Completada" name="estado"  id="estado">
                        <input type="hidden" class="form-control" value={{$juego['id_juego_propuesto']}} name="id_juego_propuesto"  id="id_juego_propuesto">
                        <input type="hidden" class="form-control" value={{$juego['id_juego_ofertado']}} name="id_juego_ofertado"  id="id_juego_ofertado">
                      <button type="submit" class="btn btn-success" id="btn-submit" onclick="return confirm('¿Estas seguro que quieres aceptar la oferta?') ;"><i class="bi bi-check-square"></i></button>
                      </form>
                   
                      <form action="{{ url('/ofertas/'.$juego['id'])}}" class="d-inline" method="post" >
                        @csrf
                        {{ method_field('PATCH')}}
                        <input type="hidden" class="form-control" value="Abierta" name="estado"  id="estado">
                        <input type="hidden" class="form-control" value={{$juego['id_juego_propuesto']}} name="id_juego_propuesto"  id="id_juego_propuesto">
                      <button type="submit" class="btn btn-warning" id="btn-submit" onclick="return confirm('¿Estas seguro que quieres rechazar la oferta?') ;"><i class="bi bi-x-square"></i></button>
                      </form>

                    <br><br>
                    <form action="{{ url('/ofertas/'.$juego['id'])}}" class="d-inline" method="post" >
                        @csrf
                        {{ method_field('DELETE')}}
                      <button type="submit" value="delete" class="btn btn-danger" id="btn-submit" onclick="return confirm('¿Estas seguro que quieres borrar la oferta?') ;"><i class="bi bi-trash"></i></button>
                      </form>

                      @endif
                      <br>
                </td>
              </tr>
              @endforeach 
            </tbody>
          </table>
           </div>
        </div>
   
  </div>
@endsection