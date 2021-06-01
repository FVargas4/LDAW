@extends('layouts.main')

@section('pageTitle', "VGTrade")

@section('tituloM', "Home Page")

@section('mainContent')
<div class="container bg-light mt-3">
<table class="table table-light">
    <thead class="greennefrobg whitenefro">
      <tr>
        <th>#</th>
        <th>nombre</th>
        <th>condicion</th>
        <th>consola</th>
      </tr>
    </thead>
    <tbody>
      
        @foreach($array as $juegofisico)
        <tr>

             <td>{{ $juegofisico['id'] }}</td>
            <td>{{ $juegofisico['titulo'] }}</td>
            <td>{{ $juegofisico['condicion'] }}</td>
            <td>{{ $juegofisico['consola'] }}</td>
             <td>
              <a href="{{url('/juegofisico/'.$juegofisico['id'].'/edit')}}" class="btn btn-outline-secondary">
                  Editar
              </a>
               
              <form action="{{url('/juegofisico/'.$juegofisico['id'])}}" class="d-inline" method="post">
                  @csrf
                  {{ @method_field('DELETE') }}
                  <input type="submit" onclick="return confirm('¿Quieres borrar el juego?')"  class="btn btn-outline-danger" value="Borrar">
              </form>
          </td>
        @endforeach
    </tbody>
  </table>

  <a href="{{ url('juegofisico') }}" class="btn btn-primary"><i class="bi bi-arrow-left"></i> Regresar </a>
@endsection