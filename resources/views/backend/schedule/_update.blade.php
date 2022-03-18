<div class="modal fade" id="update_schedule" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-primary" role="document">
    <div class="modal-content">
      <form action="{{ route('schedule.update',$schedule->id) }}" method="post">
        @csrf  
        @method('PATCH')            
        <div class="modal-header">
          <h4 class="modal-title">Update </h4>
          <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        </div>
        <div class="modal-body">
          <div class="input-group mb-3">
            <span class="input-group-text">Qualification</span>
            <input type="text" class="form-control" name="qualification" value="{{$schedule->qualification}}"required>
          </div>
          <div class="input-group mb-3">
           <span class="input-group-text">Applicant</span>
            <input type="text" class="form-control" name="applicant" value="{{$schedule->applicant}}"required>
          </div>
           <div class="input-group mb-3">
            <span class="input-group-text">Status</span>
            <input type="text" class="form-control" name="competent" value="{{$schedule->competent}}"required>
          </div>
          <div class="input-group mb-3">
           <span class="input-group-text">Date</span>
            <input type="date" class="form-control" name="date" value="{{$schedule->date}}"required>
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

