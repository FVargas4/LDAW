<div class="form-group">

    <label for="nombre">nombre</label>
    <input type="text" class="form-control" name="nombre" value="{{ isset($titulo->nombre)?$titulo->nombre:old('nombre') }}" id="nombre">
    
</div>

<div class="form-group">

    <label for="condicion">Condicion</label>
    <input type="text" class="form-control" name="condicion" value="{{ isset($titulo->condicion)?$titulo->condicion:old('condicion') }}" id="condicion">
    
</div>

<div class="form-group">

    <label for="consola">Consola</label>
    <input type="text" class="form-control" name="consola" value="{{ isset($titulo->consola)?$titulo->consola:old('consola') }}" id="consola">
    
</div>

<div class="col text-center">
    <button class="btn btn-success" type="submit"><i class="bi bi-pencil-square"></i> {{$modo}}</button>
</div>