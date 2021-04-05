@extends('index')

@section('style')
    <link rel="stylesheet" href="/css/estilo-register.css">
@endsection

@section('title')
    Registrarme en
@endsection
@section('login-registro')
<div class="container p-3">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <div class="__form card py-2 px-2">
                <div class="card-header m-1"><h4 class="text-center text-primary">{{ __('Registrarme') }}</h4></div>
                <div class="card-body">
                    <form class="justify-content-center" id="formulario" method="POST" action="{{ route('register') }}" autocomplete="off">
                        @csrf
                    <div class="col-12 mx-0 p-0 row">
                         <div class="form-group col-12 p-0 col-md-6">
                            <label for="name" style="font-weight: 600;" class="col-form-label px-1 text-center">{{ __('Nombre') }}</label>

                            <div class="col-12 py-0 px-1">
                                <input style="border-radius: 30px;" id="name" type="text" class="col-12 px-2 form-control @error('name') is-invalid @enderror" 
                                name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Ingrese su nombre" autofocus>

                                @error('name')
                                    <div class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col-12 p-0 col-md-6">
                            <label for="surname" style="font-weight: 600;" class="col-form-label px-1 text-center">{{ __('Apellido') }}</label>

                            <div class="col-12 py-0 px-1">
                                <input style="border-radius: 30px;" id="surname" type="text" class="form-control px-2 @error('surname') is-invalid @enderror" 
                                name="surname" value="{{ old('surname') }}" required autocomplete="surname" placeholder="Ingrese su apellido" autofocus>

                                @error('surname')
                                    <div class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col-12 p-0 col-md-6">

                            <div class="col-12 py-0 px-1">
                                <input id="alias" type="text" class="form-control px-2 @error('alias') is-invalid @enderror" 
                                name="alias" value="{{ old('alias') }}" required autofocus />
                                <label for="alias" style="font-weight: 600;" class="px-1 text-left">{{ __('Nombre de usuario') }}</label>


                                @error('alias')
                                    <div class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col-12 p-0 col-md-6">

                            <div class="col-12 py-0 px-1">
                                <input id="email" type="email" class="form-control px-2 @error('email') is-invalid @enderror" 
                                name="email" value="{{ old('email') }}" required autofocus />
                                <label for="email" style="font-weight: 600;" class="px-1 text-left">{{ __('E-Mail') }}</label>


                                @error('email')
                                    <div class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col-12 p-0 col-md-6">

                            <div class="col-12 py-0 px-1">
                                <input id="password" type="password" class="form-control px-2 @error('password') is-invalid @enderror" 
                                name="password" required autofocus />
                                <label for="password" style="font-weight: 600;" class="px-1 text-left">{{ __('Contraseña') }}</label>


                                @error('password')
                                    <div class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col-12 p-0 col-md-6">

                            <div class="col-12 py-0 px-1">
                                <input id="repassword" type="password" class="form-control px-2" name="password_confirmation" required autofocus />
                                <label for="password-confirm" style="font-weight: 600;" class="px-1 text-left">{{ __('Confirmar contraseña') }}</label>

                            </div>
                        </div>
                    </div>
                        <hr>
                        <div class="form-group my-4 p-0 d-flex justify-content-center">
                            <div class="col-10 p-0 justify-content-centerr">
                                <button type="submit" style="border-radius: 40px; font-family: 'BenchNine', sans-serif; font-size: 24px;" class="btn btn-primary btn-sm btn-block">
                                    {{ __('Registrarme') }}
                                </button>
                            </div>
                        </div>
                        <hr>
                    </form>

                    <div class="col-12 p-0">
                        <div class="row justify-content-center p-0 my-auto"  style="font-size: 18px">
                            <a class="col-10 col-lg-4 __badge-form badge badge-dark text-white text-center py-2 my-2 mx-auto m-lg-auto" href="/">Ir a inicio</a>
                            <a class="col-10 col-lg-4 __badge-form badge badge-dark text-info text-center py-2 my-2 mx-auto m-lg-auto" href="/login">Loguearme</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
{{-- <script>
// Validacion de formulario
    window.addEventListener("load", function(event) {
    // Seleccion de validaciones
    var campoNombre = document.querySelector("input[name=name]");
    var campoApellido = document.querySelector("input[name=surname]");
    var campoAlias = document.querySelector("input[name=alias]");
    let email = document.getElementById("email");
    var campoPassword = document.querySelector("input[name=password");
    var campoRePassword = document.querySelector("input[name=repassword]");
    var elForm = document.getElementById("formulario");
    var elementosDelForm = elForm.elements;

    // Validación email
    email.addEventListener("input", function (event) {
    if (email.validity.typeMismatch) {
     email.setCustomValidity("Por favor, ingresa un correo electrónico.");
    } else {
     email.setCustomValidity("");
     }
    });

    campoNombre.onblur = function () {
        if(this.value.trim() == '') {
            alert('El campo nombre esta vacío.');
        } else if (this.value.length < 2) {
            alert('El nombre debe superar las 2 letras');
        } 
    }

    campoApellido.onblur = function () {
        if(this.value.trim() == '') {
            alert('El campo apellido esta vacío.');
        } else if (this.value.length < 2) {
            alert('El apellido debe superar las 2 letras');
        } 
    }

    campoAlias.onblur = function () {
        if(this.value.trim() == '') {
            alert('El campo alias esta vacío.');
        } else if (this.value.length < 3) {
            alert('El alias debe superar las 3 letras');
        } 
    }

   /* Validacion con regEx, toma todos los resultados como erróneos.
    const regexMail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}-$/;
    campoEmail.onblur = function () {
        if(this.value.trim() == '') {
            alert('El campo email no puede estar vacío.');
        } else if (!regexMail.test(this.value)) {
            alert('El formato del campo email es inválido.');
        } 
    }  */

    campoPassword.onblur =  function () {
        if(this.value.trim() == '') {
            alert('El campo contraseña esta vacío.');
        } else if (this.value.length < 7) {
            alert('La contraseña debe contener al menos 8 caracteres.');
        } 
    }

    campoRePassword.onblur = function () {
        if (this.value !== campoPassword) {
        alert("Las passwords deben ser iguales.");
        return false;
        }    else {
        alert("Las contraseñas coinciden.");
        return true; 
        }
    }
    });
    </script> --}}
@endsection
