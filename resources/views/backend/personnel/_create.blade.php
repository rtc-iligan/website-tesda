<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="{{ route('news.store') }}" method="post" enctype="multipart/form-data">
        @csrf  
        <div class="modal-header">
          <h5 class="modal-title">Add Personnel</h5>
        </div>
        <div class="modal-body">
          <div class="input-group mb-3">
            <span class="input-group-text" >Full Name</span>
            <input type="text" class="form-control" name="subject"required>
          </div> 
          <div class="input-group mb-3">
            <span class="input-group-text" >Type</span>
            <select class="form-select" required=""></select> 
          </div> 
          
          <div class="input-group mb-3">
            <span class="input-group-text">Position</span>
            <input type="text" class="form-control" name="date" required>
          </div>
          <div class="input-group mb-3">
           <span class="input-group-text">Motto</span>
            <input type="text" class="form-control" name="date" required>
          </div>
           <div class="input-group mb-3">
           
            <input type="file" class="form-control" name="date" required>
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

<script type="text/javascript">
  
</script>