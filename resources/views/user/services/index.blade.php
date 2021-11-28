@extends('user.app.app')
@section('content')

<div id='wrap_all'>
@include('user.layouts.header')
<div id='main' class='all_colors' data-scroll-offset='88'>

    <div class='main_color container_wrap_first container_wrap fullsize'>
        <div class='container'>
            <main role="main" itemprop="mainContentOfPage" class='template-page content  av-content-full alpha units'>
                <div class='post-entry post-entry-type-page post-entry-3573'>
                    <div class='entry-content-wrapper clearfix'>
                        <div class="flex_column av_one_full  flex_column_div av-zero-column-padding first  avia-builder-el-0  avia-builder-el-no-sibling  "
                            style='border-radius:0px; '>
                            <div class='avia-image-container  av-styling-   avia-builder-el-1  el_before_av_hr  avia-builder-el-first   avia-align-center '
                                itemscope="itemscope" itemtype="https://schema.org/ImageObject">
                                <div class='avia-image-container-inner'><img class='avia_image '
                                        src='{{ asset('image/about/' . $about->image_about . '') }}' alt='' title='IGS 32'
                                        itemprop="contentURL" /></div>
                            </div>
                            <div class='hr hr-default  avia-builder-el-2  el_after_av_image  el_before_av_textblock '>
                                <span class='hr-inner '><span class='hr-inner-style'></span></span></div>
                            <section class="av_textblock_section" itemscope="itemscope"
                                itemtype="">
                                <div class='avia_textblock ' itemprop="text">
                                    {{-- <h3 style="text-align: center;">Institution for a Global Society (IGS)</h3> --}}
                                    <p style="text-align: center;">
                                        {!! isset($service->desc_service) ? $service->desc_service : '' !!}
                                    </p>
                                </div>
                            </section>
                        </div>
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