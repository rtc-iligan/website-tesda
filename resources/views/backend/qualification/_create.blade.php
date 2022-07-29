<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="{{ route('qualification.store') }}" method="post" enctype="multipart/form-data">
        @csrf  
        <div class="modal-header">
          <h5 class="modal-title">Add Qualification</h5>
        </div>
        <div class="modal-body">
         
          <div class="input-group mb-3">
            <span class="input-group-text">Title</span>
            <input type="text" class="form-control" name="title" required>
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">Abrv</span>
            <input type="text" class="form-control" name="abrv" required>
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">Description</span>
            <input type="text" class="form-control" name="discription" required>
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">Tuition Fee</span>
            <input type="text" class="form-control" name="tuition_fee" required>
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">CPTR Number</span>
            <input type="text" class="form-control" name="cptr" required>
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">Date Accredited</span>
            <input type="date" class="form-control" name="date" required>
          </div>
          <div class="input-group mb-3 row ml-1">
            <span class="input-group-text">Sector</span>
            <select class="form-select" name="sector" required>
              <option value="" selected>------> Choose Here <------</option>
              <option value="CONSTRUCTION">CONSTRUCTION</option>
              <option value="AGRICULTURE">AGRICULTURE</option>
              <option value="TOURISM">TOURISM</option>
              <option value="ELECTRICAL & ELECTRONICS">ELECTRICAL & ELECTRONICS</option>
              <option value="GARMENTS">GARMENTS</option>
              <option value="METALS & ENGINEERING">METALS & ENGINEERING</option>
              <option value="AIRCONDITIONING & REFRIGERATION">AIRCONDITIONING & REFRIGERATION</option>
              <option value="INFORMATION AND COMMUNICATION TECHNOLOGY">INFORMATION AND COMMUNICATION TECHNOLOGY</option>
              <option value="AUTOMOTIVE AND LAND TRANSPORTATION">AUTOMOTIVE AND LAND TRANSPORTATION </option>
              <option value="DIPLOMA">DIPLOMA</option>
              <option value="TVET">TVET</option>
              <option value="LANGUAGE AND CULTURE">LANGUAGE AND CULTURE</option>
              <option value="OTHERS">OTHERS</option>
            </select>
          </div>
          <div class="input-group mb-3 row">
            <div class="col-6"> <span class="input-group-text">Type</span>
            <select class="form-select" name="type" required>
              <option value="" selected>------> Choose Here <------</option>
              <option value="CBP">CBP</option>
              <option value="IBP">IBP</option>
              <option value="LSI">LSI</option>
              <option value="MTP">MTP</option>
            </select> </div>
            <div class="col-6">
            <span class="input-group-text">Hours</span>
            <input type="text" class="form-control" name="hrs" required>
            </div>
           
          </div>
          <label for="image" class="fw-bold fs-5">Image:</label>
          <div class="input-group mb-3">
            <input type="file" class="form-control" name="image" required>
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

