@extends('layouts.app')

@section('content')
@include('backend.personnel._create')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header h4"><i class="fa-solid fa-align-justify"></i>{{ __(' Personnel Management') }}</div>
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
                        <th width="10%">Image</th>
                        <th>Full Name</th>
                        <th>Type</th>
                        <th>Position</th>
                        <th>Motto</th>
                        <th width="7%">Action</th>
                      </tr>
                      @foreach($personnel as $i => $pnl)
                      <tr>
                        <td>{{ ++$i}}</td>
                        <td>
                             <img src="{{asset('storage/'.$pnl->image) }}" alt="image" width="70" height="50" align="left">
                        </td>
                        <td>{{ $pnl->name }}</td>
                        <td>{{ $pnl->type }}</td>
                        <td>{{ $pnl->position }}</td>
                        <td>{{ $pnl->motto }}</td>
                        <td>
                           <div class="dropdown">
                              <a class="btn btn-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-cog"></i>
                              </a>

                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="min-width: 80px;">
                                
                                <li><button class="dropdown-item btn-update"data-url="{{ route('personnel.edit',$pnl->id) }}"><i class="fa-solid fa-pen-to-square"></i> Update</button></li>
                                <form action="{{ route('personnel.destroy',$pnl->id) }}" method="post" >
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
<div class="append-personnel"></div>
@endsection
@section('scripts')
<script type="text/javascript">
   $('.btn-update').click(function(){
            var div = $('.append-personnel');
            div.empty();
            var url = $(this).data('url');
            $.ajax({
                url: url,
                success:function(data){
                    div.append(data);
                    $('#update_personnel').modal('show');
                }
            });
        });
  
</script>
@endsection