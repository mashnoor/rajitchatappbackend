<div class="modal fade" id="create-new-item" role="dialog" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title">Create Item</h5>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <form role="form" class="form-horizontal" action='{{ action('HomeController@item_create') }}' method="POST">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">

                      <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

                      <div class="form-group">
                          <label class="col-sm-3 control-label">Heading</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" placeholder="Name" required="required" name="heading" value=""> </div>
                      </div>
                      <div class="form-group">
                          <label class="col-sm-3 control-label">Details</label>
                          <div class="col-sm-9">
                              <textarea class="form-control" placeholder="Nickname" required="required"  name="details" value=""></textarea></div>
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