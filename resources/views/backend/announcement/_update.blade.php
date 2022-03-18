<div class="modal fade" id="update_announcement" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-primary" role="document">
    <div class="modal-content">
      <form action="{{ route('announcement.update', $announcement->id) }}" method="post" enctype="multipart/form-data">
        @csrf  
        @method('PATCH')            
        <div class="modal-header">
          <h4 class="modal-title">Update Success Stories</h4>
          <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        </div>
        <div class="modal-body">
         <div class="input-group mb-3">
            <span class="input-group-text" >Title</span>
            <input type="text" class="form-control" name="title" value="{{$announcement->title}}">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">Subject</span>
            <input type="text" class="form-control" name="subject" value="{{$announcement->subject}}" >
          </div>
           <div class="input-group mb-3">
            <span class="input-group-text">Content</span>
            <input type="text" class="form-control" name="content" value="{{$announcement->content}}" >
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">Location</span>
            <input type="text" class="form-control" name="location" value="{{$announcement->location}}" >
          </div>
         <div class="input-group mb-3">
            <span class="input-group-text">Date</span>
            <input type="date" class="form-control" name="date" value="{{$announcement->date}}" >
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

