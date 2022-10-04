<div class="modal fade" id="update_reservation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <form action="{{ route('reservation.update',$rese->res_id) }}" method="post">
        @csrf  
        @method('PATCH')   
        <div class="modal-header">
          <h4 class="modal-title">Update Reservation Data</h4>
          <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        </div>
        <div class="modal-body">
          <div class="row">
              <div class="col-2">
                  <img src="{{asset('img/user.png')}}" width="100" height="100" alt="user">
              </div>
              <div class="col-10">
                 <div class="row mt-1">
                    <div class="col-4">
                        <label for="firstname">First Name:</label>
                        <input type="text" class="form-control text-center text-uppercase" name="res_fname" value="{{$rese->res_fname}}">
                    </div>
                    <div class="col-4">
                        <label for="firstname">Last Name:</label>
                        <input type="text" class="form-control text-center text-uppercase " name="res_lname" value="{{$rese->res_lname}}">
                    </div>
                    <div class="col-2">
                        <label for="firstname">M.I:</label>
                        <input type="text" class="form-control text-center text-uppercase" name="res_mname" value="{{$rese->res_mname}}">
                    </div>
                    <div class="col-2">
                        <label for="firstname">Extension:</label>
                        <input type="text" class="form-control text-center text-uppercase" name="res_extension" value="{{$rese->res_extension}}">
                    </div>
                 </div>
                 <hr>
              </div>
           
          </div>
          <div class="row mt-2">
            <div class="col-4">
              <label for="">Number/Street/Block:</label>
              <input type="text" class="form-control text-center text-uppercase" name="res_street" value="{{$rese->res_street}}">
            </div>
            <div class="col-4">
              <label for="">Barangay:</label>
              <input type="text" class="form-control text-center text-uppercase" name="res_barangay" value="{{$rese->res_barangay}}">
            </div>
            <div class="col-4">
              <label for="">District:</label>
              <input type="text" class="form-control text-center text-uppercase" name="res_district" value="{{$rese->res_district}}">
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-4">
              <label for="">City/Municipality:</label>
              <input type="text" class="form-control text-center text-uppercase" name="res_city" value="{{$rese->res_city}}">
            </div>
            <div class="col-4">
              <label for="">Province:</label>
              <input type="text" class="form-control text-center text-uppercase" name="res_province" value="{{$rese->res_province}}">
            </div>
            <div class="col-4">
              <label for="">Region:</label>
              <input type="text" class="form-control text-center text-uppercase" name="res_region" value="{{$rese->res_region}}">
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-4">
              <label for="">Email Address:</label>
              <input type="text" class="form-control text-center text-uppercase" name="res_email" value="{{$rese->res_email}}">
            </div>
            <div class="col-4">
              <label for="">Contact No.:</label>
              <input type="text" class="form-control text-center text-uppercase" name="res_contact" value="{{$rese->res_contact}}">
            </div>
            <div class="col-4">
              <label for="">Nationality:</label>
              <input type="text" class="form-control text-center text-uppercase" name="res_nationality" value="{{$rese->res_nationality}}" disabled>
            </div>
            
          </div>
          <hr>
          <div class="row">
              <div class="col-4">
                <label for="firstname">Gender:</label>
                <input type="text" class="form-control text-center text-uppercase" name="res_gender" value="{{$rese->res_gender}}">
              </div>
              <div class="col-4">
                <label for="firstname">Civil Status:</label>
                <input type="text" class="form-control text-center text-uppercase" name="res_civilstat" value="{{$rese->res_civilstat}}">
              </div>
              <div class="col-4">
                <label for="firstname">Employment Status:</label>
                <input type="text" class="form-control text-center text-uppercase" name="res_employstat" value="{{$rese->res_employstat}}">
              </div>
          </div>
          <hr>
          <div class="row">
              <div class="col-3">
                <label for="firstname">Birth Month:</label>
                <input type="text" class="form-control text-center text-uppercase" name="res_birthmonth" value="{{$rese->res_birthmonth}}">
              </div>
              <div class="col-3">
                <label for="firstname">Birth Day:</label>
                <input type="text" class="form-control text-center text-uppercase" name="res_birthday" value="{{$rese->res_birthday}}">
              </div>
              <div class="col-3">
                <label for="firstname">Birth Year:</label>
                <input type="text" class="form-control text-center text-uppercase" name="res_birthyear" value="{{$rese->res_birthyear}}">
              </div>
              <div class="col-3">
                <label for="firstname">Age:</label>
                <input type="text" class="form-control text-center text-uppercase" name="res_age" value="{{$rese->res_age}}">
              </div>
          </div><hr>
          <div class="row">
              <div class="col-3">
                <label for="firstname">Birth City:</label>
                <input type="text" class="form-control text-center text-uppercase" name="res_birthcity" value="{{$rese->res_birthcity}}">
              </div>
              <div class="col-3">
                <label for="firstname">Birth Province:</label>
                <input type="text" class="form-control text-center text-uppercase" name="res_birthprov" value="{{$rese->res_birthprov}}">
              </div>
              <div class="col-2">
                <label for="firstname">Birth Region:</label>
                <input type="text" class="form-control text-center text-uppercase" name="res_birthreg" value="{{$rese->res_birthreg}}">
              </div>
              <div class="col-4">
                <label for="firstname">Educational Attainment:</label>
                <input type="text" class="form-control text-center text-uppercase" name="res_educational" value="{{$rese->res_educational}}">
              </div>
          </div><hr>
          <b> Parent/Guardian/Spouse</b>
          <div class="row">
            <div class="col-3">
                  <label for="firstname">Full Name:</label>
                  <input type="text" class="form-control text-center text-uppercase" name="res_parent" value="{{$rese->res_parent}}">
                </div>
                <div class="col-3">
                  <label for="firstname">Barangay:</label>
                  <input type="text" class="form-control text-center text-uppercase" name="res_parentmailbar" value="{{$rese->res_parentmailbar}}">
                </div>
                <div class="col-3">
                  <label for="firstname">City:</label>
                  <input type="text" class="form-control text-center text-uppercase" name="res_parentmailcit" value="{{$rese->res_parentmailcit}}">
                </div>
                <div class="col-3">
                  <label for="firstname">Province:</label>
                  <input type="text" class="form-control text-center text-uppercase" name="res_parentmailpro" value="{{$rese->res_parentmailpro}}">
                </div>
          </div><hr>
          <b>Learner/Trainee/Student(Clients Classification):</b>
          <div class="row">
              <div class="col-4"><input type="checkbox" name="res_lts[]" <?php echo ($rese['res_lts']== '4Ps Beneficiary' ? 'checked' : '');?>> 4Ps Beneficiary</div>
              <div class="col-4"><input type="checkbox" name="res_lts[]" <?php echo ($rese['res_lts']== 'Agrarian Reform Beneficiary' ? 'checked' : '');?>> Agrarian Reform Beneficiary</div>
              <div class="col-4"><input type="checkbox" name="res_lts[]" <?php echo ($rese['res_lts']== 'Balik Probinsya' ? 'checked' : '');?>> Balik Probinsya</div>
              <div class="col-4"><input type="checkbox" name="res_lts[]" <?php echo ($rese['res_lts']== 'Displaced Workers' ? 'checked' : '');?>> Displaced Workers</div>
              <div class="col-4"><input type="checkbox" name="res_lts[]" <?php echo ($rese['res_lts']== 'Drug Dependents Surrenderees/Surrenderers' ? 'checked' : '');?>> Drug Surrenderees</div>
              <div class="col-4"><input type="checkbox" name="res_lts[]" <?php echo ($rese['res_lts']== 'Family Members of AFP PNP/Killed-in-Action' ? 'checked' : '');?>> AFP&PNP/Killed-in-Action</div>
              <div class="col-4"><input type="checkbox" name="res_lts[]" <?php echo ($rese['res_lts']== 'Family Members of AFP PNP Wounded in Action' ? 'checked' : '');?>>  AFP & PNP Wounded in Action</div>
              <div class="col-4"><input type="checkbox" name="res_lts[]" <?php echo ($rese['res_lts']== 'Farmers and Fisherman' ? 'checked' : '');?>> Farmers and Fisherman</div>
              <div class="col-4"><input type="checkbox" name="res_lts[]" <?php echo ($rese['res_lts']== 'Indigenous People Cultural Communtie' ? 'checked' : '');?>> Indigenous People</div>
              <div class="col-4"><input type="checkbox" name="res_lts[]" <?php echo ($rese['res_lts']== 'Industry Worker' ? 'checked' : '');?>> Industry Workers</div>
              <div class="col-4"><input type="checkbox" name="res_lts[]" <?php echo ($rese['res_lts']== 'Inmates and Detainees' ? 'checked' : '');?>> Inmates and Detainees</div>
              <div class="col-4"><input type="checkbox" name="res_lts[]" <?php echo ($rese['res_lts']== 'MILF Beneficiary' ? 'checked' : '');?>> MILF Beneficiary</div>
              <div class="col-4"><input type="checkbox" name="res_lts[]" <?php echo ($rese['res_lts']== 'Out-of-School-Youth' ? 'checked' : '');?>> Out-of-School-Youth</div>
              <div class="col-4"><input type="checkbox" name="res_lts[]" <?php echo ($rese['res_lts']== 'Overseas Filipino Workers(OFW)Dependents' ? 'checked' : '');?>> OFW Dependents</div>
              <div class="col-4"><input type="checkbox" name="res_lts[]" <?php echo ($rese['res_lts']== 'RCEF-RESP' ? 'checked' : '');?>> RCEF-RESP</div>
              <div class="col-4"><input type="checkbox" name="res_lts[]" <?php echo ($rese['res_lts']== 'Rebel Returness/ Decommissioned Combatants' ? 'checked' : '');?>> Rebel/Decommissioned</div>
              <div class="col-4"><input type="checkbox" name="res_lts[]" <?php echo ($rese['res_lts']== 'Returning/Repatriated Overseas Filipino Workers(OFW)' ? 'checked' : '');?>> Returning/Repatriated OFW</div>
              <div class="col-4"><input type="checkbox" name="res_lts[]" <?php echo ($rese['res_lts']== 'Student' ? 'checked' : '');?>> Student</div>
              <div class="col-4"><input type="checkbox" name="res_lts[]" <?php echo ($rese['res_lts']== 'TESDA Alumni' ? 'checked' : '');?>> TESDA Alumni</div>
              <div class="col-4"><input type="checkbox" name="res_lts[]" <?php echo ($rese['res_lts']== 'TVET Trainers' ? 'checked' : '');?>> TVET Trainers</div>
              <div class="col-4"><input type="checkbox" name="res_lts[]" <?php echo ($rese['res_lts']== 'Uniformed Personnel' ? 'checked' : '');?>> Uniformed Personnel</div>
              <div class="col-4"><input type="checkbox" name="res_lts[]" <?php echo ($rese['res_lts']== 'Victim of Natural Disasters and Calamities' ? 'checked' : '');?>> Victim of Natural Disasters and Calamities</div>
              <div class="col-4"><input type="checkbox" name="res_lts[]" <?php echo ($rese['res_lts']== 'Wounded-in-Action AFP/PNP Personnel' ? 'checked' : '');?>> Wounded-in-Action AFP&PNP Personnel</div>
              <div class="col-4"><input type="checkbox" name="res_lts[]" <?php echo ($rese['res_lts']== 'Others' ? 'checked' : '');?>> Others</div> 
          </div><hr>
          <b>Type of Disability(for Persons with Disability Only):</b>
          <div class="row">
              <div class="col-4"><input type="checkbox" name="res_td[]" <?php echo ($rese['res_td']== 'Mental/Intellectual' ? 'checked' : '');?> value="Mental/Intellectual"> Mental/Intellectual </div>
              <div class="col-4"><input type="checkbox" name="res_td[]" <?php echo ($rese['res_td']== 'Visual Disability' ? 'checked' : '');?>  value="Visual Disability"> Visual Disability</div>
              <div class="col-4"><input type="checkbox" name="res_td[]" <?php echo ($rese['res_td']== 'Orthopedic Disability' ? 'checked' : '');?>  value="Orthopedic Disability"> Orthopedic Disability</div>
              <div class="col-4"><input type="checkbox" name="res_td[]" <?php echo ($rese['res_td']== 'Hearing Disability' ? 'checked' : '');?>  value="Hearing Disability"> Hearing Disability </div>
              <div class="col-4"><input type="checkbox" name="res_td[]" <?php echo ($rese['res_td']== 'Speech Impairment' ? 'checked' : '');?>  value="Speech Impairment"> Speech Impairment</div>
              <div class="col-4"><input type="checkbox" name="res_td[]" <?php echo ($rese['res_td']== 'Multiple Disabilities, specify' ? 'checked' : '');?>  value="Multiple Disabilities, specify"> Multiple Disabilities, specify</div>
              <div class="col-4"><input type="checkbox" name="res_td[]" <?php echo ($rese['res_td']== 'Psychosocial Disability' ? 'checked' : '');?>  value="Psychosocial Disability"> Psychosocial Disability</div>
              <div class="col-4"><input type="checkbox" name="res_td[]" <?php echo ($rese['res_td']== 'Disability Due to Chronic Illness' ? 'checked' : '');?>  value="Disability Due to Chronic Illness"> Disability Due to Chronic Illness</div>
          </div><hr>
          <b>Causes of Disability(for Persons with Disability Only)</b>
          <div class="row">
              <div class="col-4"><input type="checkbox" name="res_cd[]" <?php $cd = explode(",", $rese->res_cd);if(in_array("Congenital/Inbornl", $cd)){echo "checked";}?> value="Congenital/Inbornl"> Congenital/Inbornl </div>
              <div class="col-4"><input type="checkbox" name="res_cd[]" <?php $cd = explode(",", $rese->res_cd);if(in_array("Illness", $cd)){echo "checked";}?> value="Illness"> Illness</div>
              <div class="col-4"><input type="checkbox" name="res_cd[]" <?php $cd = explode(",", $rese->res_cd);if(in_array("Injury", $cd)){echo "checked";}?> value="Injury"> Injury</div>
          </div><hr>
          <b>If Scholar, What Type of Scholarship Package:</b>
          <div class="row">
              <div class="col-3"><input type="checkbox" name="res_dm" <?php echo ($rese['res_dm']== 'Institution Based' ? 'checked' : '');?> value="Institution Based"> Institution Based</div>
              <div class="col-3"><input type="checkbox" name="res_dm" <?php echo ($rese['res_dm']== 'Enterprise Based' ? 'checked' : '');?> value="Enterprise Based"> Enterprise Based</div>
              <div class="col-3"><input type="checkbox" name="res_dm" <?php echo ($rese['res_dm']== 'MTP' ? 'checked' : '');?> value="MTP"> MTP</div>
              <div class="col-3"><input type="checkbox" name="res_dm" <?php echo ($rese['res_dm']== 'CBT' ? 'checked' : '');?> value="CBT"> CBT</div>
          </div><hr>
          <b>What Type of Scholarship Package:</b>
          <div class="row">
              <div class="col-3"></div>
              <div class="col-6">
                <input type="text" class="form-control text-center" name="res_scholarship" value="{{$rese->res_scholarship}}">
              </div>
              <div class="col-3"></div>
          </div>
          <hr>
          <b>Employment:</b>
          <div class="row">
              <div class="col-6">
                  <Label>Name of Employer:</Label>
                  <input type="text" class="form-control text-center text-uppercase" name="res_namemp" value="{{$rese->res_namemp}}">
              </div>
              <div class="col-6">
                  <Label>Date Employed:</Label>
                  <input type="date" class="form-control text-center text-uppercase" name="res_datemp" value="{{$rese->res_datemp}}">  
              </div>
              <div class="col-6">
                  <Label>Address of Employer:</Label>
                  <input type="text" class="form-control text-center text-uppercase" name="res_addemp" value="{{$rese->res_addemp}}">
              </div>
              <div class="col-6">
                   <Label>Salary Info(Monthly Income):</Label>
                  <input type="text" class="form-control text-center text-uppercase"  name="res_salary" value="{{$rese->res_salary}}">
              </div>
              <div class="col-6">
                  <label>Classification of Worker:</label>
                  <input type="text" class="form-control text-center text-uppercase" name="res_classworker" value="{{$rese->res_classworker}}">
              </div>
              <div class="col-6">
                  <label>Qualification:</label>
                  <input type="text" class="form-control text-center text-uppercase" name="res_qualification" value="{{$rese->res_qualification}}">
              </div>
             
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
          <button class="btn btn-primary" type="submit">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>
<style>
  label{
    font-weight:bold;
  }
</style>
