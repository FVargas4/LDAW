@props([ "nombre", "matricula", "foto", "texto"])
<div class="card">
    <div class="card-body text-center">
        <h5 class="card-title">{{$nombre}}</h5>
        <img src="{{ url('img/integrantes/' . $foto . '.jpg') }}" alt="profile image" width='80%' />
        <p class="card-text">{{$matricula}}</p>
        <p class="card-text">{{$texto}}</p>
    </div>
</div>
