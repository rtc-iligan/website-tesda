@extends('layouts.frontend')

@section('content')
<section class="cover cover-features imagebg space--lg" data-overlay="3">
    <div class="background-image-holder">
     <img alt="background" class="--hide-dsk" src="{{asset('stack/img/rtcpersonnel.jpg')}}"> 
    <div class="--hide-mb">
        <div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('img/tesda2.jpg')}}" class="d-block w-100" alt="..." style="height:673px !important;">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('stack/img/rtcpersonnel.jpg')}}" class="d-block w-100" alt="..."  style="height:673px !important;">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('img/tesda3.png')}}" class="d-block w-100" alt="..."  style="height:673px !important;">
                </div>
            </div>
           
            </div>
        </div>
    </div>
    <div class="container">
      
        <div class="row">
            <div class="col-md-9 col-lg-7 ">
                <h1 class="--avt-bold">Welcome to <br class="">RTC-ILIGAN</h1>
                <p class="--avt-fs5">"You bring the effort, we deliver result"</p>
                <p class="--avt-fs5">We hope you find what you're looking for and that you enjoy your stay, have a great day!  </p>
            </div>
            
        </div>
        <div class="row">
            <div class="col-md-4 animated pulse infinite"  data-aos="fade-up" data-aos-duration="800" data-aos-delay="400" >
                <a href="{{URL::to('/reservations')}}">
                    <div class="feature feature-2 boxed boxed--border bg--white" > <i class="icon icon-Clock-Back color--primary"></i>
                        <div class="feature__body">
                            <p class="--avt--fs5"> <b>Online Reservation</b> ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4"  data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                <a href="{{URL::to('/requirements')}}">
                    <div class="feature feature-2 boxed boxed--border bg--white"> <i class="icon icon-Duplicate-Window color--primary"></i>
                        <div class="feature__body">
                            <p class="--avt--fs5"> <b>Enrollment Requirements</b> ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4"  data-aos="fade-up" data-aos-duration="800" data-aos-delay="800">
                <a href="{{URL::to('/cac')}}">
                    <div class="feature feature-2 boxed boxed--border bg--white"> <i class="icon icon-Life-Jacket color--primary"></i>
                        <div class="feature__body">
                            <p class="--avt--fs5"> <b>Assessement</b> ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.  </p>
                        </div>
                    </div>
                </a>    
            </div>
        </div>
    </div>
