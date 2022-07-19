<div class="modal fade" id="update_accredited" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-primary" role="document">
    <div class="modal-content">
      <form action="{{ route('accredited.update',$accredited->id) }}" method="post">
        @csrf  
        @method('PATCH')            
        <div class="modal-header">
          <h4 class="modal-title">Update Accredited Qualification</h4>
          <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        </div>
        <div class="modal-body">
         <div class="input-group mb-3">
            <span class="input-group-text" >Title</span>
            <input type="text" class="form-control" name="title" value="{{$accredited->title}}">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">Accredited Number</span>
            <input type="text" class="form-control" name="acc_number"  value="{{$accredited->acc_number}}">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">Accredited Date</span>
            <input type="date" class="form-control" name="acc_date"  value="{{$accredited->acc_date}}">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">Accredited Expiration</span>
            <input type="date" class="form-control" name="acc_exp"  value="{{$accredited->acc_exp}}">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">Fee</span>
            <input type="number" class="form-control" name="fee" value="{{$accredited->fee}}"  >
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

