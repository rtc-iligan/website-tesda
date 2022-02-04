@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div class="float-right mb-2">
                <a class="btn btn-secondary btn-sm" href="{{ route('accounts.index') }}">Go Back</a>
            </div>

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form class="form-inline">
                            <div class="form-group">
                                <label>Attach File: </label>
                                <input type="file" name="file" class="" required id="fileUpload">
                            </div>
                            <button type="button" class="btn btn-primary" id="upload">Attach</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <form method="post" action="{{ route('accounts.import_post') }}" id="submit">
                    @csrf
                    <div class="card">
                        <div class="card-block">
                            <div class="table-responsive">
                                <table class="table table-xxs table-bordered" id="table-import">
                                    <thead>
                                        <tr>
                                            @foreach($columns as $i => $col)
                                            <th>{{ $col }}</th>
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                            <div class="float-right">
                                <a href="#!" id="cancel" class="btn btn-default m-r-20">Cancel</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div> 
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    var inputs = {!! json_encode($columns) !!}; 
    $(function () {
        
        $("#upload").bind("click", function () {
            var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.csv|.txt)$/;
            var table = $("#table-import tbody");
            table.empty();
            if (regex.test($("#fileUpload").val().toLowerCase())) {
                if (typeof (FileReader) != "undefined") {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        var rows = e.target.result.split("\n");
                        for (var i = 1; i < rows.length; i++) {
                            var row = $("<tr />");
                            var cells = rows[i].split(",");
                            for (var j = 0; j < cells.length; j++) {
                                var cell_text = cells[j];
                                var input = '<input type="text" class="border-0 text-center" name="import['+i+']['+inputs[j]+']" title="'+inputs[j]+'" value="'+cell_text+'" >';
                                var cell = $("<td />");
                                cell.html(input);
                                row.append(cell);
                            }
                            table.append(row);
                        }
                        
                    }
                    reader.readAsText($("#fileUpload")[0].files[0]);
                } else {
                    alert("This browser does not support HTML5.");
                }
            } else {
                alert("Please upload a valid CSV file.");
            }
        });
    });

    $('#cancel').on('click', function(e) { 
        $('#table-import tbody').empty();
    });
</script>
@endsection
