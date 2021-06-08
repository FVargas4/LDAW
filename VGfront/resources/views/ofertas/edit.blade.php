@extends('layouts.main')

@section('mainContent')

<div class="container">

    <form action="{{url('/ofertas/'.$id)}}" method="post">
        @method('PATCH')   
        @csrf
        @include('ofertas.form',['modo'=>'Editar'])
    </form>
</div>

@endsection