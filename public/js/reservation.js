
 $('#checkboxxxxx').attr('required', true);
$('#employ_stat1').hide();
$('#employ_stat').change(function(){
    if($(this).val() == 'Employed'){
      $('#employ_stat1').show();
       $('#es1').attr('required', true);
        $('#es2').attr('required', true);
        $('#es2').attr('value', '2000-05-05');  
         $('#es3').attr('required', true);
          $('#es4').attr('required', true);
           $('#es5').attr('required', true);
    }
    if($("#employ_stat").val() == 'Unemployed'){
     
      $('#es1').attr('value', 'N/A');  
      $('#es1').attr('required', false);
      $('#es2').attr('value', '2000-05-05');  
      $('#es2').attr('required', false);
      $('#es3').attr('value', 'N/A');  
      $('#es3').attr('required', false);
      $('#es4').attr('value', 'N/A');  
      $('#es4').attr('required', false);
      $('#es5').attr('value', 'N/A');  
      $('#es5').attr('required', false);
      $('#employ_stat1').hide();
    }
});
$("#nc").hide();
$("#nct").hide();
$("#nc").attr('required', false);

$("#select1").change(function(){
      if($(this).val() == 'Trainers Methodology Level I'){
          alert("Must be a holder in any National Certificate II or III and must be a graduate in college/masteral/doctorate\n\nPresent your National Certificate to the registrar office for verification. Thank you 😊😊!!!");
          $("#nc").show();
          $("#nct").show();
          $("#nc").attr('required', true);
      }else if($(this).val() == 'Automotive Servicing NC II'){
          alert("Must be a holder or have undergone training in Automotive Servicing NC I\n\nPresent your National Certificate to the registrar office for verification. Thank you 😊😊!!!");
          $("#nc").hide();
          $("#nct").hide();
          $("#nc").attr('required', false);
          $("#nc").attr('value', ' ');  
      }else if($(this).val() == 'Electrical Installation and Maintenance NC III'){
          alert("Must be a holder or have undergone training in Electrical Installation and Maintenance NC II or Mechatronics Servicing NC II\n\nPresent your National Certificate to the registrar office for verification. Thank you 😊😊!!!");
          $("#nc").hide();
          $("#nct").hide();
          $("#nc").attr('required', false);
          $("#nc").attr('value', ' ');  
      }else if($(this).val() == 'Shielded Metal Arc Welding NC II'){
          alert("Must be a holder or have undergone training in Shielded Metal Arc Welding NC I\n\nPresent your National Certificate to the registrar office for verification. Thank you 😊😊!!!");
          $("#nc").hide();
          $("#nct").hide();
          $("#nc").attr('required', false);
          $("#nc").attr('value', ' ');  
      }else if($(this).val() == 'Shielded Metal Arc Welding NC III'){
          alert("Must be a holder or have undergone training in Shielded Metal Arc Welding NC II\n\nPresent your National Certificate to the registrar office for verification. Thank you 😊😊!!!");
          $("#nc").hide();
          $("#nct").hide();
          $("#nc").attr('required', false);
          $("#nc").attr('value', ' ');  
      }else if($(this).val() == 'Gas Tungsten Arc Welding NC II'){
          alert("Must be a holder or have undergone training in Shielded Metal Arc Welding NC II\n\nPresent your National Certificate to the registrar office for verification. Thank you 😊😊!!!");
          $("#nc").hide();
          $("#nct").hide();
          $("#nc").attr('required', false);
          $("#nc").attr('value', ' ');  
      }else{
          $("#nc").hide();
          $("#nct").hide();
          $("#nc").attr('required', false);
          $("#nc").attr('value', ' ');  
      }

  });
$('#addressChecked').on('click', function(){
  is_checked = $(this).is(':checked');
  if(is_checked){
    $('#addresscopy').val($('#address').val()).prop( "disabled", true );
    $('#regioncopy').val($('#region').val()).prop( "disabled", true );
    $('#provincecopy').val($('#province').val()).prop( "disabled", true );
    $('#citycopy').val($('#city').val()).prop( "disabled", true );
    $('#countrycopy').val($('#country').val()).prop( "disabled", true );
    $('#step1-2').hide();
    }else{
    $('#addresscopy').val('').prop( "disabled", false );
    $('#regioncopy').val('').prop( "disabled", false );
    $('#provincecopy').val('').prop( "disabled", false );
    $('#citycopy').val('').prop( "disabled", false );
    $('#countrycopy').val('').prop( "disabled", false );
    $('#step1-2').show();
    }
});

  var currentTab = 0;
        showTab(currentTab); 
        function showTab(n) {
          var x = document.getElementsByClassName("tab");
          x[n].style.display = "block";
          if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
          } else {
            document.getElementById("prevBtn").style.display = "inline";
          }
          if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
           
          } else {
            document.getElementById("nextBtn").innerHTML = "Next";
          }
         
          fixStepIndicator(n)
        }

        function nextPrev(n) {
         
          var x = document.getElementsByClassName("tab");
         
          if (n == 1 && !validateForm()) return false;
         
          x[currentTab].style.display = "none";
         
          currentTab = currentTab + n;
        
          if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("regForm").submit();
            return false;
          }
       
          showTab(currentTab);
        }

        function validateForm() {
        
          var x, y, i, valid = true;
          x = document.getElementsByClassName("tab");
          y = x[currentTab].getElementsByTagName("input");
        
          for (i = 0; i < y.length; i++) {
         
            if (y[i].value == "") {
         
              y[i].className += " invalid";
             
              valid = false;
            }
          }
        
          if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
          }
          return valid; // return the valid status
        }

        function fixStepIndicator(n) {
         
          var i, x = document.getElementsByClassName("step");
          for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
          }
       
          x[n].className += " active";
        }


function onlyNumber(evt) {
  var charCode = (evt.which) ? evt.which : event.keyCode
  if (charCode > 31 && (charCode < 48 || charCode > 57)){
          return false;
      }
  return true;
}


$("#region").on("change",function(){
var selValue = $("#region :selected").text();
$("#textFieldTextJQ").val(selValue);
});

$("#province").on("change",function(){
var selValue = $("#province :selected").text();
$("#textFieldTextJQ1").val(selValue);
}); 
$("#cities").on("change",function(){
var selValue = $("#cities :selected").text();
$("#textFieldTextJQ2").val(selValue);
});

$("#barangays").on("change",function(){
var selValue = $("#barangays :selected").text();
$("#textFieldTextJQ3").val(selValue);
}); 


