@extends('layouts.frontend')

@section('content')
<section class="cover cover-features imagebg space--lg" data-overlay="3">
    <div class="background-image-holder">
     <img alt="background" class="--hide-dsk" src="{{asset('stack/img/rtcpersonnel.jpg')}}"> 
    <div class="--hide-mb">
        <div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('img/tesda2.jpg')}}" class="d-block w-100" alt="..." style="height:728px !important;">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('stack/img/rtcpersonnel.jpg')}}" class="d-block w-100" alt="..."  style="height:728px !important;">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('img/tesda3.png')}}" class="d-block w-100" alt="..."  style="height:728px !important;">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-lg-7 ">
                <h1>Welcome to RTC-ILIGAN</h1>
                <p class="lead">"You bring the effort, we deliver result"</p>
                <p class="lead"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 animated pulse infinite"  data-aos="fade-up" data-aos-duration="800" data-aos-delay="400" >
                <a href="{{URL::to('/reservations')}}">
                    <div class="feature feature-2 boxed boxed--border bg--white" > <i class="icon icon-Clock-Back color--primary"></i>
                        <div class="feature__body">
                            <p> <b>Online Reservation</b> ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4"  data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                <a href="{{URL::to('/requirements')}}">
                    <div class="feature feature-2 boxed boxed--border bg--white"> <i class="icon icon-Duplicate-Window color--primary"></i>
                        <div class="feature__body">
                            <p> <b>Enrollment Requirements</b> ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4"  data-aos="fade-up" data-aos-duration="800" data-aos-delay="800">
                <div class="feature feature-2 boxed boxed--border bg--white"> <i class="icon icon-Life-Jacket color--primary"></i>
                    <div class="feature__body">
                        <p> <b>Assessement</b> ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.  </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container-fluid mt-5">
    <div class="row justify-content-between">
        <div class="col-md-6"><br><br><br>
            <h5 class="text-center" ><b>TESDA REGIONAL TRAINING CENTER - ILIGAN</b> </h5>
            <p class="lead" style="font-size:15px;">
                 RTC-Iligan is a clean and green training institution amd is well managed by competent and dedicated personnel. The center 
                provides quality services to satisfy its client's specific needs.
            </p>
            <p style="">
                RTC-Iligan is ideally and well situated within the Iligan-Cagayan Corridor. It is 242 meters above sea level and has a sloping terrain from the southdowward. It is very accessible since it is only ten kilometers from the city proper and lies along the 
                national highway. There is availabilty of sufficient electricity since it taps its power directly to the National Transmission
                Corporation/National Power Corporation.
              
            </p>
            
        </div>
        <div class="col-md-6 "  data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
            <div class="boxed boxed--lg boxed--border bg--secondary"> <img alt="image" src="{{asset('img/IMG-2891.jpg')}}" class="border--round">
                <h5>RTC-Iligan Employees Corporate Photo</h5>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            </div>
        </div>
    </div>
</div>

<section class="space--sm unpad--bottom switchable text-center testimonial testimonial-1 imagebg" data-overlay="4">
    <div class="background-image-holder"> <img alt="background" src="{{asset('img/tesda2.jpg')}}"> </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-5"  data-aos="fade-right" data-aos-duration="800" data-aos-delay="400"> <img alt="Image" src="{{asset('img/mcj.png')}}"> </div>
            <div class="col-md-6"  data-aos="fade-left" data-aos-duration="800" data-aos-delay="400">
                <div class="switchable__text">
                    <p style="font-size: 18px;font-weight: bold;"> 
                        We are glad and thankful that you take the time to visit our website is a window to our institution. We hope that you will find the information here as useful as we believe it is. Here, we offer a place to connect us amidst todays challenges. We're proud of our hardworking team we have believe that together we can achieve our goal to deliver quality technical vocational education.<br><br>RTC-Iligan believes in the power in the power of education and we are very exicited to share our resources with you. Feel free to look around and don't hesitate to reach out if there's anything we can help you with. </p>
                    <h5>Maynard C. Jumawan</h5> <span>Acting Center Administrator of RTC-Iligan</span> </div>
            </div>
        </div>
    </div>
