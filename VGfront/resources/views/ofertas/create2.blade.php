@extends('layouts.main')

@section('mainContent')

<div class="container">

    <form action="{{url('/ofertas')}}" method="post">
        @csrf
        @include('ofertas.form2',['modo'=>'Crear2'])
    </form>
</div>

@endsection