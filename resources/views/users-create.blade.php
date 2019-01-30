<div class="modal fade" id="create-new-user" role="dialog" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title">Create User</h5>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <form role="form" class="form-horizontal" action='{{ action('HomeController@user_create') }}' method="POST" enctype="multipart/form-data">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">

                      {{-- <input type="hidden" name="parent_id" value=""> --}}
                      {{-- <input type="hidden" name="created_by" value="{{Auth::user()->id}}"> --}}

                      <div class="form-group">
                          <label class="col-sm-3 control-label">Name</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" placeholder="Name" required="required" name="name" value=""> </div>
                      </div>
                      <div class="form-group">
                          <label class="col-sm-3 control-label">Designation</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" placeholder="Designation" name="designation" value=""> </div>
                      </div>
                      <div class="form-group">
                          <label class="col-sm-3 control-label">ID No.</label>
                          <div class="col-sm-9">
                              <input type="number" class="form-control" placeholder="ID No." required="required" name="id_no" value=""> </div>
                      </div>
                      <div class="form-group">
                          <label class="col-sm-3 control-label">Phone</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" placeholder="Phone" name="phone" value=""> </div>
                      </div>
                      <div class="form-group">
                          <label class="col-sm-3 control-label">Sector</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" placeholder="Sector" name="sector" value=""> </div>
                      </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Picture</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" name="photo" value=""></div>
                        </div>
                      <div class="form-group">
                          <label for="inputPassword3" class="col-sm-3 control-label">Password*</label>
                          <div class="col-sm-9">
                              <input type="password" class="form-control" placeholder="Password" required="required" name="password"> </div>
                      </div>
                      <div class="form-group">
                          <label for="inputPassword4" class="col-sm-3 control-label">Re Password*</label>
                          <div class="col-sm-9">
                              <input type="password" class="form-control" placeholder="Retype Password" required="required" name="retype_password"> </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Create</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>