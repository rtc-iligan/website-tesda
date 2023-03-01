@extends('layouts.app')

@section('content')
@include('backend.qualification._create')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-white --avt-normal --color-bb"><i class="fa-solid fa-align-justify"></i>{{ __(' Qualification Management') }}</div>
                <div class="card-header">
                   
                        <form action="">
                            <div class="row">
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="title" value="{{ $request->title ?? '' }}">
                                </div>
                                <div class="col-md-3">
                                    <select name="sector" class="form-select">
                                    <option value="" class="text-center" selected>------> Choose Here <------</option>
                                    @foreach(config('global.sector') as $sector)
                                        <option value="{{ $sector['name'] }}">{{ $sector['name'] }}</option>
                                    @endforeach
                                    </select>
                                </div>
                                <div class="col-md-2 ">
                                    <button type="submit" class="btn btn-outline-secondary"><i class="fa-solid fa-filter"></i> Filter</button>
                                </div>
                            </div>
                        </form>
                       <div class="row">
                            <div class="col-md-4 text-left">
                                Active:
                            </div>
                            <div class="col-md-8 text-right">
                                <button type="submit" class="btn btn-sm float-end text-white" data-bs-toggle="modal" data-bs-target="#createModal" style="background-color: #202937 !important;"><i class="fa-solid fa-plus"></i></i> Create</button>
                            </div>
                       </div>
                   
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                      <tr>
                        <th width="5%">#</th>
                        <th >Title</th>
                        <th width="20%">Sector</th>
                        <th width="20%">CPTR #</th>
                        <th width="10%">Date Accredited</th>
                        <th width="7%">Action</th>
                      </tr>
                       @foreach($qualification as $i => $ql)
                      <tr>
                        <td>{{ ++$i}}</td>
                        <td>{{ $ql->title }}</td>
                        <td>{{ $ql->sector }}</td>
                        <td>{{ $ql->cptr }}</td>
                        <td>{{ date(' F d, Y', strtotime($ql->date)) }}</td>
                        <td>
                           <div class="dropdown">
                              <a class="btn dropdown-toggle text-white --color-bb" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-cog"></i>
                              </a>

                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="min-width: 80px;">
                                <li><button class="dropdown-item btn-view" data-url=""><i class="fa-solid fa-magnifying-glass"></i> View</button></li>
                                <li><button class="dropdown-item btn-update"data-url="{{ route('qualification.edit',$ql->id) }}"><i class="fa-solid fa-pen-to-square"></i> Update</button></li>
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
                    $('#update_qualification').modal('show');
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