<!DOCTYPE html>
<html lang="en-US">

<head>
    @include('frontend.pages.about.meta')

    @include('frontend.pages.about.style')
    @include('frontend.layouts.includes.style')

</head>

<body
    class="wp-singular page-template-default page page-id-623 wp-theme-ewebot wp-child-theme-ewebot-child theme-ewebot woocommerce-no-js woo-variation-swatches wvs-behavior-blur wvs-theme-ewebot-child wvs-show-label wvs-tooltip gt3_lenis_scroll gt3_enable_sticky_sidebar elementor-default elementor-kit-7 elementor-page elementor-page-623 elementor-page"
    data-theme-color="#6254e7">

    {{-- Header --}}
    <div data-elementor-type="wpda-header" data-elementor-id="7813"
        class="elementor elementor-7813 wpda-builder-page-7813 wpda-builder wpda-header-builder header_over_bg header_over_bg_tablet header_over_bg_mobile">
        @include('frontend.layouts.includes.header')
    </div>

    <div class="gt3-page-title_wrapper">
        @include('frontend.pages.about.theme')
    </div>

    <div class="site_wrapper fadeOnLoad">
        <div class="main_wrapper">

            <div class="container container-sidebar_none">
                <div class="row sidebar_none">
                    <div class="content-container span12">
                        <section id='main_content'>
                            <div data-elementor-type="wp-post" data-elementor-id="623" class="elementor elementor-623">

                                @include('frontend.pages.about.colum-after-them')

                                {{-- @include('frontend.pages.about.boosts-web') --}}

                                @include('frontend.pages.about.what-we-do')

                                @include('frontend.pages.about.story')


                                @include('frontend.pages.about.team')

                                @include('frontend.pages.about.choose-us')

                            </div>
                            <div class="clear"></div>

                            <div id="comments"></div>
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
        <div id="" class="yith-wcqv-wrapper">
            <div class="yith-wcqv-main">
                <div class="yith-wcqv-head">
                    <a href="#" class="yith-quick-view-close">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </a>
                </div>
                <div id="yith-quick-view-content" class="yith-quick-view-content woocommerce single-product"></div>
            </div>
        </div>
    </div>

    <div class='bubbles_wrap'>
        <div class='bubble x1'></div>
        <div class='bubble x2'></div>
        <div class='bubble x3'></div>
        <div class='bubble x4'></div>
        <div class='bubble x5'></div>
        <div class='bubble x6'></div>
        <div class='bubble x7'></div>
        <div class='bubble x8'></div>
        <div class='bubble x9'></div>
        <div class='bubble x10'></div>
    </div>
    <div class='back_to_top_container'><a href='javascript:void(0)' class='gt3_back2top' id='back_to_top'>Back
            to
            top</a></div>


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
