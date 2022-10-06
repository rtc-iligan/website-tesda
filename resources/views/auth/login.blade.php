<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="stack/css/socicon.css" rel="stylesheet" type="text/css" media="all" />
        <link href="stack/css/iconsmind.css" rel="stylesheet" type="text/css" media="all" />
        <link href="stack/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="stack/css/stack-interface.css" rel="stylesheet" type="text/css" media="all" />
        <link href="stack/css/theme.css" rel="stylesheet" type="text/css" media="all" />
        <link href="stack/css/custom.css" rel="stylesheet" type="text/css" media="all" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700" rel="stylesheet">

    </head>
   
    <body data-smooth-scroll-offset="77">
        <div class="nav-container"> </div>
        <div class="main-container" >
            <section class="imageblock switchable feature-large height-100">
             
                <div class="container pos-vertical-center">
                    <div class="row">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4 col-md-7">
                           <div class="card">
                           <div class="text-center">
                                 <img src="img/rtclogo.png" width="120" height="90"  alt="...">
                            </div>
                           
                            <hr data-title="Welcome to RTC Iligan Portal">
                           <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-12"> <input type="email" name="email" placeholder="Email Address"> </div>
                                    <div class="col-12"> <input type="password" name="password" placeholder="Password"> </div>
                                    <div class="col-12"> <button type="submit" class="btn btn--primary type--uppercase">Login</button> </div>
                                    <div class="col-12"> <span class="type--fine-print">By signing in, you agree to the <a href="#">Terms of Service</a></span> </div>
                                </div>
                            </form>
                           </div>
                        </div>
                        <div class="col-lg-4"></div>
                    </div>
                </div>
            </section>
        </div>
        <script src="stack/js/jquery-3.1.1.min.js"></script>
        <script src="stack/js/parallax.js"></script>
        <script src="stack/js/smooth-scroll.min.js"></script>
        <script src="stack/js/scripts.js"></script>

    </body>

</html>