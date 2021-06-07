@extends('layouts.main')

@section('mainContent')

<div class="container">

    <form action="{{url('/resenas')}}" method="post">
        @csrf
        
        @include('resenas.form',['modo'=>'Crear'])
    </form>
</div>

@endsection