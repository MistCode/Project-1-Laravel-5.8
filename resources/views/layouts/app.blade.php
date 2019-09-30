<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- los links de referencias y scripts -->
    <!-- bootstrap 4.x es compatible. También puede usar las versiones bootstrap css 3.3.x --> 
    <link  rel = " stylesheet "  href = " https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css " >
    <link  href = " https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.6/css/fileinput.min.css "  media = " all "  rel = " stylesheet "  type = " text / css " />
     <!-- si usa la orientación RTL (de derecha a izquierda), cargue el archivo CSS RTL después de fileinput.css descomentando a continuación --> 
    <!-- link href =" https: //cdnjs.cloudflare .com / ajax / libs / bootstrap-fileinput / 5.0.6 / css / fileinput-rtl.min.css "media =" all "rel =" stylesheet "type =" text / css "/ -->
    <script  src =" https://code.jquery.com/jquery-3.3.1.min.js "> </script>
     <!-- piexif.min.js es necesario para orientar automáticamente los archivos de imagen O al restaurar datos exif en imágenes redimensionadas y cuando  desee cambiar el tamaño de las imágenes antes de cargarlas. Esto debe cargarse antes de fileinput.min.js --> 
    <script  src = " https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.6/js/plugins/piexif.min.js "  type = " text / javascript "></script>
     <!-- sortable.min.Esto debe cargarse antes de fileinput.min.js --> 
    <script  src = " https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.6/js/plugins/sortable.min.js "  type = " text / javascript "></script>
     <!-- purify.min.js solo es necesario si desea purificar el contenido HTML en su vista previa para 
        archivos HTML. Esto debe cargarse antes de fileinput.min.js --> 
    <script  src = " https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.6/js/plugins/purify.min.js " text / javascript></script>
     <!-- popper.min.js a continuación es necesario si usa bootstrap 4.x. También puede usar las 
       versiones bootstrap js 3.3.x sin popper.min.js. --> 
    <script  src = " https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js "> </script>
     <!-- bootstrap.min.js a continuación es necesario si desea ampliar y obtener una vista previa del contenido del archivo en uncuadro de diálogo modal detallado . Se admite bootstrap 4.x. También puede utilizar las versiones de bootstrap js 3.3.x. --> 
    <script  src = "https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js "  type = " text / javascript "> </script>
     <!-- el archivo de complemento de entrada de archivo principal --> 
    <script  src = " https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.6/js/fileinput.min.js "></script>
     <!-- opcionalmente si necesita un tema como fuente tema impresionante que puede incluir como se menciona a continuación --> 
    <script  src = "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.6/themes/fa/theme.js "></script>
     <!-- opcionalmente, si necesita traducción para su idioma, incluya la configuración regional archivo como se menciona a continuación --> 
    <script  src = " https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.6/js/locales/es.js "></script>

    <!--Iconos-->
    <script src="https://kit.fontawesome.com/47630105e1.js" crossorigin="anonymous"></script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body background="{{ asset('images/wallhaven-0pej79.jpg') }}">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">Lavel</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <!-- Left Side Of Navbar -->
                <div class="navbar-nav mr-auto">
                    <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarGrupos" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Grupos</a>
                        <div class="dropdown-menu" aria-labelledby="navbarGrupos">
                          <a class="dropdown-item" href="{{ url('/grupos') }}">Mis Grupos</a>
                          <a class="dropdown-item" href="{{ url('/grupos/create') }}">Añadir</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarComunity" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Comunidades</a>
                        <div class="dropdown-menu" aria-labelledby="navbarComunity">
                          <a class="dropdown-item" href="{{ url('/comunidades') }}">Mis Comunidades</a>
                          <a class="dropdown-item" href="{{ url('/comunidades/create') }}">Añadir</a>
                        </div>
                    </div>
                    <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
                </div>
                    <!-- Right Side Of Navbar -->
                <div class="navbar-nav ml-auto">
                                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Entrar') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
         
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><img width="30px" height="30px" class="rounded-circle" src="{{ asset('images/ae/'.Auth::user()->avatar) }}">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('/profile') }}">
                                    <i class="far fa-user-circle"></i> Perfil</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="fas fa-sign-out-alt"></i> 
                                        {{ __('Salir') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </div>
                </div>
            </div>
        </nav>
        <main class="container">
                @yield('content')
                

        </main>
    </div>
    <script>
$(document).on('ready', function() {
    $("#input-b1").fileinput({
        showUpload: false,
        dropZoneEnabled: false,
        maxFileCount: 10
    });
});
</script>
</body>
</html>