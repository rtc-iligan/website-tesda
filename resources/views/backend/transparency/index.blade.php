@extends('layouts.app')

@section('content')
@include('backend.personnel._create')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header h4"><i class="fa-solid fa-align-justify"></i>{{ __(' Transparency Management') }}
                    <button class="btn btn-outline-info float-right"><i class="fa-solid fa-sort"></i> Sort</button>
                </div>
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
                        <th >Category</th>
                        <th width="30%">Date</th>
                        <th width="7%">Action</th>
                      </tr>
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
   $('.btn-view').click(function(){
            var div = $('.append-personnel');
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