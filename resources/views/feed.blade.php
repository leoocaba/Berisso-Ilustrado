@extends('bienvenidos')     @section('style-feed')
<link rel="stylesheet" href="/css/estilo-feed.css">
@endsection @section('content')
    
    <div class="container row col-12 d-flex mx-auto p-0 justify-content-center">

        @include('agregarPost')

        <div class="col-12 scroll mt-0 mx-auto">
            <div class="col-12 wrapper cf mt-0 mx-auto">
                <div id="sidebar" class="col-12 sidebar mx-auto justify-content-center">

                   

                </div>
                <div class="col-12 col-md-8 content mx-auto justify-content-center">

                        @foreach ($usuarios as $usuario)

                        @for ($j = 0; $j < count($usuario->publications); $j++)
                        <div class="container justify-content-center mx-auto px-0">
                                <div class="col-12 d-flex justify-content-center ml-2">

                                    <div id="carouselExampleIndicators-{{$usuario->publications[$j]->id}}" 
                                        class="carousel slide row col-12 col-md-8 my-4 d-flex justify-content-center" 
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

                                            <div class="d-inline-block d-flex ml-auto p-0 my-1">
                                            <p class="__updated_at d-flex d-inline m-1 mt-1">{{ $usuario->publications[$j]->updated_at->format('d/m/Y') }}</p>
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