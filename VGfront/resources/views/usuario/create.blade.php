@extends('layouts.main-landing')

@section('header')


<form action="{{ url('/usuario/')}}" method="post">

@csrf
@include('usuario.form',['modo'=>'Crear']);


</form>

@endsection


