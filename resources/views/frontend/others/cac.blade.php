@extends('layouts.frontend')
@section('content')
<section class="text-center cta cta-4 space--xxs border--bottom" style="background-image: url('img/header.jpg');background-repeat: no-repeat;">
    <div class="container ">
        <div class="row">
            <div class="col-md-12">
             <span class="lead" style="font-size: 22px;float: left;">Competency Assessment and Certification</span> 
            </div>
        </div>
    </div>
</section>

    <div class="container-fluid mb-4 mt-4">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header font-weight-bold text-center">{{ __('ASSESSMENT FEE') }}</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" >
                    <div class="card-header font-weight-bold text-center">{{ __('ACCREDITED ASSESSOR') }}</div>

                
                </div>
            </div>
            <div class="col-md-4"> 
                <div class="card" style="">
                    <div class="card-header font-weight-bold text-center">{{ __('ORGANIZATIONAL STRUCTURE') }}</div>

                </div>
            </div>
        
        </div>
    </div>
   <div class="container-fluid mb-5">
        <div class="card">
            <div class="row">
                <div class="col-md-3"  data-aos="fade-up" data-aos-duration="800" data-aos-delay="800" style="align-items: center !important;display:flex !important;height:300px !important;">
                    <div class="switchable__text text-center ">
                        <h4 style="font-weight: bold;font-size: 18px;">MISSION</h4>
                        <h6 style="font-size: 18px;"> To create a middle-level worker’s competency in a deliberate, professional, and consistent manner using a quality-assured assessment and certification standards. </h6>
                    </div>
                </div>
                <div class="col-md-3"  data-aos="fade-up" data-aos-duration="800" data-aos-delay="800" style="align-items: center !important;display:flex !important;height:300px !important;background-color: #EDF6FF !important;height:auto !important;">
                        <div class="switchable__text text-center ">
                            <h4 style="font-weight: bold;font-size: 18px;">VISION</h4>
                            <h6 style="font-size: 18px;"> The TESDA RTC-Iligan assessment center is dedicated in providing a dependable, trustworthy, and forward-thinking system for establishing the competency of middle-level skilled professionals utilizing authentic, valid, and globally recognized assessment standards. </h6>
                        </div>
                </div>
                <div class="col-md-3"  data-aos="fade-up" data-aos-duration="800" data-aos-delay="800" style="align-items: center !important;display:flex !important;height:300px !important;">
                        <div class="switchable__text text-center ">
                            <h4 style="font-weight: bold;font-size: 18px;">GOALS</h4>
                            <h6 style="font-size: 18px;">To assure the quality, productivity, and global competitiveness of middle-level workers by ensuring that the graduate or worker can perform based on the degree of independence to the levels expected in the workplace based on set competency assessment criteria</h6>
                        </div>
                </div>
                <div class="col-md-3"  data-aos="fade-up" data-aos-duration="800" data-aos-delay="800" style="align-items: center !important;display:flex !important;height:300px !important;background-color: #EDF6FF !important;">
                        <div class="switchable__text text-center ">
                            <h4 style="font-weight: bold;font-size: 18px;">OBJECTIVES</h4>
                            <h6 style="font-size: 18px;"> To ensure that all necessary resources, facilities, tools, and equipment are available and in good condition during assessment</h6>
                        </div>
                </div>
            </div>
        </div>
   </div>
  

@endsection
@section('scripts')
   
@endsection