</section>

    <div class="contaier mt-5 mb-5">
       <div class="row ml-3">
            <div class="col-12">
                <h1 class="ml-5 --avt-bold --blue-title">What's Happening</h1>
                <h5 class="ml-5 --avt--fs6 --blue-title">Latest News and Updates <a class="--avt-fs5 mr-5"href="" style="float:right;">>> More News and Updates</a></h5>
                
            </div>
            <div class="col-3">
             
            </div>
            <div class="row">
                <div class="col">
                    <div class="slider slider--inline-arrows slider--arrows-hover text-center" data-arrows="true">
                        <ul class="slides" id="slides">
                            <li class="col-md-4"> 
                              
                                    <img alt="Image" class="rounded" src="{{asset('img/tesda2.jpg')}}" style="height:250px !important;">
                                    <h6 class="lead text-left fs-6">October 14,2022 - News</h6>
                                    <h4 class="text-left --avt-fs4">Consultative meeting with the staff and trainers of RTC Iligan</h4>
                                    <button class="btn btn-sm btn-primary rounded float-right --avt-fs6" style="bottom: 0;"> >> See More </button>
                            </li>
                            <li class="col-md-4"> 
                              
                                    <img alt="Image" class="rounded" src="{{asset('img/tesda2.jpg')}}" style="height:250px !important;">
                                    <h6 class="lead text-left fs-6">October 14,2022 - News</h6>
                                    <h4 class="text-left --avt-fs4">RTC- Iligan was conducted the Training Induction Program (TIP) facilitate by Mr. Ben Andrew J. Galindo MIS- focal</h4>
                                    <button class="btn btn-sm btn-primary rounded float-right --avt-fs6"> >> See More </button>
                            </li>
                            <li class="col-md-4"> 
                              
                                    <img alt="Image" class="rounded" src="{{asset('img/tesda2.jpg')}}" style="height:250px !important;">
                                    <h6 class="lead text-left fs-6">October 14,2022 - News</h6>
                                    <h4 class="text-left --avt-fs4">1st General Assembly of all regular personnel of TESDA Lanao del Norte Cluster (RTC- Iligan, LNNAIS, STS)</h4>
                                    <button class="btn btn-sm btn-primary rounded float-right --avt-fs6"> >> See More </button>
                             </li>
                            <li class="col-md-4"> 
                                    
                                    <img alt="Image" class="rounded" src="{{asset('img/tesda2.jpg')}}" style="height:250px !important;">
                                    <h6 class="lead text-left fs-6">October 14,2022 - News</h6>
                                    <h4 class="text-left --avt-fs4">Consultative meeting with the staff and trainers of RTC Iligan</h4>
                                    <button class="btn btn-sm btn-primary rounded float-right --avt-fs6"> >> See More </button>
                            </li>
                            <li class="col-md-4"> 
                              
                                    <img alt="Image" class="rounded" src="{{asset('img/tesda2.jpg')}}" style="height:250px !important;">
                                    <h6 class="lead text-left fs-6">October 14,2022 - News</h6>
                                    <h4 class="text-left --avt-fs4">Orientation on safety was conducted and facilitate by Mr. Melbon A. Odal for the newly enrolled 100 UAQTE 2020 scholars</h4>
                                    <button class="btn btn-sm btn-primary rounded float-right --avt-fs6"> >> See More </button>
                            </li>
                            <li class="col-md-4"> 
                              
                                    <img alt="Image" class="rounded" src="{{asset('img/tesda2.jpg')}}" style="height:250px !important;">
                                    <h6 class="lead text-left fs-6">October 14,2022 - News</h6>
                                    <h4 class="text-left --avt-fs4">Recently, a graduation ceremony under the UAQTE and TWSP was conducted at the Center</h4>
                                    <button class="btn btn-sm btn-primary rounded float-right --avt-fs6"> >> See More </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
       </div>
    </div>
    
<div class="container mt-5">
    <div class="row justify-content-between">
        <div class="col-md-6" data-aos="fade-right" data-aos-duration="800" data-aos-delay="600">
            <h6 class="--avt-bold" >REGIONAL TRAINING CENTER - ILIGAN</h6>
            
            <p class="--avt-fs5">
                 RTC-Iligan is a clean and green training institution and is well managed by competent and dedicated personnel. The center 
                provides quality services to satisfy its client's specific needs.
            </p>
            <p class="mb-4 --avt-fs5">
                RTC-Iligan is ideally and well situated within the Iligan-Cagayan Corridor. It is 242 meters above sea level and has a sloping terrain from the southdowward. It is very accessible since it is only ten kilometers from the city proper and lies along the 
                national highway. There is availabilty of sufficient electricity since it taps its power directly to the National Transmission
                Corporation/National Power Corporation.
              
            </p>
            
        </div>
        <div class="col-md-6 "  data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
            <div class="boxed boxed--lg boxed--border bg--secondary"> 
                <!-- <img alt="image" src="{{asset('img/IMG-2891.jpg')}}" class="border--round"> -->
                <div class="slider" data-paging="true">
                    <ul class="slides">
                        <li class="col-12">
                            <div class="feature feature-3 text-center">
                                <img alt="image" src="{{asset('img/DSC_00.jpg')}}" class="border--round" style="height: 290px !important;">
                            </div>
                        </li>
                        <li class="col-12">
                            <div class="feature feature-3 text-center">
                                <img alt="image" src="{{asset('img/IMG-2891.jpg')}}" class="border--round" style="height: 290px !important;">
                            </div>
                        </li>
                        <li class="col-12">
                            <div class="feature feature-3 text-center">
                                <img alt="image" src="{{asset('img/gp-mario.jpg')}}" class="border--round" style="height: 290px !important;">
                            </div>
                        </li>
                        <li class="col-12">
                            <div class="feature feature-3 text-center">
                                <img alt="image" src="{{asset('img/gp-4.jpg')}}" class="border--round" style="height: 290px !important;">
                            </div>
                        </li>
                        
                    </ul>
                </div>
                <p class="lead text-center --avt-fs4">RTC-ILIGAN EMPLOYEES CORPORATE PHOTO</p>
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
                    <p class="--avt-fs4"> 
                        We are glad and thankful that you take the time to visit our website is a window to our institution. 
                        We hope that you will find the information here as useful as we believe it is. 
                        Here, we offer a place to connect us amidst todays challenges. 
                        We're proud of our hardworking team we have believe that together we can achieve our goal to deliver quality technical vocational education
                        .<br><br>RTC-Iligan believes in the power in the power of education and we are very excited to share our resources with you. Feel free to look around and don't hesitate to reach out if there's anything we can help you with. </p>
                    <h5 class="--avt-fs5">Maynard C. Jumawan</h5> 
                    <span class="--avt-fs6">Acting Center Administrator of RTC-Iligan</span> </div>
            </div>
        </div>
    </div>
