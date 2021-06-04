@extends('layouts.main')

@section('mainContent')


<div class="container" >

<div class="bg-white container mt-5 bg-white shadow-sm p-3 mb-5 bg-body rounded" id="table-usr">

    <form action="{{ url('/titulo/'.$titu['id']) }}" method="post">
        
        @method('PATCH')   
        @csrf

        <div class="form-group">
            <div class="mb-3">
                <label for="nombre">Nombre del título</label>
                <input type="text" class="form-control" name="nombre" value="{{ isset($titu['nombre'])?$titu['nombre']:old('nombre') }}" id="nombre">
            </div>
        </div>

        <div class="form-group">
            <div class="mb-3">
                <label for="condicion">Descripción</label>
                <input type="text" class="form-control" name="condicion" value="{{ isset($titu['condicion'])?$titu['condicion']:old('condicion') }}" id="condicion">
            </div>
        </div>

        <div class="form-group">
            <div class="mb-3">
                <label for="consola">Consola</label>
                <input type="text" class="form-control" name="consola" value="{{ isset($titu['consola'])?$titu['consola']:old('consola') }}" id="consola">
            </div> 
        </div>

       
            <div class="mb-3">
                <div class="px-4 text-center">
                   <!-- <button class="btn btn-success" type="submit" class="btn btn-primary w-50 mt-4">Editar</button>-->
                    <input type="submit" class="btn btn-success w-50 mt-0" value="Editar">
                </div>
                
                <div class="mt-3">
                    <div class="px-4 text-center">
                            <input href="{{url('/titulo')}}" class="btn btn btn-danger w-50 mt-0" value="Regresar">        
                    </div>
                </div>
            </div>
    </form>
</div>
</div>
@endsection
