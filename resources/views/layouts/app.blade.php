<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.9, shrink-to-fit=no">
    <title>KINGDOM - Emerkhammaat</title>
    <meta content="desc" name="description">
    <meta content="tags" name="emerkhammaat, kingdom, royaume, terre, afrique, black, lives , matter, origin caviaros, kalisso">


    <link rel="apple-touch-icon" sizes="180x180" href="/icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/icon/favicon-16x16.png">
    <link rel="manifest" href="/icon/site.webmanifest">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', '') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400&display=swap" rel="stylesheet">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('starter/assets/css/style-starter.css') }}" rel="stylesheet">

    @yield('css')

    <style>
        #home.banner {
            background: url('http://www.slateafrique.com/sites/default/files/imagecache/article_v2/2014-01-24_1601/terre-agro.jpg') no-repeat;
            background-size: cover;
        }

        #stats {
            background-image: url('https://savoirs.rfi.fr/sites/default/files/medias/images/vignettes/gettyimages-541384482_dossier_1920_web.jpg')
        }

        header.nav-fixed {
            padding: 10px 15px;
            background-color: rgb(0 0 0 / 90%);
        }

        body {
            zoom: 85%;
        }
    </style>
    <script id="mcjs">
        ! function(c, h, i, m, p) {
            m = c.createElement(h), p = c.getElementsByTagName(h)[0], m.async = 1, m.src = i, p.parentNode.insertBefore(m, p)
        }(document, "script", "https://chimpstatic.com/mcjs-connected/js/users/ad765c4f645ab173ccad26c8b/76d8e8a1df261fc18ce9d2210.js");
    </script>
</head>

<body>
    <div id="app">
        <!-- site header -->
        <header id="site-header" class="fixed-top">
            <nav class="navbar navbar-expand-lg navbar-dark ">
                <a class="navbar-brand d-block d-sm-none " href="{{ url('/') }}">
                    <img src="{{asset('logo.png')}}" alt="logo" class="logo-brand w-25  d-none d-md-block">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <a class="navbar-brand  d-none d-md-block" href="{{ url('/') }}">
                    <img src="{{asset('logo.png')}}" alt="logo" class="logo-brand w-25">
                    {{ config('app.name', 'Laravel') }}
                </a>

                <button class="navbar-toggler bg-gradient" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse justify-content-center collapse" id="navbarNav">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Accueil <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/news">Actualités</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/formation">Formation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/produit">Produits</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">A propos de nous</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="btn btn-primary btn-style" href="{{ route('login') }}">{{ __('Connexion') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="btn btn-primary btn-style" href="{{ route('register') }}">{{ __('Inscription') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <div class="d-flex">
                                <a id="navbarDropdown" class="nav-link mr-3" href="/admin">
                                    {{ Auth::user()->name }}
                                </a>

                                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                    <i class="fa fa-power-off text-danger"></i>
                                </a>
                            </div>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                    {{ __('Deconnexion') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </nav>
        </header>
        <!-- //site header -->

        <main class="py-0">
            @yield('content')
        </main>
        @include('layouts.footer')
    </div>

    @yield('js')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }
        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>

    <!-- javascript -->
    <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>

    <!-- libhtbox -->
    <script src="{{asset('assets/js/lightbox-plus-jquery.min.js')}}"></script>


    <!-- particles -->
    <script src="{{asset('assets/js/particles.min.js')}}"></script>

    <script src="{{asset('assets/js/script.js')}}"></script>

    <!-- //particles -->

    <!-- owl carousel -->
    <script src="{{asset('assets/js/owl.carousel.js')}}"></script>

    <script>
        $(document).ready(function() {
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                margin: 10,
                nav: true,
                loop: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    767: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            })
        })
    </script>

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- disable body scroll which navbar is in active -->

    <!-- bootstrap -->
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

</body>

</html>