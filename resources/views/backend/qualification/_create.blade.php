<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form action="{{ route('qualification.store') }}" method="post" enctype="multipart/form-data">
        @csrf  
        <div class="modal-header">
          <h5 class="modal-title">Add Qualification</h5>
        </div>
        <div class="modal-body">
         
          <div class="input-group mb-3">
            <div class="col-md-8">
            <span class="">Title</span>
            <input type="text" class="form-control" name="title" required>
            </div>

            <div class="col-md-4">
            <span class="">Abrv</span>
            <input type="text" class="form-control" name="abrv" required>
            </div>
          </div>
          <div class="input-group mb-3">
           <div class="col-md-6">
           <span class="">Tuition Fee</span>
            <input type="text" class="form-control" name="tuition_fee" required>
           </div>
           <div class="col-md-6">
           <span class="">CPTR Number</span>
            <input type="text" class="form-control" name="cptr" required>
           </div>
          </div>
         
          
          <div class="input-group mb-3">
            <div class="col-md-6">
            <span class="">Date Accredited</span>
            <input type="date" class="form-control" name="date" required>
            </div>
            <div class="col-md-6">
              <span class="">Hours</span>
              <input type="text" class="form-control" name="hrs" required>
            </div>
           
          </div>
          <div class="input-group mb-3 row ml-1">
            <div class="col-md-6">
            <span class="">Sector</span>
            <select class="form-select" name="sector" required>
              <option value="" class="text-center" selected>------> Choose Here <------</option>
              @foreach(config('global.sector') as $sector)
              <option value="{{ $sector['name'] }}">{{ $sector['name'] }}</option>
              @endforeach
            </select>
            </div>
            <div class="col-md-6"> <span class="">Type</span>
            <select class="form-select" name="type" required>
              <option value="" class="text-center" selected>------> Choose Here <------</option>
               @foreach(config('global.mode') as $mode)
              <option value="{{ $mode['name'] }}">{{ $mode['name'] }}</option>
              @endforeach
            </select> </div>
          </div>
          <div class="input-group mb-3">
           <div class="col-md-12">
           <span class="">Description</span>
            <textarea class="form-control" cols="30" rows="10" name="discription" required> </textarea>
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