</section>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4  card-transition"  data-aos="fade-up" data-aos-duration="800" data-aos-delay="400" style="align-items: center !important;display:flex !important;height:300px !important;background-color: #ecefff !important;">
                <div class="switchable__text text-center "  >
                    <h4 class="--avt-fs4"><b>Mission</b></h4>
                    <h6 class="--avt-fs5">The transformational leader in the Techinical Education and Skills Development of the filipino workforce. </h6>
                </div>
            </div>
            <div class="col-md-4 card-transition"  data-aos="fade-up" data-aos-duration="800" data-aos-delay="800" style="align-items: center !important;display:flex !important;height:300px !important;">
                <div class="switchable__text text-center">
                    <h4 class="--avt-fs4"><b>Vision</b></h4>
                    <h6 class="--avt-fs5"> TESDA sets direction, promulgates relevant standards, and implements programs geared towards a quality-assured and inclusive Technical Education and Skills Development and Certification System. </h6>
                </div>
            </div>
            <div class="col-md-4  bg-light card-transition"  data-aos="fade-up" data-aos-duration="800" data-aos-delay="400" style="align-items: center !important;display:flex !important;height:300px !important;background-color: #ecefff !important;">
                <div class="switchable__text text-center">
                    <h4 class="--avt-fs4"><b>Values Statement</b></h4>
                    <h6 class="--avt-fs5">We believe in demonstrated competence, institutional integrity, personal commitment, culture of innovativeness and a deep sense of nationalism. </h6>
                </div>
            </div>
            <div class="col-md-4 card-transition"  data-aos="fade-up" data-aos-duration="800" data-aos-delay="800" style="align-items: center !important;display:flex !important;height:300px !important;">
                <div class="switchable__text text-center ">
                    <h4 class="--avt-fs4"><b>What is TWSP?</b></h4>
                    <h6 class="--avt-fs5"> Training for Work Scholarship Programor TWSP, is a TESDA-initiative that is geared towards “filling up the skills gap and job requirements of priority industries and sectors with high employment demand (i.e. IT, semiconductor and electronics, automotive, etc.)—supportive of the government’s thrust of rapid, inclusive and sustained economic growth.” </h6>
                </div>
            </div>
            <div class="col-md-4  bg-light card-transition"  data-aos="fade-up" data-aos-duration="800" data-aos-delay="400" style="align-items: center !important;display:flex !important;height:300px !important;background-color: #ecefff !important;height:auto !important;">
                <div class="switchable__text text-center">
                    <h4 class="--avt-fs4"><b>What is UAQETA?</b></h4>
                    <h6 class="--avt-fs5"> RA 10931: "Universal Access to Quality Tertiary Education Act" An Act promoting Universal Access to Quality Tertiary Education by providing for FREE tuition and other school fees in State Universities and Colleges , Local Universities and Colleges and State-run Technical-Vocational Institutions, Establishing the Tertiary Education Subsidy and Student loan program, strengthening the Unified Student Financial Assistance System for Tertiary Education, and appropriating fund thereof. </h6>
                </div>
            </div>
            <div class="col-md-4 card-transition"  data-aos="fade-up" data-aos-duration="800" data-aos-delay="800" style="align-items: center !important;display:flex !important;height:300px !important;">
                <div class="switchable__text text-center ">
                    <h4 class="--avt-fs4"><b>What is STEP?</b></h4>
                    <h6 class="--avt-fs5"> Special Training for Employment Program or STEP, it is a community-based specialty training program that seeks to address the specific needs of the communities and promote employment, particularly, through entrepreneurial, self-employment and service oriented activities. </h6>
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
                        <div class="modal-content bg-dark" data-width="60%" data-height="60%">
                            <iframe  src="https://www.youtube.com/embed/ZUQOD0vQD68" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <h2 class="--avt-bold"> TESDA ANNIVERSARY CELEBRATION 2021 </h2>
            </div>
        </div>
    </div>
