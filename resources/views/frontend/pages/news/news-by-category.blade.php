<!DOCTYPE html>
<html lang="en-US">

<head>
    @include('frontend.pages.news.includes.meta')

    @include('frontend.pages.news.includes.style')
    @include('frontend.layouts.includes.style')
</head>

<body
    class="archive category category-animation category-36 wp-theme-ewebot wp-child-theme-ewebot-child theme-ewebot woocommerce-no-js woo-variation-swatches wvs-behavior-blur wvs-theme-ewebot-child wvs-show-label wvs-tooltip gt3_lenis_scroll gt3_enable_sticky_sidebar elementor-default elementor-kit-7"
    data-theme-color="#6254e7">

    {{-- Header --}}
    <div data-elementor-type="wpda-header" data-elementor-id="7813"
        class="elementor elementor-7813 wpda-builder-page-7813 wpda-builder wpda-header-builder header_over_bg header_over_bg_tablet header_over_bg_mobile">
        @include('frontend.layouts.includes.header')
    </div>
    <div class="gt3-page-title_wrapper">
        <div class='gt3-page-title gt3-page-title_horiz_align_center gt3-page-title_vert_align_middle gt3-page-title_has_img_bg'
            style="background-color:#423bb6;height:261px;color:#ffffff;margin-bottom:80px;background-image:url(/frontend/assets/img/bannerNew.png);background-size:cover;background-repeat:no-repeat;background-attachment:scroll;background-position:center center;">
            <div class='gt3-page-title__inner '>
                <div class='container'>
                    <div class='gt3-page-title__content'>
                        <div class='page_title'>
                            <h1>{{ $category->name }}</h1>
                        </div>
                        <div class='gt3_breadcrumb'>
                            <div class="breadcrumbs"><a href="{{ route('home') }}">Trang chủ</a><span
                                    class="gt3_pagination_delimiter"></span><span class="current">Danh mục
                                    "{{ $category->name }}"</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site_wrapper fadeOnLoad">
        <div class="main_wrapper">
            <div class="container">
                <div class="row sidebar_none">
                    <div class="content-container span12">
                        <section id='main_content'>
                            <div class="elementor-element elementor-element-gt3_blog_archive elementor-widget elementor-widget-gt3-core-blog"
                                data-id="gt3_blog_archive" data-element_type="widget"
                                data-widget_type="gt3-core-blog.default">
                                <div class="elementor-widget-container">
                                    <script type="application/json" id="settings--gt3_blog_archive">{"packery":false,"isotope_settings":{"layoutMode":"masonry"}}</script>
                                    <div class="gt3_module_blog items2  items_type1">
                                        <div class="spacing_beetween_items_30 isotope_blog_items isotope">

                                           

                                                @foreach ($allNewsCategory as $news)
                                                    <div
                                                        class="blog_post_preview isotope_item isotope-item element format-standard-image animation blog packery_blog_item_1  ">
                                                        <div class="item_wrapper">
                                                            <div class="blog_content">
                                                                <div class="blog_post_media"><a
                                                                        href="https://ewebotwp.com/amazing-natural-light-portraits-in-a-garage/"><img
                                                                            srcset="" src="{{ $news->image }}"
                                                                            sizes="(min-width: 1200px) 800px, (min-width: 992px) 500px, (min-width: 768px) 496px, (min-width: 600px) 384px, (min-width: 420px) 600px, (max-width: 600px) 420px"
                                                                            alt="AMAZING Natural Light Portraits in a Garage?" /></a>
                                                                </div>
                                                                <div class="gt3_page_title_cats"><span
                                                                        class="post_category"><a
                                                                            href="https://ewebotwp.com/category/animation/"
                                                                            rel="category tag">Animation</a> <a
                                                                            href="https://ewebotwp.com/category/blog/"
                                                                            rel="category tag">Blog</a></span></div>
                                                                <div class="listing_meta_wrap">
                                                                    <div class="listing_meta"><span
                                                                            class="post_date">{{ $news->posted_at->format('d-m-Y') }}</span><span
                                                                            class="post_category"><a
                                                                                href="https://ewebotwp.com/category/animation/"
                                                                                rel="category tag">{{ $news->category->name }}</a>
                                                                            <a href="https://ewebotwp.com/category/blog/"
                                                                                rel="category tag">Blog</a></span></div>
                                                                </div>
                                                                <h2 class="blogpost_title"><a
                                                                        href="https://ewebotwp.com/amazing-natural-light-portraits-in-a-garage/">
                                                                        {{ $news->title }}</a></h2>
                                                                <div class="blog_item_description">
                                                                    {{ \Illuminate\Support\Str::limit($news->short_description, 180) }}
                                                                </div>
                                                                <div class="clear post_clear"></div>
                                                                <div class="gt3_post_footer">
                                                                    <div class="gt3_module_button_list"><a
                                                                            href="https://ewebotwp.com/amazing-natural-light-portraits-in-a-garage/">Read
                                                                            More</a></div>
                                                                    <div class="blog_post_info">
                                                                        <!-- post share block -->
                                                                        <div class="post_share_block">
                                                                            <a href="javascript:void(0)"><span
                                                                                    class="sharing_title">Share</span></a>
                                                                            <div class="post_share_wrap">
                                                                                <ul>
                                                                                    <li class="post_share-facebook"><a
                                                                                            target="_blank"
                                                                                            href="https://www.facebook.com/share.php?u=https://ewebotwp.com/amazing-natural-light-portraits-in-a-garage/"
                                                                                            data-title="Facebook"><span
                                                                                                class="fa fa-facebook"></span></a>
                                                                                    </li>
                                                                                    <li class="post_share-twitter"><a
                                                                                            target="_blank"
                                                                                            href="https://twitter.com/intent/tweet?text=AMAZING%20Natural%20Light%20Portraits%20in%20a%20Garage?&#038;url=https://ewebotwp.com/amazing-natural-light-portraits-in-a-garage/"
                                                                                            data-title="Twitter"><span
                                                                                                class="fa fa-twitter"></span></a>
                                                                                    </li>
                                                                                    <li class="post_share-pinterest"><a
                                                                                            target="_blank"
                                                                                            href="https://pinterest.com/pin/create/button/?url=https://ewebotwp.com/amazing-natural-light-portraits-in-a-garage/&#038;media=https://ewebotwp.com/wp-content/uploads/2022/09/amazing_post.jpg"
                                                                                            data-elementor-open-lightbox="no"
                                                                                            data-title="Pinterest"><span
                                                                                                class="fa fa-pinterest"></span></a>
                                                                                    </li>
                                                                                    <li class="post_share-linkedin"><a
                                                                                            target="_blank"
                                                                                            href="https://www.linkedin.com/shareArticle?mini=true&#038;url=https://ewebotwp.com/amazing-natural-light-portraits-in-a-garage/&#038;title=AMAZING%20Natural%20Light%20Portraits%20in%20a%20Garage?&#038;source=Ewebot"
                                                                                            data-title="Linkedin"><span
                                                                                                class="fa fa-linkedin"></span></a>
                                                                                    </li>
                                                                                    <li class="post_share-mail"><a
                                                                                            target="_blank"
                                                                                            href="mailto:?subject=AMAZING+Natural+Light+Portraits+in+a+Garage%3F&body=https://ewebotwp.com/amazing-natural-light-portraits-in-a-garage/"
                                                                                            data-title="Email"><span
                                                                                                class="fa fa-envelope"></span></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <!-- //post share block -->
                                                                    </div>
                                                                    <div class="clear"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                 {{ $allNewsCategory->links('vendor.pagination.custom') }}
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>

        </div><!-- .main_wrapper -->
    </div><!-- .site_wrapper -->

    <div data-elementor-type="wpda-footer" data-elementor-id="7803"
        class="elementor elementor-7803 wpda-builder-page-7803 wpda-builder wpda-footer-builder">
        {{-- Footer --}}
        @include('frontend.layouts.includes.footer')
    </div>

    <div class="wpda-builder__burger_sidebar burger-id-9b6c8d8">
        <div class="wpda-builder__burger_sidebar-cover"></div>
        <div class="wpda-builder__burger_container">
            {{-- @include('frontend.pages.about.sidebar') --}}

        </div>
    </div>

    <div id="yith-quick-view-modal" class="yith-quick-view yith-modal">
        <div class="yith-quick-view-overlay"></div>
        <div id=""class="yith-wcqv-wrapper">
            <div class="yith-wcqv-main">
                <div class="yith-wcqv-head">
                    <a href="#" class="yith-quick-view-close">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </a>
                </div>
                <div id="yith-quick-view-content" class="yith-quick-view-content woocommerce single-product"></div>
            </div>
        </div>
    </div>

    <div class='back_to_top_container'><a href='javascript:void(0)' class='gt3_back2top' id='back_to_top'>Back
            to top</a></div>

    <div class="pswp" tabindex="-1" role="dialog" aria-modal="true" aria-hidden="true">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--zoom" aria-label="Zoom in/out"></button>
                    <button class="pswp__button pswp__button--fs" aria-label="Toggle fullscreen"></button>
                    <button class="pswp__button pswp__button--share" aria-label="Share"></button>
                    <button class="pswp__button pswp__button--close" aria-label="Close (Esc)"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>
                <button class="pswp__button pswp__button--arrow--left" aria-label="Previous (arrow left)"></button>
                <button class="pswp__button pswp__button--arrow--right" aria-label="Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div>
    @include('frontend.pages.news.includes.script')

</body>

</html>

