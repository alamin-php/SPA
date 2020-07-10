@extends('layouts.app')
@section('title','Service')
@push('css')
    <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
@endpush
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Service</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('service') }}">Service</a></li>
                    <li class="breadcrumb-item active">edit</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('service') }}" type="button" class="btn btn-default btn-sm float-right"><i class="fas fa-undo"></i> Back</a>
                    <h5 class="text-muted">Edit</h5>
                </div>
                <form action="{{ route('service.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input class="form-control" type="hidden" name="tbl" value="{{ encrypt('services') }}">
                    <input class="form-control" type="hidden" name="id" value="{{ $data->id }}">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="InputTitle">Title</label>
                            <input type="text" name="title" class="form-control" id="InputTitle" value="{{ $data->title }}"
                                >
                        </div>
                        <div class="form-group">
                            <label for="InputIcon">Icon</label>
                            <input type="text" name="icon" class="form-control" id="InputIcon" value="{{ $data->icon }}"
                                >
                        </div>
                        <div class="form-group">
                            <label for="InputIntro">intro</label>
                            <textarea type="text" name="intro" class="form-control"
                                id="InputIntro">{!! $data->intro !!}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="InputStatus">Status</label>
                            <select name="status" class="form-control" id="InputStatus">
                                <option value="on" {{ $data->status == 'on'?'selected' :'' }}>On</option>
                                <option value="off" {{ $data->status == 'off'?'selected' :'' }}>Off</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-default"><i class="fas fa-edit"></i> Update</button>
                    </div>

            </div>
        </div>
        </form>
    </div>
</section>
@endsection

@push('js')
    <script>
        CKEDITOR.replace('intro');
    </script>
@endpush
