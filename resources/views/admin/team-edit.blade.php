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
                            <h1>Edit Data Team</h1>
                        </div>

                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">

                        <div class="card">

                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="/admin/team-cms/update" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="">Title Team</label>
                                        <input type="hidden" name="id" value="{{ $team->id }}" class="form-control">
                                        <input type="text" name="title_main_two" class="form-control"
                                            value="{{ $team->title_main_two }}" placeholder="Isi nama club" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Sub Title Team</label>
                                        <input type="text" name="desc_main_two" class="form-control"
                                            value="{{ $team->desc_main_two }}" placeholder="Sub Title Team" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Photo Team</label><br>
                                        <label for=""><a
                                                href="{{ asset('image/team/' . $team->image_main_two . '') }}"><img
                                                    style="max-width: 250px"
                                                    src="{{ asset('image/team/' . $team->image_main_two . '') }}"></a></label>
                                        <input type="file" name="image_main_two" class="form-control"
                                            value="{{ $team->image_main_two }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Description Team</label>
                                        {{-- <input type="text" name="text_main_two" class="form-control" value="" placeholder="Isi nama club" required> --}}
                                        <textarea id="editor1" name="text_main_two" rows="10" cols="80">
                                                                {!! $team->text_main_two !!}
                                                            </textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" value="Simpan" class="btn btn-success">
                                        <a href="/team-cms" class="btn btn-danger">Cancel</a>

                                    </div>
                                </form>
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
