

$('#employ_stat1').hide();
$('#employ_stat').change(function(){
    if($(this).val() == 'Employed'){
      $('#employ_stat1').show();
       $('#es1').attr('required', true);
        $('#es2').attr('required', true);
         $('#es3').attr('required', true);
          $('#es4').attr('required', true);
           $('#es5').attr('required', true);
    }else{
      $('#employ_stat1').hide();
      $('#es1').attr('value', ' ');  
      $('#es1').prop('required', false);
      $('#es2').attr('value', ' ');  
      $('#es2').prop('required', false);
      $('#es3').attr('value', ' ');  
      $('#es3').prop('required', false);
      $('#es4').attr('value', ' ');  
      $('#es4').prop('required', false);
      $('#es5').attr('value', ' ');  
      $('#es5').prop('required', false);
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

        var my_handlers = {

          fill_provinces:  function(){

              var region_code = $(this).val();
              $('#province').ph_locations('fetch_list', [{"region_code": region_code}]);
              
          },

          fill_cities: function(){

              var province_code = $(this).val();
              $('#city').ph_locations( 'fetch_list', [{"province_code": province_code}]);
          },


          fill_barangays: function(){

              var city_code = $(this).val();
              $('#barangay').ph_locations('fetch_list', [{"city_code": city_code}]);
          }
      };

      $(function(){
          $('#region').on('change', my_handlers.fill_provinces);
          $('#province').on('change', my_handlers.fill_cities);
          $('#city').on('change', my_handlers.fill_barangays);

          $('#region').ph_locations({'location_type': 'regions'});
          $('#province').ph_locations({'location_type': 'provinces'});
          $('#city').ph_locations({'location_type': 'cities'});
          $('#barangay').ph_locations({'location_type': 'barangays'});

          $('#region').ph_locations('fetch_list');
      });   
    
;( function( $, window, document, undefined ) {

	"use strict";

		// defaults
		var pluginName = "ph_locations",
			defaults = {
                location_type : "city", // what data this control supposed to display? regions, provinces, cities or barangays?,
				api_base_url: 'https://ph-locations-api.buonzz.com/',
				filter: {}
            };

		// plugin constructor
		function Plugin ( element, options ) {
			this.element = element;
			this.settings = $.extend( {}, defaults, options );
			this._defaults = defaults;
			this._name = pluginName;
			this.init();
		}

		// Avoid Plugin.prototype conflicts
		$.extend( Plugin.prototype, {
			init: function() {
				return this
            },
            
			fetch_list: function (filter) {
				this.settings.filter = filter;

				$.ajax({
                    type: "GET",
                    url: this.settings.api_base_url + 'v1/' +  this.settings.location_type,
					success: this.onDataArrived.bind(this),
					data: $.param(this.map_parameters())
                });

            }, // fetch list
            onDataArrived(data){
				$(this.element).html(this.build_options(data));
			},

			map_parameters(){

				var mapped_parameter = {"filter": {
					"where": {}
					} 
				};

				 for(var property in this.settings.filter)
				    mapped_parameter.filter.where[property] = this.settings.filter[property];

				 return mapped_parameter;
			},

			build_options(params){
				var shtml = "";
        shtml += '<option value="" selected="" disabled required>Please Choose</option>';
				for(var i=0; i<params.data.length;i++){
					shtml += '<option value="' + params.data[i].id + '">';
					shtml +=  params.data[i].name ;
					shtml += '</option>';
				}

				return shtml
			}
            
		} );


		$.fn[ pluginName ] = function( options, args ) {
			return this.each( function() {
				var $plugin = $.data( this, "plugin_" + pluginName );
				if (!$plugin) {
					var pluginOptions = (typeof options === 'object') ? options : {};
					$plugin = $.data( this, "plugin_" + pluginName, new Plugin( this, pluginOptions ) );
				}
				
				if (typeof options === 'string') {
					if (typeof $plugin[options] === 'function') {
						if (typeof args !== 'object') args = [args];
						$plugin[options].apply($plugin, args);
					}
				}
			} );
		};

} )( jQuery, window, document );      



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
$("#city").on("change",function(){
var selValue = $("#city :selected").text();
$("#textFieldTextJQ2").val(selValue);
});

$("#barangay").on("change",function(){
var selValue = $("#barangay :selected").text();
$("#textFieldTextJQ3").val(selValue);
}); 


