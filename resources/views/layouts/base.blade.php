<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>My First Laravel-Vue Project</title>

    <!--Online Style link-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> --}}
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}

    <!-- My Own Style -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/h_f_app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <header id="h">
        <div class="m fa-menu"></div>
            <h2><a href="{{route('home')}}" title="MasMP3s">MasMp3s</a></h2>
            <nav id="n">
                <a href="{{route('artists')}}">Artistas</a>
                <a href="{{route('tubidy')}}">Top 100</a>
            </nav>
        </header>

        @yield('content')

        <footer id="f">
            <div class="tx">

                <ul class="list-unstyled"> 
                    <li class="pull-right"><a href="#top" id="gotop">Go up</a></li>
                    <li><a href="https://web.archive.org/web/20160103155232/http://www.masmp3s.com/">Start</a></li>
                    <li><a href="https://web.archive.org/web/20160103155232/http://www.masmp3s.com/terminos/">COUGH</a></li>
                    <li><a href="https://web.archive.org/web/20160103155232/http://www.masmp3s.com/contacto/">Contact</a></li>
                </ul> 

                <p class="pull-right socialize">
                    <a class="facebook" href="https://web.archive.org/web/20160103155232/https://facebook.com/TusMp3" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a>
                    <a class="twitter" href="https://web.archive.org/web/20160103155232/https://twitter.com/TusMP3net" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a>
                    <a class="whatsapp" href="https://web.archive.org/web/20160103155232/https://plus.google.com/106133199385690549851" target="_blank" title="Google+"><i class="fa fa-whatsapp"></i></a> 
                </p>

                <p>More MP3's © Copyright 2020 - 2022</p>
                <p>Powered by <a href="https://last.fm/" target="_blank">last.fm</a>.</p>
            </div>

        </footer>
    </div>
</body>
</html>