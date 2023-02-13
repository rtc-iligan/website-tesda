@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header text-white --avt-normal --color-bb"><i class="fa-solid fa-align-justify"></i>{{ __(' Reservation Management') }}</div>

                  
                
                </div>
                <div class="card-header">
                    <div class="row">
                        
                        <div class="col-md-3">
                            <input type="text" class="form-control text-center" name="res_lname" placeholder="Last Name">
                        </div>
                        <div class="col-md-3">
                             <select class="form-select text-center">
                                <option value=" " selected disabled>Select Qualification</option>
                             </select>
                        </div>
                        <div class="col-md-2">
                        <button type="submit" class="btn btn-outline-secondary"><i class="fa-solid fa-filter"></i> Filter</button>
                        </div>
                        <div class="col-md-4 text-right">
                        <button class="btn btn-sm text-white" style="background-color: #202937 !important;"><i class="fa-solid fa-file-export"></i> Export</button>
                           
                            
                        </div>
                       
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                      <tr >
                        <th width="2%">#</th>
                        <th width="12%">Name</th>
                        <th width="5%">Contact</th>
                        <th width="18%">Qualification</th>
                        <th width="5%">Date Reserved</th>
                        <th width="5%" class="text-center">Remarks</th>
                        <th width="3%">Action</th>
                      </tr>
                       @foreach($reservation as $i => $res)
                      <tr >
                        <td>{{ ++$i}}</td>
                     
                        <td>{{ strtoupper($res->res_lname) }}, {{strtoupper($res->res_fname)}} {{strtoupper(substr($res->res_mname,0,1))}}.</td>
                        <td>{{ $res->res_contact }}</td>
                        <td>{{ $res->res_qualification }}</td>
                        <td>{{ $res->registeredDate }}</td>
                        <td class="text-center">
                            @if($res->res_update=='Confirm')<span class="badge badge-success">Confirm</span>
                            @elseif (is_null($res->res_update))<span class="badge badge-light text-dark">No Remarks</span>
                            @elseif($res->res_update=='Undecided') <span class="badge badge-primary">Undecided</span>
                            @elseif($res->res_update=='Unattended') <span class="badge badge-secondary">Unattended</span>
                            @elseif($res->res_update=='Not Qualified') <span class="badge badge-info">Not Qualified</span>
                            @elseif($res->res_update=='No-Response') <span class="badge badge-warning">No-Response'</span>
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
                </div>
                <div class="d-flex justify-content-center" style="margin: 0 auto !important;">
                    {{ $reservation->links() }}
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
            //alert('asdsadasdas');
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
            //alert('asdsadasdas');
    });
</script>
@endsection