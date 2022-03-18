@extends('layouts.frontend')
@section('content')
<section class="text-center cta cta-4 space--xxs border--bottom" style="background-image: url('img/login.jpg');background-repeat: no-repeat;">
    <div class="container ">
        <div class="row">
            <div class="col-md-12">
             <span class="lead" style="font-size: 22px;float: left;">Success Stories</span> 
            </div>
        </div>
    </div>
</section>
<section class="switchable feature-large">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-6 col-12">
                <div class="video-cover border--round box-shadow-wide">
                    <div class="background-image-holder"> <img alt="image" src="img/blog-3.jpg"> </div>
                    <div class="video-play-icon"></div> <iframe src="https://www.youtube.com/embed/pujwfwYVo0Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> </div>
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="switchable__text">
                    <h2>Erwin H. Pitogo TVET Graduate</h2>
                    <p class="lead"> Launching an attractive and scalable website quickly and affordably is important for modern startups — Stack offers massive value without looking 'bargain-bin'. </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-between align-items-center">
        	<div class="col-md-6 col-lg-5">
                <div class="switchable__text"> 
                    <h2>Oseas G. Jesto Jr. TVET Graduate</h2>
                    <p class="lead"> Launching an attractive and scalable website quickly and affordably is important for modern startups — Stack offers massive value without looking 'bargain-bin'. </p>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="video-cover border--round box-shadow-wide">
                    <div class="background-image-holder"> <img alt="image" src="img/blog-3.jpg"> </div>
                    <div class="video-play-icon"></div> <iframe  src="https://www.youtube.com/embed/ZUQOD0vQD68" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('scripts')
   
@endsection