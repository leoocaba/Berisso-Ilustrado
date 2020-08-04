<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="shortcut icon" href="/img/escudo.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css"> 
    <link href="https://fonts.googleapis.com/css2?family=BenchNine&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@1,200&family=Saira+Extra+Condensed:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/estilo-welcome.css">
    <link rel="stylesheet" href="/css/estilo-subirImagenes.css">
    @yield('style-second')
    @yield('style-feed')
    @yield('style')
    <title>@yield('title') Berisso Ilustrado</title>
</head>

<body>
            {{-- LOADER --}}
            <div class="lds-ring loader" id="loader"> <h4 class="title-loader text-uppercase text-wrap justify-content-center text-center m-0 p-0">Berisso <br> Ilustrado</h4> <div></div> <div></div> <div></div> </div>
            {{-- FIN LOADER --}}    
    <main class="container">
        <header>
            <div class="col-12 d-flex mx-auto">
                <div class="__div-h1 container col-12 d-flex py-2 m-auto">
                    <h1 class="text-center m-auto d-flex"> <a class="text-decoration-none text-wrap my-auto" id="titulo-del-sitio" href="/">Berisso Ilustrado</a></h1>
                </div>
            </div>
            <div class="__container col-12 container d-flex bg-white">
                <nav class="__navbar navbar navbar-expand-md navbar-light bg-light d-flex mx-auto">
                        <div class="__body d-none d-md-block">
                            <nav class="__nav navbar navbar-expand-md mx-auto">
                                <input class="mx-auto" type="checkbox" />
                                <span class=""></span>
                                <span class=""></span>
                                <span class=""></span>
                                <div class="__menu navbar-nav">
                                    <li class="nav-item mx-auto text-center active">
                                        <a class="nav-link btn btn-link text-uppercase d-block" style="color: rgb(43, 139, 228);" href="/bienvenidos"><i class='fas fa-home d-inline mr-2'></i>Feed<span class="sr-only">Subir mis Fotos</span></a>
                                    </li>
    
                                    <li class="nav-item mx-auto text-center active">
                                        <a class="nav-link btn btn-link text-uppercase d-block" style="color: rgb(177, 0, 177);" href="/subir/imagenes"><i class='fas fa-heart d-inline mr-2'></i>Postear<span class="sr-only">Subir mis Fotos</span></a>
                                    </li>
                                    @if (Route::has('login')) @auth
                                    <li class="nav-item mx-auto text-center active">
                                        <a class="nav-link btn btn-link text-uppercase d-flex" style="color: #009c8c;" href="/perfil" >
                                        <img class="border border-dark mr-2 my-auto d-block" src="{{ url('/uploads/avatars/' . Auth::user()->image) }}" 
                                        style="width: 30px; height: 30px; border-radius: 50%;"><h4 class="my-auto" style="font-size: 18px;">{{ auth()->user()->alias }}</h4><span class="sr-only">Mi nombre</span></a>
                                    </li>
                                    <li class="nav-item mx-auto text-center active">
                                        <a class="nav-link btn btn-link text-uppercase d-block" style="color: #ff0000;" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    <i class='fas fa-sign-out-alt d-inline mr-2'></i>Salir<span class="sr-only">Salir</span>
                                  </a>
                                    </li>
                                    @else
                                    <li class="nav-item mx-auto text-center active">
                                        <a class="nav-link btn btn-link text-uppercase" style="color: #009c8c;" href="{{ route('login')}}"><i class='fas fa-user d-inline mr-2'></i>Ingresar<span class="sr-only">Ingresar</span></a> @if (Route::has('register'))
                                    </li>
                                    <li class="nav-item mx-auto text-center active">
                                        <a class="nav-link btn btn-link text-uppercase" style="color: rgb(231, 0, 82);" href="{{ route('register')}}"><i class='fas fa-user-friends d-inline mr-2'></i>Registrarme<span class="sr-only"></i>Registrarme</span></a> @endif @endauth
                                    </li>
                                    @endauth
                                </div>
                            </nav>
                        </div>
                    <button class="__navbar-toggler navbar-toggler my-2 mx-auto d-md-none" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon d-flex">
                                <i class="fas fa-bars p-auto m-auto" style="color:#000; font-size:26px;"></i>
                            </span>
                          </button>
                    <div class="__collapse col-12 collapse navbar-collapse text-dark justify-content-center my-3" id="navbarNav">
                        <ul class="__navbar-nav navbar-nav mx-auto d-md-none">
                            <li class="nav-item mx-auto text-center active">
                                <a class="nav-link btn btn-link text-uppercase d-block" style="color: rgb(43, 139, 228)!important;" href="/bienvenidos"><i class='fas fa-home d-inline mr-2'></i>Feed<span class="sr-only">Subir mis Fotos</span></a>
                            </li>
                            <li class="nav-item mx-auto my-2 text-center active">
                                <a class="nav-link btn btn-link text-uppercase d-inline" style="color: rgb(177, 0, 177)!important;"  href="/subir/imagenes"><i class='far fa-heart d-inline mr-2'></i> Postear<span class="sr-only">Subir mis Fotos</span></a>
                            </li>
                            @if (Route::has('login')) @auth
                            <li class="nav-item mx-auto text-center active">
                                <a class="nav-link btn btn-link text-uppercase d-flex" style="color: #009c8c!important;" href="/perfil" >
                                <img class="border border-dark mr-2 my-auto d-block" src="{{ url('/uploads/avatars/' . Auth::user()->image) }}" 
                                style="width: 30px; height: 30px; border-radius: 50%;"><h5 class="my-auto" style="font-size: 18px;">{{ auth()->user()->alias }}</h5><span class="sr-only">Mi nombre</span></a>
                            </li>
                            <li class="nav-item mx-auto my-2 text-center active">
                                <a class="nav-link btn btn-link text-uppercase d-inline" style="color: red!important;" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class='fas fa-sign-out-alt d-inline mr-2'></i>Salir<span class="sr-only">Salir</span>
                                </a>
                            </li>
                            @else
                            <li class="nav-item mx-auto text-center">
                                <a class="nav-link btn btn-link text-uppercase container" style="color: #009c8c!important;" href="{{ route('login')}}"><i class='fas fa-user d-inline mr-2'></i>Ingresar<span class="sr-only">Ingresar</span></a> @if (Route::has('register'))
                            </li>
                            <li class="nav-item mx-auto text-center">
                                <a class="nav-link btn btn-link text-uppercase container" style="color: rgb(231, 0, 82)!important;" href="{{ route('register')}}"><i class='fas fa-user-friends d-inline mr-2'></i>Registrarme<span class="sr-only">Registrarme</span></a> @endif @endauth
                            </li>
                            @endauth
                        </ul>
                    </div>
                </nav>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </header>


        <section class="justify-content-center" style="flex-grow: 1;" id="contenido">
            @yield('content')
        </section>

        <!-- Site footer -->
        <footer class="site-footer section">
            <div class="container">
                <div class="row">
                    <div class="texto col-12">
                        <hr>
                        <nav class="navbar m-auto p-0" id="nav-boton">
                            <ul class="navbar-nav h-25 m-auto d-inline-block flex-wrap">
                                <li class="nav-item active float-left pl-2"><a class="nav-link" href="https://facebook.com/caballeroleoo" target="_blanck"><i class="fa fa-facebook-official" aria-hidden="true"></i> facebook</a></li>
                                <li class="nav-item active float-left pl-2"><a class="nav-link" href="mailto:leoo.caballero@gmail.com" target="_blanck"><i class="fa fa-envelope" aria-hidden="true"></i> Gmail</a></li>
                                <li class="nav-item active float-left pl-2"><a class="nav-link" href="https://linkedin.com/in/leonel-marcelo-caballero-6a1a3318a/" target="_blanck"><i class="fa fa-linkedin" aria-hidden="true"></i> linkedin</a></li>
                            </ul>
                        </nav>
                        <p class="copyright-text">Copyright Berisso Ilustrado &copy; {{date('Y')}} Todos los derechos reservados.
                        </p>
                        <div class="container d-flex justify-content-center">
                            <strong class="d-flex my-auto">Creado por </strong>
                            <a class="__creado-por" href="http://instagram.com/leoocaba" target="_blanck" type="text" class="btn btn-link my-auto p-0">@leoocaba</a>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </footer>


    </main>

    <script src="/js/loader.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>
