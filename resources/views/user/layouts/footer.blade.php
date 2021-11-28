<div class='container_wrap footer_color' id='footer'>

    <div class='container'>

        <div class='flex_column av_one_fourth  first el_before_av_one_fourth'>
            <section id="sow-editor-2" class="widget clearfix widget_sow-editor">
                <div class="so-widget-sow-editor so-widget-sow-editor-base">
                    <h3 class="widgettitle">{{ $footer->title_footer }}</h3>
                    <div class="siteorigin-widget-tinymce textwidget">
                        <p><span class="title_text">{!! $footer->desc_footer !!}</span></p>
                        <p><img class="jcfooterlogo alignnone wp-image-377" src="{{ asset('image/footer/' . $footer->image_footer . '') }}"
                                width="210" height="36" /></p>
                    </div>
                </div><span class="seperator extralight-border"></span>
            </section>
        </div>

        <div class='flex_column av_one_fourth  el_after_av_one_fourth  el_before_av_one_fourth '>
            
        </div>

        <div class='flex_column av_one_fourth  el_after_av_one_fourth  el_before_av_one_fourth '>
            <section id="nav_menu-2" class="widget clearfix widget_nav_menu">
                <h3 class="widgettitle">MENU</h3>
                <div class="menu-footer-2-menu-container">
                    <ul id="menu-footer-2-menu" class="menu">
                        <li id="menu-item-158"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-9 current_page_item menu-item-158">
                            <a href="/">Home</a>
                        </li>
                        <li id="menu-item-544"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-544">
                            <a href="{{ route('about_us') }}">About Us</a>
                        </li>
                        <li id="menu-item-157"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-157">
                            <a href="client-solutions/index.html">Team</a>
                        </li>
                        <li id="menu-item-1900"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1900">
                            <a href="{{ route('service') }}">Services</a>
                        </li>
                        <li id="menu-item-543"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-543">
                            <a href="{{ route('contact_us') }}">Contact Us</a>
                        </li>
                        <li id="menu-item-2305"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2305">
                            <a href="{{ route('news') }}">News</a>
                        </li>
                        
                    </ul>
                </div><span class="seperator extralight-border"></span>
            </section>
        </div>
        
        

    </div>


    <!-- ####### END FOOTER CONTAINER ####### -->
</div>

<footer class='container_wrap socket_color' id='socket' role="contentinfo" itemscope="itemscope"
    itemtype="https://schema.org/WPFooter">
    <div class='container'>
        <span class='copyright'>{{ $copyright->title_copyright }}</span>

    </div>

    <!-- ####### END SOCKET CONTAINER ####### -->
</footer>
