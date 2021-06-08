@extends('layouts.main')

@section('mainContent')
<div>

<div class="container">

    {{-- <form action="{{url('/ofertaJuego')}}" method="post"> --}}
        {{-- @csrf --}}
        @include('ofertas.buscarForm',['modo'=>'Crear'])
    {{-- </form> --}}
</div>

@endsection