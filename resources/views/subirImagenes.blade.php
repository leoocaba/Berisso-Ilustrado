@extends('bienvenidos') 

@section('title') 
Postear en 
@endsection

@section('style')
    <link rel="stylesheet" href="/css/estilo-subirImagenes.css">
@endsection

@section('content')

<div id="subirImagenes" class="col-12 col-sm-10 col-lg-10 container p-3">
    <div class="row">
        <form class="__form border m-auto pt-3 pl-2 pb-3 pr-2" method="POST" action="/subir/imagenes" enctype="multipart/form-data">
            @csrf

            <div class="form-group mb-3">
                <label for="title" class="badge badge-pill badge-primary col-12">TÍTULO</label>
                <input type="text" class="form-control control-label" name="title" id="title" aria-describedby="title" placeholder="Título..." required>
            </div>

            <div class="form-group mb-3">
                <label for="textarea" class="badge badge-pill badge-primary col-12">DESCRIPCIÓN</label>
                <textarea class="form-control control-label" name="description" id="textarea" rows="3" placeholder="Describí tu posteo..." aria-describedby="textarea" required></textarea>
            </div>

            <div class="form-group mb-3">
                <label for="file control-label" class="badge badge-pill badge-primary col-12">SELECCIONÁ TUS IMÁGENES</label>
                <div class="control-label">
                    <div class="text-nowrap d-flex justify-content-center" id="div_file">  
                        <p id="texto"><i class='__icono-camara fas fa-camera icon-file_open text-wrap'></i> </p>  
                       <input type="file" style="cursor: pointer;" value="{{ old('image') }}" name="image[]" multiple class="form-control" id="btn_enviar" required>
                    </div>
                </div>
            </div>
            <button type="submit" class="__btn-publicar btn btn-dark col-12 text-uppercase">Publicar</button>
        </form>
    </div>
</div>
@endsection