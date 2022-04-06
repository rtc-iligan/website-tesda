@extends('layouts.frontend')
@section('content')
<section class="cover cover-features imagebg space--lg" data-overlay="3">
    <div class="background-image-holder"> <img alt="background" src="{{asset('stack/img/rtcpersonnel.jpg')}}"> </div>
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-lg-7 ">
                <h1>Welcome to RTC-ILIGAN</h1>
                <p class="lead">"You bring the effort, we deliver result"</p>
                <p class="lead"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4" >
                <a href="{{URL::to('/reservation')}}">
                    <div class="feature feature-2 boxed boxed--border bg--white" > <i class="icon icon-Clock-Back color--primary"></i>
                        <div class="feature__body">
                            <p> <b>Online Reservation</b> ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{URL::to('/requirements')}}">
                    <div class="feature feature-2 boxed boxed--border bg--white"> <i class="icon icon-Duplicate-Window color--primary"></i>
                        <div class="feature__body">
                            <p> <b>Enrollment Requirements</b> ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <div class="feature feature-2 boxed boxed--border bg--white"> <i class="icon icon-Life-Jacket color--primary"></i>
                    <div class="feature__body">
                        <p> <b>Assessement Schedule</b> ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.  </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-6">
                <h4><b>TESDA REGIONAL TRAINING CENTER - ILIGAN</b> </h4>
                <p class="lead"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
            <div class="col-md-6">
                <div class="boxed boxed--lg boxed--border bg--secondary"> <img alt="image" src="{{asset('img/IMG-2891.jpg')}}" class="border--round">
                    <h5>RTC-Iligan Employees Corporate Photo</h5>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="space--sm unpad--bottom switchable text-center testimonial testimonial-1 imagebg" data-overlay="4">
    <div class="background-image-holder"> <img alt="background" src="{{asset('img/tesda2.jpg')}}"> </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-5"> <img alt="Image" src="{{asset('img/mcj.png')}}"> </div>
            <div class="col-md-6">
                <div class="switchable__text">
                    <blockquote> “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.” </blockquote>
                    <h5>Maynard Jumawan</h5> <span>OIC Center Administrator</span> </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="feature">
                    <h4>Mission</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature">
                    <h4>Vision</h4>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature">
                    <h4>Values Statement</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature">
                    <h4>What is TWSP?</h4>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature">
                    <h4>What is UAQETA?</h4>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature">
                    <h4>What is STEP?</h4>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="video video-1 text-center imagebg" data-overlay="4">
    <div class="background-image-holder"> <img alt="background" src="{{asset('stack/img/rtcpersonnel.jpg')}}"> </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="modal-instance">
                    <div class="video-play-icon video-play-icon--sm modal-trigger box-shadow"></div>
                    <div class="modal-container">
                        <div class="modal-content bg-dark" data-width="60%" data-height="60%"> <iframe data-src="{{asset('video/tesda.mp4')}}" allowfullscreen="allowfullscreen"></iframe> </div>
                    </div>
                </div>
                <h2> TESDA ANNIVERSARY CELEBRATION 2021 </h2>
            </div>
        </div>
    </div>
</section>
<section class="switchable">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-6 col-md-7 col-12">
                <div class="map-container"> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.1707017070385!2d124.19891061428632!3d8.185552994108665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32559e525aa49ec5%3A0x99779af895c10d1e!2sTESDA%20REGIONAL%20TRAINING%20CENTER!5e0!3m2!1sen!2sph!4v1573454410063!5m2!1sen!2sph" width="900" height="600" frameborder="0" style="border:1;" allowfullscreen=""></iframe> </div>
            </div>
            <div class="col-lg-5 col-md-5">
                <div class="switchable__text">
                    <h3>National Highway<br>Maria Cristina, Iligan City 9200</h3>
                    <p class="lead"> Email: <a href="#">rtciligan@tesda.gov.ph</a><br> P: +63 223 6542  / +63 223 6541</p>
                    <p class="lead"> Give us a call or drop by anytime, we endeavour to answer all enquiries within 8 hours on business days. </p>
                    <p class="lead"> We are open from 8am — 5pm week days. </p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@section('scripts')

@endsection
