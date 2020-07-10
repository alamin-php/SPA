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
                <h1>Add Service</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="">Service</a></li>
                    <li class="breadcrumb-item active">Create</li>
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
                    <h5 class="text-muted">Add New</h5>
                </div>
                <form action="{{ route('service.add') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input class="form-control" type="hidden" name="tbl" value="{{ encrypt('services') }}">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="InputTitle">Title</label>
                            <input type="text" name="title" class="form-control" id="InputTitle"
                                >
                        </div>
                        <div class="form-group">
                            <label for="InputIcon">Icon</label>
                            <input type="text" name="icon" class="form-control" id="InputIcon"
                                >
                        </div>
                        <div class="form-group">
                            <label for="InputIntro">intro</label>
                            <textarea type="text" name="intro" class="form-control"
                                id="InputIntro"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="InputStatus">Status</label>
                            <select name="status" class="form-control" id="InputStatus">
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
        </form>
    </div>
</section>
@endsection

@push('js')
    <script>
        CKEDITOR.replace('intro');
    </script>
@endpush
