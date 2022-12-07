@extends('layouts.app')

@section('content')
@include('backend.transparency._create')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-white --avt-normal --color-bb" ><i class="fa-solid fa-align-justify"></i>{{ __(' Transparency Management') }}
                    <!-- <button class="btn btn-outline-info float-right"><i class="fa-solid fa-sort"></i> Sort</button> -->
                </div>
              <div class="card-header">
                    <div class="row">
                       
                        <div class="col-md-4">
                             <input type="text" class="form-control">
                        </div>
                        <div class="col-md-2 ">
                            <button type="submit" class="btn btn-outline-secondary"><i class="fa-solid fa-filter"></i> Filter</button>
                        </div>
                        <div class="col-md-6 ">
                            <button type="submit" class="btn btn-secondary float-end " id="buttonref"><i class="fa-solid fa-sort"></i></i> Sort</button>
                            <button type="submit" class="btn float-end mr-2 text-white" data-bs-toggle="modal" data-bs-target="#createModal" style="background-color: #202937 !important;"><i class="fa-solid fa-plus"></i></i> Create</button>
                        </div>
                    </div>
                </div>
                {{-- <div class="card-body"> --}}
                    <table class="table table-bordered" id="table">
                      <thead>
                        <tr>
                          <th width="5%">#</th>
                          <th >Category</th>
                          <th width="30%">Date</th>
                          <th width="7%">Action</th>
                        </tr>
                      </thead>
                      <tbody id="tablecontents">
                          @foreach($ts as $i)
                          <tr class="row1" data-id="{{ $i->id }}">
                            <td>{{ $i->sort }}</td>
                            <td>{{ $i->title }}</td>
                            <td>{{ $i->updated_at }}</td>
                            <td>
                              <div class="dropdown">
                                  <a class="btn dropdown-toggle text-white --color-bb" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" >
                                    <i class="fa fa-cog"></i>
                                  </a>

                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="min-width: 80px;">
                                    
                                    <a type="button" href="{{ URL::to('/addPosting/'.$i->id)}}" class="dropdown-item btn" data-url="">
                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                            &nbsp;View
                                                        </a>
                                    <form action="{{ route('transparencyseal.destroy',$i->id) }}" method="post" >
                                    @csrf
                                    @method('DELETE')
                                    <li><button class="dropdown-item" href="#"><i class="fa-solid fa-trash-can"></i> Delete</button></li>
                                    </form> 
                                  </ul>
                                </div> 
                            </td>
                          </tr>
                          @endforeach  
                      </tbody>
                       
                    </table>
                {{-- </div> --}}
                
            </div>
        </div>
    </div>
</div>
<div class="append-personnel"></div>
@endsection
@section('scripts')



<script type="text/javascript">
  $(document).ready(function () {
            $("#buttonref").click(function () {
                location.reload(true);
              
            });
        });
  $(function () {
      $("#table").DataTable({
        "paging":   false,
        "ordering": false,
        "info":     false,
        "searching": false
      });
      $("#tablecontents").sortable({
        items: "tr",
        cursor: 'move',
        opacity: 0.6,
        update: function() {
          orderChange();
        }
      });

      function orderChange() {
        var order = [];
        var token = $('meta[name="csrf-token"]').attr('content');
        $('tr.row1').each(function(index,element) {
            order.push({
              id: $(this).attr('data-id'),
              position: index+1
            });
        });

        $.ajax({
            type: "GET", 
            dataType: "json", 
            url: "{{ url('post-sortable') }}",
            data: 
            {
                  order: order,
                  _token: token
            },
            success: function(response) 
            {
              if (response.status == "success")
              {
                console.log(response);
              } else 
              {
                console.log(response);
              }
            }
        });
      }
  });
</script>
@endsection