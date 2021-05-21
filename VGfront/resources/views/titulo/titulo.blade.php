
@extends('layouts.main')

@section('mainContent')

<div class="container">
    
</div>

<div class="bg-white container mt-5 bg-white shadow-sm p-3 mb-5 bg-body rounded" id="table-usr">


    <h3 class="text-center mb-3">Títulos </h3>
    <div class="align-self-center p-2">
        <a href=""  class="btn btn-success "> <span class="material-icons-outlined">keyboard_backspace</span></a>
        <br>
        </div>
    <div class="table-responsive">

   
      <br>

    
      <div class="d-flex border-bottom mb-3">
          <div class="me-auto p-2">
              <h1 class="text-left fs-4">Lista Títulos registrados </h3>
          </div>
          <div class="align-self-center p-2">
          <a href="{{url('titulo/create')}}"  class="btn btn-success "> <span class="material-icons-outlined">add_circle</span></a>
          <br>
          </div>

      </div>

        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">nombre</th>
              <th scope="col">condicion</th>
              <th scope="col">consola</th>
            </tr>
          </thead>
          <tbody>
            
              @foreach($titulo as $titu)
                    <tr scope="row">

                        <td>{{ $titu['id'] }}</td>
                        <td>{{ $titu['nombre'] }}</td>
                        <td>{{ $titu['condicion'] }}</td>
                        <td>{{ $titu['consola'] }}</td>
                                
                        <td>

                        <a href="{{url('/titulo/'.$titu['id'].'/edit')}}" class="btn btn-outline-secondary">
                            Editar
                        </a>

                        <form action="{{ url('/titulo/'.$titu['id']) }}" method="post" >
                            @csrf
                            {{ method_field('DELETE')}}
                          <button type="submit" value="delete" class="btn btn-danger" id="btn-submit" onclick="return confirm('¿Estas seguro que quieres borrar?') ;"><i class="bi bi-trash"></i></button>
                        </form>




            @endforeach
          </tbody>
        </table>

    </div>
  </div>

@endsection