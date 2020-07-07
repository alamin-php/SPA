@extends('layouts.app')
@section('title','About')
@push('css')
    <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
@endpush
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Add About</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('about') }}">About</a></li>
                    <li class="breadcrumb-item active">Create</li>
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
                    <a href="{{ route('about') }}" type="button" class="btn btn-default btn-sm float-right"><i class="fas fa-undo"></i> Back</a>
                    <h5 class="text-muted">Add New</h5>
                </div>
                <form action="{{ route('about.add') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input class="form-control" type="hidden" name="tbl" value="{{ encrypt('abouts') }}">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="InputTitle">Title</label>
                            <input type="text" name="title" class="form-control" id="InputTitle"
                                >
                        </div>
                        <div class="form-group">
                            <label for="InputIntro">intro</label>
                            <textarea type="text" name="intro" class="form-control"
                                id="InputIntro"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="InputSliderStatus">Slider Status</label>
                            <select name="status" class="form-control" id="InputSliderStatus">
                                <option value="on">On</option>
                                <option value="off">Off</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-default"><i class="fas fa-plus"></i> Create</button>
                    </div>

            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    <h5 class="text-muted">About Image</h5>
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
                    <p><img id="output" src="" width="100%"></p>
                </div>
                <div class="card-footer">
                    <p class="text-muted"><i>enter your actual image size for slider</i></p>
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
