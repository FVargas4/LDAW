@extends('layouts.main')

@section('pageTitle', "VGTrade")

@section('tituloM', "Home Page")

@section('mainContent')
<div class="container bg-light mt-3 rounded">
  <table class="table table-responsive">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">nombre</th>
        <th scope="col">condicion</th>
        <th scope="col">consola</th>
      </tr>
    </thead>
    <tbody>
      
        @foreach($array as $juegofisico)
        <tr scope="row">

             <td>{{ $juegofisico['id'] }}</td>
            <td>{{ $juegofisico['titulo'] }}</td>
            <td>{{ $juegofisico['condicion'] }}</td>
            <td>{{ $juegofisico['consola'] }}</td>
             <td>
              <a href="{{url('/juegofisico/'.$juegofisico['id'])}}" class="btn btn-outline-dark">
                  Consultar
              </a>
              <a href="{{url('/juegofisico/'.$juegofisico['id'].'/edit')}}" class="btn btn-outline-secondary">
                  Editar
              </a>
               
              <form action="{{url('/juegofisico/'.$juegofisico['id'])}}" class="d-inline" method="post">
                  @csrf
                  {{ @method_field('DELETE') }}
                  <input type="submit" onclick="return confirm('¿Quieres borrar la jornada?')"  class="btn btn-outline-danger" value="Borrar">
              </form>
          </td>
        @endforeach
    </tbody>
  </table>
</div>
@endsection