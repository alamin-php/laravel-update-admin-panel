@extends('layouts.app')
@section('title', 'User')
@section('content')
    @push('css')
        <!-- DataTables -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">

    @endpush
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">User</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">User</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Users Table
                            </h3>
                            <button class="btn btn-info btn-sm float-right" data-toggle="modal" data-target="#addModal"><i
                                    class="fa fa-plus-circle"></i> Add New</button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-2">
                            <table id="" class="table table-bordered table-striped table-sm ytable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Full name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        {{-- add modal  --}}
        <div class="modal fade" id="addModal" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add New User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="" id="add_form">
                        <div class="modal-body">
                            <div class="from-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control form-control-sm" name="name" id="name"
                                    placeholder="Enter full name" required>
                            </div>
                            <div class="from-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control form-control-sm" name="email" id="email"
                                    placeholder="Enter email" required>
                            </div>
                            <div class="from-group">
                                <label for="password">Password</label>
                                <input type="text" class="form-control form-control-sm" name="password" id="password"
                                    placeholder="Enter password" required>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-end">
                            <button type="submit" class="btn btn-info btn-sm"><i class="fa fa-plus-circle"></i>
                                Save</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    </section>
@endsection
@push('script')
    <!-- DataTables  & Plugins -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" >
            $(function warehouse() {
                table = $('.ytable').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('user.index') }}",
                    columns: [{
                            data: 'DT_RowIndex',
                            name: 'DT_RowIndex'
                        },
                        {
                            data: 'thumbnail',
                            name: 'thumbnail'
                        },
                        {
                            data: 'name',
                            name: 'name'
                        },
                        {
                            data: 'email',
                            name: 'email'
                        },
                        {
                            data: 'phone',
                            name: 'phone'
                        },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: true,
                            searchable: true
                        },
                    ]
                });
            });
    </script>
    <script>
        $(document).ready(function () {
    $('#example').DataTable();
});
    </script>
@endpush
