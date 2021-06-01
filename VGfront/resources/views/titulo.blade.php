@extends('layouts.main')

@section('pageTitle', "VGTrade")

@section('tituloM', "Home Page")

@section('mainContent')
<div class="container bg-light mt-3">
  <table class="table text-dark">
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
</div>
@endsection