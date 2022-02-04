<div class="modal fade" id="createUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Create User Management</h5>
          
        </div>
        <div class="modal-body">
        <form action="{{ route('accounts.store') }}" method="post">
            @csrf 
            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-sm">Name</span>
                </div>
                <input type="text" class="form-control" name="name" aria-label="Small" aria-describedby="inputGroup-sizing-sm" required>
              </div>
              <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
                </div>
                <input type="email" class="form-control" name="email" aria-label="Small" aria-describedby="inputGroup-sizing-sm" required>
              </div>
              <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-sm">Role</span>
                </div>
                <select name="role" id="" class="form-control">
                  <option value="" selected>-- Select Role --</option>
                  @foreach ($roles as $item)
                      <option value="{{ $item->id }}">{{ $item->name }}</option>
                  @endforeach
                </select>
              </div>
              <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-sm">Password</span>
                </div>
                <input type="password" class="form-control" name="password" aria-label="Small" aria-describedby="inputGroup-sizing-sm" required>
              </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
      </div>
    </div>
  </div>