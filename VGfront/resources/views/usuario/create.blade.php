@extends('layouts.main')

@section('mainContent')


<form action="{{ url('/usuario/')}}" method="post">

@csrf
@include('usuario.form',['modo'=>'Crear']);


</form>

@endsection


