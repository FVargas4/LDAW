<div class="bg-white container mt-5 bg-white shadow-sm p-3 mb-5 bg-body rounded" id="table-usr">
 
  <div class="container" >
    @if(Session::has('mensaje'))
    <div class="alert alert-success alert-dismissible" role="alert">
                {{ Session::get('mensaje')}}
                <button type="button" class="btn Button_alert" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true" class="btn pull-right" >&times;</span>
                </button>
                </div>
    </div>
    @endif
</div>     
  
  <h3 class="text-center mb-3">Buscar Oferta</h3>
   

    <div class="align-self-center p-2">
        <a href="{{url('/ofertas')}}"  class="btn btn-success "> <span class="material-icons-outlined">keyboard_backspace</span></a>
        
      </div>


    <div class="form-group m-3">
            <h6><strong>Busca un juego de tu interés para hacerle una oferta</strong></h6>
       
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar">
  <br><br>
            <table id="myTable" class="table table-sm">
                <thead>
                  <tr>
                    <th scope="col">Titulo</th>
                    <th scope="col">Consola</th>
                    <th scope="col">Condición</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                @foreach ($array as $juego)
                <tbody>
                  <tr>
                    <td>{{$juego['nombre']}}</td>
                    <td>{{$juego['consola1']}}</td>
                    <td>{{$juego['condicion1']}}</td>
                    <td>  
                        <a href="{{url('ofertas/'.$juego['id'])}}"  class="btn btn-success ">

                            <i class="bi bi-clipboard"></i>
                        </a>
                    </td>
                  </tr>
                  @endforeach 
                </tbody>
              </table>
</div>


<script>
    function myFunction() {
      // Declare variables
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");
    
      // Loop through all table rows, and hide those who don't match the search query
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }
    </script>
