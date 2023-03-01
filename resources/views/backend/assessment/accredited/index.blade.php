@extends('layouts.app')

@section('content')
@include('backend.assessment.accredited._create')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-white --avt-normal --color-bb"><i class="fa-solid fa-align-justify"></i>{{ __(' Accredited Qualification  Management') }}</div>
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-2">
                             <select class="form-select"></select>
                        </div>
                        <div class="col-md-2">
                             <select class="form-select"></select>
                        </div>
                        <div class="col-md-2 ">
                            <button type="submit" class="btn btn-outline-secondary"><i class="fa-solid fa-filter"></i> Filter</button>
                        </div>
                        <div class="col-md-6 ">
                            <button type="submit" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#createModal"><i class="fa-solid fa-plus"></i></i> Create</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                      <tr>
                        <th width="5%">#</th>
                        <th >Title</th>
                        <th width="15%">Accredited #</th>
                        <th width="15%">Date Accredited</th>
                        <th width="15%">Date Expiraton</th>
                        <th width="10%">Fee</th>
                        <th width="7%">Action</th>
                      </tr>
                       @foreach($acc as $i => $ql)
                      <tr>
                        <td>{{ ++$i}}</td>
                     
                        <td>{{ $ql->title }}</td>
                        <td style="font-size:12px;">{{ $ql->acc_number }}</td>
                        <td>{{ date(' F d, Y', strtotime($ql->acc_date)) }}</td>
                        <td>{{ $ql->acc_exp}}</td>
                        <td>{{ $ql->fee}}</td>
                        <td>
                           <div class="dropdown">
                              <a class="btn btn-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-cog"></i>
                              </a>

                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="min-width: 80px;">
                                <li><button class="dropdown-item btn-view" data-url=""><i class="fa-solid fa-magnifying-glass"></i> View</button></li>
                                <li><button class="dropdown-item btn-update"data-url="{{ route('accredited.edit',$ql->id) }}"><i class="fa-solid fa-pen-to-square"></i> Update</button></li>
                                <form action="{{ route('qualification.destroy',$ql->id) }}" method="post" >
                                @csrf
                                @method('DELETE')
                                <li><button class="dropdown-item" href="#"><i class="fa-solid fa-trash-can"></i> Delete</button></li>
                                </form> 
                              </ul>
                            </div> 
                        </td>
                      </tr>
                      @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="append-qualification"></div>
@endsection
@section('scripts')
<script type="text/javascript">
   $('.btn-update').click(function(){
            var div = $('.append-qualification');
            div.empty();
            var url = $(this).data('url');
            $.ajax({
                url: url,
                success:function(data){
                    div.append(data);
                    $('#update_accredited').modal('show');
                }
            });
        });
   $('.btn-view').click(function(){
            var div = $('.append-qualification');
            div.empty();
            var url = $(this).data('url');
            $.ajax({
                url: url,
                success:function(data){
                    div.append(data);
                    $('#view_qualification').modal('show');
                }
            });
        });
</script>
@endsection