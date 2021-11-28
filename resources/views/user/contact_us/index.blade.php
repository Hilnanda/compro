@extends('user.app.app')
@section('content')

    <div id='wrap_all'>
        @include('user.layouts.header')
        <div id='main' class='all_colors' data-scroll-offset='88'>
            <div id="googleMap" style="width:100%;height:500px;"></div>

            <div class='main_color container_wrap_first container_wrap fullsize'>
                <div class='container'>
                    <main role="main" itemprop="mainContentOfPage"
                        class='template-page content  av-content-full alpha units'>
                        <div class='post-entry post-entry-type-page post-entry-3573'>
                            <div class='entry-content-wrapper clearfix'>
                                <div class="flex_column av_one_full  flex_column_div av-zero-column-padding first  avia-builder-el-0  avia-builder-el-no-sibling  "
                                    style='border-radius:0px; '>
                                    <div class='avia-image-container  av-styling-   avia-builder-el-1  el_before_av_hr  avia-builder-el-first   avia-align-center '
                                        itemscope="itemscope" itemtype="https://schema.org/ImageObject">
                                        <div class='avia-image-container-inner'>
                                            <div class='avia-image-container-inner'>
                                                <h1>CONTACT US</h1></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="flex_column av_two_fifth  flex_column_div av-zero-column-padding first  avia-builder-el-110  el_after_av_textblock  el_before_av_three_fifth  column-top-margin"
                                                style='border-radius:0px; '>
                                                <span
                                                    class="av_font_icon avia_animate_when_visible av-icon-style-  av-no-color avia-icon-pos-right "
                                                    style="">
                                                    <span class='av-icon-char' style='font-size:30px;line-height:30px;'
                                                        aria-hidden='true' data-av_icon=''
                                                        data-av_iconfont='entypo-fontello'>
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="flex_column av_three_fifth  flex_column_div av-zero-column-padding   avia-builder-el-112  el_after_av_two_fifth  el_before_av_two_fifth  column-top-margin"
                                                style='border-radius:0px; '>
                                                <section class="av_textblock_section" itemscope="itemscope"
                                                    itemtype="https://schema.org/CreativeWork">
                                                    <div class='avia_textblock home-contactus av_inherit_color'
                                                        itemprop="text">
                                                        {{-- <div class="contact-1">The John Clements Hub</div> --}}
                                                        <div class="contact-1">{!! $contact->alamat_contact_us !!}</div>
                                                    </div>
                                                </section>
                                            </div>
                                            <div class="flex_column av_two_fifth  flex_column_div av-zero-column-padding first  avia-builder-el-114  el_after_av_three_fifth  el_before_av_three_fifth  "
                                                style='border-radius:0px; '><span
                                                    class="av_font_icon avia_animate_when_visible av-icon-style-  av-no-color avia-icon-pos-right "
                                                    style=""><span class='av-icon-char'
                                                        style='font-size:30px;line-height:30px;' aria-hidden='true'
                                                        data-av_icon='' data-av_iconfont='entypo-fontello'></span></span>
                                            </div>
                                            <div class="flex_column av_three_fifth  flex_column_div av-zero-column-padding   avia-builder-el-116  el_after_av_two_fifth  el_before_av_two_fifth  "
                                                style='border-radius:0px; '>
                                                <section class="av_textblock_section" itemscope="itemscope"
                                                    itemtype="https://schema.org/CreativeWork">
                                                    <div class='avia_textblock home-contactus av_inherit_color'
                                                        itemprop="text">
                                                        <div class="contact-1">8884-1227 | 8991-1400</div>
                                                    </div>
                                                </section>
                                            </div>
                                            <div class="flex_column av_two_fifth  flex_column_div av-zero-column-padding first  avia-builder-el-118  el_after_av_three_fifth  el_before_av_three_fifth  "
                                                style='border-radius:0px; '><span
                                                    class="av_font_icon avia_animate_when_visible av-icon-style-  av-no-color avia-icon-pos-right "
                                                    style=""><span class='av-icon-char'
                                                        style='font-size:30px;line-height:30px;' aria-hidden='true'
                                                        data-av_icon='' data-av_iconfont='entypo-fontello'></span></span>
                                            </div>
                                            <div class="flex_column av_three_fifth  flex_column_div av-zero-column-padding   avia-builder-el-120  el_after_av_two_fifth  el_before_av_hr  "
                                                style='border-radius:0px; '>
                                                <section class="av_textblock_section" itemscope="itemscope"
                                                    itemtype="https://schema.org/CreativeWork">
                                                    <div class='avia_textblock  av_inherit_color' itemprop="text">
                                                        <div class="contact-1">info@johnclements.com</div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>


                                        
                                        <div class="col-md-6">
                                            @foreach ($sosmed as $item)
                                                
                                            <a href="{{ $item->url_medsos }}" target="_blank">
                                            <div class="flex_column av_two_fifth  flex_column_div av-zero-column-padding first  avia-builder-el-110  el_after_av_textblock  el_before_av_three_fifth  column-top-margin"
                                                style='border-radius:0px;'>
                                                <span
                                                    class="av_font_icon avia_animate_when_visible av-icon-style-  av-no-color avia-icon-pos-right "
                                                    style="">
                                                    {!! $item->icon_medsos !!}
                                                </span>
                                            </div>
                                            <div class="flex_column av_three_fifth  flex_column_div av-zero-column-padding   avia-builder-el-112  el_after_av_two_fifth  el_before_av_two_fifth  column-top-margin"
                                                style='border-radius:0px; margin-bottom: 20px'>
                                                <section class="av_textblock_section" itemscope="itemscope"
                                                    itemtype="https://schema.org/CreativeWork">
                                                    <div class='avia_textblock home-contactus av_inherit_color'
                                                        itemprop="text">
                                                        <div style="margin-left: -20px">{{ $item->nama_medsos }}</div>
                                                        
                                                    </div>
                                                </section>
                                            </div>
                                            </a>
                                            @endforeach
                                        </div>
                                    </div>
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