</section>

    <div class="row " style="height:580px;">
        <div class="col-md-6" data-aos="fade-right" data-aos-duration="800" data-aos-delay="600" style="z-index:1;">
            <div class="card mt-3 " style="background-color: #1835a6 !important;position:absolute;top:30px;left:40px;width:700px;z-index:1;">
                <p class="mt-5 ml-5 --avt-bold text-white">Annoucements</p>
                <div class="ml-5 mt-2 text-white">
                  
                    <a class="--avt-fs3">33rd National Statistics Months</a><br>
                    <a class="--avt-fs5">12 October 2022</a><br>
                    <a class="--avt-fs5">"Boosting the Country's Recovery with Informed Decisions, Better Policies"</a><br>
                    <button class="btn btn-sm btn-outline-primary" style="width:100px;">Read More</button>     
                </div>
                <div class="ml-5 mt-2 text-white">
                  
                    <a class="--avt-fs3">Warning to the Public: Beware of Fake National Certificate</a><br>
                    <a class="--avt-fs5">27 July 2022</a><br>
                    <a class="--avt-fs5">The National Certificates are issued ONLY by the Technical and Skills Development Authority (TESDA).</a><br>
                    <button class="btn btn-sm btn-outline-primary" style="width:100px;">Read More</button>     
                </div>
                <div class="text-right text-white">
                    <a class="mr-5 mb-5" style="width:200px;">>> More Announcement</a><br><br>
                </div>          
            </div>
        </div>
        <div class="col-md-6 "style="background-color: #e2e6fe !important;">
            <div class="col-md-8" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600" style="position: absolute;left: 25%;top: 15%;">
                     <p class="--avt-bold ml-5" style="color:#808080 !important;">Success Stories</p>
                    <div class="slider" data-paging="true">
                        <ul class="slides">
                            <li class="col-12">
                                <div class="feature feature-3 text-center">
                                    <img alt="image" src="{{asset('img/DSC_00.jpg')}}" class="border--round" style="height: 290px !important;">
                                </div>
                                <p class="text-white text-center --avt-fs5 mt-2"  style="color:#808080 !important;">- Michael G. Cuento -</p>
                            </li>
                            <li class="col-12">
                                <div class="feature feature-3 text-center">
                                    <img alt="image" src="{{asset('img/IMG-2891.jpg')}}" class="border--round" style="height: 290px !important;">
                                </div>
                                <p class="text-white text-center --avt-fs5 mt-2"  style="color:#808080 !important;">- Carlo A. Quiamco -</p>
                            </li>
                            <li class="col-12">
                                <div class="feature feature-3 text-center">
                                    <img alt="image" src="{{asset('img/gp-mario.jpg')}}" class="border--round" style="height: 290px !important;">
                                </div>
                                <p class="text-white text-center --avt-fs5 mt-2"  style="color:#808080 !important;">- Ralph D. Pacapat -</p>
                            </li>
                        </ul>
                    </div>
                   
            </div>
        </div>
    </div>
