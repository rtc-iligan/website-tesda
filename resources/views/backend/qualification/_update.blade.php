<div class="modal fade" id="update_qualification" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-primary" role="document">
    <div class="modal-content">
      <form action="{{ route('qualification.update',$quali->id) }}" method="post">
        @csrf  
        @method('PATCH')            
        <div class="modal-header">
          <h4 class="modal-title">Update Qualification</h4>
          <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        </div>
        <div class="modal-body">
         <div class="input-group mb-3">
            <span class="input-group-text" >Title</span>
            <input type="text" class="form-control" name="title" value="">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">CPTR Number</span>
            <input type="text" class="form-control" name="cptr" value=""  >
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text" >Type </span>
            <input type="text" class="form-control" name="type" value="">
          </div>
         <div class="input-group mb-3">
            <span class="input-group-text" >Nominal Hours </span>
            <input type="text" class="form-control" name="hrs" value="">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text"> Date Accredited</span>
            <input type="date" class="form-control" name="date" value="" >
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

