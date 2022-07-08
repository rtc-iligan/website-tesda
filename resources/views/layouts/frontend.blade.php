<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>TESDA/RTC-Iligan</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{asset('stack/css/stack-interface.css')}}" rel="stylesheet" type="text/css" media="all">
        <link href="{{asset('stack/css/socicon.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('stack/css/iconsmind.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('stack/css/flickity.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('stack/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('stack/css/stack-interface.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('stack/css/theme.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('stack/css/custom.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700" rel="stylesheet" type="text/css">
        <link href="{{asset('stack/css/font-roboto.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/frontend.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/reservation.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    </head>
   
    <body data-smooth-scroll-offset="77" oncontextmenu="return false">
        <div class="nav-container">
            <div class="via-1641870894008" via="via-1641870894008" vio="Home">
                <div class="bar bar--sm visible-xs">
                    <div class="container">
                        <div class="row">
                            <div class="col-3 col-md-2">
                                <a href="{{URL::to('/')}}"> <img class="logo logo-dark" alt="logo" src="{{asset('img/logoheader.png')}}"> <img class="logo logo-light" alt="logo" src="{{asset('img/logoheader.png')}}"> </a>
                            </div>
                            <div class="col-9 col-md-10 text-right">
                                <a href="{{URL::to('/')}}" class="hamburger-toggle" data-toggle-class="#menu1;hidden-xs hidden-sm"> <i class="icon icon--sm stack-interface stack-menu"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <nav id="menu1" class="bar bar-1 hidden-xs">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-1 col-md-2 hidden-xs">
                                <div class="bar__module">
                                    <a href="{{URL::to('/')}}"> <img class="logo logo-dark" alt="logo" src="{{asset('img/logoheader.png')}}"> <img class="logo logo-light" alt="logo" src="{{asset('img/logoheader.png')}}"> </a>
                                </div>
                            </div>
                            <div class="col-lg-11 col-md-12 text-right text-left-xs text-left-sm">
                                <div class="bar__module">
                                    <ul class="menu-horizontal text-left">
                                        <li> 
                                            <a href="{{URL::to('/')}}">Home</a>
                                        </li>
                                       <li class="dropdown"> <span class="dropdown__trigger">
                                        About Us
                                        </span>
                                            <div class="dropdown__container">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="dropdown__content col-lg-3">
                                                            <ul class="menu-vertical">
                                                                <li> <a href="{{URL::to('mission-vision')}}">Mission&Vision</a> </li>
                                                            </ul>
                                                            <ul class="menu-vertical">
                                                                <li> <a href="{{URL::to('location-map')}}">Location Map</a> </li>
                                                            </ul>
                                                            <ul class="menu-vertical">
                                                                <li> <a href="{{URL::to('organizational-structure')}}">Organizational Structure</a> </li>
                                                            </ul>
                                                             <ul class="menu-vertical">
                                                                <li> <a href="{{URL::to('rtc-personnel')}}">RTC Personnel</a> </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="dropdown"> <span class="dropdown__trigger">
                                        Program & Services
                                        </span>
                                            <div class="dropdown__container">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="dropdown__content col-lg-2">
                                                            <ul class="menu-vertical">
                                                                <li> <a href="{{URL::to('utpras-directory')}}">UTPRAS Directory</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="dropdown"> <span class="dropdown__trigger">
                                        Transparency
                                        </span>
                                            <div class="dropdown__container">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="dropdown__content col-lg-2">
                                                            <ul class="menu-vertical">
                                                                <li> <a href="#">Transparency Seal</a> </li>
                                                            </ul>
                                                            <ul class="menu-vertical">
                                                                <li> <a href="#">Citizen Charter</a> </li>
                                                            </ul>
                                                            <ul class="menu-vertical">
                                                                <li> <a href="#">Philgeps</a> </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="dropdown"> <span class="dropdown__trigger">
                                        Others
                                        </span>
                                            <div class="dropdown__container">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="dropdown__content col-lg-3">
                                                            <ul class="menu-vertical">
                                                                <li> <a href="{{URL::to('/reservation')}}">Online Reservation</a> </li>
                                                            </ul>
                                                            <!-- <ul class="menu-vertical">
                                                                <li> <a href="{{URL::to('/contact-us')}}">Contact Us</a> </li>
                                                            </ul> -->
                                                            <ul class="menu-vertical">
                                                                <li> <a href="{{URL::to('/galleries')}}">Gallery</a> </li>
                                                            </ul>
                                                            <ul class="menu-vertical">
                                                                <li> <a href="{{URL::to('/newsupdates')}}">News and Updates</a> </li>
                                                            </ul>
                                                            <ul class="menu-vertical">
                                                                <li> <a href="{{URL::to('/success-stories')}}">Success Stories</a> </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="dropdown"> <span class="dropdown__trigger">
                                        Online Course
                                        </span>
                                            <div class="dropdown__container">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="dropdown__content col-lg-2">
                                                            <ul class="menu-vertical">
                                                                <li> <a href="#">Single Link</a> </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                   
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="main-container">
            @yield('content')
        </div>
            <footer class="footer-4 space--sm text-center-xs ft-ht" style="background-color: gray !important;">
                <div class="container">
                    <div class="row" style="overflow-x:hidden !important;">
                        <div class="col-sm-2 tesda-md">
                           <img alt="Image" width="90" height="100" src="{{asset('img/tesdanew.png')}}" alt="">
                        </div>
                        <div class="col-sm-2 rtciligan-md">
                           <img alt="Image" width="110" height="100" src="{{asset('img/rtciligan.png')}}" alt="">
                        </div>
                        <div class="col-sm-2 trans-md">
                            <img alt="Image" width="100" height="100" src="{{asset('img/transparencyseal.png')}}" alt="">
                        </div>
                        <div class="col-sm-3 col-md-3 col-xs-6 link1-md">
                            <h6 class="type--uppercase usl">USEFUL LINKS</h6>
                            <ul class="list--hover text-white">
                                <li><a class="ftr-wht" href="#">Home</a></li>
                                <li><a class="ftr-wht" href="#">About</a></li>
                                <li><a class="ftr-wht" href="#">Program & Services</a></li>
                                <li><a class="ftr-wht" href="#">Online Reservation</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-3 col-md-3 col-xs-6 link2-md">
                            <h6 class="type--uppercase">TESDA OTHER LINKS</h6>
                            <ul >
                                <li><a class="ftr-wht" href="#">Quick Survey</a></li>
                                <li><a class="ftr-wht" href="#">TTI Directory</a></li>
                                <li><a class="ftr-wht" href="#">Assessment Center</a></li>
                                <li><a class="ftr-wht" href="#">Tesda Online Program(Free Training)</a></li>
                            </ul>
                        </div>
                         <div class="row text-center">
                        <div class="col-sm-12 text-white footer-gasa">
                           <a href="ict.rtciligan.com" class="text-white">
                                <span class="type--fine-print">© <span class="update-year"></span> ICT RTC-ILIGAN</span> 
                           </a>
                        </div>
                    </div>
                    </div>
                </div>
            </footer>
        </div>
         @yield('scripts')
        <script src="{{asset('stack/js/jquery-3.1.1.min.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="{{asset('stack/js/parallax.js')}}"></script>
        <script src="{{asset('stack/js/smooth-scroll.min.js')}}"></script>
        <script src="{{asset('stack/js/scripts.js')}}"></script>
        <script src="{{asset('stack/js/flickity.min.js')}}"></script>
        <script src="{{asset('js/reservation.js')}}"></script>
        <script src="{{asset('stack/js/isotope.min.js')}}"></script>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script type="text/javascript">    
        // Init AOS
        function aos_init() {
            AOS.init({
            });
        }
        $(window).on('load', function() {
            aos_init();
        });
        </script>
    </body>
</html>