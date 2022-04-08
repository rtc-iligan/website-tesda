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
                    <p style="font-size: 18px;font-weight: bold;"> 
                        We are glad and thankful that you take the time to visit our website is a window to our institution. We hope that you will find the information here as useful as we believe it is. Here, we offer a place to connect us amidst todays challenges. We're proud of our hardworking team we have believe that together we can achieve our goal to deliver quality technical vocational education.<br><br>RTC-Iligan believes in the power in the power of education and we are very exicited to share our resources with you. Feel free to look around and don't hesitate to reach out if there's anything we can help you with. </p>
                    <h5>Maynard C. Jumawan</h5> <span>Acting Center Administrator of RTC-Iligan</span> </div>
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
                    <p>The transformational leader in the Techinical Education and Skills Development of the filipino workforce. </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature">
                    <h4>Vision</h4>
                    <p> TESDA sets direction, promulgates relevant standards, and implements programs geared towards a quality-assured and inclusive Technical Education and Skills Development and Certification System. </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature">
                    <h4>Values Statement</h4>
                    <p>We believe in demonstrated competence, institutional integrity, personal commitment, culture of innovativeness and a deep sense of nationalism. </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature">
                    <h4>What is TWSP?</h4>
                    <p> Training for Work Scholarship Programor TWSP, is a TESDA-initiative that is geared towards “filling up the skills gap and job requirements of priority industries and sectors with high employment demand (i.e. IT, semiconductor and electronics, automotive, etc.)—supportive of the government’s thrust of rapid, inclusive and sustained economic growth.” </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature">
                    <h4>What is UAQETA?</h4>
                    <p> RA 10931: "Universal Access to Quality Tertiary Education Act" An Act promoting Universal Access to Quality Tertiary Education by providing for FREE tuition and other school fees in State Universities and Colleges , Local Universities and Colleges and State-run Technical-Vocational Institutions, Establishing the Tertiary Education Subsidy and Student loan program, strengthening the Unified Student Financial Assistance System for Tertiary Education, and appropriating fund thereof. </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature">
                    <h4>What is STEP?</h4>
                    <p> Special Training for Employment Program or STEP, it is a community-based specialty training program that seeks to address the specific needs of the communities and promote employment, particularly, through entrepreneurial, self-employment and service oriented activities. </p>
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
