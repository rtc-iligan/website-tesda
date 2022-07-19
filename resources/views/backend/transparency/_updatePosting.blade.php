<div class="modal fade" id="update_posting" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-primary" role="document">
    <div class="modal-content">
      <form action="{{ route('posting.update',$posting->id) }}" method="post">
        @csrf  
        @method('PATCH')            
        <div class="modal-header">
          <h4 class="modal-title">Update Data</h4>
          <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        </div>
        <div class="modal-body">
          <div class="input-group mb-3">
            <span class="input-group-text">Year</span>
            <input type="number" class="form-control" name="year" value="{{$posting->year}}">
          </div>
          <div class="input-group mb-3">
           <span class="input-group-text">Sub Title</span>
            <input type="text" class="form-control" name="sub_title" value="{{$posting->sub_title}}">
          </div>
           <div class="input-group mb-3">
            <span class="input-group-text">URl Link</span>
            <input type="text" class="form-control" name="link" value="{{$posting->link}}">
          </div>
         
         
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
          <button class="btn btn-primary" type="submit">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>

