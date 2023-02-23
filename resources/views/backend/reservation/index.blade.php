@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header text-white --avt-normal --color-bb"><i class="fa-solid fa-align-justify"></i>{{ __(' Reservation Management') }}</div>

                  
                
                </div>
                <div class="card-header">
                    <form action="">
                        <div class="row">
                            <div class="col-md-3">
                                <input type="text" class="form-control text-center" name="res_lname" placeholder="Last Name" value="{{ $request->res_lname ?? '' }}">
                            </div>
                            <div class="col-md-3">
                                <select name="res_qualification" class="form-select text-center">
                                    <option value="" selected=""> Select Qualification</option>
                                    <option value="Automotive Servicing NC I">Automotive Servicing NC I</option>
                                    <option value="Bread and Pastry Production NC II">Bread and Pastry Production NC II</option>
                                    <option value="Automotive Servicing NC II">Automotive Servicing NC II</option>
                                    <option value="Construction Painting NC II">Construction Painting NC II</option>
                                    <option value="Computer Systems Servicing NC II">Computer Systems Servicing NC II</option>
                                    <option value="Dressmaking NC II">Dressmaking NC II</option>
                                    <option value="Housekeeping NC II">Housekeeping NC II</option>
                                    <option value="Driving NC II">Driving NC II</option>
                                    <option value="Motorcycle/Small Engine Servicing NC II">Motorcycle/Small Engine Servicing NC II</option>
                                    <option value="Electronics Products Assembly Servicing NC II">Electronics Products Assembly Servicing NC II</option>
                                    <option value="Electrical Installation and Maintenance NC II">Electrical Installation and Maintenance NC II</option>
                                    <option value="Electrical Installation and Maintenance NC III">Electrical Installation and Maintenance NC III</option>
                                    <option value="Food and Beverage Services NC II">Food and Beverage Services NC II</option>
                                    <option value="Gas Tungsten Arc Welding NC II">Gas Tungsten Arc Welding NC II</option>
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
                            </div>
                        
                            <div class="col-md-2">
                            <button type="submit" class="btn btn-outline-secondary"><i class="fa-solid fa-filter"></i> Filter</button>
                            </div>
                        </div>
                    </form>
                    <div class="row ">
                        <div class="col-md-3 mt-1">
                        @if($request->filter)
                            Active Filter: {{ $res->count() }}
                        @else
                            Active Filter: {{ $reservation_all->total() }}
                        @endif    
                       
                        </div>
                        <div class="col-md-9 text-right">
                            <button class="btn btn-sm text-white export" style="background-color: #202937 !important;"><i class="fa-solid fa-file-export"></i> Export</button> 
                        </div>
                    </div>
                    <hr>
                   <form id="form-filter">
                   <input type="hidden" name="filter" value="true">
                        <div class="row filter-table d-none">
                                <div class="col-md-3">
                                    <select name="qualification" class="form-select text-center mb-1">
                                        <option value="" selected=""> Select Qualification</option>
                                        <option value="Automotive Servicing NC I">Automotive Servicing NC I</option>
                                        <option value="Bread and Pastry Production NC II">Bread and Pastry Production NC II</option>
                                        <option value="Automotive Servicing NC II">Automotive Servicing NC II</option>
                                        <option value="Construction Painting NC II">Construction Painting NC II</option>
                                        <option value="Computer Systems Servicing NC II">Computer Systems Servicing NC II</option>
                                        <option value="Dressmaking NC II">Dressmaking NC II</option>
                                        <option value="Housekeeping NC II">Housekeeping NC II</option>
                                        <option value="Driving NC II">Driving NC II</option>
                                        <option value="Motorcycle/Small Engine Servicing NC II">Motorcycle/Small Engine Servicing NC II</option>
                                        <option value="Electronics Products Assembly Servicing NC II">Electronics Products Assembly Servicing NC II</option>
                                        <option value="Electrical Installation and Maintenance NC II">Electrical Installation and Maintenance NC II</option>
                                        <option value="Electrical Installation and Maintenance NC III">Electrical Installation and Maintenance NC III</option>
                                        <option value="Food and Beverage Services NC II">Food and Beverage Services NC II</option>
                                        <option value="Gas Tungsten Arc Welding NC II">Gas Tungsten Arc Welding NC II</option>
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
                                   
                                    <div id="res-city-suggestions"></div>
                                    <div class="dropdown-cities">
                                        <input type="text" name="term" class="form-control search text-center" id="res-city-input" placeholder="Type City Location" autocomplete="off"> 
                                    </div>
                                </div>
                                <div class="col-md-2">
                                <div class="row">
                                        <label>
                                            <input type="checkbox" name="status[]" class="my-checkboxes" value="Confirm" {{ in_array('Confirm', request('status', [])) ? 'checked' : '' }}>
                                            Confirm
                                        </label>
                                        <label>
                                            <input type="checkbox" name="status[]" class="my-checkboxes" value="NULL" {{ in_array('NULL', request('status', [])) ? 'checked' : '' }}>
                                            No-Remarks
                                        </label>
                                        <label>
                                            <input type="checkbox" name="status[]" class="my-checkboxes" value="No-Response" {{ in_array('No-Response', request('status', [])) ? 'checked' : '' }}>
                                            No-Response
                                        </label>
                                </div>
                                </div>
                                <div class="col-md-2">
                                <div class="row">
                                        <label>
                                            <input type="checkbox" name="status[]" class="my-checkboxes" value="Block" {{ in_array('Block', request('status', [])) ? 'checked' : '' }}>
                                            Block
                                        </label>
                                        <label>
                                            <input type="checkbox" name="status[]" class="my-checkboxes" value="Undecided" {{ in_array('Undecided', request('status', [])) ? 'checked' : '' }}>
                                            Undecided
                                        </label>
                                        <label>
                                            <input type="checkbox" name="status[]" class="my-checkboxes" value="Not-Qualified" {{ in_array('Not-Qualified', request('status', [])) ? 'checked' : '' }}>
                                            Not-Qualified
                                        </label>
                                </div>
                                </div>
                                <div class="col-md-2">
                                <div class="row">
                                        <label>
                                            <input type="checkbox" name="status[]" class="my-checkboxes" value="Unattended" {{ in_array('Unattended', request('status', [])) ? 'checked' : '' }}>
                                            Unattended
                                        </label>
                                        <label>
                                            <input type="checkbox" name="status[]" class="my-checkboxes" value="Not-Interested" {{ in_array('Not-Interested', request('status', [])) ? 'checked' : '' }}>
                                            Not-Interested
                                        </label>
                                        <!-- <label>
                                            <input type="checkbox" id="select-all-checkbox">
                                            Select All
                                        </label> -->
                                    
                                </div>
                                </div>
                                <div class="col-md-3 text-right" >
                                    <a class="close-filter">Close</a>
                                    <br><br>
                                    <button class="btn btn-secondary"><i class="fa-solid fa-filter"></i> Filter</button>
                                    <!-- <button class="btn btn-success export-btn"><i class="fa-solid fa-file-export"></i> Download</button> -->
                                </div>
                            </div>
                   </form>
                </div>
                <div class="card-body">
                @if($request->filter)
                    <a target="_blank" href="{{ $request->fullUrl() }}&reservation_excel=true" class="btn btn-success mb-2 float-right ed-st"><i class="fa fa-upload"></i>&nbsp; Export Data</a>
                    <table class="table table-hover table-st-1" id="table">
                      <tr>
                        <th width="2%">#</th>
                        <th width="12%">Name</th>
                        <th width="5%">Contact</th>
                        <th width="18%">Qualification</th>
                        <th width="12%">Location</th>
                        <th width="5%">Date Reserved</th>
                        <th width="5%" class="text-center">Remarks</th>
                      </tr>
                       @foreach($res as $i => $res)
                      <tr >
                        <td>{{ ++$i}}</td>
                     
                        <td>{{ strtoupper($res->res_lname) }}, {{strtoupper($res->res_fname)}} {{strtoupper(substr($res->res_mname,0,1))}}.</td>
                        <td>{{ $res->res_contact }}</td>
                        <td>{{ $res->res_qualification }}</td>
                        <td>{{ $res->res_city}}</td>
                        <td>{{ $res->registeredDate }}</td>
                        <td class="text-center">
                            @if($res->res_update=='Confirm')<span class="badge badge-success">Confirm</span>
                            @elseif (is_null($res->res_update))<span class="badge badge-light text-dark">No-Remarks</span>
                            @elseif($res->res_update=='Undecided') <span class="badge badge-primary">Undecided</span>
                            @elseif($res->res_update=='Unattended') <span class="badge badge-secondary">Unattended</span>
                            @elseif($res->res_update=='Not Qualified') <span class="badge badge-info">Not-Qualified</span>
                            @elseif($res->res_update=='No-Response') <span class="badge badge-warning">No-Response</span>
                            @elseif($res->res_update=='Not-Interested')  <span class="badge badge-dark">Not-Interested</span>
                            @elseif($res->res_update=='Block') <span class="badge badge-danger">Block</span>
                            @endif
                        </td>
                       
                      </tr>
                      @endforeach
                    </table>
                @else
               
                    <table class="table table-hover table-st" id="table">
                      <tr>
                        <th width="2%">#</th>
                        <th width="12%">Name</th>
                        <th width="5%">Contact</th>
                        <th width="18%">Qualification</th>
                        <th width="5%">Date Reserved</th>
                        <th width="5%" class="text-center">Remarks</th>
                        <th width="3%">Action</th>
                      </tr>
                       @foreach($reservation_all as $i => $res)
                      <tr >
                        <td>{{ ++$i}}</td>
                     
                        <td>{{ strtoupper($res->res_lname) }}, {{strtoupper($res->res_fname)}} {{strtoupper(substr($res->res_mname,0,1))}}.</td>
                        <td>{{ $res->res_contact }}</td>
                        <td>{{ $res->res_qualification }}</td>
                        <td>{{ $res->registeredDate }}</td>
                        <td class="text-center">
                            @if($res->res_update=='Confirm')<span class="badge badge-success">Confirm</span>
                            @elseif (is_null($res->res_update))<span class="badge badge-light text-dark">No-Remarks</span>
                            @elseif($res->res_update=='Undecided') <span class="badge badge-primary">Undecided</span>
                            @elseif($res->res_update=='Unattended') <span class="badge badge-secondary">Unattended</span>
                            @elseif($res->res_update=='Not Qualified') <span class="badge badge-info">Not-Qualified</span>
                            @elseif($res->res_update=='No-Response') <span class="badge badge-warning">No-Response</span>
                            @elseif($res->res_update=='Not-Interested')  <span class="badge badge-dark">Not-Interested</span>
                            @elseif($res->res_update=='Block') <span class="badge badge-danger">Block</span>
                            @endif
                        </td>
                        <td>
                           <div class="dropdown">
                              <a class="btn dropdown-toggle text-white --color-bb" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-cog"></i>
                              </a>

                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="min-width: 80px;">
                                <li><button class="dropdown-item btn-update" data-url="{{ route('reservation.edit',$res->res_id) }}"><i class="fa-solid fa-pen-to-square"></i> Update</button></li>
                                <li><button class="dropdown-item btn-remarks" data-url="{{ URL::to('/remarks/'.$res->res_id) }}"><i class="fa-solid fa-pen-to-square"></i> Remarks</button></li>
                                <li><a class="dropdown-item" href="{{ URL::to('/LearnersProfile/'.$res->res_id) }}" target="_blank"><i class="fa-solid fa-print"></i> Learner's Profile</a></li>
                                <li><a class="dropdown-item" href="{{ URL::to('/EnrollmentForm/'.$res->res_id) }}" target="_blank"><i class="fa-solid fa-print"></i> Enrollment Form</a></li>
                              </ul>
                            </div> 
                        </td>
                      </tr>
                      @endforeach
                    </table>   
                    <div class="d-flex justify-content-center" id="link-st" style="margin: 0 auto !important;">
                        {{ $reservation_all->links() }}
                    </div>
                @endif 
                </div>
                
            </div>
        </div>
    </div>
