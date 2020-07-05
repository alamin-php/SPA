@extends('layouts.app')
@section('title','Read Message')
@push('css')
    <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
@endpush
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Message</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Read Message</h3>
            <a role="button" href="{{ route('contact') }}" class="btn btn-default float-right"><i class="fa fa-undo"></i> Back</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <h4>{{ $message->name }}</h4>
            <p class="text-muted">From: {{ $message->email }}</p>
            <small class="text-muted"><i class="fa fa-clock"></i> {{ $message->created_at }}</small><br>
            <textarea name="intro" disabled>Message: {!! $message->intro !!}</textarea>
        </div>
        <!-- /.card-body -->
    </div>
</section>
<!-- /.content -->
@endsection

@push('js')
    <script>
        CKEDITOR.replace('intro');

    </script>
@endpush