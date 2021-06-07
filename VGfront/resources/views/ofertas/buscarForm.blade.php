<div class="bg-white container mt-5 bg-white shadow-sm p-3 mb-5 bg-body rounded" id="table-usr">
 
        <h3 class="text-center mb-3">Buscar Oferta</h3>
   

    <div class="align-self-center p-2">
        <a href="{{url('/ofertas')}}"  class="btn btn-success "> <span class="material-icons-outlined">keyboard_backspace</span></a>
        
      </div>


    <div class="form-group m-3">
            <label for="id_juego_propuesto"><strong>Busca un juego de tu interés para hacerle una oferta</strong></label>
       
       
        <br><br>
            @if(empty($array))
                <select id="disabledSelect" class="custom-select">
                <option selected>No hay juegos registrados para intercambiar</option>
            @else
                @if ($modo == "Crear")
                    <select class="form-control selectpicker" name="id_juego_propuesto" id="id_juego_propuesto" data-live-search="true">
                    <option selected>Selecciona uno</option>
                @else
                    <select class="form-control selectpicker" name="id_juego_ofertado" id="id_juego_ofertado" data-live-search="true">
                        <option selected>Selecciona uno</option>
                @endif
                        
            @endif
            @foreach($array as $juegofisico)
            @if ($modo == "Editar")
                <option id="id_juego_ofertado" name="id_juego_ofertado" data-tokens={{$juegofisico['nombre']}} value={{$juegofisico['id']}}>{{$juegofisico['nombre']}}</option>

            @else
                <option id="id_juego_propuesto" name="id_juego_propuesto" data-tokens={{$juegofisico['nombre']}} value={{$juegofisico['id']}}>{{$juegofisico['nombre']}}</option>

            @endif
            @endforeach
        </select>
        
        </div>
        @if(empty($juegofisico))
          </fieldset>
        @endif


<div class="col text-center m-3">
    <button class="btn btn-success" type="submit"><i class="bi bi-pencil-square"></i> Seleccionar</button>
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