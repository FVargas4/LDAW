@extends('layouts.main')

@section('mainContent')


<form action="{{ url('/usuario/'.$usuario['id'])}}" method="post">

    {{ method_field('PATCH')}}
    @csrf
    @include('usuario.form',['modo'=>'Editar'])


</form>

@endsection

