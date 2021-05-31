@extends('layouts.main')

@section('mainContent')

<div class="container">

    <form action="{{url('/titulo')}}" method="post">
        @csrf
        
        @include('titulo.form',['modo'=>'Registrar'])
    </form>
</div>

@endsection