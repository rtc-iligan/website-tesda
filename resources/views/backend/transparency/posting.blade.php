@extends('layouts.app')

@section('content')
@include('backend.transparency._createPosting')

<div class="container">
  
    <div class="row justify-content-center">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{URL::to('/transparencyseal')}}">Tranparency Seal</a></li>
          <li class="breadcrumb-item active" aria-current="page">{{$getTransparencySealID->title}}</li>
        </ol>
      </nav>
        <div class="col-md-12">
          
            <div class="card">
              
                <div class="card-header h4"><i class="fa-solid fa-align-justify"></i>{{ __(' Posting Management for ') }}{{$getTransparencySealID->title}}
                <button type="submit" class="btn btn-secondary float-end " id="buttonref"><i class="fa-solid fa-sort"></i></i> Sort</button>
                <button type="submit" class="btn btn-primary float-end mr-2" data-bs-toggle="modal" data-bs-target="#createModalPosting"><i class="fa-solid fa-plus"></i></i> Create</button>
                </div>
             
                    <table class="table table-bordered" id="table">
                      <thead class="text-center">
                        <tr>
                         
                          <th width="5%">Year</th>
                          <th width="30%">Sub Title</th>
                          <th width="50%">URL Link</th>
                          <th width="5%">Action</th>
                        </tr>
                      </thead>
                      <tbody id="tablecontents" class="text-center">
                      @foreach($posting as $i)
                          <tr class="row1" data-id="{{ $i->id }}" >
                            <td>{{ $i->year ?? ''}}</td>
                            <td>{{ $i->sub_title ?? 'No data Available'}}</td>
                            <td style="text-overflow: ellipsis !important;">{{ $i->link ?? 'No data Available'}}</td>
                            <td>
                              <div class="dropdown">
                                  <a class="btn btn-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-cog"></i>
                                  </a>

                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="min-width: 80px;">
                                  <li><button class="dropdown-item btn-update"data-url="{{ route('posting.edit',$i->id) }}"><i class="fa-solid fa-edit"></i> Update</button></li>
                                 
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
            </div>
        </div>
    </div>
</div>
<div class="append-posting"></div>
@endsection
@section('scripts')



<script type="text/javascript">
   $('.btn-update').click(function(){
            var div = $('.append-posting');
            div.empty();
            var url = $(this).data('url');
            $.ajax({
                url: url,
                success:function(data){
                    div.append(data);
                    $('#update_posting').modal('show');
                }
            });
        });
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
            url: "{{ url('sortable-post') }}",
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