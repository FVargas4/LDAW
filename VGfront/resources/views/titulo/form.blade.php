
<div class="bg-white container mt-5 bg-white shadow-sm p-3 mb-5 bg-body rounded" id="table-usr">

    <h3 class="text-center mb-3">Crear Título Nuevo </h3>

    <div class="form-group">
        <div class="mb-3">
            <label for="nombre">Nombre <span aria-hidden="true" class="required text-danger" >*</span></label>
            <input type="text" placeholder="Halo Reach" class="form-control" name="nombre" value="{{ isset($titulo->nombre)?$titulo->nombre:old('nombre') }}" id="nombre" required>
        </div>
    </div>

    <div class="form-group">
        <div class="mb-3">
            <label for="condicion">Edicion<span aria-hidden="true" class="required text-danger" >*</span></label>
            <input type="text" class="form-control" placeholder="Juego del año" name="condicion" value="{{ isset($titulo->condicion)?$titulo->condicion:old('condicion') }}" id="condicion" required>
        </div>
    </div>

    <div class="form-group">
        <div class="mb-3">
            <label for="consola">Consola<span aria-hidden="true" class="required text-danger" >*</span></label>
            <input type="text" class="form-control" placeholder="Xbox" name="consola" value="{{ isset($titulo->consola)?$titulo->consola:old('consola') }}" id="consola" required>
        </div>
    </div>

    <div class="form-field  ">

            <p >Selecciona el estado del titulo <span aria-hidden="true" class="required text-danger" >*</span></p>
            </div>

            <select class="form-input" name="aprobado" id="aprobado" required >

                <option value="">Selecciona </option>
                <option value="1" {{ isset($titulo) && $titulo->aprobado==1 ? "selected":'' }}>Aprobado</option>
                <option value="0" {{ isset($titulo) && $titulo->aprobado==0 ? "selected":'' }} >Desaprobado</option>
                
            </select>

        
         <div class="px-4 text-center">
            <input type="submit"  class="btn btn-success w-50 mt-0" value="Crear Título"> 
        </div>

    

    <div class="px-4 text-center">           
            <a href="{{url('/titulo')}}" class="btn bg-danger w-50 mt-4 text-white">Regresar</a>
    </div>  
    

    

</div>