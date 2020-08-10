@extends('index')
@section('style')
<link rel="stylesheet" href="/css/estilo-login.css"> @endsection
@section('title')
    Ingresar en
@endsection
@section('login-registro')
<div class="container py-3 px-3">
    <div class="row justify-content-center">
        <div class="col-12 col-md-5">
            <div class="__form card justify-content-center" style="color: #000">
               <div class="py-2 col-md-12 d-flex justify-content-center">
               <svg  style=" -webkit-border-radius: 61px; -moz-border-radius: 61px; border-radius: 61px; border:3px solid #aaaaaa;
               width:80px; height:80px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" class="svg-inline--fa fa-user fa-w-14 d-flex justify-content-center bg-primary p-2"
                width="50px" height="50px" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor"
                    d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9
                    16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0
                    48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"></path></svg>
                </div>
                <div class="card-header my-0"><h4 class=" text-center text-primary">{{ __('Iniciar Sesión') }}</h4></div>

                <div class="card-body">

                    <form method="POST" action="{{ route('login') }}" autocomplete="off">
                        @csrf

                        <div class="form-group my-0 p-0 d-flex justify-content-center">
                            <div class="col-12 p-0">

                                <div class="field-user">
                                    <label for="email" style="font-weight: 600;" class="col-12 col-form-label text-left field-label-user">{{ __('Usuario') }}</label>
                                    <input id="email" style="font-family:Arial, FontAwesome;
                                    background-color: transparent;" type="email" class="form-control radius field-item-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" 
                                    placeholder="&#xf007; Email" required/>
                                    <div class="d-md-none d-none d-md-block">
                                        <div class="field-icon-user"></div>   
                                    </div>
                                </div>

                                @error('email')
                                    <div class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group my-0 p-0 d-flex justify-content-center">
                            <div class="col-12 p-0">
                                <div class="field">
                                    <label for="password" style="font-weight: 600;" class="col-12 col-form-label text-left field-label">{{ __('Contraseña') }}</label>
                                    <input id="password" style="font-family:Arial, FontAwesome;
                                    background-color: transparent;" type="password" class="form-control field-item  @error('password') is-invalid
                                    @enderror" name="password"  placeholder="&#xf084; Contraseña" required/> 
                                    <i id="icon-eye" class="fas fa-eye-slash field-icon"></i>   
                                </div>
                                @error('password')
                                    <div class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group my-4 row">
                            <div class="col-12 ml-4">
                                <div class="form-check">
                                    <input class="form-check-input mt-1 py-0" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label d-flex my-0" style="font-weight: 600; font-size: 14px;" for="remember">
                                        {{ __('Recordarme') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group my-1 d-flex justify-content-center">
                            <div class="col-10 px-0 justify-content-center">
                                <button type="submit" class="btn btn-primary btn-sm btn-block" style="font-family: 'BenchNine', sans-serif; font-size: 24px; border-radius: 40px!important;">
                                    {{ __('Ingresar') }}
                                </button>

                                @if (Route::has('password.request'))

                                    <a class="py-0 text-center col-12 btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Restablecer contraseña') }}
                                    </a>

                                @endif
                            </div>
                        </div>
                        <hr class="py-1 my-1">
                    </form>

                    <div class="col-12 p-0">
                        <div class="row justify-content-center p-0 my-auto"  style="font-size: 18px">
                            <a class="col-10 col-lg-4 __badge-form badge badge-dark text-white text-center py-2 my-2 mx-auto m-lg-auto" href="/">Ir a inicio</a>
                            <a class="col-10 col-lg-4 __badge-form badge badge-dark text-info text-center py-2 my-2 mx-auto m-lg-auto" href="/register">Registrarme</a>
                        </div>
                    </div>

                    {{-- <div class="form-group mt-3  d-flex justify-content-center">
                        <h3 style="font-family: 'BenchNine', sans-serif; font-size: 20px; font-weight: bold;">
                            Berisso Ilustrado
                        </h3>
                    </div> --}}
                    <hr class="py-1 mt-2">

                </div>
            </div>
        </div>
    </div>
    <script src="/js/login.js"></script>
</div>
@endsection
