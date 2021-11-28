@extends('user.app.app')
@section('content')
    @include('user.layouts.header')
    <div id='main' class='all_colors' data-scroll-offset='88'>
        <div id='testimonial-main-slider'
            class='avia-section main_color avia-section-default avia-no-shadow av-section-color-overlay-active avia-bg-style-scroll  avia-builder-el-0  el_before_av_section  avia-builder-el-first  testimonial-main-slider container_wrap fullsize'
            style='background-repeat: no-repeat; background-image: url(http://www.johnclements.com/wp-content/uploads/2017/01/careerguide.jpg); background-attachment: scroll; background-position: center center; '
            data-section-bg-repeat='no-repeat'>
            <div class='av-section-color-overlay-wrap'>
                <div class='av-section-color-overlay' style='opacity: 0.5; background-color: #000000; '></div>
                <div class='container'>
                    <main role="main" itemprop="mainContentOfPage"
                        class='template-page content  av-content-full alpha units'>
                        <div class='post-entry post-entry-type-page post-entry-277'>
                            <div class='entry-content-wrapper clearfix'>
                                <div class="flex_column av_one_fifth  flex_column_div av-zero-column-padding first  avia-builder-el-1  el_before_av_three_fifth  avia-builder-el-first  "
                                    style='border-radius:0px; '></div>
                                <div class="flex_column av_three_fifth  flex_column_div av-zero-column-padding   avia-builder-el-2  el_after_av_one_fifth  el_before_av_one_fifth  "
                                    style='border-radius:0px; '>
                                    <section class="av_textblock_section" itemscope="itemscope"
                                        itemtype="https://schema.org/CreativeWork">
                                        <div class='avia_textblock ' itemprop="text">
                                            <h1 style="text-align: center;">NEWS</h1>
                                            <p style="text-align: center;">Need a better look at the industry you&#8217;re
                                                planning to enter? Why not check out our comprehensive industry guides?
                                                Compiled
                                                by our top experts in various industries, and sprinkled with bits of
                                                exclusive
                                                advice from some of our best clients, this is the essential, convenient and
                                                complete guide to the career you&#8217;ve always wanted.</p>
                                        </div>
                                    </section>
                                </div>
                                <div class="flex_column av_one_fifth  flex_column_div av-zero-column-padding   avia-builder-el-4  el_after_av_three_fifth  avia-builder-el-last  "
                                    style='border-radius:0px; '></div>

                            </div>
                        </div>
                    </main><!-- close content main element -->
                </div>
            </div>
        </div>
        <div id='career-guide'
            class='avia-section main_color avia-section-default avia-no-shadow avia-bg-style-scroll  avia-builder-el-5  el_after_av_section  avia-builder-el-last  employer-icons container_wrap fullsize'>
            <div class='container'>
                <div class='template-page content  av-content-full alpha units'>
                    <div class='post-entry post-entry-type-page post-entry-277'>
                        <div class='entry-content-wrapper clearfix'>
                            @foreach ($news as $item)
                            <div class="flex_column av_two_fifth  flex_column_div av-zero-column-padding first  avia-builder-el-6  el_before_av_three_fifth  avia-builder-el-first  "
                                style='border-radius:0px; '>
                                <div class='avia-image-container  av-styling-   avia-builder-el-7  avia-builder-el-no-sibling   avia-align-center '
                                    itemscope="itemscope" itemtype="https://schema.org/ImageObject">
                                    <div class='avia-image-container-inner'><img class='avia_image '
                                            src='{{ asset('image/news/' . $item->image_news . '') }}' alt='' title='FMCG-1'
                                            itemprop="contentURL" /></div>
                                </div>
                            </div>
                            <div class="flex_column av_three_fifth  flex_column_div av-zero-column-padding   avia-builder-el-8  el_after_av_two_fifth  el_before_av_hr  "
                                style='border-radius:0px; '>
                                <section class="av_textblock_section" itemscope="itemscope">
                                    <div class='avia_textblock ' itemprop="text">
                                        <h2 style="font-size: 20px">
                                            <a href="news/detail/{{ $item->id }}">{{ $item->title_news }}</a>
                                        </h2>
                                        <section class="av_textblock_section">
                                            <div class="avia_textblock ">
                                                <p>
                                                    @if (strlen($item->desc_news) < 200)
                                                        {!! $item->desc_news !!}
                                                    @else
                                                        {!! substr($item->desc_news, 0, 200) . '.....' !!}
                                                    @endif</p>
                                            </div>
                                        </section>
                                        <div
                                            class="avia-button-wrap avia-button-left avia-builder-el-86 el_after_av_textblock el_before_av_codeblock c444444btn">
                                        </div>
                                    </div>
                                </section>
                                <div
                                    class='avia-button-wrap avia-button-left  avia-builder-el-10  el_after_av_textblock  avia-builder-el-last  c444444btn'>
                                    <a href='news/detail/{{ $item->id }}'
                                        class='avia-button  avia-icon_select-no avia-color-custom avia-size-small avia-position-left '
                                        style='background-color:#444444; border-color:#444444; color:#444444; '><span
                                            class='avia_iconbox_title'>READ MORE</span></a>
                                </div>
                            </div>
                            <div style='height:40px'
                                class='hr hr-invisible  avia-builder-el-11  el_after_av_three_fifth  el_before_av_two_fifth  '>
                                <span class='hr-inner '><span class='hr-inner-style'></span></span>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div><!-- close content main div -->
                <!-- section close by builder template -->
            </div>
            <!--end builder template-->
        </div><!-- close default .container_wrap element -->
    </div>
    @include('user.layouts.footer')
@endsection
