@extends('layouts.app')

@section('content')
@include('backend.announcement._create')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header h4"><i class="fa-solid fa-align-justify"></i>{{ __(' Announcement Management') }}</div>
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-2">
                             <input type="date" name="date" class="form-control">
                        </div>
                        <div class="col-md-2">
                             <input type="text" name="name" class="form-control">
                        </div>
                        <div class="col-md-2 ">
                            <button type="submit"  class="btn btn-outline-secondary"><i class="fa-solid fa-filter"></i> Filter</button>
                        </div>
                        </form>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#createModal"><i class="fa-solid fa-plus"></i></i> Create</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                      <tr>
                        <th width="5%">#</th>
                        <th width="10%">Title</th>
                        <th>Subject</th>
                        <th>Content</th>
                        <th>Location</th>
                        <th>Date</th>
                        <th width="7%">Action</th>
                      </tr>
                      @foreach($announcement as $i => $ann)
                      <tr>
                        <td>{{ ++$i}}</td>
                        <td>{{ $ann->title }}</td>
                        <td>{{ $ann->subject }}</td>
                        <td>{{ $ann->content }}</td>
                        <td>{{ $ann->location }}</td>
                        <td>{{ $ann->date }}</td>
                        <td>
                           <div class="dropdown">
                              <a class="btn btn-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-cog"></i>
                              </a>

                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="min-width: 80px;">
                                <li><button class="dropdown-item btn-view" data-url="{{ route('announcement.show',$ann->id) }}"><i class="fa-solid fa-magnifying-glass"></i> View</button></li>
                                <li><button class="dropdown-item btn-update" data-url="{{ route('announcement.edit',$ann->id) }}"><i class="fa-solid fa-pen-to-square"></i> Update</button></li>
                                <form action="{{ route('announcement.destroy',$ann->id) }}" method="post" >
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
                    <div class="d-flex justify-content-center">
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="append-announcement"></div>
@endsection
@section('scripts')
<script type="text/javascript">
   $('.btn-update').click(function(){
            var div = $('.append-announcement');
            div.empty();
            var url = $(this).data('url');
            $.ajax({
                url: url,
                success:function(data){
                    div.append(data);
                    $('#update_announcement').modal('show');
                }
            });
        });
</script>
@endsection