<div class="modal fade" id="update_gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-primary" role="document">
    <div class="modal-content">
      <form action="{{ route('gallery.update', $gallery->id) }}" method="post" enctype="multipart/form-data">
        @csrf  
        @method('PATCH')            
        <div class="modal-header">
          <h4 class="modal-title">Edit Qualification</h4>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        </div>
        <div class="modal-body">
         <div class="input-group mb-3">
            <span class="input-group-text" >Subject</span>
            <input type="text" class="form-control" name="subject" value="{{$gallery->subject}}"required>
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">Date</span>
            <input type="date" class="form-control" name="date" value="{{$gallery->date}}" required>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
          <button class="btn btn-primary" type="submit">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>