@extends('layouts.main')

@section('mainContent')

<div class="container">

    <form action="{{url('/ofertaJuego')}}" method="post">
        @csrf
        @include('ofertas.form',['modo'=>'Crear'])
    </form>
</div>

@endsection