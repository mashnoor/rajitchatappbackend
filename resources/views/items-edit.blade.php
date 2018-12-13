<div class="modal fade" id="editItem-{{$item->id}}" role="dialog" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title text-left">Edit Item</h5>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <form role="form" class="form-horizontal" action='{{ action('HomeController@item_update', $item->id) }}' method="POST">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">

                      {{-- <input type="hidden" name="parent_id" value=""> --}}
                      {{-- <input type="hidden" name="created_by" value="{{Auth::user()->id}}"> --}}

                      <div class="form-group">
                          <label class="col-sm-3 control-label">Heading</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" placeholder="Name" name="heading" value="{{$item->heading}}"> </div>
                      </div>
                      <div class="form-group">
                          <label class="col-sm-3 control-label">Details</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" placeholder="Nickname" name="details" value="{{$item->details}}"> </div>
                      </div>             
                </div>
            </div>
        </div>
    </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Update</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>