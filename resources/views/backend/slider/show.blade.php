@extends('layouts.app')
@section('title','Slider Details')
@push('css')
    <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
@endpush
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Slider Details</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('slider') }}">Slider</a></li>
                    <li class="breadcrumb-item active">Show</li>
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
                    <h5 class="text-muted">Slider Details</h5>
                </div>

                    <div class="card-body">
                        <div class="row">
                        <div class="form-group">
                                <label for="InputBtnText">Slider Image</label>
                                <p><img src="{{ asset($show->image) }}" width="100%"></p>
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="InputTitle">Title</label>
                            <p class="text-muted">{{ $show->title }}</p>
                        </div>
                        <div class="form-group">
                            <label for="InputIntro">intro</label>
                           <p class="text-muted">{!! $show->intro !!}</p>
                        </div>
                    </div>

            </div>
        </div>
        <div class="col-md-3">

            <div class="card">
                <div class="card">
                    <div class="card-header bg-info">
                        <h5 class="text-default">Slider Patametars</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted"><i><i class="fas fa-cog"> </i> Button Text <b>{{ $show->btn_text }}</b></i></p>
                        <p class="text-muted"><i><i class="fas fa-cog"> </i> Button Class <b>{{ $show->btn_class }}</b></i></p>
                        <p class="text-muted"><i><i class="fas fa-cog"> </i> Slider Status: <b>{{ $show->status == 'on' ? 'Actived' : 'Deactived' }}</b></i></p>
                    </div>
                </div>
                <div class="card-header bg-info">
                    <h5 class="text-default">Slider Info</h5>
                </div>
                <div class="card-body">
                    @if ($show->updated_at)
                        <p class="text-info"><i><i class="fas fa-clock"> </i> Last Updated: {{ $show->updated_at }}</i></p>
                        @else
                        <p class="text-danger"><i><i class="fas fa-clock"> </i> Last Updated: Not Update Yet!</i></p>
                        
                    @endif
                    <p class="text-info"><i><i class="fas fa-users"> </i> Last Status: {{ $show->status == 'on' ? 'Published' : 'Unpublish' }}</i></p>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection

@push('js')
    <script>
        CKEDITOR.replace('intro');

    </script>
@endpush
