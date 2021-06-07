<!--- <h1>{{($modo)}} usuario</h1>

    @if(count($errors)>0)

        <div class="alert alert-danger" role="alert">

    <ul>
        @foreach($errors->all() as $error)
              <li>  {{($error)}} </li>
        @endforeach
    </ul>
        </div>    
    @endif



  
    --->

<div class="d-flex align-items-center justify-content-center flex-column">
    <div class="p-4 responsive-container bg-light container my-5 shadow p-3 mb-5 bg-body rounded">
        <h1 class="fs-1 my-3 d-flex align-items-center justify-content-center">
            <h1>{{($modo)}} Usuario</h1>
        </h1>
        <hr>
        @if(count($errors)>0)

        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach($errors->all() as $error)

                <li> {{$error}}</li>

                @endforeach

            </ul>
        </div>

        @endif
        <div class="container mt">

            <div class="form-group">

                <label for="name" class="px-0">Nombre Completo <span aria-hidden="true"
                        class="required text-danger">*</span></label>
                <input type="text" placeholder="Juan Perez Rodriguez" class="form-control" name="name"
                    @if($modo=='Editar' || $modo=='Consultar' ) value="{{$usuario['name']}}" @else @endif id="nombre"
                    <?php if ($modo == 'Consultar'){ ?> disabled <?php } ?>>
                <br>

                
                <div class="mb-3 form-group form-outline">
                    <label for="telefono" class="form-label fs-5 px-0">Telefono<span aria-hidden="true"
                            class="required text-danger">*</span></label>
                    <input type="tel" name="telefono" id="telefono" placeholder="Ingresa el telefono"
                        class="form-control @error('phone') border border-danger @enderror" @if($modo=='Editar' ||
                        $modo=='Consultar' ) value="{{$usuario['telefono']}}" @else @endif
                        <?php if ($modo == 'Consultar'){ ?> disabled <?php } ?>>

                </div>

                <div class="mb-3 form-group form-outline ">
                    <label for="email" class="form-label fs-5 px-0">Email<span aria-hidden="true"
                            class="required text-danger">*</span></label>
                    <input type="text" name="email" id="email" placeholder="Ingresa el Email"
                        class="form-control @error('mail') border border-danger @enderror" @if($modo=='Editar' ||
                        $modo=='Consultar' ) value="{{$usuario['email']}}" @else @endif<?php if ($modo == 'Consultar'){ ?>
                        disabled <?php } ?>>

                </div>

                <div class="mb-3 form-group form-outline ">
                    <label for="password" class="form-label fs-5 px-0">Contraseña <span aria-hidden="true"
                            class="required text-danger">*</span></label>
                    <input name="password" id="password" placeholder="Ingresa la contraseña"
                        class="form-control @error('contrasenia') border border-danger @enderror" @if($modo=='Editar' ||
                        $modo=='Consultar' ) value="{{$usuario['password']}}" @else type="password" @endif
                        <?php if ($modo == 'Consultar'){ ?> disabled <?php } else {?> <?php }?>>

                </div>

                <div class="mb-3 form-group form-outline ">
                    <label for="contrasenia_confirmation" class="form-label fs-5 px-0">Repite la Contraseña <span
                            aria-hidden="true" class="required text-danger">*</span></label>
                    <input name="contrasenia_confirmation" id="contrasenia_confirmation"
                        placeholder="Repite la contraseña"
                        class="form-control @error('contrasenia_confirmation') border border-danger @enderror"
                        @if($modo=='Editar' || $modo=='Consultar' ) value="{{$usuario['password']}}" type="text" @else
                        type="password" @endif <?php if ($modo == 'Consultar'){ ?> disabled <?php } ?>>

                </div>


                @if ($modo != 'Consultar')
                <div class="px-4">

                    <input type="submit" class="btn btn-primary w-100 mt-4" value="{{($modo)}} datos">

                </div>
                @endif
                <div class="px-4">
                    <a href="{{url('usuario/')}}" class="btn bg-danger w-100 mt-4 text-white">Regresar</a>
                </div>

            </div>

        </div>
    </div>
</div>
