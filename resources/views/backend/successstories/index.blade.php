@extends('layouts.app')

@section('content')
@include('backend.successstories._create')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-white --avt-normal --color-bb"><i class="fa-solid fa-align-justify"></i>{{ __(' Success Stories Management') }}</div>
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
                        <th>Name</th>
                        <th>Content</th>
                        <th width="7%">Action</th>
                      </tr>
                      @foreach($successstories as $i => $ss)
                      <tr>
                        <td>{{ ++$i}}</td>
                        <td>
                             <img src="{{asset('storage/'.$ss->image) }}" alt="image" width="70" height="50" align="left">
                        </td>
                        <td>{{ $ss->name }}</td>
                        <td>{{ $ss->content }}</td>
                        <td>
                           <div class="dropdown">
                              <a class="btn btn-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-cog"></i>
                              </a>

                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="min-width: 80px;">
                                <li><button class="dropdown-item btn-view" data-url="{{ route('successstories.show',$ss->id) }}"><i class="fa-solid fa-magnifying-glass"></i> View</button></li>
                                <li><button class="dropdown-item btn-update" data-url="{{ route('successstories.edit',$ss->id) }}"><i class="fa-solid fa-pen-to-square"></i> Update</button></li>
                                <form action="{{ route('successstories.destroy',$ss->id) }}" method="post" >
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
<div class="append-successstories"></div>
@endsection
@section('scripts')
<script type="text/javascript">
   $('.btn-update').click(function(){
            var div = $('.append-successstories');
            div.empty();
            var url = $(this).data('url');
            $.ajax({
                url: url,
                success:function(data){
                    div.append(data);
                    $('#update_successstories').modal('show');
                }
            });
        });
   $('.btn-view').click(function(){
            var div = $('.append-successstories');
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