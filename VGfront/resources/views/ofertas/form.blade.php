



<div class="bg-white container mt-5 bg-white shadow-sm p-3 mb-5 bg-body rounded" id="table-usr">

    
    @if ($modo == "Crear")
        <h3 class="text-center mb-3">Crear Oferta</h3>    
    @else
        <h3 class="text-center mb-3">Ofertar</h3>
    @endif

    <div class="align-self-center p-2">
        <a href="{{url('/juegofisico')}}"  class="btn btn-success "> <span class="material-icons-outlined">keyboard_backspace</span></a>
        
      </div>


    <div class="form-group m-3">
        @if ($modo == "Crear")
            <label for="id_juego_propuesto"><strong>Escoge uno de tus juegos registrados para crear la oferta</strong></label>
        @else
            <label for="id_juego_ofertado"><strong>Escoge uno de tus juegos registrados para ofertar</strong></label>
        @endif
       
        <br><br>
            @if(empty($array))
                <select id="disabledSelect" class="custom-select">
                <option selected>No tienes juegos registrados</option>
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
            @if ($juegofisico['email'] != $email)
                  
            @else
            @if ($modo == "Editar")
                <option id="id_juego_ofertado" name="id_juego_ofertado" data-tokens={{$juegofisico['nombre']}} value={{$juegofisico['id']}}>{{$juegofisico['nombre']}}</option>

            @else
                <option id="id_juego_propuesto" name="id_juego_propuesto" data-tokens={{$juegofisico['nombre']}} value={{$juegofisico['id']}}>{{$juegofisico['nombre']}}</option>

            @endif
            @endif
            @endforeach
        </select>
        
        </div>
        @if(empty($juegofisico))
          </fieldset>
        @endif

        <div class="form-group m-3">
            @if ($modo == "Crear")
                <input type="hidden" class="form-control" value="Abierta" name="estado"  id="estado">
            @else
            @foreach($oferta as $oferta)
                <input type="hidden" class="form-control" value="Pendiente" name="estado"  id="estado">
                <input type="hidden" class="form-control" value={{$oferta['id_juego_propuesto']}} name="id_juego_propuesto"  id="id_juego_propuesto">
                {{-- <input type="hidden" class="form-control" value=2 name="id_juego_ofertado"  id="id_juego_ofertado"> --}}
                @endforeach
            @endif
        </div>

<div class="col text-center m-3">
    <button class="btn btn-success" type="submit"><i class="bi bi-pencil-square"></i> Ofertar</button>
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