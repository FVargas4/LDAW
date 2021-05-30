@extends('layouts.main')

@section('pageTitle', "VGTrade")

@section('tituloM', "Home Page")

@section('mainContent')
<div class="container bg-light mt-3 rounded">

<form action="{{url('/juegofisico')}}" method="post">
  @csrf
  
  @include('juegofisico.form',['modo'=>'Registrar'])


</form>
</div>
@endsection
