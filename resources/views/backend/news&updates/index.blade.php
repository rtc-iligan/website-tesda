@extends('layouts.app')

@section('content')
@include('backend.news&updates._create')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header h4"><i class="fa-solid fa-align-justify"></i>{{ __(' New&Updates Management') }}</div>
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-2">
                             <input type="date" name="" class="form-control">
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
                        <th>Title</th>
                        <th>Content</th>
                        <th>Location</th>
                        <th>Date</th>
                        <th width="7%">Action</th>
                      </tr>
                      @foreach($news as $i => $new)
                      <tr>
                        <td>{{ ++$i}}</td>
                        <td>
                             <img src="{{asset('storage/'.$new->image) }}" alt="image" width="70" height="50" align="left">
                        </td>
                        <td>{{ $new->title }}</td>
                        <td>{{ $new->content }}</td>
                        <td>{{ $new->location }}</td>
                        <td>{{ date(' F d, Y', strtotime($new->date)) }}</td>
                        <td>
                           <div class="dropdown">
                              <a class="btn btn-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-cog"></i>
                              </a>

                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="min-width: 80px;">
                                <li><a class="dropdown-item btn-view" href=""><i class="fa-solid fa-magnifying-glass"></i> View</a></li>
                                <li><a class="dropdown-item btn-update" href=""><i class="fa-solid fa-pen-to-square"></i> Update</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-trash-can"></i> Delete</a></li>
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
<div class="append-galleries"></div>
@endsection
@section('script')
<script type="text/javascript">
   $('.btn-update').click(function(){
            var div = $('.append-galleries');
            div.empty();
            var url = $(this).data('url');
            $.ajax({
                url: url,
                success:function(data){
                    div.append(data);
                    $('#update_gallery').modal('show');
                }
            });
        });
   $('.btn-view').click(function(){
            var div = $('.append-galleries');
            div.empty();
            var url = $(this).data('url');
            $.ajax({
                url: url,
                success:function(data){
                    div.append(data);
                    $('#view_gallery').modal('show');
                }
            });
        });
</script>
@endsection