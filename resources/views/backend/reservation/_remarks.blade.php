<div class="modal fade" id="remarks" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form action="{{ URL::to('/addremarks/'.$rese->res_id) }}" method="post">
          @csrf  
           
          <div class="modal-header">
            <h4 class="modal-title">Update Reservation Remarks</h4>
            <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <select name="res_update"class="custom-select"required style="text-transform:uppercase;text-align:center;">
                            <option value="{{$rese->res_update}}" >{{$rese->res_update}}</option>
                            <option value="No Remarks">No-Remarks</option>
                            <option value="Unattended">Unattended</option>
                            <option value="Confirm">Confirm</option>
                            <option value="No-Response">No-Response</option>
                            <option value="Undecided">Undecided</option>
                            <option value="Cancel">Cancel</option>
                            <option value="Not Qualified">Not Qualified</option>
                            <option value="Block">Block</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <input type="date" class="form-control" name="res_updatedate" value="<?php echo date('Y-m-d'); ?>">
                    </div>
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

  