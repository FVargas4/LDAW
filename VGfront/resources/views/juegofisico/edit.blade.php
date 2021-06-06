@extends('layouts.main')

@section('mainContent')

<div class="container">
  @foreach($array as $array)
      
  @endforeach



  <div class="container"><form action="{{url('/juegofisico/'.$array['id'])}}" method="post">
    @method('PATCH')   
    @csrf
        @include('juegofisico.form',['modo'=>'Editar'])
    </form>
</div>
@endsection