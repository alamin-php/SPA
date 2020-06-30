<div class="modal fade" id="modal-lg">
    <div class="modal-dialog">
        {{-- <div class="modal-dialog modal-lg"> --}}
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                  <div class="form-group">
                    <label for="InputField">Title</label>
                    <input type="text" class="form-control" id="InputField" placeholder="Enter Title">
                  </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-default"> Save</button>
                </div>
            </div>
        </form>
    </div>
</div>
