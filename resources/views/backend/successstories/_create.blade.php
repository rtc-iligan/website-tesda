<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="{{ route('successstories.store') }}" method="post" enctype="multipart/form-data">
        @csrf  
        <div class="modal-header">
          <h5 class="modal-title">Add Success Stories</h5>
        </div>
        <div class="modal-body">
          <div class="input-group mb-3">
            <span class="input-group-text" >Name</span>
            <input type="text" class="form-control" name="name"required>
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">Content</span>
            <input type="text" class="form-control" name="content" required>
          </div>
           <div class="input-group mb-3">
            <span class="input-group-text">Link</span>
            <input type="text" class="form-control" name="link" required>
          </div>
          <div class="input-group mb-3">
            <input class="form-control" type="file" name="image" required>
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