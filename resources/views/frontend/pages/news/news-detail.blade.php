<!DOCTYPE html>
<html lang="en-US">

<head>
    @include('frontend.pages.about.meta')

    @include('frontend.pages.about.style')

</head>

<body
    class="wp-singular post-template-default single single-post postid-13143 single-format-standard wp-theme-ewebot wp-child-theme-ewebot-child theme-ewebot woocommerce-no-js woo-variation-swatches wvs-behavior-blur wvs-theme-ewebot-child wvs-show-label wvs-tooltip gt3_lenis_scroll gt3_enable_sticky_sidebar elementor-default elementor-kit-7 elementor-page elementor-page-13143 elementor-page"
    data-theme-color="#6254e7">


    <div data-elementor-type="wpda-header" data-elementor-id="4031"
        class="elementor elementor-4031 wpda-builder-page-4031 wpda-builder wpda-header-builder">
        @include('frontend.pages.about.header')


        {{-- Menu --}}
        @include('frontend.pages.about.menu')
    </div>
    <div class="site_wrapper fadeOnLoad">
        <div class="main_wrapper">

            <div class="container">
                <div class="single_blogpost_title_content">
                    <h1>{{ $news->title }}</h1>
                    <div class="post_block_info gt3_post_title_mata_block">
                        <div class="listing_meta_wrap">
                            <div class="listing_meta">
                                <span
                                    class="post_date">{{ \Carbon\Carbon::parse($news->posted_at)->format('d-m-Y') }}</span>
                                <span class="post_category">
                                    {{ $news->category->name }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row sidebar_right">
                    <div class="content-container span9">
                        <section id='main_content'>
                            <div class="blog_post_preview format-standard-image">
                                <div
                                    class="single_meta post-13143 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-planing category-web tag-seo tag-web">
                                    <div class="item_wrapper">
                                        <div class="blog_content">

                                            <div data-elementor-type="wp-post" data-elementor-id="13143"
                                                class="elementor elementor-13143">
                                                {!! $news->content !!}
                                            </div>
                                            <div class="dn"></div>
                                            <div class="clear post_clear"></div>

                                            <div class="post_block_info">
                                                <div class="single_post_tags">
                                                    <div class="tagcloud">

                                                    </div>
                                                </div>
                                                <div class="blog_post_info">
                                                    <!-- post share block -->
                                                    <div class="post_share_block">
                                                        <a href="javascript:void(0)"><span
                                                                class="sharing_title">Share</span></a>
                                                        <div class="post_share_wrap">
                                                            <ul>
                                                                <li class="post_share-facebook"><a target="_blank"
                                                                        href="{{ $setting->facebook_link }}"
                                                                        data-title="Facebook"><span
                                                                            class="fa fa-facebook"></span></a></li>
                                                                {{-- YouTube --}}
                                                                <li class="post_share-youtube">
                                                                    <a target="_blank"
                                                                        href="{{ $setting->youtube_link }}"
                                                                        data-title="YouTube">
                                                                        <span class="fa fa-youtube"></span>
                                                                    </a>
                                                                </li>

                                                                {{-- Instagram --}}
                                                                <li class="post_share-instagram">
                                                                    <a target="_blank"
                                                                        href="{{ $setting->instagram_link }}"
                                                                        data-title="Instagram">
                                                                        <span class="fa fa-instagram"></span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- //post share block -->
                                                </div>
                                            </div>


                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gt3_related_wrap">
                                <div class="gt3_module_title">
                                    <h2>Bài viết liên quan</h2>
                                </div>
                                <div class="gt3_module_related_posts gt3_module_featured_posts items2">
                                    <div class="clear"></div>
                                    <div class="spacing_beetween_items_30">
                                        @foreach ($relatedNews as $news)
                                            <div class="blog_post_preview format-standard-image">
                                                <div class="item_wrapper">
                                                    <div class="blog_content"><a
                                                            href="{{ route('detailNews', $news->slug) }}">
                                                            <div class="blog_post_media"><img src="{{ $news->image }}"
                                                                    alt="How to Increase Your ROI Through scientific SEM?" />
                                                            </div>
                                                        </a>
                                                        <div class="listing_meta"><span
                                                                class="post_date">{{ \Carbon\Carbon::parse($news->posted_at)->format('d-m-Y') }}</span>
                                                        </div>
                                                        <h4 class="blogpost_title"><a
                                                                href="{{ route('detailNews', $news->slug) }}">
                                                                {{ $news->title }}</a></h4>
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach


                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>

                        </section>
                    </div>
                    <div class="sidebar-container span3">
                        <aside class='sidebar'>

                            <div id="search-1" class="widget gt3_widget open widget_search">

                                <form role="search" method="get" class="search_form gt3_search_form"
                                    action="https://ewebotwp.com/">
                                    <label for="search-form-6851356d868ea">Search</label>
                                    <input class="search_text" id="search-form-6851356d868ea" type="text"
                                        name="s" placeholder="Search">
                                    <input class="search_submit" type="submit" value="Search">
                                </form>
                            </div>
                            <div id="categories-1" class="widget gt3_widget open widget_categories">
                                <h4 class="widget-title">Categories</h4>
                                <ul>
                                    @foreach ($allCategory as $category)
                                        <li class="cat-item cat-item-36"><a
                                                href="{{ route('listNewsByCategory', ['slug' => $category->slug]) }}">{{ $category->name }}</a>
                                        </li>
                                    @endforeach
                                    <li class="cat-item cat-item-36"><a
                                            href="https://ewebotwp.com/category/animation/">Animation</a>
                                    </li>

                                </ul>

                            </div>
                            <div id="posts-1" class="widget gt3_widget open widget_posts">
                                <h4 class="widget-title">Bài viết mới nhất</h4>
                                <ul class="recent_posts">
                                    @foreach ($latestNews as $news)
                                        <li class="with_img">
                                            <div class="recent_posts_content no_content">
                                                <a href=""><img src="{{ $news->image }}"
                                                        alt="{{ $news->title }}"
                                                        style="width: 150px; height: 140px; object-fit: cover; border-radius: 6px;">
                                                </a>
                                                <div class="recent_posts_wrapinner">
                                                    <div class="listing_meta">
                                                        <span>{{ $news->posted_at->format('d-m-Y') }}</span>
                                                    </div>
                                                    <div class="post_title"><a href="">
                                                            {{ $news->title }}</a></div>

                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>



                            <div id="block-5" class="widget gt3_widget open widget_block">
                                <div class="wp-block-group">
                                    <div
                                        class="wp-block-group__inner-container is-layout-flow wp-block-group-is-layout-flow">
                                    </div>
                                </div>
                            </div>
                            <div id="block-6" class="widget gt3_widget open widget_block">
                                <div class="wp-block-group">
                                    <div
                                        class="wp-block-group__inner-container is-layout-flow wp-block-group-is-layout-flow">
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>

            </div>
        </div><!-- .main_wrapper -->
    </div><!-- .site_wrapper -->
    <div data-elementor-type="wpda-footer" data-elementor-id="4110"
        class="elementor elementor-4110 wpda-builder-page-4110 wpda-builder wpda-footer-builder">
        @include('frontend.pages.about.footer')

    </div>
    <div class="wpda-builder__burger_sidebar burger-id-9b6c8d8">
        <div class="wpda-builder__burger_sidebar-cover"></div>
        <div class="wpda-builder__burger_container">
            @include('frontend.pages.about.sidebar')
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
    @include('frontend.pages.about.script')

</body>

</html>
<style>
    .post_share-youtube a {
        color: #FF0000;
        /* YouTube Red */
    }

    .post_share-instagram a {
        color: #C13584;
        /* Instagram Gradient Purple/Pink */
    }
</style>
