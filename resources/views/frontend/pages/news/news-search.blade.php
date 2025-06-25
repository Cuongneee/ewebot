<!DOCTYPE html>
<html lang="en-US">

<head>
    @include('frontend.pages.about.meta')

    @include('frontend.pages.about.style')

</head>

<body
    class="search search-no-results wp-theme-ewebot wp-child-theme-ewebot-child theme-ewebot woocommerce-no-js woo-variation-swatches wvs-behavior-blur wvs-theme-ewebot-child wvs-show-label wvs-tooltip gt3_lenis_scroll gt3_enable_sticky_sidebar elementor-default elementor-kit-7"
    data-theme-color="#6254e7">


    <div data-elementor-type="wpda-header" data-elementor-id="4031"
        class="elementor elementor-4031 wpda-builder-page-4031 wpda-builder wpda-header-builder">
        @include('frontend.pages.about.header')

        {{-- Menu --}}
        @include('frontend.pages.about.menu')
    </div>

    <div class="gt3-page-title_wrapper">
        <div class='gt3-page-title gt3-page-title_horiz_align_center gt3-page-title_vert_align_middle gt3-page-title_has_img_bg'
            style="background-color:#423bb6;height:261px;color:#ffffff;margin-bottom:80px;background-image:url(/frontend/assets/img/pic_paralax_2.jpg);background-size:cover;background-repeat:no-repeat;background-attachment:scroll;background-position:center center;">
            <div class='gt3-page-title__inner '>
                <div class='container'>
                    <div class='gt3-page-title__content'>
                        <div class='page_title'>
                            <h1>Kết qủa tìm kiếm với: </h1>
                        </div>
                        <div class='gt3_breadcrumb'>
                            <div class="breadcrumbs"><a href="{{ route('home') }}">Trang chủ</a><span
                                    class="gt3_pagination_delimiter"></span><span class="current">Kết quả tìm kiếm
                                </span></div>
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

                            <div class="wrapper_404 pp_block">
                                <div class="container_vertical_wrapper">
                                    <div class="container a-center pp_container">
                                        <h1>Oops! Not Found!</h1>
                                        <h2>Apologies, but we were unable to find what you were looking for.</h2>
                                        <div class="search_result_form text-center">


                                            <form role="search" method="get" class="search_form gt3_search_form"
                                                action="{{ route('search') }}">
                                                <label for="search-form-685a63d079bba">Search</label>
                                                <input class="search_text" id="search-form-685a63d079bba" type="text"
                                                    name="s" placeholder="Tìm kiếm">
                                                <input class="search_submit" type="submit" value="Tìm kiếm">
                                            </form>
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

    (function() {
    function maybePrefixUrlField() {
    const value = this.value.trim()
    if (value !== '' && value.indexOf('http') !== 0) {
    this.value = 'http://' + value
    }
    }

    const urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]')
    for (let j = 0; j < urlFields.length; j++) { urlFields[j].addEventListener('blur', maybePrefixUrlField) } })();
        </script>
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
                    <button class="pswp__button pswp__button--arrow--left"
                        aria-label="Previous (arrow left)"></button>
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
