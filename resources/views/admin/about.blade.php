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
                            <h1>Data About Us</h1>
                        </div>

                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        @if (count((array) $about) == 0)
                            <a style="margin-bottom: 20px" id="modal-515165" href="#modal-container-5151651" role="button"
                                class="btn btn-success form-control" data-toggle="modal">Add About Us</a>
                        @endif
                        <div class="modal fade" id="modal-container-5151651" role="dialog" aria-labelledby="myModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myModalLabel">
                                            Add About Us
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <form action="/admin/about-cms/create" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="modal-body">
                                            <div class="form-group">

                                                <div class="row">

                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <label for="name" class="control-label">About Us
                                                            Description*</label>
                                                        <textarea id="editor1" name="desc_about" rows="10" cols="80">
                                                                                                                </textarea><br>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <label for="name" class="control-label">Image About Us*</label>
                                                        <input type="file" class="form-control" name="image_about"
                                                            required><br>
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
                        @if (count((array) $about) != 0)
                        <div class="card">

                            <!-- /.card-header -->
                            <div class="card-body">
                                <div style="text-align: right">
                                    @if (count((array) $about) != 0)
                                        <a id="modal-515165" href="#modal-container-515165" role="button"
                                            class="btn btn-warning btn-sm" data-toggle="modal"><span
                                                class="font-weight-bold ml-1">Edit</span></a>
                                    @endif

                                </div>
                                <div class="form-group">
                                    <h4><b>Description About Us</b></h4>
                                    {!! isset($about->desc_about) ? $about->desc_about : '' !!}
                                </div>
                                <div class="form-group">
                                    <h4><b>Image About Us</b></h4>
                                    @if (isset($about->image_about))
                                        <a href="{{ asset('image/about/' . $about->image_about . '') }}"><img
                                                style="max-width: 250px;margin-bottom: 20px"
                                                src="{{ asset('image/about/' . $about->image_about . '') }}"></a><br>
                                    @endif


                                </div>

                                <div class="modal fade" id="modal-container-515165" role="dialog"
                                    aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="myModalLabel">
                                                    Edit About Us
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <form action="/about-cms/update" method="POST" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                <div class="modal-body">
                                                    <div class="form-group">

                                                        <div class="row">

                                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                                <label for="name" class="control-label">Description About Us</label>
                                                                <input type="hidden" name="id" value="{{ $about->id }}">
                                                                <textarea id="editor2" name="desc_about" rows="10"
                                                                    cols="80">
                                                                        {!! isset($about->desc_about) ? $about->desc_about : '' !!}
                                                                </textarea><br>

                                                                <br>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                                <label for="">Image About Us</label><br>
                                                                <label for="">
                                                                    @if (isset($about->image_about))
                                                                        <a
                                                                            href="{{ asset('image/about/' . $about->image_about . '') }}"><img
                                                                                style="max-width: 250px"
                                                                                src="{{ asset('image/about/' . $about->image_about . '') }}"></a>
                                                                </label>
                                                                <input type="file" name="image_about" class="form-control"
                                                                    value="{{ $about->image_about }}" >
                                                                <br>
                                                                @endif

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


                            </div>
                            <!-- /.card-body -->
                        </div>
                        @endif
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
