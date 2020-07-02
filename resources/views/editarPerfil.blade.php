@extends('bienvenidos')

@section('content')

@section('style-second')
    <link rel="stylesheet" href="/css/estilo-editarPerfil.css">
@endsection



            <div class="container py-3 px-4">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="col-12 card d-flex text-white" style="border-radius: 10px; background-color: #000;">

                            <div class="row">
                                <div class="mx-auto justify-content-center">
                                    <div class="d-flex justify-content-center m-auto">
                                        <img class="m-1" src="{{ url('/uploads/avatars/' . Auth::user()->image) }}" alt="" style="width: 150px; height: 150px; border-radius: 50%;">
                                    </div>
                                    <div>
                                        <h2 class="card-title d-flex justify-content-center"> {{Auth::user()->alias}} </h2>
                                    </div>
                                </div>
    
                                <div class="card-body">
                                    <form class="" enctype="multipart/form-data" method="POST" action="/editar/perfil">
    
                                        <div class="form-group col-12 p-0">    
                                            <div class="field-Name col-12 py-0 px-1">
                                                <label for="name" class="col-form-label field-label-Name px-1 text-center">{{ __('Nombre') }}</label>
                                                <input style="border-radius: 5px;" id="name" type="text" class="field-item-Name col-12 px-2 form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required placeholder="Ingrese su nombre"> 
                                                <div class="d-md-none d-none d-md-block">
                                                    <span class="field-icon-Name"></span>   
                                                </div>                                           @error('name')
                                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong>
                                                </span> @enderror
                                            </div>
                                        </div>
    
                                        <div class="form-group col-12 p-0">    
                                            <div class="field-Surname col-12 py-0 px-1">
                                                <label for="surname" class="col-form-label field-label-Surname px-1 text-center">{{ __('Apellido') }}</label>
                                                <input style="border-radius: 5px;" id="surname" type="text" class="field-item-Surname form-control px-2 @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required  placeholder="Ingrese su apellido"> 
                                                <div class="d-md-none d-none d-md-block">
                                                    <span class="field-icon-Surname"></span>   
                                                </div>                                           @error('surname')
                                                <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span> @enderror
                                            </div>
                                        </div>
    
                                        <div class="form-group col-12 p-0">    
                                            <div class="field-Alias col-12 py-0 px-1">
                                                <label for="alias" class="col-form-label field-label-Alias px-1 text-center">{{ __('Apodo') }}</label>
                                                <input style="border-radius: 5px;" id="alias" type="text" class="field-item-Alias form-control px-2 @error('alias') is-invalid @enderror" name="alias" value="{{ old('alias') }}" required placeholder="Ingrese un alias"> 
                                                <div class="d-md-none d-none d-md-block">
                                                    <span class="field-icon-Alias"></span>   
                                                </div>                                           @error('alias')
                                                <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span> @enderror
                                            </div>
                                        </div>
    
                                        <label class="d-flex justify-content-center" for="">Cambiar mi foto de perfil</label>
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