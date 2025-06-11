<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.layouts.includes.meta')
    @include('frontend.layouts.includes.style')
</head>

<body
    class="wp-singular page-template-default page page-id-6782 wp-theme-ewebot wp-child-theme-ewebot-child theme-ewebot woocommerce-js woo-variation-swatches wvs-behavior-blur wvs-theme-ewebot-child wvs-show-label wvs-tooltip gt3_lenis_scroll gt3_enable_sticky_sidebar elementor-default elementor-kit-7 elementor-page elementor-page-6782 page-loaded e--ua-blink e--ua-chrome e--ua-webkit page-done"
    data-theme-color="#6254e7" data-elementor-device-mode="desktop">

    {{-- Header --}}
    <div data-elementor-type="wpda-header" data-elementor-id="7813"
        class="elementor elementor-7813 wpda-builder-page-7813 wpda-builder wpda-header-builder header_over_bg header_over_bg_tablet header_over_bg_mobile">
        @include('frontend.layouts.includes.header')
    </div>

    <div class="site_wrapper fadeOnLoad">
        <div class="main_wrapper">
            <div class="container container-sidebar_none">
                <div class="row sidebar_none">
                    <div class="content-container span12">
                        <section id="main_content">
                            <div data-elementor-type="wp-page" data-elementor-id="6782"
                                class="elementor elementor-6782">
                                {{-- Main --}}
                                @yield('content')
                            </div>
                            <div class="clear"></div>
                            <div id="comments"></div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-elementor-type="wpda-footer" data-elementor-id="7803"
        class="elementor elementor-7803 wpda-builder-page-7803 wpda-builder wpda-footer-builder">
        {{-- Footer --}}
        @include('frontend.layouts.includes.footer')
    </div>

    <div class="wpda-builder__burger_sidebar burger-id-3067e7d2">
        <div class="wpda-builder__burger_sidebar-cover"></div>
        <div class="wpda-builder__burger_container">
            @include('frontend.layouts.includes.menu-mobile')
        </div>
    </div>




    <div class="bubbles_wrap">
        <div class="bubble x1"></div>
        <div class="bubble x2"></div>
        <div class="bubble x3"></div>
        <div class="bubble x4"></div>
        <div class="bubble x5"></div>
        <div class="bubble x6"></div>
        <div class="bubble x7"></div>
        <div class="bubble x8"></div>
        <div class="bubble x9"></div>
        <div class="bubble x10"></div>
    </div>
    <div class="back_to_top_container">
        <a href="javascript:void(0)" class="gt3_back2top" id="back_to_top">Back to top</a>
    </div>

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



    {{-- JS --}}
    @include('frontend.layouts.includes.script')
</body>

</html>
