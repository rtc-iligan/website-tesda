<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="{{ route('schedule.store') }}" method="post" >
        @csrf  
        <div class="modal-header">
          <h5 class="modal-title">Add Schedule</h5>
        </div>
        <div class="modal-body">
         
          <div class="input-group mb-3">
            <span class="input-group-text">Qualification</span>
            <select class="form-select" name="acc_id" required>
              <option value="" selected>------> Choose Here <------</option>
             @foreach($acc as $accs)
              <option value="{{$accs->id}}">{{$accs->title}}</option>
             @endforeach
            </select>
          </div>
          <div class="input-group mb-3">
           <span class="input-group-text">Applicant</span>
            <input type="text" class="form-control" name="applicant" required>
          </div>
           <div class="input-group mb-3">
            <span class="input-group-text">Status</span>
            <input type="text" class="form-control" name="competent" required>
          </div>
          <div class="input-group mb-3">
           <span class="input-group-text">Date</span>
            <input type="date" class="form-control" name="date" required>
          </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>  
    </div>
  </div>
</div>

