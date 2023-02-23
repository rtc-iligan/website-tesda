<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>TESDA/ RTC-ILIGAN</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-toaster@4.0.1/css/bootstrap-toaster.min.css" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/frontend.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/> --}}
</head>
<body>
    <div>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container mt-2 mb-2">
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
                                
                               @can('view_qualification')
                               <li class="nav-item">
                                    <a class="nav-link " href="{{ route('qualification.index') }}">{{ __('Qualification') }}</a>
                                </li>
                               @endcan
                               @can('view_reservation') 
                               <li class="nav-item">
                                    <a class="nav-link "  href="{{ route('reservation.index') }}">{{ __('Reservation') }}</a>
                                </li>
                               @endcan
                               @can('view_announcement')
                               <li class="nav-item">
                                    <a class="nav-link " href="{{ route('announcement.index') }}">{{ __('Announcement') }}</a>
                                </li>
                               @endcan
                               @can('view_transparency')
                                 <li class="nav-item">
                                    <a class="nav-link " href="{{ route('transparencyseal.index') }}">{{ __('Transparency') }}</a>
                                </li>
                               @endcan
                               @can('view_media')
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
                                        <a class="dropdown-item" href="{{ route('successstories.index') }}">
                                            {{ __('Success Stories') }}
                                        </a>
                                    </div>
                                </li>
                               @endcan
                               @can('view_assessment')
                               <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ __('Assessment') }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('schedule.index') }}">
                                            {{ __('Schedule') }}
                                        </a>
                                        <a class="dropdown-item"  href="{{ route('accredited.index') }}">
                                            {{ __('Acc. Qualification') }}
                                        </a>
                                    </div>
                                </li>
                               @endcan
                                
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
                                    @can('view_accounts')
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

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @yield('scripts')
    <script type="text/javascript">      
      var success = "{{ Session::get('success') }}";
      if (success) {
          swal ({
              text: success,
              icon: 'success',
              button: 'OK',
          });
      }

      var deleted = "{{ Session::get('deleted') }}";
      if (deleted) {
          swal ({
              text: deleted,
              icon: 'error',
              button: 'OK',
          });
      }

      var error = "{{ Session::get('error') }}";
      if (error) {
          swal ({
              text: error,
              icon: 'error',
              button: 'OK',
          });
      }

      var danger = "{{ Session::get('flash_danger') }}";
      if (danger) {
          swal ({
              text: danger,
              icon: 'error',
              button: 'OK',
          });
      }

      var warning = "{{ Session::get('warning') }}";
      if (warning) {
          swal ({
              text: warning,
              icon: 'info',
              button: 'OK',
          });
      }

      var errors = $('.alert-errors').length;
      var html_errors = $('#html_errors').val();
      if(errors){
          swal ({
              text: html_errors,
              icon: 'error',
              button: 'OK',
          });
      }

      $('.logout-link').on('click', function(e) {
        $(this).closest('form').submit();
      })
    </script>
</body>
</html>
