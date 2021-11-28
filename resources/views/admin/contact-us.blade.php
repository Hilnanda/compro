@push('top-style')

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
                            <h1>Data Contact Us</h1>
                        </div>

                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <a style="margin-bottom: 20px" id="modal-515165" href="#modal-container-515165" role="button"
                            class="btn btn-success form-control" data-toggle="modal">Add Contact Us</a>
                        <div class="modal fade" id="modal-container-515165" role="dialog" aria-labelledby="myModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myModalLabel">
                                            Add Contact Us
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <form action="/admin/contact-us-cms/create" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="modal-body">
                                            <div class="form-group">

                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <label for="name" class="control-label">Email*</label>
                                                        <input type="email" class="form-control" name="email_contact_us"
                                                            placeholder="Email" required>
                                                        <br>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <label for="name" class="control-label">Phone*</label>
                                                        <input type="number" class="form-control"
                                                            name="telepon_contact_us" placeholder="Phone" required>
                                                        <br>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <label for="name" class="control-label">Address*</label>
                                                        <textarea id="editor1" name="alamat_contact_us" rows="10" cols="80">
                                                                        </textarea><br>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <input type="submit" class="btn btn-success" value="Save">

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
                                            <th>No.</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Created At</th>
                                            <th>Updated At</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($contact as $item)
                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td>{{ $item->telepon_contact_us }}</td>
                                                <td>{{ $item->email_contact_us }}</td>
                                                @if (strlen($item->alamat_contact_us) < 100)
                                                    <td>{!! $item->alamat_contact_us !!}</td>
                                                @else
                                                    <td>{!! substr($item->alamat_contact_us, 0, 100) . '.....' !!}</td>
                                                @endif
                                                <td>{{ $item->created_at }}</td>
                                                <td>{{ $item->updated_at }}</td>
                                                <td><a id="modal-515165" href="#modal-container-515165{{ $item->id }}"
                                                        role="button" class="btn btn-warning btn-sm"
                                                        data-toggle="modal"><span
                                                            class="font-weight-bold ml-1">Edit</span></a>
                                                    <div class="modal fade"
                                                        id="modal-container-515165{{ $item->id }}" role="dialog"
                                                        aria-labelledby="myModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-xl" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="myModalLabel">
                                                                        Edit Contact Us
                                                                    </h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                </div>
                                                                <form action="/contact-us-cms/update" method="POST"
                                                                    enctype="multipart/form-data">
                                                                    {{ csrf_field() }}
                                                                    <div class="modal-body">
                                                                        <div class="form-group">

                                                                            <div class="row">
                                                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                                                    <label for="name"
                                                                                        class="control-label">Email*</label>
                                                                                    <input type="email"
                                                                                        class="form-control"
                                                                                        name="email_contact_us"
                                                                                        value="{{ $item->email_contact_us }}">
                                                                                        <input type="hidden" value="{{ $item->id }}" name="id">
                                                                                    <br>
                                                                                </div>
                                                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                                                    <label for="name"
                                                                                        class="control-label">Phone*</label>
                                                                                    <input type="number"
                                                                                        class="form-control"
                                                                                        name="telepon_contact_us"
                                                                                        value="{{ $item->telepon_contact_us }}">
                                                                                    <br>
                                                                                </div>
                                                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                                                    <label for="name"
                                                                                        class="control-label">Address*</label>
                                                                                    <textarea id="editor2"
                                                                                        name="alamat_contact_us" rows="10"
                                                                                        cols="80">{!! $item->alamat_contact_us !!}
                                                                                        </textarea>
                                                                                    <br>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <input type="submit" class="btn btn-success"
                                                                            value="Save">

                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">
                                                                            Close
                                                                        </button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="/admin/contact-us-cms/delete/{{ $item->id }}"
                                                        class="btn btn-danger btn-sm delete"><span
                                                            class="font-weight-bold ml-1">Delete</span></a>
                                                </td>
                                            </tr>
                                        @endforeach

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
                'autoWidth': false,
                "scrollX": true
            })
        })
    </script>
    <script src="{{ url('admin/bower_components/ckeditor/ckeditor.js') }}"></script>
    <script>
        $(function() {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('editor1')
            //bootstrap WYSIHTML5 - text editor
            $('.textarea').wysihtml5()
        })
        $(function() {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('editor2')
            //bootstrap WYSIHTML5 - text editor
            $('.textarea').wysihtml5()
        })
        $(function() {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('editor3')
            //bootstrap WYSIHTML5 - text editor
            $('.textarea').wysihtml5()
        })
        $(function() {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('editor4')
            //bootstrap WYSIHTML5 - text editor
            $('.textarea').wysihtml5()
        })
    </script>
@endpush
