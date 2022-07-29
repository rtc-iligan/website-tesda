<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="{{ route('personnel.store') }}" method="post" enctype="multipart/form-data">
        @csrf  
        <div class="modal-header">
          <h5 class="modal-title">Add Personnel</h5>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <div class="row">
              <div class="col-md-3">
                  <img src="#" height="120" width="120"style=" border: 1px solid #555;" id="previewImg">
              </div>
              <div class="col-md-9">
                 <span >Full Name:</span>
                 <input type="text" class="form-control" name="name"required>
                  <span class="" >Type</span>
                  <select class="form-select" name="type" required>
                    <option value="" selected>------> Choose Here <------</option>
                    <option value="Regular">Regular</option>
                    <option value="Job Order">Job Order</option>
                  </select> 
              </div>
            </div>
          </div> 
          <div class="input-group mb-3">
            <span class="input-group-text">Position</span>
            <input type="text" class="form-control" name="position" required>
          </div>
          <div class="input-group mb-3">
           <span class="input-group-text">Motto</span>
            <input type="text" class="form-control" name="motto" >
          </div>
           <div class="input-group mb-3">
            <input type="file" class="form-control" name="image" onchange="previewFile(this);" >
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
    function previewFile(input){
        var file = $("input[type=file]").get(0).files[0];
        if(file){
            var reader = new FileReader();
            reader.onload = function(){
                $("#previewImg").attr("src", reader.result);
            }
            reader.readAsDataURL(file);
        }
    }
</script>