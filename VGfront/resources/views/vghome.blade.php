@extends('layouts.main')

@section('pageTitle', "VGTrade")

@section('tituloM', "Home Page")

@section('mainContent')
    <h1 class="text-center text-light">Let's trade</h1>
    <img src="img/prueba/prueba.jpg" width="40%" class="center">
    <div class="container">
        <div class="row p-10 m-10">
            <div class="col-4  p-10 m-10">
                <div class="card center" style="width: 18rem;">
                    <img src="img/prueba/prueba.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
            <div class="col-8 p-10 m-10">
                <div class="container bg-light text-center p-10 m-10">
                    <h2>Titulo</h2>
                    <div class="row">
                        <div class="col-3">
                            <img  src="img/prueba/prueba.jpg" class="center" width="10%"> 
                        </div>
                        <div class="col-8">
                        <p class="p-20">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat animi vitae maxime
                        molestias temporibus similique, pariatur, praesentium ipsam, iste quae minima quo nesciunt excepturi
                        tenetur quidem! Nobis dolor nostrum omnis!</p>
                        </div>
                </div>

            </div>
        </div>
        
    </div>
@endsection
