@extends('layouts.main')

@section('pageTitle', "Equipo 5 - LDAW")

@section('tituloM', "Integrantes del Equipo")

@section('mainContent')

    <section class="grid-3">
    @foreach($integrantes as $id => $integrantes)
    <x-intCard :nombre="$integrantes['nombre']" :matricula="$integrantes['matricula']" :foto="$integrantes['foto']" :texto="$integrantes['texto']"  />
    @endforeach
    </section>
@endsection
