<div class="modal fade" id="update_personnel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-primary" role="document">
    <div class="modal-content">
      <form action="{{ route('personnel.update', $personnel->id) }}" method="post" enctype="multipart/form-data">
        @csrf  
        @method('PATCH')            
        <div class="modal-header">
          <h4 class="modal-title">Update News&Updates</h4>
          <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        </div>
        <div class="modal-body">
         <div class="mb-3">
            <div class="row">
              <div class="col-md-3">
                  <img src="{{asset('storage/'.$personnel->image) }}" height="120" width="120"style=" border: 1px solid #555;" id="imageShow">
              </div>
              <div class="col-md-9">
                 <span >Full Name:</span>
                 <input type="text" class="form-control" name="name"required>
                  <span class="" >Type</span>
                  <select class="form-select"name="type" required>
                    <option value=""  selected>------> Choose Here <------</option>
                    <option value="Regular">Regular</option>
                    <option value="Job Order">Job Order</option>
                  </select> 
              </div>
            </div>
          </div> 
          <div class="input-group mb-3">
            <span class="input-group-text">Position</span>
            <input type="text" class="form-control" name="position" value="{{$personnel->position}}" required>
          </div>
          <div class="input-group mb-3">
           <span class="input-group-text">Motto</span>
            <input type="text" class="form-control" name="motto" value="{{$personnel->position}}" required>
          </div>
           <div class="input-group mb-3">
            <input type="file" class="form-control" name="image" id="image" onchange="previewFile(this);" required>
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

<script type="text/javascript">
  $('document').ready(function () {
    $("#image").change(function () {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#imageShow').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>
