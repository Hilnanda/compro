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
                            <h1>Edit Data Carousel</h1>
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
                                <form action="/admin/carousel/update" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="">Title Carousel</label>
                                        <input type="hidden" name="id" value="{{ $carousel->id }}" class="form-control">
                                        <input type="text" name="title_carousel" class="form-control"
                                            value="{{ $carousel->title_carousel }}" placeholder="Title Carousel" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Sub Title Carousel</label>
                                        <input type="text" name="text_title_carousel" class="form-control"
                                            value="{{ $carousel->text_title_carousel }}" placeholder="Sub Title Carousel" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Image Carousel</label><br>
                                        <label for=""><a
                                                href="{{ asset('image/carousel/' . $carousel->image_carousel . '') }}"><img
                                                    style="max-width: 250px"
                                                    src="{{ asset('image/carousel/' . $carousel->image_carousel . '') }}"></a></label>
                                        <input type="file" name="image_carousel" class="form-control"
                                            value="{{ $carousel->image_carousel }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Description Carousel</label>
                                        {{-- <input type="text" name="text_main_one" class="form-control" value="" placeholder="Isi nama club" required> --}}
                                        <textarea id="editor1" name="desc_carousel" rows="10" cols="80">
                                                        {!! $carousel->desc_carousel !!}
                                                    </textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" value="Simpan" class="btn btn-success">
                                        <a href="/carousel" class="btn btn-danger">Cancel</a>

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
