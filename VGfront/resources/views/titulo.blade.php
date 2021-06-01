
@extends('layouts.main')

@section('pageTitle', "Equipo 5 - LDAW")

@section('tituloM', "Integrantes del Equipo")

@section('mainContent')
<table class="table text-light">
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
    @endforeach
  </tbody>
</table>

@endsection