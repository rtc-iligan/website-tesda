@extends('layouts.frontend')
@section('content')
<section class="text-center cta cta-4 space--xxs border--bottom" style="background-image: url('img/login.jpg');background-repeat: no-repeat;">
    <div class="container ">
        <div class="row">
            <div class="col-md-12">
             <span class="--avt-bold --txt-r --fs25">Location Map</span> 
            </div>
        </div>
    </div>
</section>
<section class="text-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-12 mb-5">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.1707017070385!2d124.19891061428632!3d8.185552994108665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32559e525aa49ec5%3A0x99779af895c10d1e!2sTESDA%20REGIONAL%20TRAINING%20CENTER!5e0!3m2!1sen!2sph!4v1573454410063!5m2!1sen!2sph" width="900" height="600" frameborder="0" style="border:1;" allowfullscreen=""></iframe>
            </div>
            <div class="col-md-8 col-lg-6 col-12">
                <h3 class="--avt-fs4">National Highway<br>Maria Cristina, Iligan City 9200</h3>
                <p class="--avt-fs4"> E: <a href="#">rtciligan@tesda.gov.ph</a><br> P: +63 223 6541 / +63 223 6542</p>
                <p class="--avt-fs4"> Give us a call or drop by anytime, we endeavour to answer all enquiries within 8 hours on business days. </p>
                <p class="--avt-fs4"> We are open from 8am — 5pm week days. </p>
            </div>
        </div>
    </div>
</section>
@endsection
@section('scripts')
   
@endsection