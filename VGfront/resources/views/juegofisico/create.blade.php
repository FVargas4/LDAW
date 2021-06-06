@extends('layouts.main')

@section('mainContent')

<div class="container">

    <form action="{{url('/juegofisico')}}" method="post">
        @csrf
        @include('juegofisico.form',['modo'=>'Crear'])
    </form>
</div>

@endsection