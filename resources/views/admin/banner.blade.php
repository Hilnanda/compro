@push('top-style')
    <style>
        input.transparent-input,input.file {
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
                            <h1>CMS Banner</h1>
                        </div>

                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <form action="/admin/banner/create" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <input type="file" name="banner_image" class="form-control file">
                            </div>
                            <div id='av_section_slider'
                                class='avia-section main_color avia-section-default avia-no-shadow avia-full-stretch avia-bg-style-scroll  avia-builder-el-0  el_before_av_section  avia-builder-el-first  employer-slider av-minimum-height av-minimum-height-custom container_wrap fullsize'
                                style='background-repeat: no-repeat; background-size: 100% ;background-image: url({{ asset('image/'.$banner->banner_image.'') }}); background-attachment: scroll; background-position: center center; '
                                data-section-bg-repeat='stretch'>
                                <div class='container' style='height:450px'>
                                    <main role="main" itemprop="mainContentOfPage"
                                        class='template-page content  av-content-full alpha units'>
                                        <div class='post-entry post-entry-type-page post-entry-9'>
                                            <div class='entry-content-wrapper clearfix'>
                                                <div class="flex_column av_three_fifth  flex_column_div av-zero-column-padding first  avia-builder-el-1  el_before_av_two_fifth  avia-builder-el-first  "
                                                    style='border-radius:0px; '>
                                                    <div style='height:200px'
                                                        class='hr hr-invisible  avia-builder-el-2  el_before_av_textblock  avia-builder-el-first  '>
                                                        <span class='hr-inner '><span class='hr-inner-style'></span></span>
                                                    </div>
                                                    <section class="av_textblock_section" itemscope="itemscope"
                                                        itemtype="https://schema.org/CreativeWork">
                                                        <div class='avia_textblock  av_inherit_color'
                                                            style='color:#003169; ' itemprop="text">
                                                            <div class="form-group">
                                                                <input type="hidden" name="id" value="{{ $banner->id }}" >
                                                                <input type="text" name="banner_text1" style="font-size: 20px"
                                                                    class="transparent-input" value="{{ $banner->banner_text1  }}" placeholder="Text 1 Banner">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" name="banner_text2" style="font-size: 30px"
                                                                    class="transparent-input" value="{{ $banner->banner_text2  }}" placeholder="Text 2 Banner">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" name="banner_text3" style="font-size: 40px"
                                                                    class="transparent-input" value="{{ $banner->banner_text3  }}" placeholder="Text 3 Banner">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" name="banner_text4" style="font-size: 20px"
                                                                    class="transparent-input" value="{{ $banner->banner_text4  }}" placeholder="Text 4 Banner">
                                                            </div>
                                                        </div>
                                                    </section>

                                                </div>
                                                <div class="flex_column av_two_fifth  flex_column_div av-zero-column-padding   avia-builder-el-5  el_after_av_three_fifth  avia-builder-el-last  "
                                                    style='border-radius:0px; '>
                                                    <section class="avia_codeblock_section avia_code_block_0"
                                                        itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
                                                        <div class='avia_codeblock ' itemprop="text">
                                                            <div id="jobsearch_widget">
                                                            </div>
                                                            <script>
                                                                document.querySelector("#jobsearch_widget form").setAttribute("target", "_blank");
                                                            </script>
                                                        </div>
                                                    </section>
                                                </div>

                                            </div>
                                        </div>
                                    </main><!-- close content main element -->
                                </div>
                            </div>
                            <div id='comm-join'
                                class='avia-section main_color avia-section-small avia-no-border-styling avia-bg-style-scroll  avia-builder-el-13  el_after_av_section  el_before_av_layout_row   container_wrap fullsize'
                                style='background-color: #ffffff; background-color: #ffffff;padding: 10px'>
                                <div class='container'>
                                    <div class='template-page content  av-content-full alpha units'>
                                        <div class='post-entry post-entry-type-page post-entry-9'>
                                            <div class='entry-content-wrapper clearfix'>
                                                <div class="flex_column av_two_third  flex_column_div av-zero-column-padding first  avia-builder-el-14  el_before_av_one_third  avia-builder-el-first  comm-join "
                                                    style='border-radius:0px; '>
                                                    <section class="av_textblock_section" itemscope="itemscope"
                                                        itemtype="https://schema.org/CreativeWork">
                                                        <div class='avia_textblock comm-join av_inherit_color'
                                                            style='color:#ffffff; ' itemprop="text">
                                                            <div class="form-group">
                                                                <input type="text" name="banner_text5" value="{{ $banner->banner_text5  }}" style="font-size: 20px;background-color:white; "
                                                                    class="transparent-input white"
                                                                    placeholder="Text 5 Banner">
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>

                                            </div>
                                        </div>
                                    </div><!-- close content main div -->
                                </div>
                            </div>
                            <div class="form-group" style="text-align: right; margin-top: 20px">
                                <input type="submit" value="Save" class="btn btn-success" >
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->










        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>DataTables</h1>
                        </div>

                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Data Banner</h3>
                            </div>
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

    <!-- DataTables -->
    <script src="{{ url('../../plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ url('../../plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
    <!-- ./wrapper -->
    <script>
        $(function() {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
            });
        });
    </script>
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
                'searching': false,
                'ordering': true,
                'info': true,
                'autoWidth': false
            })
        })
    </script>
@endpush
