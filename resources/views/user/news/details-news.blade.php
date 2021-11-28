@extends('user.app.app')
@section('content')
    @include('user.layouts.header')
    <div id='main' class='all_colors' data-scroll-offset='88'>
        <div class='container_wrap container_wrap_first main_color sidebar_right'>

            <div class='container template-blog template-single-blog '>
                <main
                    class='content units av-content-small alpha  av-blog-meta-author-disabled av-blog-meta-comments-disabled'
                    role="main" itemscope="itemscope" itemtype="">
                    <article
                        class='post-entry post-entry-type-standard post-entry-2925 post-loop-1 post-parity-odd post-entry-last single-big with-slider post-2925 post type-post status-publish format-standard has-post-thumbnail hentry category-client-solutions category-harvard-business-publishing'
                        itemscope="itemscope" itemtype="" itemprop="blogPost">

                        <div class='blog-meta'></div>
                        <div class='entry-content-wrapper clearfix standard-content'>
                            <header class="entry-content-header">
                                <h1 class='post-title entry-title' itemprop="headline"> <a  rel='bookmark'
                                        >{{ $news->title_news }}
                                        <span class='post-format-icon minor-meta'></span> </a></h1><span
                                    class='post-meta-infos'><time
                                        class='date-container minor-meta updated'>{{ date('d F Y H:m', strtotime($news->created_at)) }}</time><span
                                        class='text-sep text-sep-date'></span><span class='comment-container minor-meta'>
                                    </span>
                            </header>
                            <div class="entry-content" itemprop="text">
                                <h3><img class="alignleft size-full wp-image-2929"
                                        src="{{ asset('image/news/' . $news->image_news . '') }}" alt="" width="940"
                                        height="788" sizes="(max-width: 940px) 100vw, 940px" /></h3>
                                <p>
                                    {!! $news->desc_news !!}
                                </p>

                            </div>

                        </div>
                        <div class='post_author_timeline'></div>

                    </article>
                    <div class='single-big'></div>

                    <!--end content-->
                </main>

                <aside class='sidebar sidebar_right smartphones_sidebar_active alpha units' role="complementary"
                    itemscope="itemscope" itemtype="">
                    <div class='inner_sidebar extralight-border'>
                        <section id="newsbox-2" class="widget clearfix newsbox">
                            <h3 class="widgettitle">Recent Posts</h3>
                            <ul class="news-wrap image_size_widget">
                                @foreach ($recent as $item)
                                    <li class="news-content post-format-image"><a class='news-link' title=''
                                            href='{{ $item->id }}'><span
                                                class='news-thumb no-news-thumb'>
                                                <img src="{{ asset('image/news/' . $item->image_news . '') }}" alt=""></span><strong
                                                class='news-headline'>{{ $item->title_news }}<span
                                                    class='news-time'>{{ date('d F Y H:m', strtotime($news->created_at)) }}</span></strong></a>
                                    </li>
                                @endforeach

                            </ul><span class="seperator extralight-border"></span>
                        </section>



                    </div>
                </aside>

            </div>
            <!--end container-->
        </div><!-- close default .container_wrap element -->
    </div>
    @include('user.layouts.footer')
@endsection
