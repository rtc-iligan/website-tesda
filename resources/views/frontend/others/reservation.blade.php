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
                     <div class="col-md-2 rv-col-1 title_message">
                         <div class="rv-left-dsgn mt-5" id="nav1">1 &nbsp;Personal Information</div>
                         <div class="rv-left-dsgn" id="nav2">2 &nbsp;Profiles </div>
                         <div class="mt-3 mb-3" id="nav3">3 &nbsp;Educational Attainment</div>
                         <div class="rv-left-dsgn" id="nav4">4 &nbsp;Classification</div>
                         <div class="rv-left-dsgn" id="nav5">5 &nbsp;Program Offerings</div>
                         <div class="rv-left-dsgn mb-5" id="nav6">6 &nbsp;Privacy Disclaimer</div>
                     </div>
                     <div class="col-md-10">
                          <p style="max-width: 500px; margin-bottom: 40px;" class="mt-4 mx-auto text-center text-center text-muted">Welcome USERNAME ! Let’s create your full reservation to get you started. <br>Please fill-in all necessary information accurately to complete your registration</p>
                         <p class="text-center m-0 text-uppercase text-primary">STEP 1 / 6</p>
                         <div style="text-align:center;">
                                <span class="step"></span>
                                <span class="step"></span>
                                <span class="step"></span>
                                <span class="step"></span>
                                <span class="step"></span>
                                <span class="step"></span>
                         </div>
                         <form id="regForm" action="" autocomplete="off">
                              <div class="tab" id="tab1">
                                <h5 class="rv-pi text-center font-weight-bold text-primary">PERSONAL INFORMATION</h5>
                                 <div class="form-row ml-3">
                                    <div class="form-group col-md-6"
                                        <label for="validationServer01">First Name</label>
                                        <input type="text" class="form-control input-inv" name="res_fname" oninput="this.className = ''" onkeypress="return /[0-9a-zA-Z]/i.test(event.key)" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" class="form-control input-inv" name="res_lname" oninput="this.className = ''" onkeypress="return /[0-9a-zA-Z]/i.test(event.key)"required>
                                    </div>
                                </div> 
                                <div class="form-row ml-3">
                                    <div class="form-group col-md-6"
                                        <label for="first_name">Middle Name</label>
                                        <input type="text" class="form-control input-inv" name="res_mname" oninput="this.className = ''" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="last_name">Suffix</label>
                                        <input style="max-width: 100px" type="text" id="suffix"class="form-control" name="res_extension">
                                    </div>
                                </div>
                                <h5 class="text-center font-weight-bold mt-3">COMPLETE PERMANENT ADDRESS</h5>
                                <!-- <div class="form-row ml-2">
                                    <div class="form-group col-md-12"
                                        <label for="first_name">Address</label>
                                        <input type="text" id="address"class="form-control input-inv"input-inv value="" oninput="this.className = ''" name=""required>
                                    </div>
                                </div>  -->
                                <div class="form-row ml-3">
                                    <div class="form-group col-md-4"
                                        <label for="first_name">Region</label>
                                        <input type="text" id="region"class="form-control input-inv" value="" oninput="this.className = ''" name=""required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="last_name">Province</label>
                                        <input type="text" id="province"class="form-control input-inv" value="" oninput="this.className = ''" name=""required>
                                    </div>
                                    <div class="form-group col-md-4"
                                        <label for="first_name">City/Municipality</label>
                                        <input type="text" id="city"class="form-control input-inv" value="" oninput="this.className = ''" name=""required>
                                    </div>
                                </div> 
                                <div class="form-row ml-3">
                                    <div class="form-group col-md-4">
                                        <label for="last_name">Barangay</label>
                                        <input type="text" id="country"class="form-control input-inv" value=""name="" >
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="last_name">Purok/Block/Street</label>
                                        <input type="text" id="country"class="form-control input-inv" value=""name="" >
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="last_name">District</label>
                                        <input type="text" id="country"class="form-control input-inv" value=""name="" >
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="last_name">Nationality</label>
                                        <input type="text" id="country"class="form-control input-inv" value="Philippines"name="" disabled>
                                    </div>
                                </div>
                                <h5 class="text-center font-weight-bold mt-3">COMPLETE CURRENT MAILING ADDRESS</h5>
                                <div class="col-12">
                                    <div class="input-checkbox" data-bs-toggle="tooltip" data-bs-placement="top" title="Please fill up first the complete permanent address upon checking this checkbox!">
                                        <input type="checkbox" id="addressChecked"name="agree" >
                                        <label></label> 
                                    </div>
                                    Same as Permanent Address
                                </div>
                                <div id="step1-2">
                                   <div class="form-row ml-3">
                                    <div class="form-group col-md-4"
                                        <label for="first_name">Region</label>
                                        <input type="text" id="region"class="form-control input-inv" value="" oninput="this.className = ''" name=""required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="last_name">Province</label>
                                        <input type="text" id="province"class="form-control input-inv" value="" oninput="this.className = ''" name=""required>
                                    </div>
                                    <div class="form-group col-md-4"
                                        <label for="first_name">City/Municipality</label>
                                        <input type="text" id="city"class="form-control input-inv" value="" oninput="this.className = ''" name=""required>
                                    </div>
                                </div> 
                                <div class="form-row ml-3">
                                    <div class="form-group col-md-4">
                                        <label for="last_name">Barangay</label>
                                        <input type="text" id="country"class="form-control input-inv" value=""name="" >
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="last_name">Purok/Block/Street</label>
                                        <input type="text" id="country"class="form-control input-inv" value=""name="" >
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="last_name">District</label>
                                        <input type="text" id="country"class="form-control input-inv" value=""name="" >
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="last_name">Country</label>
                                        <input type="text" id="country"class="form-control input-inv" value="Philippines"name="" disabled>
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
                              <div class="tab" id="tab2">
                                <h5 class="rv-pi text-center font-weight-bold text-primary">PROFILE</h5>
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
                                    <div class="form-group col-md-8"
                                        <label for="validationServer01">Full Name (ex. Juan D. Dela Cruz)</label>
                                        <input type="text" class="form-control input-inv " value=""name="" oninput="this.className = ''"required>
                                    </div>
                                   
                                    <div class="form-group col-md-4">
                                        <label for="last_name">Contact Number</label>
                                        <input type="text" class="form-control input-inv " value=""name="" oninput="this.className = ''"required>
                                    </div>
                                </div><hr>
                                <label class="ml-3 fw-bold" style="font-size: 11px;">Parent/Guardian/Spouse Mailing Address</label><br>
                                <div class="form-row ml-3">
                                    <div class="form-group col-md-4"
                                        <label for="validationServer01">Barangay</label>
                                        <input type="text" class="form-control input-inv " value=""name="" oninput="this.className = ''"required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="last_name">City/Municipality</label>
                                        <input type="text" class="form-control input-inv " value=""name="" oninput="this.className = ''"required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="last_name">Province</label>
                                        <input type="text" class="form-control input-inv " value=""name="" oninput="this.className = ''"required>
                                    </div>
                                   
                                </div><hr>
                                <label class="ml-3 fw-bold" style="font-size: 11px;">Employment Status</label><br>
                                
                                    <div class="form-group col-md-3">
                                        <select class="form-select input-inv" name="employ_stat" id="employ_stat" oninput="this.className = ''"required>
                                            <option selected disabled>---------> Select <----------</option>
                                            <option value="Employed">Employed</option>
                                            <option value="Unemployed">Unemployed</option>
                                        </select>
                                       
                                    </div>
                                    <div id="employ_stat1">
                                    <div class="form-row ml-3">
                                      <div class="form-group col-md-4"
                                          <label for="validationServer01">Name of Employer</label>
                                          <input type="text" class="form-control" id="es1"value=""name="" required>
                                      </div>
                                      <div class="form-group col-md-4">
                                          <label for="last_name">Date Employed</label>
                                          <input type="text" class="form-control" id="es2"value=""name="" required>
                                      </div>
                                      <div class="form-group col-md-4">
                                          <label for="last_name">Address of Employer</label>
                                          <input type="text" class="form-control" id="es3"value=""name=""required>
                                      </div>
                                    </div>
                                    <div class="form-row ml-3">
                                      <div class="form-group col-md-6"
                                          <label for="validationServer01">Salary Info(Monthly Income)</label>
                                          <input type="text" class="form-control" id="es4"value=""name="" required>
                                      </div>
                                      <div class="form-group col-md-6">
                                          <label for="last_name">Classification of Worker</label>
                                          <input type="text" class="form-control" id="es5"value=""name="" required>
                                      </div>
                                     </div>
                                    </div>
                                    </div>
                                <div>
                              </div>
                              <div class="tab" id="tab3">
                                <h5 class="rv-pi text-center font-weight-bold text-primary">EDUCATIONAL ATTAINMENT</h5><hr>
                                <div class="row ">
                                    <div class="col-3">
                                        <div class="form-group">
                                              <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="agree">
                                                  <label></label>
                                              </div> <span>Elementary Undergraduate</span>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="agree">
                                                  <label></label>
                                              </div> <span>Elementary Graduate</span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="agree">
                                                  <label></label>
                                              </div> <span>Post Secondary Non-Tertiary/Technical Vocational Course Undergraduate</span>
                                        </div>
                                    </div> 
                                 </div>
                                 <div class="row">
                                    <div class="col-3">
                                        <div class="form-group">
                                              <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="agree">
                                                  <label></label>
                                              </div> <span>High School Undergraduate</span>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="agree">
                                                  <label></label>
                                              </div> <span>High School Graduate</span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="agree">
                                                  <label></label>
                                              </div> <span>Post Secondary Non-Tertiary/Technical Vocational Course Graduate</span>
                                        </div>
                                    </div> 
                                  </div>
                             
                                 <div class="row">
                                    <div class="col-3">
                                        <div class="form-group">
                                              <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="agree">
                                                  <label></label>
                                              </div> <span>College Undergraduate</span>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="agree">
                                                  <label></label>
                                              </div> <span>College Graduate</span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="agree">
                                                  <label></label>
                                              </div> <span>Masteral</span>
                                        </div>
                                    </div> 
                                  </div>
                                  <div class="row">
                                    <div class="col-3">
                                        <div class="form-group">
                                              <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="agree">
                                                  <label></label>
                                              </div> <span>Doctorate</span>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="agree">
                                                  <label></label>
                                              </div> <span>Junior High(K-12)</span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="agree">
                                                  <label></label>
                                              </div> <span>Senior High(K-12)</span>
                                        </div>
                                    </div> 
                                  </div>
                                  
                                  
                                 <div class="row">
                                    <div class="col-3">
                                        <div class="form-group">
                                              <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="agree">
                                                  <label></label>
                                              </div> <span>No Grade Completed</span>
                                        </div>
                                    </div>
                                    
                                 </div>
                                 
                              </div>
                              <div class="tab" id="tab4">
                                  <h5 class="rv-pi text-center font-weight-bold text-primary">CLASSIFICATION</h5><hr>
                                 <div class="row ">
                                    <div class="col-3">
                                        <div class="form-group">
                                              <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="agree">
                                                  <label></label>
                                              </div> <span>4Ps Beneficiary</span>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="agree">
                                                  <label></label>
                                              </div> <span>Overseas Filipino Workers(OFW)Dependents</span>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="form-group">
                                            <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="agree">
                                                  <label></label>
                                              </div> <span>Returning/Repatriated Overseas Filipino Workers(OFW)</span>
                                        </div>
                                    </div> 
                                 </div>
                                 <div class="row">
                                    <div class="col-3">
                                        <div class="form-group">
                                              <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="agree">
                                                  <label></label>
                                              </div> <span>Balik Probinsya</span>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="agree">
                                                  <label></label>
                                              </div> <span>Drug Dependents Surrenderees/Surrenderers</span>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="form-group">
                                            <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="agree">
                                                  <label></label>
                                              </div> <span>Victim of Natural Disasters and Calamities</span>
                                        </div>
                                    </div> 
                                  </div>
                             
                                 <div class="row">
                                    <div class="col-3">
                                        <div class="form-group">
                                              <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="agree">
                                                  <label></label>
                                              </div> <span>Displaced Workers</span>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="agree">
                                                  <label></label>
                                              </div> <span>Agrarian Reform Beneficiary</span>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="form-group">
                                            <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="agree">
                                                  <label></label>
                                              </div> <span>Family Members of AFP&amp;PNP/Killed-in-Action</span>
                                        </div>
                                    </div> 
                                  </div>
                                  <div class="row">
                                    <div class="col-3">
                                        <div class="form-group">
                                              <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="agree">
                                                  <label></label>
                                              </div> <span>RCEF-RESP</span>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="agree">
                                                  <label></label>
                                              </div> <span>Farmers and Fisherman</span>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="form-group">
                                            <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="agree">
                                                  <label></label>
                                              </div> <span>Family Members of AFP &amp; PNP Wounded in Action</span>
                                        </div>
                                    </div> 
                                  </div>
                                  <div class="row">
                                    <div class="col-3">
                                        <div class="form-group">
                                              <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="agree">
                                                  <label></label>
                                              </div> <span>Farmers and Fisherman</span>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="agree">
                                                  <label></label>
                                              </div> <span>Inmates and Detainees</span>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="form-group">
                                            <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="agree">
                                                  <label></label>
                                              </div> <span>Indigenous People &amp; Cultural Communties</span>
                                        </div>
                                    </div> 
                                  </div>
                                  <div class="row">
                                    <div class="col-3">
                                        <div class="form-group">
                                              <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="agree">
                                                  <label></label>
                                              </div> <span>Industry Workers</span>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="agree">
                                                  <label></label>
                                              </div> <span>Out-of-School-Youth</span>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="form-group">
                                            <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="agree">
                                                  <label></label>
                                              </div> <span>Rebel Returness/ Decommissioned Combatants</span>
                                        </div>
                                    </div> 
                                 </div>
                                 <div class="row">
                                    <div class="col-3">
                                        <div class="form-group">
                                              <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="agree">
                                                  <label></label>
                                              </div> <span>Student</span>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="agree">
                                                  <label></label>
                                              </div> <span>TESDA Alumni</span>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="form-group">
                                            <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="agree">
                                                  <label></label>
                                              </div> <span>Wounded-in-Action AFP&amp;PNP Personnel</span>
                                        </div>
                                    </div> 
                                 </div>
                                 <div class="row">
                                    <div class="col-3">
                                        <div class="form-group">
                                              <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="agree">
                                                  <label></label>
                                              </div> <span>TVET Trainers</span>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="agree">
                                                  <label></label>
                                              </div> <span>Uniformed Personnel</span>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="form-group">
                                            <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="agree">
                                                  <label></label>
                                              </div> <span>Others</span>
                                        </div>
                                    </div> 
                                 </div>
                              </div>
                              <div class="tab" id="tab5">
                                <h5 class="rv-pi text-center font-weight-bold text-primary">PROGRAM OFFERINGS</h5><hr>
                                    <div class="mb-5">
                                        <label>Qualification</label>
                                        <select class="form-select" name="qualification" id="select1">
                                            <option value="" selected="" disabled="">Please Choose</option>
                                            <option value="Automotive Servicing NC I">Automotive Servicing NC I</option>
                                            <option value="Bread and Pastry Production NC II">Bread and Pastry Production NC II</option>
                                            <option value="Automotive Servicing NC II" >Automotive Servicing NC II</option>
                                            <option value="Construction Painting NC II" >Construction Painting NC II</option> 
                                            <option value="Computer Systems Servicing NC II">Computer Systems Servicing NC II</option>
                                            <option value="Dressmaking NC II">Dressmaking NC II</option>
                                            <option value="Housekeeping NC II">Housekeeping NC II</option>
                                            <option value="Driving NC II">Driving NC II</option>
                                            <option value="Motorcycle/Small Engine Servicing NC II">Motorcycle/Small Engine Servicing NC II</option>
                                            <option value="Electronics Products Assembly Servicing NC II">Electronics Products Assembly Servicing NC II</option>
                                            <option value="Electrical Installation and Maintenance NC II">Electrical Installation and Maintenance NC II</option>
                                            <option value="Electrical Installation and Maintenance NC III">Electrical Installation and Maintenance NC III</option>
                                            <option value="Food and Beverage Services NC II">Food and Beverage Services NC II</option>
                                            <option value="Gas Tungsten Arc Welding NC II">Gas Tungsten Arc Welding NC II</option>-->
                                            <option value="RAC Servicing(DOMRAC) NC II">RAC Servicing(DOMRAC) NC II</option>
                                            <option value="Masonry NC II">Masonry NC II</option>
                                            <option value="PV Systems Installation NC II">PV Systems Installation NC II</option>
                                            <option value="Contact Tracing Level II">Contact Tracing Level II</option>
                                            <option value="Organic Agriculture Production NC II">Organic Agriculture Production NC II</option>
                                            <option value="Shielded Metal Arc Welding NC I">Shielded Metal Arc Welding NC I</option>
                                            <option value="Shielded Metal Arc Welding NC II">Shielded Metal Arc Welding NC II</option>
                                            <option value="Shielded Metal Arc Welding NC III">Shielded Metal Arc Welding NC III</option>
                                            <option value="Photovoltaic System Installation NC II">Photovoltaic System Installation NC II</option>
                                            <option value="Pipefitting NC II">Pipefitting NC II</option>
                                            <option value="Plumbing NC II">Plumbing NC II</option>
                                            <option value="Tile Setting NC II">Tile Setting NC II</option>
                                            <option value="Trainers Methodology Level I">Trainers Methodology Level I</option>
                                            <option value="Visual Graphic Design NC III">Visual Graphic Design NC III</option>
                                            <option value="LSI/Basic English Proficiency">LSI/Basic English Proficiency</option>
                                            <option value="LSI/Arabic Language and Saudi Gulf Culture">LSI/Arabic Language and Saudi Gulf Culture</option>
                                            <option value="LSI/Japanese Language and Culture">LSI/Japanese Language and Culture</option>
                                            <option value="LSI/Korean Language">LSI/Korean Language</option> 
                                        </select>
                                        <div id="nct">
                                            <label>National Certificate Acquired (ex. Driving NC II) for Trainers Methodology Level I Applicant Only</label>
                                            <input type="text" class="form-control" name="" id="nc">
                                        </div>
                                    </div>
                              </div>
                               <div class="tab" id="tab6">
                                <h5 class="rv-pi text-center font-weight-bold text-primary">PRIVACY DISCLAIMER</h5><hr>
                                 <div class="col-12 mt-5">
                                        <div class="form-group">
                                            <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="agree">
                                                  <label></label>
                                              </div> <span>Agree I hereby allow TESDA to use/post my contact details, name, email,cellphone/landline number and other information I provided which <br> maybe used for processing of my scholarship application, for employment opportunities and other purposes.</span>
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
