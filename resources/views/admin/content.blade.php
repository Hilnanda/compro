@push('top-style')
    <style>
        input.transparent-input,
        input.file {
            background-color: rgba(0, 0, 0, 0) !important;
            border: none !important;
            width: 100%;
        }

        input::-webkit-input-placeholder {
            color: black;
        }

        input:focus {
            outline: none;
        }

    </style>
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ url('../../admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
@endpush
@extends('admin.app.app')
@section('content-admin')
    <div class="wrapper">
        @include('admin.layouts.header')

        @include('admin.layouts.sidebar')



        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Data Content</h1>
                        </div>

                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <a style="margin-bottom: 20px" id="modal-515165" href="#modal-container-515165" role="button"
                            class="btn btn-success form-control" data-toggle="modal">Add Content</a>
                        <div class="modal fade" id="modal-container-515165" role="dialog" aria-labelledby="myModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myModalLabel">
                                            Add About Us
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <form action="/admin/about-us/create" method="POST">
                                        {{ csrf_field() }}
                                        <div class="modal-body">
                                            <div class="form-group">

                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <label for="name" class="control-label">Judul About Us</label>
                                                        <input type="text" class="form-control" name="title_about"
                                                            placeholder="Judul About Us">
                                                        <br>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <label for="name" class="control-label">Deskripsi About Us</label>
                                                        <textarea id="editor1" name="desc_about" rows="10" cols="80">
                                                                            </textarea><br>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <input type="submit" class="btn btn-primary" value="Simpan">

                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                Close
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card">

                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Banner Image</th>
                                            <th>Text 1</th>
                                            <th>Text 2</th>
                                            <th>Text 3</th>
                                            <th>Text 4</th>
                                            <th>Text 5</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Trident</td>
                                            <td>Internet
                                                Explorer 4.0
                                            </td>
                                            <td>Win 95+</td>
                                            <td> 4</td>
                                            <td> 4</td>
                                            <td>X</td>
                                            <td>X</td>
                                        </tr>
                                        <tr>
                                            <td>Trident</td>
                                            <td>Internet
                                                Explorer 4.0
                                            </td>
                                            <td>Win 95+</td>
                                            <td> 4</td>
                                            <td> 4</td>
                                            <td>X</td>
                                            <td>X</td>
                                        </tr>
                                        <tr>
                                            <td>Trident</td>
                                            <td>Internet
                                                Explorer 4.0
                                            </td>
                                            <td>Win 95+</td>
                                            <td> 4</td>
                                            <td> 4</td>
                                            <td>X</td>
                                            <td>X</td>
                                        </tr>
                                        <tr>
                                            <td>Trident</td>
                                            <td>Internet
                                                Explorer 4.0
                                            </td>
                                            <td>Win 95+</td>
                                            <td> 4</td>
                                            <td> 4</td>
                                            <td>X</td>
                                            <td>X</td>
                                        </tr>

                                    </tbody>

                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>


@endsection

@push('bottom-script')
    <!-- DataTables -->
    <script src="{{ url('admin/plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ url('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
    <script>
        $(function() {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging': true,
                'lengthChange': false,
                'searching': true,
                'ordering': true,
                'info': true,
                'autoWidth': false
            })
        })
    </script>
@endpush
