@extends('layouts.app')
@section('title','Setting')
@push('css')
    <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
@endpush
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Setting</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Setting</li>
                </ol>
            </div>
        </div>
    </div>
    
    <!-- /.container-fluid -->
</section>
<section class="content">
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h5 class="text-muted">Update Setting</h5>
                </div>
                <form action="{{ route('setting.update') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">

                        <div class="form-group row">
                           <div class="col-md-6">
                                  <label for="InputTitle">Address</label>
                            <input type="text" name="address" class="form-control" id="InputTitle"
                                value="{{ $setting->address }}">
                           </div>
                           <div class="col-md-6">
                                  <label for="InputTitle">Web URL</label>
                            <input type="text" name="website" class="form-control" id="InputTitle"
                                value="{{ $setting->website }}">
                           </div>
                        </div>

                        <div class="form-group row">
                           <div class="col-md-6">
                                  <label for="InputPhone1">Phone 1</label>
                            <input type="text" name="phone1" class="form-control" id="InputPhone1"
                                value="{{ $setting->phone1 }}">
                           </div>
                           <div class="col-md-6">
                                  <label for="InputPhone2">Phone2</label>
                            <input type="text" name="phone2" class="form-control" id="InputPhone2"
                                value="{{ $setting->phone2 }}">
                           </div>
                        </div>

                        <div class="form-group row">
                           <div class="col-md-3">
                                  <label for="InputFB">Facebook Link</label>
                            <input type="text" name="fblink" class="form-control" id="InputFB"
                                value="{{ $setting->fblink }}">
                           </div>
                           <div class="col-md-3">
                                  <label for="InputTwlink">Twitter Link</label>
                            <input type="text" name="twlink" class="form-control" id="InputTwlink"
                                value="{{ $setting->twlink }}">
                           </div>
                           <div class="col-md-3">
                                  <label for="Inputinstagram">Instagram</label>
                            <input type="text" name="instlink" class="form-control" id="Inputinstagram"
                                value="{{ $setting->instlink }}">
                           </div>
                           <div class="col-md-3">
                                  <label for="Inputlinkedin">Linkedin</label>
                            <input type="text" name="lilink" class="form-control" id="Inputlinkedin"
                                value="{{ $setting->lilink }}">
                           </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-default"><i class="fas fa-edit"></i> Update</button>
                    </div>

            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    <h5 class="text-muted">setting Image</h5>
                </div>
                <div class="card-body">
                    <div class="form-group">

                        <div class="custom-file">
                            {{-- <input type="file" class="custom-file-input" id="customFile"> --}}
                            <input type="file" accept="image*/" name="image" id="file" onchange="loadFile(event)"
                                style="display:none" class="form-control" />
                            <label class="custom-file-label" for="file">Choose file</label>
                        </div>
                    </div>
                    @if ($setting->image)
                        <p><img id="output" src="{{ asset($setting->image) }}" width="100%"></p>
                        @else
                        <p><img id="output" src="http://lorempixel.com/640/480/" width="100%"></p>
                        
                    @endif
                </div>
                <div class="card-footer">
                    <p class="text-muted"><i>enter your actual image size for setting</i></p>
                </div>
            </div>

            <div class="card">
                <div class="card-header bg-info">
                    <h5 class="text-default">Setting Status</h5>
                </div>
                <div class="card-body">
                    @if ($setting->updated_at)
                        <p class="text-info"><i><i class="fas fa-clock"> </i> Last Updated: {{ $setting->updated_at }}</i></p>
                        @else
                        <p class="text-danger"><i><i class="fas fa-clock"> </i> Last Updated: Not Update Yet!</i></p>
                        
                    @endif
                </div>
            </div>
        </div>
        </form>
    </div>
</section>
@endsection

@push('js')
    <script>
        var loadFile = function (event) {
            var image = document.getElementById('output');
            image.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>
    <script>
        CKEDITOR.replace('intro');

    </script>
@endpush
