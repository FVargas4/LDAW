@extends('layouts.main')

@section('mainContent')

<div class="container">


  <div class="container"><form action="{{url('/juegofisico/'.$array['id'])}}" method="post">
    @method('PATCH')   
    @csrf
        @include('juegofisico.form',['modo'=>'Editar'])
    </form>
</div>
@endsection