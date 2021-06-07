
@extends('layouts.main')

@section('pageTitle', "VGTrade - Calendario")

@section('mainContent')

<div class="container center bg-light my-3">
    <h1 class='text-center'>Conoce nuestros proximos eventos ¡Anímate y participa!</h1>
    <div class="text-center pb-5 ">
        <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%237986CB&amp;ctz=America%2FMexico_City&amp;src=ZmhlcnZhcmdhc2FsdkBnbWFpbC5jb20&amp;src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;color=%237986CB&amp;color=%237986CB&amp;title=Conoce%20nuestros%20pr%C3%B3ximos%20torneos" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
    </div>
</div>

@endsection