<div class="modal fade" id="createModalPosting" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="{{ route('posting.store') }}" method="post" >
        @csrf  
        <div class="modal-header">
          <h5 class="modal-title">Add Posting in {{$getTransparencySealID->title}}</h5>
        </div>
        <div class="modal-body">
         
          <div class="input-group mb-3">
            <span class="input-group-text">Year</span>
            <input type="number" class="form-control" name="year">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">Sub Title</span>
            <input type="text" class="form-control" name="sub_title">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">URL Link</span>
            <input type="text" class="form-control" name="link">
          </div>
          <input type="hidden" value="{{$getTransparencySealID->id}}" name="ts_id">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>  
    </div>
  </div>
</div>

