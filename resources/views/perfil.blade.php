@extends('bienvenidos') @section('title') Mi perfil en @endsection @section('style')
<link rel="stylesheet" href="/css/estilo-perfil.css"> @endsection @section('content')

<div class="container row col-12 d-flex mx-auto p-0 justify-content-center">

    <div class="col-12 scroll mt-0 mx-auto">
        <div class="col-12 wrapper cf mt-0 mx-auto">

                <div id="sidebar" class="col-12 col-md-4 sidebar row mx-auto justify-content-center">
                    <div class="col-12 user-card container row d-flex mx-auto justify-content-center mt-0">
                        <div class="face front">
                            <img class="front-img" src="{{ url('/uploads/avatars/' . Auth::user()->image) }}">
                        </div>
                        <div class="face back">
                            <div class="back-info p-0">
                                <h2 class="text-wrap text-uppercase p-0 my-2 d-block"> <strong> {{ Auth::user()->alias }}</strong> </h2>
                                <div class="container d-flex mx-auto justify-content-center ">
                                    <h4 class="text-wrap p-0 d-flex d-inline"> {{ Auth::user()->name }} </h4>
                                    <h4 class="text-wrap ml-1 p-0 d-flex d-inline"> {{ Auth::user()->surname }} </h4>
                                </div>
                
                                <div class="container d-flex mx-auto justify-content-center my-1">
                                    <h5 class="text-wrap text-uppercase d-flex d-block p-0"> 
                                        {{count(Auth::user()->publications)}} Post{{count(Auth::user()->publications) > 1 ? 's' : ''}} </h5>
                                        <span class="d-flex d-block mx-1 p-0"><i class="far fa-images p-0 my-0 d-flex d-block"></i></span>
                                </div>

                                <div class="d-flex justify-content-center my-2 mx-auto">
                                    <a  class="btn btn-link text-decoration-none text-uppercase d-flex d-block" href="/perfil/editar">
                                        <h6 class="d-flex">Editar</h6>
                                        <span class="d-flex d-block mx-1"><i class="fas fa-edit"></i></span> </a>
                                </div>

                            </div>
                            <div class="back-bottom">
                                <span><i class="fab fa-facebook-f"></i></span>
                                <span><i class="fab fa-twitter"></i></span>
                                <span><i class="fab fa-instagram"></i></span>
                            </div>
                        </div>
                    </div>
                
                </div>
               
            <div class="col-12 col-md-8 content mx-auto justify-content-center">

                    @foreach ($usuarios as $usuario)

                    @for ($j = 0; $j < count($usuario->publications); $j++)
                    <div class="container justify-content-center mx-auto px-0">
                            <div class="col-12 d-flex justify-content-center px-0">

                                <div id="carouselExampleIndicators-{{$usuario->publications[$j]->id}}" 
                                    class="carousel slide row col-12 col-md-8 my-4 px-1 d-flex justify-content-center" 
                                    style="" data-interval="false" data-ride="carousel">
                                    
                                    <div class="__cabecera text-light d-flex col-12 mt-2 mx-0 border border-dark border-bottom-0">
                                        <img src="{{ url('/uploads/avatars/' . $usuario->image) }}" class="d-block my-auto"
                                        style="width: 30px; height: 30px; border-radius: 50%;" alt="Avatar de usuario">

                                        <div class="d-inline-block py-0 my-1 px-2">
                                            <h4  class="__alias d-flex d-inline mb-0">{{$usuario->alias}}</h4>
                                            <div class="d-flex d-block">
                                                <p class="__name my-0 py-0">{{$usuario->name }}</p> <p class="__surname my-0 ml-1 py-0">{{$usuario->surname}}</p>
                                            </div>
                                        </div>

                                        <div class="d-inline-block d-flex ml-auto py-0 px-2">
                                        <p class="__updated_at my-0 py-0">{{ $usuario->publications[$j]->updated_at->format('d/m/Y') }}</p>
                                        </div>
                                    </div>

                                    <div class="carousel-inner justify-content-center my-1 p-0">
                    
                                            @for ($k = 0; $k < count($usuario->publications[$j]->pictures); $k++)
                    
                                            <div class="carousel-item p-0 mb-2 {{$k == 0 ? 'active' : ''}} ">
                                               {{-- {{dd(($usuario->publications[$j]->pictures[0]->id))}} --}}
                    
                                            <img class="img d-block mx-auto responsive px-0 my-1" data-slide-to="{{$k}}"
                                                src="{{ asset('images/image/'. $usuario->publications[$j]->pictures[$k]->image) }}" alt="">
                                            </div>

                                            <ol class="carousel-indicators d-flex mt-4 p-0">
                                                @for ($l = 0; $l < count($usuario->publications[$j]->pictures); $l++)
                                                    <li data-target="#carouselExampleIndicators-{{$usuario->publications[$j]->id}}" data-slide-to="{{$k}}" class="__li p-0 d-flex mt-4 bg-dark  {{$k == 0 ? 'active' : ''}} "></li>
                                                @endfor
                                            </ol>

                                            @endfor
                    
                                    </div>

                                    <a class="carousel-control-prev ml-3" href="#carouselExampleIndicators-{{$usuario->publications[$j]->id}}" role="button" data-slide="prev">
                                    </a>
                                    <a class="carousel-control-next mr-3" href="#carouselExampleIndicators-{{$usuario->publications[$j]->id}}" role="button" data-slide="next">
                                    </a>
                                </div>
                            </div>
                    </div>
            
                    @endfor    
                    @endforeach

            </div>
        </div>
    </div>
    
         
</div>


<script src="/js/slider.js"></script>

@endsection
