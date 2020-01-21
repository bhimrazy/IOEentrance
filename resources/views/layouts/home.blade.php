<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">
     <title>IOEentrance |Practice and Aim Higher</title>
     <title>{{ config('app.name', 'IOEentrance | Aim Higher') }}</title>
    <link rel="icon" href="{{asset('/assets/logo-vertical.png')}}" type="image/png" sizes="32x32">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Custom CSS-->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">  
    <link href="{{ asset('css/blog-style.css') }}" rel="stylesheet">  
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">  
    <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">  
    <!-- Manifest-->
    <link rel="manifest" href="{{asset('/manifest.json')}}">
    <meta name="theme-color" content="#317EFB"/>
    <link rel="apple-touch-icon" href="{{asset('/assets/icons/icon-192.png')}}">
</head>

<body>
    <header>
        <div class="container-fluid border-bottom border-white">            
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="/">
                    <!-- <img src="/assets/logo.png" width="30%" class="img-fluid" alt="IOEentrance-logo"> -->
                    IOEentrance
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span><i class="fas fa-bars"></i></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarNav">
                    <div class="mr-auto"></div>
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Syllabus
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/">Physics</a>
                                <a class="dropdown-item" href="/">Chemistry</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">Pages</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/blog">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">Fact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">About</a>
                        </li>
                        @if (Route::has('login'))
                            @auth
                                @if(Auth::user()->role->name=='Admin')
                                <li class="nav-item">
                                    <a class="nav-link btn btn-outline-info" href="{{route('home') }}">Dashboard</a>
                                </li>
                                @elseif(Auth::user()->role->name=='subAdmin')
                                <li class="nav-item">
                                    <a class="nav-link btn btn-outline-info" href="{{route('home') }}">Dashboard</a>
                                </li>
                                @elseif(Auth::user()->role->name=='Subscriber')
                                <li class="nav-item">
                                    <a class="nav-link btn btn-outline-info" href="{{route('subscriber') }}">Dashboard</a>
                                </li>
                                @endif                                   
                            @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Account
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                                    @if (Route::has('register'))
                                    <a class="dropdown-item" href="{{ route('register') }}">Register</a>  
                                    @endif                                                                         
                                </div>
                            </li>
                            @endauth                
                         @endif                        
                    </ul>
                </div>
            </nav>
        </div>
        @yield('content')       
    </header>

    @yield('main')

    <footer>
        <div class="container-fluid p-0">
            <div class="row text-left">
                <div class="col-md-5">
                    <h1 class="text-light">About us</h1>
                    <p class="text-secondary">Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                </div>
                <div class="col-md-5">
                    <h4 class="text-light">Newsletter</h4>
                    <p class="text-muted md">Stay Updated</p>
                    <form action="" class="form-inline">
                        <div class="col pl-2">
                            <div class="input-group pr-5">
                                <input type="text" class="form-control bg-dark text-white"
                                    placeholder="Enter Your Email Here..">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-2 col-sm-12">
                    <h4 class="text-light">Follow Us</h4>
                    <p class="text-muted">Let us be social</p>
                    <div class="column">
                        <i class="fab fa-facebook"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-youtube"></i>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <h5 class="text-left text-muted col-md-10">
                    Copyright ©2020 All rights reserved | This website is made by
                    <span>BR Creations</span>
                </h5>
                <div class="move-up col-md-2 text-right">
                    <span><i class="fas fa-arrow-circle-up fa-2x"></i></span>
                </div>
            </div>
        </div>
    </footer>


    <!--Fontawesome-->
    <script src="https://kit.fontawesome.com/2fe76bb6c2.js" crossorigin="anonymous"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <!-- Optional JavaScript -->    
    <script src="{{ asset('js/appsw.js') }}"></script>
    <!-- Scripts -->
    @yield('script')
    <script>
        let nCount = selector => {
            $(selector).each(function () {
                $(this)
                    .animate({
                        Counter: $(this).text()
                    }, {
                        // A string or number determining how long the animation will run.
                        duration: 4000,
                        // A string indicating which easing function to use for the transition.
                        easing: "swing",
                        /**
                         * A function to be called for each animated property of each animated element. 
                         * This function provides an opportunity to
                         *  modify the Tween object to change the value of the property before it is set.
                         */
                        step: function (value) {
                            $(this).text(Math.ceil(value));
                        }
                    });
            });
        };

        let a = 0;
        $(window).scroll(function () {
            // The .offset() method allows us to retrieve the current position of an element  relative to the document
            let oTop = $(".numbers").offset().top - window.innerHeight;
            if (a == 0 && $(window).scrollTop() >= oTop) {
                a++;
                nCount(".rect > h1");
            }
        });



        // click to scroll top
        $('.move-up span').click(function () {
            $('html, body').animate({
                scrollTop: 0
            }, 1000);
        })
        /**
         *
         *  sticky navigation
         *
         */

        let navbar = $(".navbar");

        $(window).scroll(function () {
            // get the complete hight of window
            let oTop = $(".section-2").offset().top - window.innerHeight;
            if ($(window).scrollTop() > oTop) {
                navbar.addClass("sticky");
            } else {
                navbar.removeClass("sticky");
            }
        });

    </script>
</body>

</html>
