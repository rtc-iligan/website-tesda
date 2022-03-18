@extends('layouts.app')

@section('content')
{{-- @include('backend.transparency._create') --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header h4"><i class="fa-solid fa-align-justify"></i>{{ __(' Transparency Management') }}
                   <!--  <button class="btn btn-outline-info float-right"><i class="fa-solid fa-sort"></i> Sort</button> -->
                </div>
                {{-- <div class="card-header">
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
                </div> --}}
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
<<<<<<< HEAD
                       <tbody id="tablecontents">
                       @foreach($ts as $i => $ts)
                      <tr>
                        <td>{{ ++$i}}</td>
                        <td>{{ $ts->title }}</td>
                        <td>{{ $ts->updated_at }}</td>
                        <td>
                           <div class="dropdown">
                              <a class="btn btn-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-cog"></i>
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="min-width: 80px;">
                                <li><button class="dropdown-item btn-view" data-url=""><i class="fa-solid fa-magnifying-glass"></i> View</button></li>
                                <li><button class="dropdown-item btn-update"data-url="{{ route('transparencyseal.edit',$ts->id) }}"><i class="fa-solid fa-pen-to-square"></i> Update</button></li>
                                <form action="{{ route('transparencyseal.destroy',$ts->id) }}" method="post" >
                                @csrf
                                @method('DELETE')
                                <li><button class="dropdown-item" href="#"><i class="fa-solid fa-trash-can"></i> Delete</button></li>
                                </form>
                              </ul>
                            </div> 
                        </td>
                      </tr>
=======
                      <tbody id="tablecontents">
                          @foreach($ts as $i)
                          <tr class="row1" data-id="{{ $i->id }}">
                            <td>{{ $i->sort }}</td>
                            <td>{{ $i->title }}</td>
                            <td>{{ $i->updated_at }}</td>
                            <td>
                              <div class="dropdown">
                                  <a class="btn btn-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-cog"></i>
                                  </a>

                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="min-width: 80px;">
                                    <li><button class="dropdown-item btn-view" data-url=""><i class="fa-solid fa-magnifying-glass"></i> View</button></li>
                                    <li><button class="dropdown-item btn-update"data-url="{{ route('transparencyseal.edit',$i->id) }}"><i class="fa-solid fa-pen-to-square"></i> Update</button></li>
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
>>>>>>> 4e1a277a46116677f44536de309acf2f44bde909
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
  $(function () {
      $("#table").DataTable({
        "paging":   false,
        "ordering": false,
        "info":     false,
        "searching": false
      });

      // $('#tablecontents').click(function(){
      //     alert("HELLLo");
      // });
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