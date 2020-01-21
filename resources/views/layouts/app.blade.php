<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>IOEentrance |Practice and Aim Higher</title>
    <title>{{ config('app.name', 'IOEentrance | Aim Higher') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/appsw.js') }}"></script>
    <script src="{{ asset('js/toastr.min.js') }}"></script>
    <script src="https://kit.fontawesome.com/2fe76bb6c2.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
     <!-- Manifest-->
     <link rel="manifest" href="{{asset('/manifest.json')}}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">
    <meta name="theme-color" content="#317EFB"/>
    <link rel="apple-touch-icon" href="{{asset('/assets/icons/icon-192.png')}}">
</head>
<body>
    
    <div id="app">        
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{-- <img src="{{ asset('assets/IOEentrance.png') }}" class="img-fluid" width="25%" alt="IOEentrance | Aim Higher">
                 --}}
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
                                    <i class="fas fa-user-circle"></i><span>{{ Auth::user()->name }} </span><span class="caret"></span>
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
                                        <a href="{{route('home')}}"><span><i class="fas fa-home"></i></span>  Home</a>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="btn-group dropright">
                                            <button type="button" class="btn btn-primary">
                                            <i class="fas fa-cubes"></i> Create categories
                                            </button>
                                            <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropright</span>
                                            </button>
                                            <div class="dropdown-menu">
                                            <!-- Dropdown menu links -->
                                               <a href="{{route('tag.create')}}" class="dropdown-item"><span><i class="fas fa-plus"></i></span>  Create new Tag</a>
                                                <a href="{{route('category.create')}}" class="dropdown-item"><span><i class="fas fa-plus"></i></span>  Create new subject category</a>
                                                <a href="#" class="dropdown-item"><span><i class="fas fa-plus"></i></span>  Create new sub-model category</a>
                                                <a href="#" class="dropdown-item"><span><i class="fas fa-plus"></i></span>  Create new model-chap category</a>
                                          </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="{{route('question.create')}}"><span><i class="fas fa-plus"></i></span>  Create new Question</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="{{route('questions')}}"><span><i class="fas fa-list-ul"></i></span>  Questions</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="{{route('categories')}}"><span><i class="fas fa-list-ul"></i></span>  Categories</a>
                                    </li>  
                                    <li class="list-group-item">
                                    <a href="{{route('tags')}}"><span><i class="fas fa-list-ul"></i></span>  Tags</a>
                                    </li> 
                                    <li class="list-group-item">
                                        <a href="{{route('users')}}"><span><i class="fas fa-users"></i></span>  Users</a>
                                    </li>  
                                    <li class="list-group-item">
                                        <a href="{{route('user.create')}}"><span><i class="fas fa-user-plus"></i></span>  Create new User</a>
                                    </li>
                                    <li class="list-group-item">
                                    <a href="{{route('examsurvey.create')}}"><span><i class="fas fa-laptop-code"></i></i></span>  Take Exam</a>
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
