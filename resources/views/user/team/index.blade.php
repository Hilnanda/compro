@extends('user.app.app')
@section('content')

    <div id='wrap_all'>
        @include('user.layouts.header')

        <div id='main' class='all_colors' data-scroll-offset='88'>
            <div id='hbp-icons'
                class='avia-section main_color avia-section-default avia-no-shadow avia-bg-style-scroll  avia-builder-el-0  avia-builder-el-no-sibling  employer-4-column container_wrap fullsize'>
                <div class='container'>
                    <main role="main" itemprop="mainContentOfPage"
                        class='template-page content  av-content-full alpha units'>
                        <div class='post-entry post-entry-type-page post-entry-2608'>
                            <div class='entry-content-wrapper clearfix'>
                                <section class="av_textblock_section" itemscope="itemscope"
                                    itemtype="">
                                    <div class='avia_textblock hbp-icons' itemprop="text">
                                        <h1 style="text-align: center;">OUR TEAM</h1>
                                        <h3></h3>
                                    </div>
                                </section>
                                @foreach ($team as $item)
                                <div class="flex_column av_one_fifth  flex_column_div av-zero-column-padding first  avia-builder-el-2  el_after_av_textblock  el_before_av_four_fifth  column-top-margin"
                                    style='border-radius:0px; '>
                                    <div class='avia-image-container  av-styling-   avia-builder-el-3  avia-builder-el-no-sibling   avia-align-center '
                                        itemscope="itemscope" itemtype="">
                                        <div class='avia-image-container-inner'><img class='avia_image '
                                                src='{{ asset('image/team/' . $item->image_main_two . '') }}'
                                                alt='' title='Screen Shot 2017-03-28 at 5.36.02 PM' itemprop="contentURL" />
                                        </div>
                                    </div>
                                </div>
                                <div class="flex_column av_four_fifth  flex_column_div av-zero-column-padding   avia-builder-el-4  el_after_av_one_fifth  el_before_av_hr  column-top-margin"
                                    style='border-radius:0px; '>
                                    <section class="av_textblock_section" itemscope="itemscope"
                                        itemtype="https://schema.org/CreativeWork">
                                        <div class='avia_textblock hbp-icons' itemprop="text">
                                            <h3>{{ $item->title_main_two }}</h3>
                                            <h4>{{ $item->desc_main_two }}</h4>
                                            <div class="page" title="Page 9">
                                                <div class="layoutArea">
                                                    <div class="column">
                                                        <div class="page" title="Page 10">
                                                            <div class="layoutArea">
                                                                <div class="column">
                                                                    <div class="page" title="Page 10">
                                                                        <div class="layoutArea">
                                                                            <div class="column">
                                                                                <div class="page" title="Page 18">
                                                                                    <div class="layoutArea">
                                                                                        <div class="column">
                                                                                            <p>
                                                                                                {!! $item->text_main_two !!}
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="page" title="Page 1"></div>
                                        </div>
                                    </section>
                                </div>
                                <div style='height:40px'
                                    class='hr hr-invisible  avia-builder-el-6  el_after_av_four_fifth  el_before_av_one_fifth  '>
                                    <span class='hr-inner '><span class='hr-inner-style'></span></span>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </main><!-- close content main element -->
                    <!-- section close by builder template -->
                </div>
                <!--end builder template-->
            </div><!-- close default .container_wrap element -->

            <!-- end main -->
        </div>
        @include('user.layouts.footer')
    </div>
@endsection
