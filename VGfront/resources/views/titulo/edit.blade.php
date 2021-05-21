    
    
    @foreach($prueba as $titu)
      
      

            
            //dd($array);
           
       

    @endforeach

<div class="container">

    <form action="{{ url('/titulo/'.$titu['id']) }}" method="post">
        
        @method('PATCH')   
        @csrf

        <div class="form-group">

            <label for="nombre">nombre</label>
            <input type="text" class="form-control" name="nombre" value="{{ isset($titu['nombre'])?$titu['nombre']:old('nombre') }}" id="nombre">
        
        </div>

        <div class="form-group">

            <label for="condicion">Condicion</label>
            <input type="text" class="form-control" name="condicion" value="{{ isset($titu['condicion'])?$titu['condicion']:old('condicion') }}" id="condicion">
            
        </div>

        <div class="form-group">

            <label for="consola">Consola</label>
            <input type="text" class="form-control" name="consola" value="{{ isset($titu['consola'])?$titu['consola']:old('consola') }}" id="consola">
            
        </div>

        <div class="col text-center">
            <button class="btn btn-success" type="submit"><i class="bi bi-pencil-square"></i> </button>
        </div>
    </form>

</div>
