@extends('bienvenidos') @section('title') Mi perfil en @endsection @section('style')
<link rel="stylesheet" href="/css/estilo-perfil.css"> @endsection @section('content')

<div class="container">
    <div class="row">
        <div class="col-12 mx-auto">
            <div class="col-12 scroll mt-0">
                <div class="col-12 wrapper cf mt-0">
                    <div id="sidebar" class="col-12 col-sm-10 col-md-4 sidebar row mx-auto justify-content-center">

                        <div class="user-card container row d-flex mx-auto justify-content-center mt-0">
                            <div class="face front">
                                <img class="front-img" src="{{ url('/uploads/avatars/' . Auth::user()->image) }}">
                            </div>
                            <div class="face back">
                                <div class="back-info">
                                    <h2 class="text-wrap p-0 d-inline">Lorem, ipsum.</h2>
                                    <h4 class="text-wrap p-0 d-inline">Lorem ipsum dolor sit.</h4>
                                    <h4 class="text-wrap p-0 d-inline">Lorem ipsum dolor sit.</h4>
                                    <h4 class="text-wrap p-0 d-inline">Lorem ipsum dolor sit.</h4>
                                </div>
                                <div class="back-bottom">
                                    <span><i class="fab fa-facebook-f"></i></span>
                                    <span><i class="fab fa-twitter"></i></span>
                                    <span><i class="fab fa-instagram"></i></span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row col-12 col-md-8 content mx-auto mt-5 justify-content-center">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection