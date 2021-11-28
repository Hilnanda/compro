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
                            <h1>Data Footer</h1>
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
                                <div style="text-align: right">
                                    <a id="modal-515165" href="#modal-container-515165" role="button"
                                        class="btn btn-warning btn-sm" data-toggle="modal"><span
                                            class="font-weight-bold ml-1">Edit</span></a>
                                </div>
                                <div class="form-group">
                                    <h4><b>Title Footer</b></h4>
                                    <p>{{ $footer->title_footer }}</p>
                                </div>
                                <div class="form-group">
                                    <h4><b>Description Footer</b></h4>
                                    {!! $footer->desc_footer !!}
                                </div>
                                @if ($footer->image_footer)
                                    <div class="form-group">
                                        <h4><b>Image Footer</b></h4>
                                        <a href="{{ asset('image/footer/' . $footer->image_footer . '') }}"><img
                                                style="max-width: 250px;margin-bottom: 20px"
                                                src="{{ asset('image/footer/' . $footer->image_footer . '') }}"></a><br>
                                        <a id="modal-515165" style="color: red"
                                            href="/admin/footer/delete/{{ $footer->id }}">
                                            <span class="font-weight-bold ml-1">
                                                <i class="fas fa-trash-alt"></i>
                                                Delete Image
                                            </span>
                                        </a>
                                    </div>
                                @endif

                                <div class="modal fade" id="modal-container-515165" role="dialog"
                                    aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="myModalLabel">
                                                    Edit Contact Us
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <form action="/footer/create" method="POST" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                <div class="modal-body">
                                                    <div class="form-group">

                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                                <label for="name" class="control-label">Title
                                                                    Footer</label>
                                                                <input type="text" class="form-control"
                                                                    name="title_footer"
                                                                    value="{{ $footer->title_footer }}">
                                                                <input type="hidden" name="id" value="{{ $footer->id }}">
                                                                <br>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                                <label for="name" class="control-label">Description
                                                                    Footer</label>
                                                                <textarea id="editor1" name="desc_footer" rows="10"
                                                                    cols="80">
                                                                            {{ $footer->desc_footer }}
                                                                        </textarea><br>

                                                                <br>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                                <label for="">Image Footer</label><br>
                                                                @if ($footer->image_footer)
                                                                    <label for=""><a
                                                                            href="{{ asset('image/footer/' . $footer->image_footer . '') }}"><img
                                                                                style="max-width: 250px"
                                                                                src="{{ asset('image/footer/' . $footer->image_footer . '') }}"></a></label>
                                                                @endif
                                                                <input type="file" name="image_footer"
                                                                    class="form-control"
                                                                    value="{{ $footer->image_footer }}" required>
                                                                <br>
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

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->





            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Data Copyright</h1>
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
                                <form action="/admin/copyright/create" method="POST">
                                    {{ csrf_field() }}
                                <div style="text-align: right">
                                    <input type="submit" value="Simpan" class="btn btn-success">
                                </div>
                                
                                    
                                    <div class="form-group">
                                        <h4><b>Title Footer</b></h4>
                                        <input type="text" value="{{ $copyright->title_copyright }}"
                                            class="form-control" name="title_copyright">
                                            <input type="hidden" name="id" value="{{ $copyright->id }}">
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