</div>
<style>
    .pagination .page-link {
    background: #202937 !important;
    color: white !important;
}
</style>
<div class="append-reservation"></div>
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
<script type="text/javascript">
   $('.btn-update').click(function(){
            var div = $('.append-reservation');
            div.empty();
            var url = $(this).data('url');
            $.ajax({
                url: url,
                success:function(data){
                    div.append(data);
                    $('#update_reservation').modal('show');
                }
            });
            
    });
    $('.btn-remarks').click(function(){
            var div = $('.append-reservation');
            div.empty();
            var url = $(this).data('url');
            $.ajax({
                url: url,
                success:function(data){
                    div.append(data);
                    $('#remarks').modal('show');
                }
            });
          
    });
    $('.export').click(function(){
        $('.filter-table').removeClass('d-none');
        $('.table-st').hide();
        $('.table-st-1, .ed-st').hide();
        $('#link-st').addClass('d-none');
        
    });
    $('.close-filter').click(function(){
        $('.filter-table').addClass('d-none');
        $('.table-st').show();
        $('#link-st').removeClass('d-none');
    });
   
    
    $(document).ready(function(){
        $(".search").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $(".dropdown-content a").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });

</script>

<script type="text/javascript">
    var path = "{{ url('res-cities') }}";
    $('input.search').typeahead({
        source:  function (str, process) 
        {
          return $.get(path, { str: str }, function (data) {
                return process(data);
            });
        }
    });
</script>   

@endsection