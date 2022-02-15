<div class="modal fade" id="update_gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-primary" role="document">
    <div class="modal-content">
      <form action="{{ route('gallery.update', $gallery->id) }}" method="post" enctype="multipart/form-data">
        @csrf  
        @method('PATCH')            
        <div class="modal-header">
          <h4 class="modal-title">Edit Qualification</h4>
          <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        </div>
        <div class="modal-body">
         <div class="input-group mb-3">
            <span class="input-group-text" >Subject</span>
            <input type="text" class="form-control" name="subject" value="{{$gallery->subject}}"required>
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">Date</span>
            <input type="date" class="form-control" name="date" value="{{$gallery->date}}" required >
          </div>
          <div class="input-group mb-3">
              <input type="file" class="form-control" name="image" id="image">
          </div>
          <img src="{{asset('storage/'.$gallery->image) }}" height="60" width="60"style=" border: 1px solid #555;"id="imageShow">
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
