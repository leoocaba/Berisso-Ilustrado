@extends('bienvenidos') @section('content') @section('style-second')
<link rel="stylesheet" href="/css/estilo-editarPerfil.css"> @endsection



<div class="container py-3 px-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="__form col-12 card d-flex text-white" style="border-radius: 10px;">

                <div class="row">
                    <div class="col-12 col-lg-3 mx-auto justify-content-center">
                        <div class="d-flex justify-content-center m-auto pt-lg-2">
                            <img class="mt-4 mx-auto" src="{{ url('/uploads/avatars/' . Auth::user()->image) }}" alt="Foto de perfil" style="width: 150px; height: 180px; border-radius: 10px">
                        </div>
                        <div>
                            <h2 class="card-title d-flex justify-content-center m-auto pt-2"> {{Auth::user()->alias}} </h2>
                        </div>
                    </div>

                    <div class="col-12 col-lg-8 card-body">
                        <form class="" enctype="multipart/form-data" method="POST" action="/editar/perfil">

                            <div class="form-group col-12 p-0">
                                <div class="field-Name col-12 px-1">
                                    <input id="name" type="text" class="field-item-Name col-12 px-2 form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required/>
                                    <label for="name" class="col-form-label px-1 text-left">{{ __('Nombre') }}</label>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong>
                                                </span> @enderror
                                </div>
                            </div>

                            <div class="form-group col-12 p-0">
                                <div class="field-Surname col-12 px-1">
                                    <input id="surname" type="text" class="field-item-Surname form-control px-2 @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required/>
                                    <label for="surname" class="col-form-label px-1 text-left">{{ __('Apellido') }}</label> @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span> @enderror
                                </div>
                            </div>

                            <div class="form-group col-12 p-0">
                                <div class="field-Alias col-12 px-1">
                                    <input id="alias" type="text" class="field-item-Alias form-control px-2 @error('alias') is-invalid @enderror" name="alias" value="{{ old('alias') }}" required/>
                                    <label for="alias" class="col-form-label px-1 text-left">{{ __('Apodo') }}</label> @error('alias')
                                    <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span> @enderror
                                </div>
                            </div>

                            <h5 class="d-flex justify-content-center" for="">Cambiar mi foto de perfil</h5>
                            <div class=" text-nowrap d-flex justify-content-center" id="div_file">
                                <p id="texto"><i class='__icono-camara fas fa-camera-retro text-wrap'></i> </p>
                                <input type="file" style="cursor: pointer;" name="image" id="btn_enviar">
                            </div>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" id="">
                            <hr class="bg-white">
                            <button type="submit" class="__btn-publicar btn btn-sm btn-success btn-block p-2" name="" id="">ACTUALIZAR</button>
                        </form>
                        <hr class="bg-white">
                        <div>
                            <a class="text-center col-12 btn btn-link" href="/perfil"> Volver a mi perfil</a>
                        </div>
                        <hr class="bg-white">
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<script src="/js/editarPerfil.js"></script>
@endsection