<div class="" data-overlay="4" style="height:160px;">
    <div class="background-image-holder"> <img alt="background" src="{{asset('img/tesda3.png')}}"> </div>
    <div class="container">
        <div class="row">
            <div class="col">
            <div class="slider slider--inline-arrows slider--arrows-hover text-center" data-arrows="true">
            <p class="--avt-bold text-white">Our Partners</p>
                <ul class="slides">
                    <li class="col-md-3 col-6"> <img alt="Image" class="" width="50" height="60" src="{{asset('img/tesdanew.png')}}"> </li>
                    <li class="col-md-3 col-6"> <img alt="Image" class="" width="60" height="60" src="{{asset('img/rtciligan.png')}}"> </li>
                    <li class="col-md-3 col-6"> <img alt="Image" class="" width="50" height="60" src="{{asset('img/tesdanew.png')}}"> </li>
                    <li class="col-md-3 col-6"> <img alt="Image" class="" width="60" height="60" src="{{asset('img/rtciligan.png')}}"> </li>
                    <li class="col-md-3 col-6"> <img alt="Image" class="" width="50" height="60" src="{{asset('img/tesdanew.png')}}"> </li>
                    <li class="col-md-3 col-6"> <img alt="Image" class="" width="60" height="60" src="{{asset('img/rtciligan.png')}}"> </li>
                </ul>
                
            </div>
            </div>
        </div>
    </div>
</div>
<div class="switchable mt-5">
    <div class="container ">
        <div class="row justify-content-between">
            <div class="col-lg-6 col-md-7 col-12"  data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                <div class="map-container"> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.1707017070385!2d124.19891061428632!3d8.185552994108665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32559e525aa49ec5%3A0x99779af895c10d1e!2sTESDA%20REGIONAL%20TRAINING%20CENTER!5e0!3m2!1sen!2sph!4v1573454410063!5m2!1sen!2sph" width="900" height="600" frameborder="0" style="border:1;" allowfullscreen=""></iframe> </div>
            </div>
            <div class="col-lg-5 col-md-5"  data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                <div class="switchable__text">
                    <h3 class="--avt-fs4">National Highway<br>Maria Cristina, Iligan City 9200</h3>
                    <p class="--avt-fs4"> Email: <a href="#">rtciligan@tesda.gov.ph</a><br> P: +63 223 6542  / +63 223 6541</p>
                    <p class="--avt-fs4"> Give us a call or drop by anytime, we endeavour to answer all enquiries within 8 hours on business days. </p>
                    <p class="--avt-fs4"> We are open from 8am — 5pm week days. </p>
                </div>
            </div>
        </div>
    </div>
</div>
<section>
   <div class="row">
    <div class="col-1"></div>
    <div class="col-10">
        <div class="card card-transition" data-aos="fade-in" data-aos-duration="800" data-aos-delay="1000" style="background-color: #ecefff !important;box-sizing: border-box;padding-right: 20px!important;padding-left: 20px!important;padding-top: 30px!important;border-radius: 30px !important;">
        <div class="card-body">
            <h1 class="card-title --avt-bold" >We're interested in hearing from you.
                <a href="{{URL::to('contact-us')}}"><i class="fa fa-arrow-circle-right " style="font-size:50px;float: right;"></i></a>
            </h1>
            <p class="card-text --avt-fs4" >Send us your feedback, comments and suggestions to help improve our service
              
            </p>
            <p class="card-text text-right" style="font-size: 40px;font-weight: bold;opacity:0.3;">RTC-ILIGAN</p>

        </div>
        </div>
    </div>
    <div class="col-1"></div>
   </div>
</section>



@endsection
@section('scripts')

@endsection
