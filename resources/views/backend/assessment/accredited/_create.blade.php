<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="{{ route('accredited.store') }}" method="post" >
        @csrf  
        <div class="modal-header">
          <h5 class="modal-title">Add Accredited Qualification</h5>
        </div>
        <div class="modal-body">
         
        <div class="input-group mb-3">
            <span class="input-group-text" >Title</span>
            <input type="text" class="form-control" name="title"required>
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">Accredited Number</span>
            <input type="text" class="form-control" name="acc_number" required>
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">Accredited Date</span>
            <input type="date" class="form-control" name="acc_date" required>
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">Accredited Expiration</span>
            <input type="date" class="form-control" name="acc_exp" required>
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">Fee</span>
            <input type="number" class="form-control" name="fee"required>
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

