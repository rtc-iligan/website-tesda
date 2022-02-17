<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-toaster@4.0.1/css/bootstrap-toaster.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}" >
                    <img class="logo logo-light" alt="logo" src="{{asset('img/logoheader.png')}}" height="25"> 
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/home') }}">{{ __('Home') }}</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ __('Media') }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('gallery.index') }}">
                                            {{ __('Gallery') }}
                                        </a>
                                        <a class="dropdown-item" href="{{ route('personnel.index') }}">
                                            {{ __('Personnel') }}
                                        </a>
                                        <a class="dropdown-item" href="{{ route('news.index') }}">
                                            {{ __('News&Updates') }}
                                        </a>
                                       
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="">{{ __('Qualification') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="">{{ __('Reservation') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="">{{ __('Announcement') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="{{ route('transparencyseal.index') }}">{{ __('Transparency') }}</a>
                                </li>
                                 <li class="nav-item">
                                    <a class="nav-link " href="">{{ __('Schedule') }}</a>
                                </li>
                            </ul>
                        </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @can('view_users')
                                        <a class="dropdown-item" href="{{ route('accounts.index') }}">
                                            {{ __('Accounts') }}
                                        </a>
                                    @endcan
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
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
            @yield('content')
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
    @yield('scripts')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-toaster@4.0.1/js/bootstrap-toaster.min.js"></script>
    <script type="text/javascript">
            let success = "{{ Session::get('success') }}"
            if(success) {
                Toast.setTheme(TOAST_THEME.DARK);
                Toast.create('Success', success,TOAST_STATUS.SUCCESS, 10000);
                // alert(success);
            }
            let error = "{{ Session::get('error') }}"
            if(error) {
                Toast.setTheme(TOAST_THEME.DARK);
                Toast.create('Error', error,TOAST_STATUS.DANGER, 10000);
            }
            let info = "{{ Session::get('info') }}"
            if(info) {
                Toast.setTheme(TOAST_THEME.DARK);
                Toast.create('Warning', info,TOAST_STATUS.WARNING, 10000);
            }
            $(document).on('click','.close', function(e) {
                $('.modal').modal('hide');
            })
        </script>
</body>
</html>
