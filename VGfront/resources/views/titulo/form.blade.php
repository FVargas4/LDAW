
<div class="bg-white container mt-5 bg-white shadow-sm p-3 mb-5 bg-body rounded" id="table-usr">

    <h3 class="text-center mb-3">Títulos </h3>

    <div class="form-group">
        <div class="mb-3">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" value="{{ isset($titulo->nombre)?$titulo->nombre:old('nombre') }}" id="nombre">
        </div>
    </div>

    <div class="form-group">
        <div class="mb-3">
            <label for="condicion">Condicion</label>
            <input type="text" class="form-control" name="condicion" value="{{ isset($titulo->condicion)?$titulo->condicion:old('condicion') }}" id="condicion">
        </div>
    </div>

    <div class="form-group">
        <div class="mb-3">
            <label for="consola">Consola</label>
            <input type="text" class="form-control" name="consola" value="{{ isset($titulo->consola)?$titulo->consola:old('consola') }}" id="consola">
        </div>
    </div>

    
         <div class="px-4 text-center">
            <input type="submit"  class="btn btn-success w-50 mt-0" value="Crear Título"> 
        </div>
    <div class="mt-3">
        <div class="px-4 text-center">                 
            <input type="submit" href="{{url('/titulo/')}}" class="btn btn btn-danger w-50 mt-0" value="Regresar">        
        </div>
    </div>

    

</div>