<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
        {{-- <div class="modal-dialog modal-lg"> --}}
        <form action="{{ route('slider.add') }}" method="POST" enctype="multipart/form-data">
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
                        <label for="InputTitle">Title</label>
                        <input type="text" name="title" class="form-control" id="InputTitle" placeholder="Enter Title">
                    </div>
                        <div class="form-group">
                            <label for="InputIntro">intro</label>
                            <textarea type="text" name="intro" class="form-control"
                                id="InputIntro"></textarea>
                        </div>
                    <div class="form-group">
                        <label for="InputBtnText">Button Text</label>
                        <input type="text" name="btn_text" class="form-control" id="InputBtnText"
                            placeholder="Enter Button Text">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="InputBtnClass">Button Class</label>
                                <select name="btn_class" class="form-control" id="InputBtnClass">
                                    <option value="common">Common</option>
                                    <option value="border">Border</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="InputSliderStatus">Slider Status</label>
                                <select name="status" class="form-control" id="InputSliderStatus">
                                    <option value="on">On</option>
                                    <option value="off">Off</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">

                                <div class="custom-file">
                                    {{-- <input type="file" class="custom-file-input" id="customFile"> --}}
                                    <input type="file" accept="image*/" name="image" id="file"
                                        onchange="loadFile(event)" style="display:none" class="form-control" />
                                    <label class="custom-file-label" for="file">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p><img id="output" width="100%"></p>
                        </div>
                    </div>

                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-default"> Save</button>
                    </div>

                </div>
            </div>
        </form>
    </div>
</div>
