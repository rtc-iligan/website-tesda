@extends('layouts.frontend')
@section('content')
<section class="text-center cta cta-4 space--xxs border--bottom" style="background-image: url('img/login.jpg');background-repeat: no-repeat;">
    <div class="container ">
        <div class="row">
            <div class="col-md-12">
             <span class="lead" style="font-size: 22px;float: left;">Online Reservation</span> 
            </div>
        </div>
    </div>
</section>

<section class="">
    <div class="container">
        <div class="card">
            <div class="card-body">
                 <div class="row">
                     <div class="col-md-3 rv-col-1 title_message">
                         <div class="rv-left-dsgn mt-5">1 &nbsp;&nbsp;&nbsp;Personal Information</div>
                         <div class="rv-left-dsgn">2 &nbsp;&nbsp;&nbsp;Profiles </div>
                         <div class="rv-left-dsgn">3 &nbsp;&nbsp;&nbsp;Educational Attainment</div>
                         <div class="rv-left-dsgn">4 &nbsp;&nbsp;&nbsp;Classification</div>
                         <div class="rv-left-dsgn">5 &nbsp;&nbsp;&nbsp;Disability Information</div>
                         <div class="rv-left-dsgn">6 &nbsp;&nbsp;&nbsp;Program Offerings</div>
                         <div class="rv-left-dsgn mb-5">7 &nbsp;&nbsp;&nbsp;Privacy Disclaimer</div>
                     </div>
                     <div class="col-md-9">
                         <h5 class="rv-pi text-center font-weight-bold text-primary">PERSONAL INFORMATION</h5>
                         <p class="text-center m-0 text-uppercase text-primary">STEP 1 / 7</p>
                         <p style="max-width: 500px; margin-bottom: 40px;" class="mt-4 mx-auto text-center text-center text-muted">Welcome USERNAME ! Let’s create your full reservation to get you started. <br>Please fill-in all necessary information accurately to complete your registration</p>
                         <form>
                            <div class="form-row ml-3">
                                <div class="form-group col-md-6"
                                    <label for="first_name">Given Name</label>
                                    <input type="text" class="form-control " value=""name=""required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" class="form-control " value=""name=""required>
                                </div>
                            </div> 
                            <div class="form-row ml-3">
                                <div class="form-group col-md-6"
                                    <label for="first_name">Middle Name</label>
                                    <input type="text" class="form-control " value=""name=""required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="last_name">Suffix</label>
                                    <input style="max-width: 100px" type="text" class="form-control " value=""name=""required>
                                </div>
                            </div>
                            <h5 class="text-center font-weight-bold mt-3">COMPLETE PERMANENT MAILING ADDRESS</h5>
                            <div class="form-row ml-2">
                                <div class="form-group col-md-12"
                                    <label for="first_name">Address</label>
                                    <input type="text" class="form-control " value=""name=""required>
                                </div>
                            </div> 
                            <div class="form-row ml-3">
                                <div class="form-group col-md-6"
                                    <label for="first_name">Region</label>
                                    <input type="text" class="form-control " value=""name=""required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="last_name">Province</label>
                                    <input type="text" class="form-control " value=""name=""required>
                                </div>
                            </div> 
                            <div class="form-row ml-3">
                                <div class="form-group col-md-6"
                                    <label for="first_name">City/Municipality</label>
                                    <input type="text" class="form-control " value=""name=""required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="last_name">Country</label>
                                    <input type="text" class="form-control " value=""name=""required>
                                </div>
                            </div>
                            <h5 class="text-center font-weight-bold mt-3">COMPLETE CURRENT MAILING ADDRESS</h5>
                                <div class="col-12">
                                    <div class="input-checkbox">
                                        <input type="checkbox" name="agree">
                                        <label></label> 
                                    </div>
                                    Same as Permanent Mailing Address
                                </div>
                            <div class="form-row ml-2">
                                <div class="form-group col-md-12"
                                    <label for="first_name">Address</label>
                                    <input type="text" class="form-control " value=""name=""required>
                                </div>
                            </div> 
                            <div class="form-row ml-3">
                                <div class="form-group col-md-6"
                                    <label for="first_name">Region</label>
                                    <input type="text" class="form-control " value=""name=""required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="last_name">Province</label>
                                    <input type="text" class="form-control " value=""name=""required>
                                </div>
                            </div> 
                            <div class="form-row ml-3">
                                <div class="form-group col-md-6"
                                    <label for="first_name">City/Municipality</label>
                                    <input type="text" class="form-control " value=""name=""required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="last_name">Country</label>
                                    <input type="text" class="form-control " value=""name=""required>
                                </div>
                            </div>
                            <div class="form-row ml-3 mt-5">
                                <div class="form-group col-md-6"
                                    <label for="first_name">Contact Number</label>
                                    <input type="text" class="form-control " value=""name=""required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="last_name">Email address</label>
                                    <input type="text" class="form-control " value=""name=""required>
                                </div>
                            </div>
                            <div class=" d-md-flex justify-content-md-end">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg" style="width: 100px;">Continue >></button>
                                </div>
                            </div>
                         </form>
                     </div>
                 </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('scripts')
   
@endsection
