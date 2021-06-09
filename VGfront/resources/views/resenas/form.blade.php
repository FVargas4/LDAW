


<div class="bg-white container mt-5 bg-white shadow-sm p-3 mb-5 bg-body rounded" id="table-usr">

    <h3 class="text-center mb-3">Crear Reseña Nueva </h3>

    <div class="form-group">
        



        <div class="mb-3">
                    <div class="form-group m-3">

                        <label for="id_titulo">Titulo</label>


                        <br>
                            @if(empty($titulo))
                                <select id="disabledSelect" class="custom-select">
                                <option selected>No existen titulos</option>
                            @else

                                    <select class="form-control selectpicker" name="id_titulo" id="id_titulo" data-live-search="true">

                                @if ($modo == "Editar")
                                
                                    <option value="{{ isset($array['id_titulo'])?$array['titulo_id']:old('id_titulo') }}" selected>{{ isset($array['nombre'])?$array['nombre']:old('nombre') }}</option>
                                 
                                @elseif ($modo == "Crear")
                                    <option selected>Selecciona un titulo</option>
                                @endif
                            @endif
                            @foreach($titulo as $titulo)
                                <option id="id_titulo" name="id_titulo" data-tokens={{$titulo['nombre']}} value={{$titulo['id']}}>{{$titulo['nombre']}}</option>
                            @endforeach
                        </select>

                    </div>
                    @if(empty($titulos))
                    </fieldset>
                    @endif
        </div>

        <div class="form-group">
            <div class="mb-3">
                <label for="calificacion">Calificacion<span aria-hidden="true" class="required text-danger" >*</span></label>
                <input type="number" class="form-control" placeholder="8" name="calificacion" value="{{ isset($resenas->calificacion)?$resenas->calificacion:old('calificacion') }}" id="calificacion" required>
            </div>
        </div>

        <div class="form-group">
            <div class="mb-3">
                <label for="descripcion">Descripcion<span aria-hidden="true" class="required text-danger" >*</span></label>
                <input type="text" class="form-control" placeholder="Juego del año" name="descripcion" value="{{ isset($resenas->descripcion)?$resenas->descripcion:old('descripcion') }}" id="descripcion" required>
            </div>
        </div>

    </div>


    
         <div class="px-4 text-center">
            <input type="submit"  class="btn btn-success w-50 mt-0" value="Crear Reseña"> 
        </div>

    <div class="px-4 text-center">           
            <a href="{{url('/titulo')}}" class="btn bg-danger w-50 mt-4 text-white">Regresar</a>
    </div>  
    

    

</div>


<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <!-- Latest compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js" integrity=""></script>

        <!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/i18n/defaults-*.min.js" integrity=""></script>