</section>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 "  data-aos="fade-up" data-aos-duration="800" data-aos-delay="400" style="align-items: center !important;display:flex !important;height:300px !important;background-color: #EDF6FF !important;">
                <div class="switchable__text text-center "  >
                    <h4 style="font-weight: bold;font-size: 18px;">Mission</h4>
                    <h6 style="font-size: 18px;">The transformational leader in the Techinical Education and Skills Development of the filipino workforce. </h6>
                </div>
            </div>
            <div class="col-md-4"  data-aos="fade-up" data-aos-duration="800" data-aos-delay="800" style="align-items: center !important;display:flex !important;height:300px !important;">
                <div class="switchable__text text-center">
                    <h4 style="font-weight: bold;font-size: 18px;">Vision</h4>
                    <h6 style="font-size: 18px;"> TESDA sets direction, promulgates relevant standards, and implements programs geared towards a quality-assured and inclusive Technical Education and Skills Development and Certification System. </h6>
                </div>
            </div>
            <div class="col-md-4  bg-light"  data-aos="fade-up" data-aos-duration="800" data-aos-delay="400" style="align-items: center !important;display:flex !important;height:300px !important;background-color: #EDF6FF !important;">
                <div class="switchable__text text-center">
                    <h4 style="font-weight: bold;font-size: 18px;">Values Statement</h4>
                    <h6 style="font-size: 18px;">We believe in demonstrated competence, institutional integrity, personal commitment, culture of innovativeness and a deep sense of nationalism. </h6>
                </div>
            </div>
            <div class="col-md-4"  data-aos="fade-up" data-aos-duration="800" data-aos-delay="800" style="align-items: center !important;display:flex !important;height:300px !important;">
                <div class="switchable__text text-center ">
                    <h4 style="font-weight: bold;font-size: 18px;">What is TWSP?</h4>
                    <h6 style="font-size: 18px;"> Training for Work Scholarship Programor TWSP, is a TESDA-initiative that is geared towards “filling up the skills gap and job requirements of priority industries and sectors with high employment demand (i.e. IT, semiconductor and electronics, automotive, etc.)—supportive of the government’s thrust of rapid, inclusive and sustained economic growth.” </h6>
                </div>
            </div>
            <div class="col-md-4  bg-light"  data-aos="fade-up" data-aos-duration="800" data-aos-delay="400" style="align-items: center !important;display:flex !important;height:300px !important;background-color: #EDF6FF !important;height:auto !important;">
                <div class="switchable__text text-center">
                    <h4 style="font-weight: bold;font-size: 18px;">What is UAQETA?</h4>
                    <h6 style="font-size: 18px;"> RA 10931: "Universal Access to Quality Tertiary Education Act" An Act promoting Universal Access to Quality Tertiary Education by providing for FREE tuition and other school fees in State Universities and Colleges , Local Universities and Colleges and State-run Technical-Vocational Institutions, Establishing the Tertiary Education Subsidy and Student loan program, strengthening the Unified Student Financial Assistance System for Tertiary Education, and appropriating fund thereof. </h6>
                </div>
            </div>
            <div class="col-md-4"  data-aos="fade-up" data-aos-duration="800" data-aos-delay="800" style="align-items: center !important;display:flex !important;height:300px !important;">
                <div class="switchable__text text-center ">
                    <h4 style="font-weight: bold;font-size: 18px;">What is STEP?</h4>
                    <h6 style="font-size: 18px;"> Special Training for Employment Program or STEP, it is a community-based specialty training program that seeks to address the specific needs of the communities and promote employment, particularly, through entrepreneurial, self-employment and service oriented activities. </h6>
                </div>
            </div>
        </div>
    </div>

<section class="video video-1 text-center imagebg" data-overlay="4">
    <div class="background-image-holder"> <img alt="background" src="{{asset('stack/img/rtcpersonnel.jpg')}}"> </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="modal-instance">
                    <div class="video-play-icon video-play-icon--sm modal-trigger box-shadow"></div>
                    <div class="modal-container">
                        <div class="modal-content bg-dark" data-width="60%" data-height="60%"><iframe src="https://www.facebook.com/plugins/video.php?height=405&href=https%3A%2F%2Fwww.facebook.com%2Fmariaglaiza.m.sandoval%2Fvideos%2F361072082328266%2F&show_text=false&width=560&t=0" width="560" height="405" style="border:none;overflow:hidden" width="500" height="523" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></div>
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
            <div class="col-lg-6 col-md-7 col-12"  data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                <div class="map-container"> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.1707017070385!2d124.19891061428632!3d8.185552994108665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32559e525aa49ec5%3A0x99779af895c10d1e!2sTESDA%20REGIONAL%20TRAINING%20CENTER!5e0!3m2!1sen!2sph!4v1573454410063!5m2!1sen!2sph" width="900" height="600" frameborder="0" style="border:1;" allowfullscreen=""></iframe> </div>
            </div>
            <div class="col-lg-5 col-md-5"  data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
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
<!-- <div class="modal" tabindex="-1" id="simpleModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <a class="modal-title fs-5">Announcement!!!</a>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>DATA HEREEEE</p>
      </div>
      <div class="modal-footer">
        <a data-bs-dismiss="modal">Close</a>
      </div>
    </div>
  </div>
</div> -->
@endsection
@section('scripts')

@endsection
