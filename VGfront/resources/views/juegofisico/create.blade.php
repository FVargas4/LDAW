

<div class="container"><form action="{{url('/juegofisico')}}" method="post">
  @csrf
  
  @include('juegofisico.form',['modo'=>'Registrar'])


</form>
</div>