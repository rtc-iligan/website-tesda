@extends('layouts.frontend')
@section('content')
<section class="text-center cta cta-4 space--xxs border--bottom" style="background-image: url('img/header.jpg');background-repeat: no-repeat;">
    <div class="container ">
        <div class="row">
            <div class="col-md-12">
             <span class="--avt-bold --txt-r --fs25">Competency Assessment and Certification</span> 
            </div>
        </div>
    </div>
</section>

    
    <div class="container mt-5">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="tabs-container tabs--folder">
                                <ul class="tabs">
                                    <li class="active">
                                        <div class="tab__title"> <span class="--avt-bold --fs15">MISSION</span> </div>
                                        <div class="tab__content">
                                            <p class="--avt-fs5">To create a middle-level worker’s competency in a deliberate, professional, and consistent manner using a quality-assured assessment and certification standards.</p>
                        
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tab__title"> <span class="--avt-bold --fs15">VISION</span> </div>
                                        <div class="tab__content">
                                            <p class="--avt-fs5">The TESDA RTC-Iligan assessment center is dedicated in providing a dependable, trustworthy, and forward-thinking system for establishing the competency of middle-level skilled professionals utilizing authentic, valid, and globally recognized assessment standards.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tab__title"> <span class="--avt-bold --fs15">GOALS</span> </div>
                                        <div class="tab__content">
                                            <p class="--avt-fs5">To assure the quality, productivity, and global competitiveness of middle-level workers by ensuring that the graduate or worker can perform based on the degree of independence to the levels expected in the workplace based on set competency assessment criteria</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tab__title"> <span class="--avt-bold --fs15">OBJECTIVES</span> </div>
                                        <div class="tab__content">
                                            <p class="--avt-fs5">To ensure that all necessary resources, facilities, tools, and equipment are available and in good condition during assessment</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> 

        <div class="container-fluid mt-5 mb-5 col-md-9">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header --avt-bold --fs15 text-center ass-fee mt-1">{{ __('ASSESSMENT FEE') }}</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" >
                        <div class="card-header --avt-bold --fs15 text-center acc-ass mt-1">{{ __('ACCREDITED ASSESSOR') }}</div>

                    
                    </div>
                </div>
                <div class="col-md-4"> 
                    <div class="card " style="">
                        <div class="card-header --avt-bold --fs15 text-center org-struc mt-1">{{ __('ORGANIZATIONAL STRUCTURE') }}</div>
                    </div>
                </div>
            
            </div>
        </div>
  
        <div class="modal fade" id="view_org" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                        
                <div class="modal-header">
                    <h4 class="modal-title --avt-bold --fs20">CAC ORGANIZATIONAL STRUCTURE</h4> 
                </div>
                <div class="modal-body">
                    <img src="{{ asset('img/cac.jpg') }}" alt="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" style="width:100px;">Close</button>
                </div>
            </form>
            </div>
        </div>
        </div>
        <div class="modal fade" id="acc_ass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                        
                <div class="modal-header text-center">
                    <h4 class="modal-title --avt-bold --fs20">ACCREDITED ASSESSOR</h4> 
                </div>
                <div class="modal-body">
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" style="width:100px;">Close</button>
                </div>
            </form>
            </div>
        </div>
        </div>
        <div class="modal fade" id="ass_fee" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title --avt-bold --fs20">ASSESSMENT FEE</h4> 
                </div>
                <div class="modal-body">
                <img src="{{ asset('img/fee.png') }}" alt="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" style="width:100px;">Close</button>
                </div>
            </form>
            </div>
        </div>
        </div>
@endsection
@section('scripts')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script>
   $('.org-struc').click(function(){
         $('#view_org').modal('show');
    });
    $('.ass-fee').click(function(){
         $('#ass_fee').modal('show');
    });
    $('.acc-ass').click(function(){
         $('#acc_ass').modal('show');
    });
</script>
@endsection