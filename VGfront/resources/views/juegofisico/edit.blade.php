

<div class="container"><form action="{{url('/juegofisico/2')}}" method="put">
    @csrf
    
    @include('juegofisico.form',['modo'=>'Editar'])
  
  
  </form>
  </div>