<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'IOEentrance') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/toastr.min.js') }}"></script>
    <script src="https://kit.fontawesome.com/2fe76bb6c2.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">
</head>
<body>
    
    <div id="app">        
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'IOEentrance') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fas fa-user-circle"></i>   {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
                <div class="container">
                    <div class="row">
                        @if(Auth::check())  
                                            
                            <div class="col-lg-4">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <a href="{{route('subscriber')}}"><span><i class="fas fa-home"></i></span>  Home</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#"><span><i class="fas fa-address-card"></i></span> View Profile</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="/admin/examsurvey"><span><i class="fas fa-laptop-code"></i></i></span>  Take Exam</a>
                                        </li>                                  
                                    <li class="list-group-item">
                                        <a href="#"><span><i class="fas fa-user-cog"></i></span>  Setting</a>
                                    </li>                            
                                
                                </ul>
                            </div>
                            <div class="col-lg-8">
                                @yield('content')
                            </div>
                      @else
                        <div class="col-lg-12">
                            @yield('content')
                        </div>
                        @endif
                    </div>
                </div>
        </main>
    </div>
    <script>
    @if(Session::has('success'))

        toastr.success('{{Session::get('success')}}')

    @endif
    </script>
</body>
</html>
