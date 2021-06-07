@extends('layouts.main')
@section('mainContent')

<div class="login">
<div class="  d-flex align-items-center justify-content-center flex-column" style="margin-top:50px; min-height: 500px;">
    <div class="p-4 responsive-container bg-light container ">
    <h3 class = "text-center">Login</h3>
        <form action="{{route('login')}}" method="POST">
            <hr>
            @csrf
            <div class = "result">
                @if (Session::get('fail'))
                    <div class = "alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                @endif
            </div>
            <div class="mb-3 form-group form-outline px-4">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" class="form-control" value="{{old('email')}}">
                <span class="text-danger"> @error('email') {{$message}} @enderror </span>
            </div>
            <div class="mb-3 form-group form-outline px-4">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" name="password" class="form-control @error('password') border border-danger @enderror">
                <span class="text-danger"> @error('password') {{$message}} @enderror </span>
                </div>
            <div class="px-4">
                <input type="submit" class="btn btn-primary w-100 mt-4">
            </div>

        </form>
    </div>
</div>

</div>

@endsection