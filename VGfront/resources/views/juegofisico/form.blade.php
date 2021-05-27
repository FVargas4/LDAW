<div class="form-group">

    <label for="titulo">Titulo</label>
    <input type="text" class="form-control" name="titulo" value="{{ isset($array->titulo)?$array->titulo:old('titulo') }}" id="titulo">
    
</div>

<div class="form-group">

    <label for="condicion">Condicion</label>
    <input type="text" class="form-control" name="condicion" value="{{ isset($array->condicion)?$array->condicion:old('condicion') }}" id="condicion">
    
</div>

<div class="form-group">

    <label for="consola">Consola</label>
    <input type="text" class="form-control" name="consola" value="{{ isset($array->consola)?$array->consola:old('consola') }}" id="consola">
    
</div>

<div class="col text-center">
    <button class="btn btn-success" type="submit"><i class="bi bi-pencil-square"></i> {{$modo}}</button>
</div>
