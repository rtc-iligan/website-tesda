<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name='referrer' content='origin-when-cross-origin'/>
        <title>TESDA/RTC-Iligan</title>
        <link rel="icon" href="https://rtciligan.com/asset/img/core-img/tesdalogofinal.ico">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{asset('stack/css/stack-interface.css')}}" rel="stylesheet" type="text/css" media="all">
        <link href="{{asset('stack/css/socicon.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('stack/css/iconsmind.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('stack/css/flickity.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('stack/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('stack/css/stack-interface.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('stack/css/theme.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700" rel="stylesheet" type="text/css">
        <link href="{{asset('stack/css/font-roboto.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/frontend.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/reservation.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.20.0/css/mdb.min.css">
        <link rel="stylesheet" type="text/css" href="">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    </head>
   
    <body data-smooth-scroll-offset="77" oncontextmenu="return false">
        <div class="container-fluid --theme-color --section-hdr" >
            <div class="row --section-hdr-hidden-xs">
                <div class="col-md-9 col-sm-5 text-right">
                    <a href="https://www.facebook.com/TESDAXOfficial"><i class="fa-brands fa-facebook-f --fs20 text-white mt-3 ml-3"></i></a>
                    <i class="fa-brands fa-twitter --fs20 text-white mt-3 ml-3"></i>
                    <a href="https://www.youtube.com/@tesdaregionx1792"><i class="fa-brands fa-youtube --fs20 text-white mt-3 ml-3"></i></a>
                </div>
                <div class="col-md-3 col-sm-3">
                    <input type="text" placeholder=""class="form-control mt-2 --size-hdr-in" style="width:290px;height:35px;" placeholder="">
                </div>
            </div>
            <div class="row g-2 --hide-dsk">
                <div class="col-sm-12 col-sm-5 text-right">
                    <input type="text" class="form-control mt-2" style="width:210px;height:32px;float:right;">
                    <a href="https://www.facebook.com/TESDAXOfficial"><i class="fa-brands fa-facebook-f --fs20 text-white mt-3 ml-3"></i></a>
                    <i class="fa-brands fa-twitter --fs20 text-white mt-3 ml-3"></i>
                    <a href="https://www.youtube.com/@tesdaregionx1792"><i class="fa-brands fa-youtube --fs20 text-white mt-3 ml-3 mr-3"></i></a>
                </div>
            </div>
        </div>
        <div class="nav-container " >
            <div class="via-1641870894008" via="via-1641870894008" vio="Home">
                <div class="bar bar--sm visible-xs">
                    <div class="container">
                        <div class="row">
                            <div class="col-3 col-md-2">
                                <a href="{{URL::to('/')}}"> <img class="logo logo-dark " alt="logo" src="{{asset('img/logoheader.png')}}" > <img class="logo logo-light " alt="logo" src="{{asset('img/logoheader.png')}}"> </a>
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
                            <div class="col-lg-1 col-md-2 hidden-xs" >
                                <div class="bar__module">
                                    <a href="{{URL::to('/')}}"> <img class="logo logo-dark" alt="logo" src="{{asset('img/logoheader.png')}}"> <img class="logo logo-light" alt="logo" src="{{asset('img/logoheader.png')}}"> </a>
                                </div>
                            </div>
                            <div class="col-lg-11 col-md-12 text-right text-left-xs text-left-sm">
                                <div class="bar__module">
                                    <ul class="menu-horizontal text-left --avt-fs5">
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
                                                        <div class="dropdown__content col-lg-2" style="width:350px !important;">
                                                            <ul class="menu-vertical">
                                                                <li> <a href="{{URL::to('utpras-directory')}}">UTPRAS Directory</a></li>
                                                                <li> <a href="{{URL::to('cac')}}">Competency Assessment & Certification</a></li>
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
                                                        <div class="dropdown__content col-lg-2" style="width:250px !important;">
                                                            <ul class="menu-vertical">
                                                                <li> <a href="{{URL::to('/transparencyseals')}}">Transparency Seal</a> </li>
                                                            </ul>
                                                            <ul class="menu-vertical">
                                                                <li> <a href="{{URL::to('/citizenscharter')}}">Citizen Charter</a> </li>
                                                            </ul>
                                                            <ul class="menu-vertical">
                                                                <li> <a href="{{URL::to('/philgeps')}}">Philgeps</a> </li>
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
                                                                <li> <a href="{{URL::to('/reservations')}}">Online Reservation</a> </li>
                                                            </ul>
                                                            <ul class="menu-vertical">
                                                                <li> <a href="{{URL::to('/requirements')}}">Requirements</a> </li>
                                                            </ul>
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
                                        Links
                                        </span>
                                            <div class="dropdown__container">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="dropdown__content col-lg-2">
                                                            <ul class="menu-vertical">
                                                                <li> <a href="https://www.tesda.gov.ph/">TESDA</a> </li>
                                                            </ul>
                                                            <ul class="menu-vertical">
                                                                <li> <a href="https://tesdaregion10.ph/">TESDA X</a> </li>
                                                            </ul>
                                                            <ul class="menu-vertical">
                                                                <li> <a href="https://e-tesda.gov.ph/">e-TESDA</a> </li>
                                                            </ul>
                                                            <ul class="menu-vertical">
                                                                <li> <a href="https://bsrs.tesda.gov.ph/">BSRS</a> </li>
                                                            </ul>
                                                            <ul class="menu-vertical">
                                                                <li> <a href="https://s2sacademy.com/">S2S Academy</a> </li>
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
        <div class="sticky-quick-links" data-toggle="modal" data-target="#sticky-quick-links">
        <p class="quick-links">QUICK LINKS</p>
    </div>
    <div class="modal fade" id="sticky-quick-links" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 mt-3"><a class="d-flex align-items-center" target="_blank" href="{{URL::to('/reservations')}}"><i class="fa-solid fa-link text-dark mr-2"></i> Online Reservation</a></div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mt-3"><a class="d-flex align-items-center" target="_blank" href="{{URL::to('/requirements')}}"><i class="fa-solid fa-link text-dark mr-2"></i> Enrolment Requirements</a></div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mt-3"><a class="d-flex align-items-center" target="_blank" href="{{URL::to('/requirements')}}"><i class="fa-solid fa-link text-dark mr-2"></i> Assessment Requirements</a></div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mt-3"><a class="d-flex align-items-center" target="_blank" href="https://www.tesda.gov.ph/AssessmentCenters/"><i class="fa-solid fa-link text-dark mr-2"></i> Assessment Centers</a></div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mt-3"><a class="d-flex align-items-center" target="_blank" href="{{asset('docs/LearnersProfile.pdf')}}"><i class="fa-solid fa-link text-dark mr-2"></i> Registration Form</a></div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mt-3"><a class="d-flex align-items-center" target="_blank" href="{{asset('docs/AssessmentForm.pdf')}}"><i class="fa-solid fa-link text-dark mr-2"></i> Assessement Form</a></div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mt-3"><a class="d-flex align-items-center" target="_blank" href="https://bsrs.tesda.gov.ph/"><i class="fa-solid fa-link text-dark mr-2"></i> Biometric-Enabled Scholarship Registration System (BSRS)</a></div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mt-3"><a class="d-flex align-items-center" target="_blank" href="{{asset('docs/Brochure.pdf')}}"><i class="fa-solid fa-link text-dark mr-2"></i> Brochure</a></div>
                </div>
            </div>
        </div>
    </div>
    </div>
        <div class="main-container">
            @yield('content')
        </div>
            <footer class="footer-4 space--sm text-center-xs ft-ht" style="background-color: #1835a6 !important;">
                <div class="container --avt-fs5">
                    <div class="row" style="overflow-x:hidden !important;">
                        <div class="col-sm-4 tesda-md ">
                           <img alt="Image"  src="{{asset('img/footer.png')}}" alt="">
                        </div>
                        <!-- <div class="col-sm-2 rtciligan-md">
                           <img alt="Image" width="110" height="100" src="{{asset('img/rtciligan.png')}}" alt="">
                        </div>
                        <div class="col-sm-2 trans-md">
                            <img alt="Image" width="100" height="100" src="{{asset('img/transparencyseal.png')}}" alt="">
                        </div> -->
                        <div class="col-sm-2 col-md-2 col-xs-4 link1-md">
                            <h6 class="type--uppercase usl text-white --avt-bold --fs15">USEFUL LINKS</h6>
                            <ul class="list--hover text-white">
                                <li><a class="ftr-wht" href="httprtciligan.com">Home</a></li>
                                <li><a class="ftr-wht" href="rtciligan.com/mission-vision">About</a></li>
                                <li><a class="ftr-wht" href="rtciligan.com/utpras-directory">Program & Services</a></li>
                                <li><a class="ftr-wht" href="rtciligan.com/reservations">Online Reservation</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-2 col-md-2 col-xs-4 link2-md mb-ot">
                            <h6 class="type--uppercase text-white --avt-bold --fs15">OTHER LINKS</h6>
                            <ul class="list--hover">
                                <li><a class="ftr-wht" href="rtciligan.com/contact-us">Quick Survey</a></li>
                                <li><a class="ftr-wht" href="https://tesda.gov.ph/Directory/TTI">TTI Directory</a></li>
                                <li><a class="ftr-wht" href="https://www.tesda.gov.ph/AssessmentCenters/">Assessment Center</a></li>
                                <li><a class="ftr-wht" href="https://e-tesda.gov.ph/">Online Program</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 --hide-mobile" style="float:right;">
                            <div class="row">
                            <img src="{{asset('img/transparencyseal.png')}}" alt="" style="height:150px;width:170px;">
                            <img src="{{asset('img/seal.png')}}" alt="" style="height:150px;width:170px;">
                            </div>
                            <!-- <h4 class="ftr-wht  --avt-bold --fs20">Transparency Seal</h4> -->
                        </div>
                    </div>
                </div>
            </footer>
            <div style="background-color: #191919 !important;height:65px !important;" >
                <div class="text-center" style="">
                    <div class="col-sm-12 text-white  "><br>
                        <a href="http://ict.rtciligan.com" class="text-white --avt-bold --fs20 " >
                                <span class="type--fine-print" >© Copyright 2022, ICT RTC-ILIGAN</span> 
                        </a>
                    </div>
                </div>
            </div>
        
         @yield('scripts')
         <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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

    //   var errors = $('.alert-errors').length;
    //   var html_errors = $('#html_errors').val();
    //   if(errors){
    //       swal ({
    //           text: html_errors,
    //           icon: 'error',
    //           button: 'OK',
    //       });
    //   }

    //   $('.logout-link').on('click', function(e) {
    //     $(this).closest('form').submit();
    //   })
    </script>
        <script src="{{asset('stack/js/jquery-3.1.1.min.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="{{asset('stack/js/parallax.js')}}"></script>
        <script src="{{asset('stack/js/smooth-scroll.min.js')}}"></script>
        <script src="{{asset('stack/js/scripts.js')}}"></script>
        <script src="{{asset('stack/js/flickity.min.js')}}"></script>
        <script src="{{asset('js/reservation.js')}}"></script>
        <script src="{{asset('js/frontend.js')}}"></script>
        <script src="{{asset('stack/js/isotope.min.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        
    </body>
</html>