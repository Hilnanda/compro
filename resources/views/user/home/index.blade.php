@extends('user.app.app')
@section('content')
    <div id='wrap_all'>

        @include('user.layouts.header')

        <div id='main' class='all_colors' data-scroll-offset='88'>

            <div id='av_section_slider'
                class='avia-section main_color avia-section-default avia-no-shadow avia-full-stretch avia-bg-style-scroll  avia-builder-el-0  el_before_av_section  avia-builder-el-first  employer-slider av-minimum-height av-minimum-height-custom container_wrap fullsize'
                style='background-repeat: no-repeat; background-image: url({{ asset('image/'.$banner->banner_image.'') }}); background-attachment: scroll; background-position: center center; '
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
                                        <div class='avia_textblock  av_inherit_color' style='color:#003169; '
                                            itemprop="text">
                                            <h2><b>{{ $banner->banner_text1  }}</b></h2>
                                            <h1><b>{{ $banner->banner_text2  }}</b></h1>
                                            <h2><b>{{ $banner->banner_text3  }}</b></h2>
                                        </div>
                                    </section>
                                    <section class="av_textblock_section" itemscope="itemscope"
                                        itemtype="https://schema.org/CreativeWork">
                                        <div class='avia_textblock  av_inherit_color'
                                            style='font-size:16px; color:#003169; ' itemprop="text">
                                            <p><span style="font-weight: 400;">{{ $banner->banner_text4 }} </span></p>
                                        </div>
                                    </section>
                                </div>
                                <div class="flex_column av_two_fifth  flex_column_div av-zero-column-padding   avia-builder-el-5  el_after_av_three_fifth  avia-builder-el-last  "
                                    style='border-radius:0px; '>
                                    <section class="avia_codeblock_section avia_code_block_0" itemscope="itemscope"
                                        itemtype="https://schema.org/CreativeWork">
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
            <div id='av_section_slider'
                class='avia-section main_color avia-section-default avia-no-border-styling avia-bg-style-scroll  avia-builder-el-7  el_after_av_section  el_before_av_section  employer-slider av-minimum-height av-minimum-height-custom container_wrap fullsize'
                style='background-color: #335a87; background-color: #335a87; '>
                <div class='container' style='height:500px'>
                    <div class='template-page content  av-content-full alpha units'>
                        <div class='post-entry post-entry-type-page post-entry-9'>
                            <div class='entry-content-wrapper clearfix'>
                                <div class="flex_column av_three_fifth  flex_column_div av-zero-column-padding first  avia-builder-el-8  el_before_av_two_fifth  avia-builder-el-first  "
                                    style='border-radius:0px; '>
                                    <section class="av_textblock_section" itemscope="itemscope"
                                        itemtype="https://schema.org/CreativeWork">
                                        <div class='avia_textblock  av_inherit_color' style='color:#ffffff; '
                                            itemprop="text">
                                            <h1 class="avia-caption-title"></h1>
                                            <h2><b>Your Next</b></h2>
                                            <h1><b>Opportunity</b></h1>
                                            <h2><b>is One Click Away</b></h2>
                                        </div>
                                    </section>
                                    <section class="av_textblock_section" itemscope="itemscope"
                                        itemtype="https://schema.org/CreativeWork">
                                        <div class='avia_textblock ' style='font-size:16px; ' itemprop="text">
                                            <p><span style="font-weight: 400;">Search for the latest job openings in
                                                    John Clements&#8217; online recruitment platform. </span></p>
                                        </div>
                                    </section>
                                </div>
                                <div class="flex_column av_two_fifth  flex_column_div av-zero-column-padding   avia-builder-el-11  el_after_av_three_fifth  avia-builder-el-last  "
                                    style='border-radius:0px; '>
                                    <section class="avia_codeblock_section avia_code_block_1" itemscope="itemscope"
                                        itemtype="https://schema.org/CreativeWork">
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
                    </div>
                </div>
            </div>
            <div id='comm-join'
                class='avia-section main_color avia-section-small avia-no-border-styling avia-bg-style-scroll  avia-builder-el-13  el_after_av_section  el_before_av_layout_row   container_wrap fullsize'
                style='background-color: #003169; background-color: #003169; '>
                <div class='container'>
                    <div class='template-page content  av-content-full alpha units'>
                        <div class='post-entry post-entry-type-page post-entry-9'>
                            <div class='entry-content-wrapper clearfix'>
                                <div class="flex_column av_two_third  flex_column_div av-zero-column-padding first  avia-builder-el-14  el_before_av_one_third  avia-builder-el-first  comm-join "
                                    style='border-radius:0px; '>
                                    <section class="av_textblock_section" itemscope="itemscope"
                                        itemtype="https://schema.org/CreativeWork">
                                        <div class='avia_textblock comm-join av_inherit_color' style='color:#ffffff; '
                                            itemprop="text">
                                            <p>{{ $banner->banner_text5 }}</p>
                                        </div>
                                    </section>
                                </div>


                            </div>
                        </div>
                    </div><!-- close content main div -->
                </div>
            </div>
            @foreach ($content as $item)
            @if ($loop->index + 1 %2 != 2)
            <div id='sa-half-image'
                class='av-layout-grid-container entry-content-wrapper main_color av-flex-cells  avia-builder-el-18  el_after_av_section  el_before_av_layout_row  employer-half-image submenu-not-first container_wrap fullsize'>
                <div class="flex_cell no_margin av_one_half  avia-builder-el-19  el_before_av_cell_one_half  avia-builder-el-first  home-half-left  "
                    style='vertical-align:middle; padding:30px; '>
                    <div class='flex_cell_inner'>
                        <div class="flex_column av_one_fifth  flex_column_div av-zero-column-padding first  avia-builder-el-20  el_before_av_three_fourth  avia-builder-el-first  "
                            style='border-radius:0px; '></div>
                        <div class="flex_column av_three_fourth  flex_column_div av-zero-column-padding   avia-builder-el-21  el_after_av_one_fifth  avia-builder-el-last  "
                            style='border-radius:0px; '>
                            <section class="av_textblock_section" itemscope="itemscope"
                                itemtype="https://schema.org/CreativeWork">
                                <div class='avia_textblock  av_inherit_color' style='color:#edae44; ' itemprop="text">
                                    <h3><b>{{ $item->title_main_one }}</b></h3>
                                </div>
                            </section>
                            <section class="av_textblock_section" itemscope="itemscope"
                                itemtype="https://schema.org/CreativeWork">
                                <div class='avia_textblock ' style='font-size:15px; ' itemprop="text">
                                    <p><span style="font-weight: 400;">{!! $item->text_main_one !!}</span></p>
                                </div>
                            </section>
                            <div
                                class='avia-button-wrap avia-button-left  avia-builder-el-24  el_after_av_textblock  el_before_av_button  c444444btn'>
                                <a href='home/recruitment-services-pioneer/index.html'
                                    class='avia-button  avia-icon_select-no avia-color-custom avia-size-small avia-position-left '
                                    style='background-color:#444444; border-color:#444444; color:#444444; '><span
                                        class='avia_iconbox_title'>VIEW OUR HERITAGE</span></a>
                            </div>
                            <div
                                class='avia-button-wrap avia-button-left  avia-builder-el-25  el_after_av_button  avia-builder-el-last  c444444btn'>
                                <a href='case-studies/index.html'
                                    class='avia-button  avia-icon_select-no avia-color-custom avia-size-small avia-position-left '
                                    style='background-color:#444444; border-color:#444444; color:#444444; '><span
                                        class='avia_iconbox_title'>VIEW CASE STUDIES</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex_cell no_margin av_one_half  avia-builder-el-26  el_after_av_cell_one_half  avia-builder-el-last  home-half-pic  "
                    style='background-image:url({{ asset('image/content/' . $item->image_main_one . '') }}); background-position:center center; background-repeat:no-repeat; background-attachment:scroll; vertical-align:middle; padding:30px; '>
                    <div class='flex_cell_inner'>
                    </div>
                </div>
            </div>
            @else    
            <div id='sa-half-image'
                class='av-layout-grid-container entry-content-wrapper main_color av-flex-cells  avia-builder-el-27  el_after_av_layout_row  el_before_av_layout_row  employer-half-image submenu-not-first container_wrap fullsize'>
                <div class="flex_cell no_margin av_one_half  avia-builder-el-28  el_before_av_cell_one_half  avia-builder-el-first  home-half-pic  "
                    style='background-image:url({{ asset('image/content/' . $item->image_main_one . '') }}); background-position:center center; background-repeat:no-repeat; background-attachment:scroll; vertical-align:top; padding:30px; '>
                    <div class='flex_cell_inner'>
                    </div>
                </div>
                <div class="flex_cell no_margin av_one_half  avia-builder-el-29  el_after_av_cell_one_half  avia-builder-el-last    "
                    style='vertical-align:middle; padding:30px; '>
                    <div class='flex_cell_inner'>
                        <div class="flex_column av_three_fourth  flex_column_div av-zero-column-padding first  avia-builder-el-30  el_before_av_one_fifth  avia-builder-el-first  "
                            style='border-radius:0px; '>
                            <section class="av_textblock_section" itemscope="itemscope"
                                itemtype="https://schema.org/CreativeWork">
                                <div class='avia_textblock  av_inherit_color' style='color:#edae44; ' itemprop="text">
                                    <h3><b>{{ $item->title_main_one }}</b></h3>
                                </div>
                            </section>
                            <section class="av_textblock_section" itemscope="itemscope"
                                itemtype="https://schema.org/CreativeWork">
                                <div class='avia_textblock ' style='font-size:15px; ' itemprop="text">
                                    <p><span style="font-weight: 400;">{!! $item->text_main_one !!}</span></p>
                                </div>
                            </section>
                            <div
                                class='avia-button-wrap avia-button-left  avia-builder-el-33  el_after_av_textblock  el_before_av_button  c444444btn'>
                                <a href='https://careers.johnclements.com/careers/SearchJobs/'
                                    class='avia-button  avia-icon_select-no avia-color-custom avia-size-small avia-position-left '
                                    target="_blank"
                                    style='background-color:#444444; border-color:#444444; color:#444444; '><span
                                        class='avia_iconbox_title'>SEARCH JOBS</span></a>
                            </div>
                            <div
                                class='avia-button-wrap avia-button-left  avia-builder-el-34  el_after_av_button  avia-builder-el-last  c444444btn'>
                                <a href='client-solutions/index.html'
                                    class='avia-button  avia-icon_select-no avia-color-custom avia-size-small avia-position-left '
                                    style='background-color:#444444; border-color:#444444; color:#444444; '><span
                                        class='avia_iconbox_title'>FIND A SOLUTION </span></a>
                            </div>
                        </div>
                        <div class="flex_column av_one_fifth  flex_column_div av-zero-column-padding   avia-builder-el-35  el_after_av_three_fourth  avia-builder-el-last  "
                            style='border-radius:0px; '></div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
            
            <div id='home-solutions' style="margin-top: 50px"
                class='avia-section alternate_color avia-section-default avia-no-shadow avia-bg-style-scroll  avia-builder-el-45  el_after_av_layout_row  el_before_av_section  employer-icons container_wrap fullsize'>
                <div class='container'>
                    <div class='template-page content  av-content-full alpha units'>
                        <div class='post-entry post-entry-type-page post-entry-9'>
                            <div class='entry-content-wrapper clearfix'>
                                <section class="av_textblock_section" itemscope="itemscope"
                                    itemtype="https://schema.org/CreativeWork">
                                    <div class='avia_textblock ' itemprop="text">
                                        <h1 style="text-align: center;">OUR TEAM</h1>
                                        <p style="text-align: center;"><span data-sheets-value="{"
                                                data-sheets-userformat="{">Text Title Main 2</span></p>
                                    </div>
                                </section>
                                <div style='height:20px'
                                    class='hr hr-invisible  avia-builder-el-47  el_after_av_textblock  el_before_av_two_fifth  '>
                                    <span class='hr-inner '><span class='hr-inner-style'></span></span>
                                </div>

                                @foreach ($team as $item)
                                    
                                
                                <div class="flex_column av_two_fifth  flex_column_div av-zero-column-padding first  avia-builder-el-48  el_after_av_hr  el_before_av_three_fifth  "
                                    style='border-radius:0px; '>
                                    <div class='avia-image-container avia_animated_image avia_animate_when_almost_visible pop-up av-styling-no-styling   avia-builder-el-49  avia-builder-el-no-sibling   avia-align-center '
                                        itemscope="itemscope" itemtype="https://schema.org/ImageObject">
                                        <div class='avia-image-container-inner'><img class='avia_image '
                                                src='{{ asset('image/team/' . $item->image_main_two . '') }}' alt='' title='essdh'
                                                itemprop="contentURL" /></div>
                                    </div>
                                </div>
                                <div class="flex_column av_three_fifth  flex_column_div av-zero-column-padding   avia-builder-el-50  el_after_av_two_fifth  el_before_av_hr  "
                                    style='border-radius:0px; '>
                                    <section class="av_textblock_section" itemscope="itemscope"
                                        itemtype="https://schema.org/CreativeWork">
                                        <div class='avia_textblock ' itemprop="text">
                                            <h3 style="text-align: left;">{{ $item->title_main_two }}</h3>
                                            <h5 style="text-align: left;"><em>{{ $item->desc_main_two }}</em></h5>
                                            <p style="text-align: left;">{!! $item->text_main_two !!}</p>
                                            <div lang="EN-PH" style="text-align: left;"></div>
                                        </div>
                                    </section>
                                    <div
                                        class='avia-button-wrap avia-button-left  avia-builder-el-52  el_after_av_textblock  avia-builder-el-last  c444444btn'>
                                        <a href='employers/executive-search/index.html'
                                            class='avia-button  avia-icon_select-no avia-color-custom avia-size-small avia-position-left '
                                            style='background-color:#444444; border-color:#444444; color:#444444; '><span
                                                class='avia_iconbox_title'>LEARN MORE</span></a>
                                    </div>
                                </div>
                                <div style='height:40px'
                                    class='hr hr-invisible  avia-builder-el-53  el_after_av_three_fifth  el_before_av_two_fifth  '>
                                    <span class='hr-inner '><span class='hr-inner-style'></span></span>
                                </div>
                                @endforeach

                                

                            </div>
                        </div>
                    </div><!-- close content main div -->
                </div>
            </div>
            <div id='home-careerguide'
                class='avia-section main_color avia-section-default avia-no-border-styling av-parallax-section av-section-color-overlay-active avia-bg-style-parallax  avia-builder-el-77  el_after_av_section  el_before_av_section  employer-gotocareer av-minimum-height av-minimum-height-custom container_wrap fullsize'
                data-section-bg-repeat='no-repeat'>
                <div class='av-parallax' data-avia-parallax-ratio='0.3'>
                    <div class='av-parallax-inner main_color  avia-full-stretch'
                        style='background-repeat: no-repeat; background-image: url(http://www.johnclements.com/wp-content/uploads/2017/01/94803684-1500x630.jpg); background-attachment: scroll; background-position: center center; '>
                    </div>
                </div>

            </div>
            <div id='essd-icons'
                class='avia-section alternate_color avia-section-default avia-no-shadow avia-bg-style-scroll  avia-builder-el-80  el_after_av_section  el_before_av_codeblock  employer-icons container_wrap fullsize'>
                <div class='container'>
                    <div class='template-page content  av-content-full alpha units'>
                        <div class='post-entry post-entry-type-page post-entry-9'>
                            <div class='entry-content-wrapper clearfix'>
                                <div class="flex_column av_one_third  flex_column_div av-zero-column-padding first  avia-builder-el-81  el_before_av_one_third  avia-builder-el-first  "
                                    style='border-radius:0px; '></div>
                                <div class="flex_column av_one_third  flex_column_div av-zero-column-padding   avia-builder-el-82  el_after_av_one_third  el_before_av_one_third  "
                                    style='border-radius:0px; '>
                                    <div class='avia-image-container  av-styling-   avia-builder-el-83  avia-builder-el-no-sibling   avia-align-center '
                                        itemscope="itemscope" itemtype="https://schema.org/ImageObject">
                                        <div class='avia-image-container-inner'><a
                                                href='https://medium.com/the-looking-glass' class='avia_image'
                                                target="_blank"><h1>NEWS</h1></a></div>
                                    </div>
                                </div>
                                <div class="flex_column av_one_third  flex_column_div av-zero-column-padding   avia-builder-el-84  el_after_av_one_third  el_before_av_textblock  "
                                    style='border-radius:0px; '></div>
                                <section class="av_textblock_section" itemscope="itemscope"
                                    itemtype="https://schema.org/CreativeWork">
                                    <div class='avia_textblock ' itemprop="text">
                                        <p style="text-align: center;">
                                            {{-- title news --}}
                                        </p>
                                    </div>
                                </section>
                                <div style='height:20px'
                                    class='hr hr-invisible  avia-builder-el-86  el_after_av_textblock  el_before_av_one_third  '>
                                    <span class='hr-inner '><span class='hr-inner-style'></span></span>
                                </div>
                                @foreach ($news as $item)
                                <div class="flex_column av_one_third  flex_column_div av-zero-column-padding {{ ($loop->index + 1 == 1) ? 'first  avia-builder-el-87  el_after_av_hr  el_before_av_one_third' : 'avia-builder-el-92  el_after_av_one_third  el_before_av_one_third' }}   "
                                    style='border-radius:0px; '>
                                    <div class='avia-image-container avia_animated_image avia_animate_when_almost_visible bottom-to-top av-styling- av-hover-grow  avia-builder-el-88  el_before_av_textblock  avia-builder-el-first   avia-align-center '
                                        itemscope="itemscope" itemtype="">
                                        <div class='avia-image-container-inner'><a
                                                href='news/detail/{{ $item->id }}'
                                                class='avia_image' ><img class='avia_image '
                                                    src='{{ asset('image/news/' . $item->image_news . '') }}' alt=''
                                                    title='' itemprop="contentURL" /></a>
                                        </div>
                                    </div>
                                    <section class="av_textblock_section" itemscope="itemscope"
                                        itemtype="">
                                        <div class='avia_textblock ' itemprop="text">
                                            <h5 id="071f" class="graf graf--h3 graf--leading graf--title">{{ $item->title_news }}</h5>
                                        </div>
                                    </section>
                                    <div style='height:5px'
                                        class='hr hr-invisible  avia-builder-el-90  el_after_av_textblock  el_before_av_button  '>
                                        <span class='hr-inner '><span class='hr-inner-style'></span></span>
                                    </div>
                                    <div
                                        class='avia-button-wrap avia-button-left  avia-builder-el-91  el_after_av_hr  avia-builder-el-last  c444444btn'>
                                        <a href='news/detail/{{ $item->id }}'
                                            class='avia-button  avia-icon_select-no avia-color-custom avia-size-small avia-position-left '
                                            
                                            style='background-color:#444444; border-color:#444444; color:#444444; '><span
                                                class='avia_iconbox_title'>READ MORE</span></a>
                                    </div>
                                </div>
                                @endforeach
                                
                                <div style='height:20px'
                                    class='hr hr-invisible  avia-builder-el-102  el_after_av_one_third  el_before_av_one_full  '>
                                    <span class='hr-inner '><span class='hr-inner-style'></span></span>
                                </div>
                                
                            </div>
                        </div>
                    </div><!-- close content main div -->
                </div>
            </div>
            <div id='after_section_6' class='main_color av_default_container_wrap container_wrap fullsize'>
                <div class='container'>
                    <div class='template-page content  av-content-full alpha units'>
                        <div class='post-entry post-entry-type-page post-entry-9'>
                            <div class='entry-content-wrapper clearfix'>
                                <section class="avia_codeblock_section avia_code_block_3" itemscope="itemscope"
                                    itemtype="https://schema.org/CreativeWork">
                                    <div class='avia_codeblock codeblock-testi' itemprop="text">
                                        <div>
                                            <div>
                                                <div>
                                                    <div>
                                                        <div></div>
                                                    </div>
                                                </div><!-- close content main div -->
                                            </div>
                                        </div>
                                        <div id='full_slider_1'
                                            class='avia-fullwidth-slider main_color avia-shadow  testimonial-slider container_wrap fullsize'>
                                            <div data-size='featured_large' data-lightbox_size='large'
                                                data-animation='slide' data-ids='2150,2151,1806,1805' data-video_counter='0'
                                                data-autoplay='false' data-bg_slider='false' data-slide_height=''
                                                data-handle='av_slideshow_full' data-interval='5' data-class=' '
                                                data-css_id='' data-scroll_down='' data-control_layout='av-control-minimal'
                                                data-custom_markup='' data-perma_caption='' data-autoplay_stopper=''
                                                data-image_attachment='' data-src='' data-position='top left'
                                                data-repeat='no-repeat' data-attach='scroll' data-stretch=''
                                                data-default-height='42'
                                                class='avia-slideshow avia-slideshow-1  av-control-minimal av-default-height-applied avia-slideshow-featured_large av_slideshow_full   avia-slide-slider '
                                                itemscope="itemscope" itemtype="https://schema.org/ImageObject">
                                                <ul class='avia-slideshow-inner' style='padding-bottom: 34.6666666667%;'>
                                                    @foreach ($carousel as $item)
                                                    <li class=' slide-{{ $loop->index + 1 }} '>
                                                        <div data-rel='slideshow-{{ $loop->index + 1 }}' class='avia-slide-wrap'>
                                                            <div
                                                                class="caption_fullwidth av-slideshow-caption {{ ($loop->index + 1 %2 != 2) ? 'caption_right' : 'caption_left' }}">
                                                                <div class="container caption_container">
                                                                    <div class="slideshow_caption">
                                                                        <div class="slideshow_inner_caption">
                                                                            <div class="slideshow_align_caption">
                                                                                <div class='avia-caption-content '
                                                                                    itemprop="description">
                                                                                    <section class="av_textblock_section"
                                                                                        itemscope="itemscope"
                                                                                        itemtype="https://schema.org/CreativeWork">
                                                                                        <div class='avia_textblock ' 
                                                                                            itemprop="text">
                                                                                            <blockquote>
                                                                                                <p >{!! $item->desc_carousel !!}
                                                                                                </p>
                                                                                            </blockquote>
                                                                                        </div>
                                                                                    </section>
                                                                                    <section class="av_textblock_section"
                                                                                        itemscope="itemscope">
                                                                                        <div class='avia_textblock  av_inherit_color'
                                                                                            style='color:#161616; '
                                                                                            itemprop="text">
                                                                                            <h3 style="text-align: center;">
                                                                                                {{ $item->title_carousel }}</h3>
                                                                                            <h4 style="text-align: center;">
                                                                                                {{ $item->text_title_carousel }}</h4>
                                                                                        </div>
                                                                                    </section>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><img src='wp-content/uploads/2017/02/jm-1500x520.jpg'
                                                                width='1500' height='520' title='jm' alt=''
                                                                itemprop="contentURL" />
                                                        </div>
                                                    </li>
                                                    @endforeach
                                                    
                                                </ul>
                                                <div class='avia-slideshow-arrows avia-slideshow-controls'><a href='#prev'
                                                        class='prev-slide' aria-hidden='true' data-av_icon=''
                                                        data-av_iconfont='entypo-fontello'>Previous</a><a href='#next'
                                                        class='next-slide' aria-hidden='true' data-av_icon=''
                                                        data-av_iconfont='entypo-fontello'>Next</a></div>
                                                <div class='avia-slideshow-dots avia-slideshow-controls'><a href='#1'
                                                        class='goto-slide active'>1</a><a href='#2'
                                                        class='goto-slide '>2</a><a href='#3' class='goto-slide '>3</a><a
                                                        href='#4' class='goto-slide '>4</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                </p>
                            </div>
                        </div>
                    </div><!-- close content main div -->
                </div>
            </div>
            <div id='home-contact-us-section'
                class='av-layout-grid-container entry-content-wrapper alternate_color av-flex-cells  avia-builder-el-107  el_after_av_codeblock  avia-builder-el-last   submenu-not-first container_wrap fullsize'>
                <div class="flex_cell no_margin av_two_fifth  avia-builder-el-108  el_before_av_cell_three_fifth  avia-builder-el-first  home-contactus  avia-full-stretch "
                    style='background-image:url(wp-content/uploads/2017/01/homecontact-2.jpg); background-position:center left; background-repeat:no-repeat; background-attachment:scroll; vertical-align:top; padding:30px; '>
                    <div class='flex_cell_inner'>
                        <section class="av_textblock_section" itemscope="itemscope"
                            itemtype="https://schema.org/CreativeWork">
                            <div class='avia_textblock  av_inherit_color' itemprop="text">
                                <h1 style="text-align: center;">CONTACT US</h1>
                            </div>
                        </section>
                        <div class="flex_column av_two_fifth  flex_column_div av-zero-column-padding first  avia-builder-el-110  el_after_av_textblock  el_before_av_three_fifth  column-top-margin"
                            style='border-radius:0px; '><span
                                class="av_font_icon avia_animate_when_visible av-icon-style-  av-no-color avia-icon-pos-right "
                                style=""><span class='av-icon-char' style='font-size:30px;line-height:30px;'
                                    aria-hidden='true' data-av_icon='' data-av_iconfont='entypo-fontello'></span></span>
                        </div>
                        <div class="flex_column av_three_fifth  flex_column_div av-zero-column-padding   avia-builder-el-112  el_after_av_two_fifth  el_before_av_two_fifth  column-top-margin"
                            style='border-radius:0px; '>
                            <section class="av_textblock_section" itemscope="itemscope"
                                itemtype="https://schema.org/CreativeWork">
                                <div class='avia_textblock home-contactus av_inherit_color' itemprop="text">
                                    <div class="contact-1">{!! $contact->alamat_contact_us !!}</div>
                                    
                                </div>
                            </section>
                        </div>
                        <div class="flex_column av_two_fifth  flex_column_div av-zero-column-padding first  avia-builder-el-114  el_after_av_three_fifth  el_before_av_three_fifth  "
                            style='border-radius:0px; '><span
                                class="av_font_icon avia_animate_when_visible av-icon-style-  av-no-color avia-icon-pos-right "
                                style=""><span class='av-icon-char' style='font-size:30px;line-height:30px;'
                                    aria-hidden='true' data-av_icon='' data-av_iconfont='entypo-fontello'></span></span>
                        </div>
                        <div class="flex_column av_three_fifth  flex_column_div av-zero-column-padding   avia-builder-el-116  el_after_av_two_fifth  el_before_av_two_fifth  "
                            style='border-radius:0px; '>
                            <section class="av_textblock_section" itemscope="itemscope"
                                itemtype="https://schema.org/CreativeWork">
                                <div class='avia_textblock home-contactus av_inherit_color' style='color:#ffffff; '
                                    itemprop="text">
                                    <div class="contact-1">{{ $contact->telepon_contact_us }}</div>
                                </div>
                            </section>
                        </div>
                        <div class="flex_column av_two_fifth  flex_column_div av-zero-column-padding first  avia-builder-el-118  el_after_av_three_fifth  el_before_av_three_fifth  "
                            style='border-radius:0px; '><span
                                class="av_font_icon avia_animate_when_visible av-icon-style-  av-no-color avia-icon-pos-right "
                                style=""><span class='av-icon-char' style='font-size:30px;line-height:30px;'
                                    aria-hidden='true' data-av_icon='' data-av_iconfont='entypo-fontello'></span></span>
                        </div>
                        <div class="flex_column av_three_fifth  flex_column_div av-zero-column-padding   avia-builder-el-120  el_after_av_two_fifth  el_before_av_hr  "
                            style='border-radius:0px; '>
                            <section class="av_textblock_section" itemscope="itemscope"
                                itemtype="https://schema.org/CreativeWork">
                                <div class='avia_textblock  av_inherit_color' style='color:#ffffff; ' itemprop="text">
                                    <div class="contact-1">{{ $contact->email_contact_us }}</div>
                                </div>
                            </section>
                        </div>
                        <div style='height:40px'
                            class='hr hr-invisible  avia-builder-el-122  el_after_av_three_fifth  el_before_av_textblock  '>
                            <span class='hr-inner '><span class='hr-inner-style'></span></span>
                        </div>
                        <section class="av_textblock_section" itemscope="itemscope"
                            itemtype="https://schema.org/CreativeWork">
                            <div class='avia_textblock  av_inherit_color' itemprop="text">
                                <h1 style="text-align: center;">FOLLOW US</h1>
                            </div>
                        </section>
                        <div style='height:20px'
                            class='hr hr-invisible  avia-builder-el-124  el_after_av_textblock  el_before_av_one_fifth  '>
                            <span class='hr-inner '><span class='hr-inner-style'></span></span>
                        </div>
                        <div class="flex_column av_one_fifth  flex_column_div av-zero-column-padding first  avia-builder-el-125  el_after_av_hr  el_before_av_one_fifth  "
                            style='border-radius:0px; '></div>
                        @foreach ($sosmed as $item)
                        <div class="flex_column av_one_fifth  flex_column_div av-zero-column-padding   avia-builder-el-126  el_after_av_one_fifth  el_before_av_one_fifth  "
                            style='border-radius:0px; '><span
                                class="av_font_icon avia_animate_when_visible av-icon-style-  av-no-color avia-icon-pos-center "
                                style=""><a href='{{ $item->url_medsos }}' target="_blank"
                                     style='font-size:30px;line-height:30px;' aria-hidden='true'
                                    >{!! $item->icon_medsos !!}</a></span>
                        </div>
                        @endforeach
                        
                        <div class="flex_column av_one_fifth  flex_column_div av-zero-column-padding   avia-builder-el-132  el_after_av_one_fifth  avia-builder-el-last  "
                            style='border-radius:0px; '></div>
                    </div>
                </div>
                <div class="flex_cell no_margin av_three_fifth  avia-builder-el-133  el_after_av_cell_two_fifth  avia-builder-el-last   "
                    style='vertical-align:top; padding:30px; background-color:#ffffff; '>
                    <div class='flex_cell_inner'>
                        <section class="avia_codeblock_section avia_code_block_4" itemscope="itemscope"
                            itemtype="https://schema.org/CreativeWork">
                            <div class='avia_codeblock ' itemprop="text">
                                <div role="form" class="wpcf7" id="wpcf7-f762-o2" lang="en-US" dir="ltr">
                                    <div class="screen-reader-response"></div>
                                    <form action="admin/message/create" method="POST">
                                        @csrf
                                        <fieldset>
                                            <h1>SEND US A MESSAGE</h1>
                                            <p class=' first_form  form_element form_element_half' id='element_avia_1_1'>
                                                <span class="wpcf7-form-control-wrap user_name"><input type="text"
                                                        name="nama_message" value="" size="40"
                                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                        aria-required="true" aria-invalid="false"
                                                        placeholder="Name *" /></span>
                                            </p>
                                            <p class=' form_element form_element_half' id='element_avia_2_1'>
                                                <span class="wpcf7-form-control-wrap email"><input type="email"
                                                        name="email_message" value="" size="40"
                                                        class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                        aria-required="true" aria-invalid="false"
                                                        placeholder="Email *" /></span>
                                            </p>
                                            <p class=' first_form  form_element form_fullwidth av-last-visible-form-element'
                                                id='element_avia_3_1'> <span
                                                    class="wpcf7-form-control-wrap message"><textarea name="text_message"
                                                        cols="40" rows="10"
                                                        class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                                                        aria-required="true" aria-invalid="false"
                                                        placeholder="Message *"></textarea></span></p>
                                            <input type="submit" value="SUBMIT"
                                                     /></p>
                                        </fieldset>
                                        
                                        <!-- Chimpmail extension by Renzo Johnson -->
                                    </form>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div>
                <div> </div>
                <!--end builder template-->
            </div><!-- close default .container_wrap element -->
            




            @include('user.layouts.footer')


            


            <!-- end main -->
        </div>

        <!-- end wrap_all -->
    </div>


@endsection
