@extends('layouts.frontend')

@section('content')
<section class="text-center cta cta-4 space--xxs border--bottom" style="background-image: url('img/login.jpg');background-repeat: no-repeat;">
    <div class="container ">
        <div class="row">
            <div class="col-md-12">
             <span class="--avt-bold --txt-r --fs25">Online Reservation</span> 
            </div>
        </div>
    </div>
</section>

<section class="">
    <div class="container">
        <div class="card" >
            <div class="card-body">
                 <div class="row">
                     <div class="col-md-4 d-flex justify-content-center" >
                        <img src="{{asset('img/sample.jpg')}}" alt="as" style=" width: auto;" class="wllpr">
                     </div>
                     <div class="col-md-8">
                        <img src="{{asset('img/ABOTLAHAT.png')}}" alt="ABOTLAHAT" class="wllpr"style="width:200px;height:50px;position: absolute;left:0px;bottom: -20px;">
                        <p style="max-width: 500px; margin-bottom: 40px;" class="mt-4 mx-auto text-center text-muted --avt-normal --fs15">Welcome Visitor ! Let’s create your full reservation to get you started. <br>Please fill-in all necessary information accurately to complete your registration</p>
                         <p class="text-center m-0 text-uppercase text-primary">STEP 1 / 6</p>
                         <div style="text-align:center;">
                                <span class="step"></span>
                                <span class="step"></span>
                                <span class="step"></span>
                                <span class="step"></span>
                                <span class="step"></span>
                                <span class="step"></span>
                         </div>
                         <form id="regForm" action="{{URL::to('/addReservation')}}" method="post" autocomplete="off" class="was-validated --avt-normal --fs15" novalidate>
                            @csrf
                              <div class="tab" id="tab1">
                                <h5 class="rv-pi text-center font-weight-bold text-primary">PERSONAL INFORMATION</h5>
                                 <div class="form-row ml-3">
                                    <div class="form-group col-md-6">
                                        <label for="firstname">First Name</label>
                                        <input 
                                        type="text" 
                                        class="form-control"
                                        name="res_fname"
                                        id="firstname"
                                        style="text-transform:uppercase;text-align:center;" 
                                        onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' 
                                        required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="lastname">Last Name</label>
                                        <input 
                                        type="text" 
                                        class="form-control "
                                        name="res_lname"
                                        style="text-transform:uppercase;text-align:center;"
                                        onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' 
                                       
                                        required>
                                    </div>
                                </div> 
                                <div class="form-row ml-3">
                                    <div class="form-group col-md-6">
                                        <label for="first_name">Middle Name</label>
                                        <input type="text" 
                                        class="form-control " 
                                        name="res_mname" 
                                        style="text-transform:uppercase;text-align:center;"
                                        onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' 
                                        
                                        required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="last_name">Suffix</label>
                                        <input 
                                        style="max-width: 100px" 
                                        type="text" 
                                        id="suffix"
                                        maxlength="2"
                                        class="form-control" 
                                        value=" "
                                        name="res_extension"
                                        onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' 
                                        style="text-transform:uppercase;text-align:center;">
                                    </div>
                                </div>
                                <h5 class="text-center font-weight-bold mt-3">COMPLETE PERMANENT ADDRESS</h5>
                              
                                <div class="form-row ml-3">
                                    <div class="form-group col-md-4">
                                        <label for="sasa">Region</label>
                                        <select type="text" id="region" class="form-control" required style="text-transform:uppercase;text-align:center;"></select>
                                        <div class="invalid-feedback"></div>
                                        <input type="hidden" name="res_region" id="textFieldTextJQ">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="last_name">Province</label>
                                        <select type="text" id="province" class="form-control" required style="text-transform:uppercase;text-align:center;"></select>
                                        <input type="hidden" name="res_province" id="textFieldTextJQ1">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="first_name">City/Municipality</label>
                                        <select type="text" id="cities" class="form-control"required style="text-transform:uppercase;text-align:center;"></select>
                                        <input type="hidden" name="res_city" id="textFieldTextJQ2">
                                    </div>
                                </div> 
                                <div class="form-row ml-3">
                                    <div class="form-group col-md-4">
                                        <label for="last_name">Barangay</label>
                                        <select type="text" id="barangays" class="form-control" required style="text-transform:uppercase;text-align:center;"></select>
                                        <input type="hidden" name="res_barangay"id="textFieldTextJQ3">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="last_name">Purok/Block/Street</label>
                                        <input type="text" class="form-control " value="" style="text-transform:uppercase;text-align:center;"name="res_street" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="last_name">District</label>
                                        <select name="res_district" class="custom-select"required="true" style="text-transform:uppercase;text-align:center;">
                                                <option value=""  selected disabled>Please Choose</option>
                                                <option value="I">I</option>
                                                <option value="II">II</option>
                                                <option value="III">III</option>
                                                <option value="IV">IV</option>
                                                <option value="V">V</option>
                                                <option value="VI">VI</option>
                                                <option value="VII">VII</option>
                                                <option value="VIII">VIII</option>
                                                <option value="Lone">Lone District</option>
                                                <option value="1st(North)">1st(North)</option>
                                                <option value="2st(South)">2nd(South)</option>    
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="last_name">Nationality</label>
                                        <input type="text" class="form-control text-center" value="Filipino"name="res_nationality" disabled>
                                    </div>
                                </div>
                               
                                <div class="form-row ml-3 mt-5">
                                    <div class="form-group col-md-6">
                                        <label for="first_name">Contact Number</label>
                                        <input type="tel" class="form-control" maxlength="11" onkeypress="return onlyNumber(event) " style="text-transform:uppercase;text-align:center;" name="res_contact" required placeholder="Note: Pls input ur active number!">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="last_name">Email address</label>
                                        <input type="email" class="form-control" value="" style="text-transform:uppercase;text-align:center;"name="res_email"required>
                                    </div>
                                
                                </div>
                              </div>
                              <div class="tab" id="tab2" >
                                <h5 class="rv-pi text-center font-weight-bold text-primary">PROFILE</h5>
                                <hr>
                                <label class="ml-3 fw-bold" style="font-size: 11px;">Profile</label><br>
                                <div class="form-row ml-3">
                                    <div class="form-group col-md-4">
                                        <label for="validationServer01">Gender</label>
                                        <select class="custom-select"  name="res_gender"required style="text-transform:uppercase;text-align:center;">
                                            <option value=""selected disabled >Please Choose</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="last_name">Civil Status</label>
                                        <select name="res_civilstat"class="custom-select"required style="text-transform:uppercase;text-align:center;">
                                            <option value="" selected="" disabled>Please Choose </option>
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Widow/er">Widow/er</option>
                                            <option value="Separated">Separated</option>
                                            <option value="Solo Parent">Solo Parent</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="last_name">Age</label>
                                        <input type="tel" class="form-control" maxlength="2" name="res_age" onkeypress="return onlyNumber(event) " required style="text-transform:uppercase;text-align:center;">
                                    </div>
                                </div> 
                                <div class="form-row ml-3">
                                    <div class="form-group col-md-4">
                                        <label for="validationServer01">Birth Month</label>
                                        <select name="res_birthmonth"class="custom-select"required style="text-transform:uppercase;text-align:center;">
                                            <option value="" selected="" disabled>Please Choose </option>
                                            <option value="January">January</option>
                                            <option value="February">February</option>
                                            <option value="March">March</option>
                                            <option value="April">April</option>
                                            <option value="June">June</option>
                                            <option value="July">July</option>
                                            <option value="August">August</option>
                                            <option value="September">September</option>
                                            <option value="October">October</option>
                                            <option value="November">November</option>
                                            <option value="December">December</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="last_name">Birth Date</label>
                                        <input type="tel" class="form-control "maxlength="2"name="res_birthday" onkeypress="return onlyNumber(event) " required style="text-transform:uppercase;text-align:center;">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="last_name">Birth Year</label>
                                        <input type="tel" class="form-control "maxlength="4"name="res_birthyear" onkeypress="return onlyNumber(event) " required style="text-transform:uppercase;text-align:center;">
                                        
                                    </div>
                                </div><hr>
                                <label class="ml-3 fw-bold" style="font-size: 11px;">Birth Place</label><br>
                                 <div class="form-row ml-3">
                                    <div class="form-group col-md-4">
                                        <label for="validationServer01">City/Municipality</label>
                                        <input type="text" class="form-control " value=""name="res_birthcity" required style="text-transform:uppercase;text-align:center;">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="last_name">Province</label>
                                        <input type="text" class="form-control " value=""name="res_birthprov" required style="text-transform:uppercase;text-align:center;">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="last_name">Region</label>
                                        <select name="res_birthreg" class="custom-select"required style="text-transform:uppercase;text-align:center;">
                                            <option value="" selected="">Select Region</option>
                                            <option value="I">Region I - Ilocos</option>
                                            <option value="II">Region II - Cagayan Valley</option>
                                            <option value="III">Region III - Central Luzon</option>
                                            <option value="IV">Region IV - CALABARZON</option>
                                            <option value="V">Region V - Bicol</option>
                                            <option value="VI">Region VI - Western Visayas</option>
                                            <option value="VII">Region VII - Central Visayas</option>
                                            <option value="VIII">Region VIII - Eastern Visayas</option>
                                            <option value="IX">Region IX - Zamboanga Peninsula</option>
                                            <option value="X">Region X - Northen Mindanao</option>
                                            <option value="XI">Region XI - Davao</option>
                                            <option value="XII">Region XII - SOCCSKSARGEN</option>
                                            <option value="NCR">National Capital Region (NCR)</option>
                                            <option value="CAR">Cordillera Administrative Region (CAR)</option>
                                            <option value="XIII">Region XIII - CARAGA</option>
                                            <option value="ARMM">Autonomous Region in Muslim Mindanao (ARMM)</option>
                                            <option value="Other Country">Other Country</option>
                                        </select>
                                    </div>
                                </div><hr>
                                 <label class="ml-3 fw-bold" style="font-size: 11px;">Parent/Guardian/Spouse</label><br>
                                 <div class="form-row ml-3">
                                    <div class="form-group col-md-8">
                                        <label for="validationServer01">Full Name (ex. Juan D. Dela Cruz)</label>
                                        <input type="text" class="form-control "name="res_parent" required style="text-transform:uppercase;text-align:center;">
                                    </div>
                                   
                                    <div class="form-group col-md-4">
                                        <label for="last_name">Contact Number</label>
                                        <input type="tel" class="form-control " maxlength="11" onkeypress="return onlyNumber(event) "name="res_parentcon" required style="text-transform:uppercase;text-align:center;">
                                    </div>
                                </div><hr>
                                <label class="ml-3 fw-bold" style="font-size: 11px;">Parent/Guardian/Spouse Mailing Address</label><br>
                                <div class="form-row ml-3">
                                    <div class="form-group col-md-4">
                                        <label for="validationServer01">Barangay</label>
                                        <input type="text" class="form-control "name="res_parentmailbar" required style="text-transform:uppercase;text-align:center;">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="last_name">City/Municipality</label>
                                        <input type="text" class="form-control "name="res_parentmailcit" required style="text-transform:uppercase;text-align:center;">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="last_name">Province</label>
                                        <input type="text" class="form-control "name="res_parentmailpro" required style="text-transform:uppercase;text-align:center;">
                                    </div>
                                   
                                </div><hr>
                                <label class="ml-3 fw-bold" style="font-size: 11px;">Employment Status</label><br>
                                
                                    <div class="form-group col-md-3">
                                        <select class="custom-select" style="width:200px;" name="res_employstat" id="employ_stat" required style="text-transform:uppercase;text-align:center;">
                                            <option value=""selected disabled >---------> Select <----------</option>
                                            <option value="Employed">Employed</option>
                                            <option value="Unemployed">Unemployed</option>
                                        </select>
                                       
                                    </div>
                                    <div id="employ_stat1">
                                    <div class="form-row ml-3">
                                      <div class="form-group col-md-4">
                                          <label for="validationServer01">Name of Employer</label>
                                          <input type="text" class="form-control" id="es1"value=""name="res_namemp" required style="text-transform:uppercase;text-align:center;">
                                      </div>
                                      <div class="form-group col-md-4">
                                          <label for="last_name">Date Employed</label>
                                          <input type="date" class="form-control" id="es2"value=""name="res_datemp" required style="text-transform:uppercase;text-align:center;"> 
                                      </div>
                                      <div class="form-group col-md-4">
                                          <label for="last_name">Address of Employer</label>
                                          <input type="text" class="form-control" id="es3"value=""name="res_addemp" required style="text-transform:uppercase;text-align:center;">
                                      </div>
                                    </div>
                                    <div class="form-row ml-3">
                                      <div class="form-group col-md-6">
                                          <label for="validationServer01">Salary Info(Monthly Income)</label>
                                          <select name="res_salary" class="custom-select" id="es4" style="text-transform:uppercase;text-align:center;" required>
                                            <option value="" selected="" disabled>Please Choose</option>
                                            <option value="Below 10,000">Below 10,000</option>
                                            <option value="10,000 to 20,000">10,000 to 20,000</option>
                                            <option value="20,000 to 30,000">20,000 to 30,000</option>
                                            <option value="30,000 to 40,000">30,000 to 40,000</option>
                                            <option value="40,000 to 50,000">40,000 to 50,000</option>
                                            <option value="50,000 to 60,000">50,000 to 60,000</option>
                                            <option value="60,000 above">60,000 above</option>
                                        </select>
                                        </div>
                                      <div class="form-group col-md-6">
                                          <label for="last_name">Classification of Worker</label>
                                          <select name="res_classworker" id="es5" class="custom-select" style="text-transform:uppercase;text-align:center;" required>
                                            <option value="" selected="" disabled>Please Choose</option>
                                            <option value="Job Order">Job Order</option>
                                            <option value="Contractual">Contractual</option>
                                            <option value="Permanent">Permanent</option>
                                            <option value="Self-Employed worker">Self-Employed worker</option>
                                            <option value="Employer in own Family-Operated Farm or Bussiness">Employer in own Family-Operated Farm or Bussiness</option>
                                            <option value="Work without pay in own family-operated farm or business">Work without pay in own family-operated farm or business</option>
                                        </select>
                                      </div>
                                     </div>
                                    </div>
                                    </div>
                                <div>
                              </div>
                              <div class="tab" id="tab3">
                                <h5 class="rv-pi text-center font-weight-bold text-primary">EDUCATIONAL ATTAINMENT</h5><hr>
                                <div class="row ">
                                    <div class="col-md-4 col-xs-12 col-sm-6">
                                        <div class="form-group">
                                              <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="res_educational" value="Elementary Undergraduate">
                                                  <label></label>
                                              </div> <span>Elementary Undergraduate</span>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="res_educational" value="Post Secondary Non-Tertiary/Tech Vocational Course Undergrad">
                                                  <label></label>
                                              </div> <span>Post Secondary Non-Tertiary/Tech Vocational Course Undergrad</span>
                                        </div>
                                    </div> 
                                 </div>
                                 <div class="row">
                                 <div class="col-md-4 col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <div class="input-checkbox">
                                            <input type="checkbox" id="" name="res_educational" value="Elementary Graduate">
                                            <label></label>
                                        </div> <span>Elementary Graduate</span>
                                    </div>
                                </div>
                                    <div class="col-md-8 col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="res_educational" value="Post Secondary Non-Tertiary/Tech Vocational Course Graduate">
                                                  <label></label>
                                              </div> <span>Post Secondary Non-Tertiary/Tech Vocational Course Graduate</span>
                                        </div>
                                    </div> 
                                  </div>
                             
                                 <div class="row">
                                    <div class="col-md-4 col-xs-12 col-sm-6">
                                        <div class="form-group">
                                              <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="res_educational" value="College Undergraduate">
                                                  <label></label>
                                              </div> <span>College Undergraduate</span>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="res_educational" value="College Graduate">
                                                  <label></label>
                                              </div> <span>College Graduate</span>
                                        </div>
                                    </div>
                                  
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-xs-12 col-sm-6">
                                        <div class="form-group">
                                              <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="res_educational" value="Doctorate">
                                                  <label></label>
                                              </div> <span>Doctorate</span>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <div class="input-checkbox">
                                                <input type="checkbox" id="" name="res_educational" value="Masteral">
                                                <label></label>
                                            </div> <span>Masteral</span>
                                        </div>
                                    </div> 
                                  </div>
                                  <div class="row">
                                    
                                    <div class="col-md-4 col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <div class="input-checkbox">
                                                <input type="checkbox" id="" name="res_educational" value="Junior High(K-12)">
                                                <label></label>
                                            </div> <span>Junior High(K-12)</span>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <div class="input-checkbox">
                                                <input type="checkbox" id="" name="res_educational" value="Senior High(K-12)">
                                                <label></label>
                                            </div> <span>Senior High(K-12)</span>
                                        </div>
                                    </div> 
                                </div>
                                  
                                 <div class="row">
                                    <div class="col-md-4 col-xs-12 col-sm-6">
                                        <div class="form-group">
                                              <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="res_educational" value="No Grade Completed">
                                                  <label></label>
                                              </div> <span>No Grade Completed</span>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <div class="input-checkbox">
                                                <input type="checkbox" id="" name="res_educational" value="Alternative Learning System (ALS)">
                                                <label></label>
                                            </div> <span>Alternative Learning System (ALS)</span>
                                        </div>
                                    </div> 
                                 </div>
                                 
                              </div>
                              <div class="tab" id="tab4">
                                  <h5 class="rv-pi text-center font-weight-bold text-primary">CLASSIFICATION</h5><hr>
                                 <div class="row ">
                                    <div class="col-md-4 col-xs-12 col-sm-6">
                                        <div class="form-group">
                                              <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="res_lts[]" value="4Ps Beneficiary">
                                                  <label></label>
                                              </div> <span>4Ps Beneficiary</span>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="res_lts[]" value="Overseas Filipino Workers(OFW)Dependents">
                                                  <label></label>
                                              </div> <span>Overseas Filipino Workers(OFW)Dependents</span>
                                        </div>
                                    </div>
                                   
                                 </div>
                                 <div class="row">
                                    <div class="col-md-4 col-xs-12 col-sm-6">
                                        <div class="form-group">
                                              <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="res_lts[]" value="Balik Probinsya">
                                                  <label></label>
                                              </div> <span>Balik Probinsya</span>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="res_lts[]" value="Drug Dependents Surrenderees/Surrenderers">
                                                  <label></label>
                                              </div> <span>Drug Dependents Surrenderees/Surrenderers</span>
                                        </div>
                                    </div>
                                  
                                  </div>
                             
                                 <div class="row">
                                    <div class="col-md-4 col-xs-12 col-sm-6">
                                        <div class="form-group">
                                              <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="res_lts[]" value="Displaced Workers">
                                                  <label></label>
                                              </div> <span>Displaced Workers</span>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-8 col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="res_lts[]" value="Family Members of AFP PNP/Killed-in-Action">
                                                  <label></label>
                                              </div> <span>Family Members of AFP&amp;PNP/Killed-in-Action</span>
                                        </div>
                                    </div> 
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-xs-12 col-sm-6">
                                        <div class="form-group">
                                              <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="res_lts[]" value="RCEF-RESP">
                                                  <label></label>
                                              </div> <span>RCEF-RESP</span>
                                        </div>
                                    </div>
                                  
                                    <div class="col-md-8 col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="res_lts[]" value="Family Members of AFP PNP Wounded in Action">
                                                  <label></label>
                                              </div> <span>Family Members of AFP &amp; PNP Wounded in Action</span>
                                        </div>
                                    </div> 
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-xs-12 col-sm-6">
                                        <div class="form-group">
                                              <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="res_lts[]" value="Farmers and Fisherman">
                                                  <label></label>
                                              </div> <span>Farmers and Fisherman</span>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-8 col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="res_lts[]" value="Indigenous People Cultural Communties">
                                                  <label></label>
                                              </div> <span>Indigenous People &amp; Cultural Communties</span>
                                        </div>
                                    </div> 
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-xs-12 col-sm-6">
                                        <div class="form-group">
                                              <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="res_lts[]" value="Industry Workers">
                                                  <label></label>
                                              </div> <span>Industry Workers</span>
                                        </div>
                                    </div>
                                  
                                    <div class="col-md-8 col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="res_lts[]" value="Rebel Returness/ Decommissioned Combatants">
                                                  <label></label>
                                              </div> <span>Rebel Returness/ Decommissioned Combatants</span>
                                        </div>
                                    </div> 
                                 </div>
                                 <div class="row">
                                   
                                    <div class="col-md-4 col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="res_lts[]" value="TESDA Alumni">
                                                  <label></label>
                                              </div> <span>TESDA Alumni</span>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="res_lts[]" value="Wounded-in-Action AFP/PNP Personnel">
                                                  <label></label>
                                              </div> <span>Wounded-in-Action AFP&amp;PNP Personnel</span>
                                        </div>
                                    </div> 
                                 </div>
                                 <div class="row">
                                    <div class="col-md-4 col-xs-12 col-sm-6">
                                        <div class="form-group">
                                              <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="res_lts[]" value="TVET Trainers">
                                                  <label></label>
                                              </div> <span>TVET Trainers</span>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="res_lts[]" value="TESDA Alumni">
                                                  <label></label>
                                              </div> <span>TESDA Alumni</span>
                                        </div>
                                    </div>
                                  
                                 </div>
                                 <div class="row">
                                    <div class="col-md-4 col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="res_lts[]" value="Inmates and Detainees">
                                                  <label></label>
                                              </div> <span>Inmates and Detainees</span>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="res_lts[]" value="Victim of Natural Disasters and Calamities">
                                                  <label></label>
                                              </div> <span>Victim of Natural Disasters and Calamities</span>
                                        </div>
                                    </div> 
                                 </div>
                                 <div class="row">
                                    <div class="col-md-4 col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="res_lts[]" value="Out-of-School-Youth">
                                                  <label></label>
                                              </div> <span>Out-of-School-Youth</span>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-xs-12 col-sm-6">
                                        <div class="form-group">
                                              <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="res_lts[]" value="Student">
                                                  <label></label>
                                              </div> <span>Student</span>
                                        </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-4 col-xs-12 col-sm-6">
                                            <div class="form-group">
                                            <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="res_lts[]" value="Agrarian Reform Beneficiary">
                                                  <label></label>
                                              </div> <span>Agrarian Reform Beneficiary</span>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <div class="input-checkbox">
                                                  <input type="checkbox" id="" name="res_lts[]" value="Returning/Repatriated Overseas Filipino Workers(OFW)">
                                                  <label></label>
                                              </div> <span>Returning/Repatriated Overseas Filipino Workers(OFW)</span>
                                        </div>
                                    </div> 
                                 </div>
                                 <div class="row">
                                    <div class="col-md-4 col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <div class="input-checkbox">
                                                  <input type="checkbox" id="others" name="res_lts[]" value="Others">
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
                                        <select class="custom-select" name="res_qualification" id="select1" required="true">
                                            <option value="" selected disabled="">Please Choose</option>
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
                                            <option value="Trainers Methodology Level I" id="tm">Trainers Methodology Level I</option>
                                            <option value="Visual Graphic Design NC III">Visual Graphic Design NC III</option>
                                            <option value="LSI/Basic English Proficiency">LSI/Basic English Proficiency</option>
                                            <option value="LSI/Arabic Language and Saudi Gulf Culture">LSI/Arabic Language and Saudi Gulf Culture</option>
                                            <option value="LSI/Japanese Language and Culture">LSI/Japanese Language and Culture</option>
                                            <option value="LSI/Korean Language">LSI/Korean Language</option> 
                                        </select>
                                        <div id="nct">
                                            <label>National Certificate Acquired (ex. Driving NC II) for Trainers Methodology Level I Applicant Only</label>
                                            <input type="text" class="form-control" name="" id="nc" placeholder="Ex. Driving NC II">
                                        </div>
                                        <input type="hidden" value="<?php echo date("d-m-Y") ?>" name="registeredDate">
                                    </div>
                              </div>
                               <div class="tab" id="tab6">
                                <h5 class="rv-pi text-center font-weight-bold text-primary">PRIVACY DISCLAIMER</h5><hr>
                                 <div class="col-12 mt-5">
                                        <div class="form-group">
                                            <div class="input-checkbox">
                                                  <input type="checkbox" id="checkboxxxxx" name="agree" required>
                                                  <label></label>
                                              </div> 
                                              <div style="font-size: 3vw !important; font-size: 12px !important;width: 100%;">Agree I hereby allow TESDA to use/post my contact details, name, email,cellphone/landline number and other information I provided which <br> maybe used for processing of my scholarship application, for employment opportunities and other purposes.</div>
                                        </div>
                                </div>   
                              </div>
                              <div class="d-md-flex justify-content-md-end">
                                <div class="form-group">
                                  <button type="button" id="prevBtn" class="btn btn-secondary btn-lg" style="width: 150px;"onclick="nextPrev(-1)">Previous</button>
                                  <button type="button" id="nextBtn" class="btn btn-primary btn-lg" style="width: 130px;"onclick="nextPrev(1)">Next</button>
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
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script src="http://cdn.jsdelivr.net/gh/michaeldegraciacuento/ph-locations-jquery/location.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script type="text/javascript">
      
      var success = "{{ session('success') }}";
      if (success) {
          swal ({
              title: "Successfully submitted your reservation!",
              text: success,
              icon: 'success',
              button: 'OK',
          });
      }

      var deleted = "{{ session('deleted') }}";
      if (deleted) {
          swal ({
              text: deleted,
              icon: 'error',
              button: 'OK',
          });
      }
      
      var error = "{{ session('error') }}";
      if (error) {
          swal ({
              text: error,
              icon: 'error',
              button: 'OK',
          });
      }

      var danger = "{{ session('danger') }}";
      if (danger) {
          swal ({
              text: danger,
              icon: 'error',
              button: 'OK',
          });
      }

      var warning = "{{ session('warning') }}";
      if (warning) {
          swal ({
              text: warning,
              icon: 'info',
              button: 'OK',
          });
      }

    
        </script>
@endsection
