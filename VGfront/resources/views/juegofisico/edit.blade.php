
      @foreach($array as $juegofisico)
      
      @endforeach


<div class="container"><form action="{{url('/juegofisico/'.$juegofisico['id'])}}" method="post">
  @method('PATCH')   
  @csrf
    
    {{-- @include('juegofisico.form',['modo'=>'Editar']) --}}
    <div class="form-group">

      <label for="titulo">Titulo</label>
      <input type="text" class="form-control" name="titulo" value="{{ isset($juegofisico['titulo'])?$juegofisico['titulo']:old('titulo') }}" id="titulo">
      
  </div>
  
  <div class="form-group">
  
      <label for="condicion">Condicion</label>
      <input type="text" class="form-control" name="condicion" value="{{ isset($juegofisico['condicion'])?$juegofisico['condicion']:old('condicion') }}" id="condicion">
      
  </div>
  
  <div class="form-group">
  
      <label for="consola">Consola</label>
      <input type="text" class="form-control" name="consola" value="{{ isset($juegofisico['consola'])?$juegofisico['consola']:old('consola') }}" id="consola">
      
  </div>
  
  <div class="col text-center">
      <button class="btn btn-success" type="submit"><i class="bi bi-pencil-square"></i> Editar</button>
  </div>
  
  
  </form>
  </div>