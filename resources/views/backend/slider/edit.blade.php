@extends('layouts.app')
@section('title','Edit Slider')
@push('css')
    <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
@endpush
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Slider</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('slider') }}">Slider</a></li>
                    <li class="breadcrumb-item active">Edit</li>
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
                    <a href="{{ route('slider') }}" type="button" class="btn btn-default btn-sm float-right"><i class="fas fa-undo"></i> Back</a>
                    <h5 class="text-muted">Update Slider</h5>
                </div>
                <form action="{{ route('slider.update', $slider->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="InputTitle">Title</label>
                            <input type="text" name="title" class="form-control" id="InputTitle"
                                value="{{ $slider->title }}">
                        </div>
                        <div class="form-group">
                            <label for="InputIntro">intro</label>
                            <textarea type="text" name="intro" class="form-control"
                                id="InputIntro">{!! $slider->intro !!}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="InputBtnText">Button Text</label>
                            <input type="text" name="btn_text" class="form-control" id="InputBtnText"
                                value="{{ $slider->btn_text }}">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="InputBtnClass">Button Class</label>
                                    <select name="btn_class" class="form-control" id="InputBtnClass">
                                        <option value="common"
                                            {{ $slider->btn_class == 'common' ? 'selected' : '' }}>
                                            Common</option>
                                        <option value="border"
                                            {{ $slider->btn_class == 'border' ? 'selected' : '' }}>
                                            Border</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="InputSliderStatus">Slider Status</label>
                                    <select name="status" class="form-control" id="InputSliderStatus">
                                        <option value="on" {{ $slider->status == 'on' ? 'selected' : '' }}>On</option>
                                        <option value="off" {{ $slider->status == 'off' ? 'selected' : '' }}>Off</option>
                                    </select>
                                </div>
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
                    <h5 class="text-muted">Slider Image</h5>
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
                    <p><img id="output" src="{{ asset($slider->image) }}" width="100%"></p>
                </div>
                <div class="card-footer">
                    <p class="text-muted"><i>enter your actual image size for slider</i></p>
                </div>
            </div>

            <div class="card">
                <div class="card-header bg-info">
                    <h5 class="text-default">Slider Info</h5>
                </div>
                <div class="card-body">
                    @if ($slider->updated_at)
                        <p class="text-info"><i><i class="fas fa-clock"> </i> Last Updated: {{ $slider->updated_at }}</i></p>
                        @else
                        <p class="text-danger"><i><i class="fas fa-clock"> </i> Last Updated: Not Update Yet!</i></p>
                        
                    @endif
                    <p class="text-info"><i><i class="fas fa-users"> </i> Last Status: {{ $slider->status == 'on' ? 'Published' : 'Unpublish' }}</i></p>
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
