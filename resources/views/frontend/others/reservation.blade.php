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
                         <div class="rv-left-dsgn mt-5" id="nav1">1 &nbsp;&nbsp;&nbsp;Personal Information</div>
                         <div class="rv-left-dsgn" id="nav2">2 &nbsp;&nbsp;&nbsp;Profiles </div>
                         <div class="rv-left-dsgn" id="nav3">3 &nbsp;&nbsp;&nbsp;Educational Attainment</div>
                         <div class="rv-left-dsgn" id="nav4">4 &nbsp;&nbsp;&nbsp;Classification</div>
                         <div class="rv-left-dsgn" id="nav5">5 &nbsp;&nbsp;&nbsp;Disability Information</div>
                         <div class="rv-left-dsgn" id="nav6">6 &nbsp;&nbsp;&nbsp;Program Offerings</div>
                         <div class="rv-left-dsgn mb-5" id="nav7">7 &nbsp;&nbsp;&nbsp;Privacy Disclaimer</div>
                     </div>
                     <div class="col-md-9">
                         <h5 class="rv-pi text-center font-weight-bold text-primary">PERSONAL INFORMATION</h5>
                         <p class="text-center m-0 text-uppercase text-primary">STEP 1 / 7</p>
                         <div style="text-align:center;">
                                <span class="step"></span>
                                <span class="step"></span>
                                <span class="step"></span>
                                <span class="step"></span>
                                <span class="step"></span>
                                <span class="step"></span>
                                <span class="step"></span>
                         </div>
                         <p style="max-width: 500px; margin-bottom: 40px;" class="mt-4 mx-auto text-center text-center text-muted">Welcome USERNAME ! Let’s create your full reservation to get you started. <br>Please fill-in all necessary information accurately to complete your registration</p>
                         <form id="regForm" action="" autocomplete="off">
                              <div class="tab">
                                 <div class="form-row ml-3">
                                    <div class="form-group col-md-6"
                                        <label for="validationServer01">Given Name</label>
                                        <input type="text" class="form-control input-inv " value=""name="" oninput="this.className = ''"required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" class="form-control input-inv " value=""name="" oninput="this.className = ''"required>
                                    </div>
                                </div> 
                                <div class="form-row ml-3">
                                    <div class="form-group col-md-6"
                                        <label for="first_name">Middle Name</label>
                                        <input type="text" class="form-control input-inv " value=""name="" oninput="this.className = ''"required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="last_name">Suffix</label>
                                        <input style="max-width: 100px" type="text" id="suffix"class="form-control" value=" "name="">
                                    </div>
                                </div>
                                <h5 class="text-center font-weight-bold mt-3">COMPLETE PERMANENT ADDRESS</h5>
                                <div class="form-row ml-2">
                                    <div class="form-group col-md-12"
                                        <label for="first_name">Address</label>
                                        <input type="text" id="address"class="form-control input-inv"input-inv value="" oninput="this.className = ''" name=""required>
                                    </div>
                                </div> 
                                <div class="form-row ml-3">
                                    <div class="form-group col-md-6"
                                        <label for="first_name">Region</label>
                                        <input type="text" id="region"class="form-control input-inv" value="" oninput="this.className = ''" name=""required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="last_name">Province</label>
                                        <input type="text" id="province"class="form-control input-inv" value="" oninput="this.className = ''" name=""required>
                                    </div>
                                </div> 
                                <div class="form-row ml-3">
                                    <div class="form-group col-md-6"
                                        <label for="first_name">City/Municipality</label>
                                        <input type="text" id="city"class="form-control input-inv" value="" oninput="this.className = ''" name=""required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="last_name">Country</label>
                                        <input type="text" id="country"class="form-control input-inv" value="Philippines"name="" disabled>
                                    </div>
                                </div>
                                <h5 class="text-center font-weight-bold mt-3">COMPLETE CURRENT MAILING ADDRESS</h5>
                                <div class="col-12">
                                    <div class="input-checkbox">
                                        <input type="checkbox" id="addressChecked"name="agree">
                                        <label></label> 
                                    </div>
                                    Same as Permanent Address
                                </div>
                                <div id="step1-2">
                                    <div class="form-row ml-2">
                                    <div class="form-group col-md-12"
                                        <label for="first_name">Address</label>
                                        <input type="text" id="addresscopy" class="form-control input-inv"input-invname="" value="" oninput="this.className = ''" required>
                                    </div> 
                                </div> 
                                <div class="form-row ml-3">
                                    <div class="form-group col-md-6"
                                        <label for="first_name">Region</label>
                                        <input type="text" id="regioncopy"class="form-control input-inv" value="" oninput="this.className = ''" name=""required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="last_name">Province</label>
                                        <input type="text" id="provincecopy"class="form-control input-inv" value="" oninput="this.className = ''" name=""required>
                                    </div>
                                </div> 
                                <div class="form-row ml-3">
                                    <div class="form-group col-md-6"
                                        <label for="first_name">City/Municipality</label>
                                        <input type="text" id="citycopy"class="form-control input-inv" value="" oninput="this.className = ''" name=""required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="last_name">Country</label>
                                        <input type="text" id="countrycopy"class="form-control input-inv" value="" oninput="this.className = ''" name=""required>
                                    </div>
                                </div>
                                </div>
                                <div class="form-row ml-3 mt-5">
                                    <div class="form-group col-md-6"
                                        <label for="first_name">Contact Number</label>
                                        <input type="text" class="form-control input-inv" value="" oninput="this.className = ''" name=""required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="last_name">Email address</label>
                                        <input type="email" class="form-control input-inv" value="" oninput="this.className = ''" name=""required>
                                    </div>
                                
                                </div>
                              </div>
                              <div class="tab">
                                <hr>
                                <label class="ml-3 fw-bold" style="font-size: 11px;">Profile</label><br>
                                <div class="form-row ml-3">
                                    <div class="form-group col-md-4"
                                        <label for="validationServer01">Gender</label>
                                        <input type="text" class="form-control input-inv " value=""name="" oninput="this.className = ''"required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="last_name">Civil Status</label>
                                        <input type="text" class="form-control input-inv " value=""name="" oninput="this.className = ''"required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="last_name">Age</label>
                                        <input type="text" class="form-control input-inv " value=""name="" oninput="this.className = ''"required>
                                    </div>
                                </div> 
                                <div class="form-row ml-3">
                                    <div class="form-group col-md-4"
                                        <label for="validationServer01">Birth Month</label>
                                        <input type="text" class="form-control input-inv " value=""name="" oninput="this.className = ''"required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="last_name">Birth Date</label>
                                        <input type="text" class="form-control input-inv " value=""name="" oninput="this.className = ''"required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="last_name">Birth Year</label>
                                        <input type="text" class="form-control input-inv " value=""name="" oninput="this.className = ''"required>
                                    </div>
                                </div><hr>
                                <label class="ml-3 fw-bold" style="font-size: 11px;">Birth Place</label><br>
                                 <div class="form-row ml-3">
                                    <div class="form-group col-md-4"
                                        <label for="validationServer01">City/Municipality</label>
                                        <input type="text" class="form-control input-inv " value=""name="" oninput="this.className = ''"required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="last_name">Province</label>
                                        <input type="text" class="form-control input-inv " value=""name="" oninput="this.className = ''"required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="last_name">Region</label>
                                        <input type="text" class="form-control input-inv " value=""name="" oninput="this.className = ''"required>
                                    </div>
                                </div><hr>
                                 <label class="ml-3 fw-bold" style="font-size: 11px;">Parent/Guardian/Spouse</label><br>
                                 <div class="form-row ml-3">
                                    <div class="form-group col-md-3"
                                        <label for="validationServer01">First Name</label>
                                        <input type="text" class="form-control input-inv " value=""name="" oninput="this.className = ''"required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="last_name">Middle Initial</label>
                                        <input type="text" class="form-control input-inv " value=""name="" oninput="this.className = ''"required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" class="form-control input-inv " value=""name="" oninput="this.className = ''"required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="last_name">Suffix</label>
                                        <input type="text" class="form-control input-inv " value=""name="" oninput="this.className = ''"required>
                                    </div>
                                </div><hr>
                                <label class="ml-3 fw-bold" style="font-size: 11px;">Parent/Guardian/Spouse Mailing Address</label><br>
                                <div class="form-row ml-3">
                                    <div class="form-group col-md-3"
                                        <label for="validationServer01">Barangay</label>
                                        <input type="text" class="form-control input-inv " value=""name="" oninput="this.className = ''"required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="last_name">City/Municipality</label>
                                        <input type="text" class="form-control input-inv " value=""name="" oninput="this.className = ''"required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="last_name">Province</label>
                                        <input type="text" class="form-control input-inv " value=""name="" oninput="this.className = ''"required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="last_name">Contact Number</label>
                                        <input type="text" class="form-control input-inv " value=""name="" oninput="this.className = ''"required>
                                    </div>
                                </div><hr>

                              </div>
                              <div class="tab"><hr>
                                <div class="row ml-3">
                                  <div class="col-4 ">
                                      <div class="form-group">
                                          <div class="checkbox">
                                              <label for="check">
                                                  <input type="checkbox" id="check"/>
                                                  <span class="fake-input"></span>
                                                  <span class="fake-label">Option 2</span>
                                              </label>
                                          </div>
                                      </div>
                                  </div> 
                                   <div class="col-4 input-checkbox" style="background-color:red;"><p class="ml-2 md-2">Agrarian Reform Beneficiary</p>
                                        <input type="checkbox"name="agree" style="max-width: 100px;">
                                        <label></label> 
                                  </div>
                                   <div class="col-4 input-checkbox" style="background-color:red;">
                                        <input type="checkbox"name="agree" style="max-width: 100px;"><p class="ml-2 md-2">Balik Probinsya</p>
                                        <label></label> 
                                  </div>
                                </div>
                               
                              </div>
                              <div class="d-md-flex justify-content-md-end">
                                <div class="form-group">
                                  <button type="button" id="prevBtn" class="btn btn-secondary btn-lg" style="width: 100px;"onclick="nextPrev(-1)">Previous</button>
                                  <button type="button" id="nextBtn" class="btn btn-primary btn-lg" style="width: 100px;"onclick="nextPrev(1)">Next</button>
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
