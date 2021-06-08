@extends('layouts.main')

@section('mainContent')

<div class="container">

    {{-- <form action="{{url('/ofertaJuego')}}" method="post"> --}}
        {{-- @csrf --}}
        @include('ofertas.buscarForm',['modo'=>'Crear'])
    {{-- </form> --}}
</div>

@endsection