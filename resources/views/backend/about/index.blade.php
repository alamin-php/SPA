@extends('layouts.app')
@section('title','All About')
@push('css')
      <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
@endpush
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>About</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">About</li>
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
            <a href="{{ route('about.create') }}" type="button" class="btn btn-default btn-sm float-right"><i class="fas fa-plus"></i> Add New</a>
            <h3 class="card-title">View All About</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="dataTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Serial</th>
                        <th>Title</th>
                        <th>Intro</th>
                        <th>Status</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($abouts as $key => $data)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $data->title }}</td>
                            <td>{!! Str::limit( $data->intro, 40, ' ...') !!}</td>
                            <td>{{ $data->status }}</td>
                            <td>{{ $data->created_at }}</td>
                            <td>
                                <a role="button" href="{{ route('about.edit', $data->aid) }}" class="btn btn-default btn-sm"><i class="fa fa-edit text-info"></i> Edit</a>
                                <a role="button" href="{{ route('about.delete', $data->aid) }}" class="btn btn-default btn-sm"><i class="fa fa-trash text-danger"></i> Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->

    </div>
</section>
<!-- /.content -->
@endsection

@push('js')
<!-- DataTables -->
<script src="{{ asset('backend/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script>
  $(function () {
    $('#dataTable').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
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
