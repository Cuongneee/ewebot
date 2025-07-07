<script>
    document.documentElement.className = document.documentElement.className + ' yes-js js_active js'
</script>
<script type="text/javascript" id="jquery-core-js-extra">
    /* <![CDATA[ */
    var gt3_themes_core = {
        "ajaxurl": "https:\/\/ewebotwp.com\/wp-admin\/admin-ajax.php"
    };
    var gt3_gt3theme = {
        "ajaxurl": "https:\/\/ewebotwp.com\/wp-admin\/admin-ajax.php",
        "templateUrl": "https:\/\/ewebotwp.com\/wp-content\/themes\/ewebot"
    };
    var wpda_builder = {
        "ajaxurl": "https:\/\/ewebotwp.com\/wp-admin\/admin-ajax.php"
    };
    /* ]]> */
</script>
<script>
    ;
    (function($) {
        'use strict'

        var testMobile;
        var isMobile = {
            Android: function() {
                return navigator.userAgent.match(/Android/i);
            },
            BlackBerry: function() {
                return navigator.userAgent.match(/BlackBerry/i);
            },
            iOS: function() {
                return navigator.userAgent.match(/iPhone|iPad|iPod/i);
            },
            Opera: function() {
                return navigator.userAgent.match(/Opera Mini/i);
            },
            Windows: function() {
                return navigator.userAgent.match(/IEMobile/i);
            },
            any: function() {
                return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() ||
                    isMobile.Windows());
            }
        };

        var gt3_parallax = function() {
            testMobile = isMobile.any();
            if (jQuery(".gt3_parallax-yes").length && testMobile == null) {
                jQuery(".gt3_parallax-yes").parallax("50%", 0.3);
            }
        };

        // Dom Ready
        jQuery(function() {
            gt3_parallax();
        });
    });

   
   
</script>
<script>
    if (localStorage.getItem('gt3_gridlist_woo') === null) {
        localStorage.setItem('gt3_gridlist_woo', 'grid')
    }
</script>

<script>
    // Patch to handle events with passive: true
    (function() {
        // Override addEventListener
        var originalAddEventListener = EventTarget.prototype.addEventListener;
        EventTarget.prototype.addEventListener = function(type, listener, options) {
            if (type === 'touchstart' || type === 'touchmove') {
                if (options === undefined) {
                    options = {
                        passive: true
                    };
                } else if (typeof options === 'object') {
                    options.passive = true;
                }
            }
            originalAddEventListener.call(this, type, listener, options);
        };
    })();
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (window.innerWidth <= 768) {
            const images = document.querySelectorAll('img:not([loading])');
            images.forEach(img => {
                img.setAttribute('loading', 'lazy');
            });

            const disableElement = document.querySelector('.gt3_disable_lazy [loading="lazy"]');
            if (disableElement) {
                disableElement.removeAttribute('loading');
            }
        }
    });
</script>
<script>
    const lazyloadRunObserver = () => {
        const lazyloadBackgrounds = document.querySelectorAll(`.e-con.e-parent:not(.e-lazyloaded)`);
        const lazyloadBackgroundObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    let lazyloadBackground = entry.target;
                    if (lazyloadBackground) {
                        lazyloadBackground.classList.add('e-lazyloaded');
                    }
                    lazyloadBackgroundObserver.unobserve(entry.target);
                }
            });
        }, {
            rootMargin: '200px 0px 200px 0px'
        });
        lazyloadBackgrounds.forEach((lazyloadBackground) => {
            lazyloadBackgroundObserver.observe(lazyloadBackground);
        });
    };
    const events = [
        'DOMContentLoaded',
        'elementor/lazyload/observe',
    ];
    events.forEach((event) => {
        document.addEventListener(event, lazyloadRunObserver);
    });
</script>
<script type='text/javascript'>
    (function() {
        var c = document.body.className;
        c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
        document.body.className = c;
    })();
</script>
</script>
<script type="text/template" id="tmpl-unavailable-variation-template">
	<p role="alert">Sorry, this product is unavailable. Please choose a different combination.</p>
</script>
<script type="text/javascript" id="elementor-frontend-js-before">
    /* <![CDATA[ */
    var elementorFrontendConfig = {
        "environmentMode": {
            "edit": false,
            "wpPreview": false,
            "isScriptDebug": false
        },
        "i18n": {
            "shareOnFacebook": "Share on Facebook",
            "shareOnTwitter": "Share on Twitter",
            "pinIt": "Pin it",
            "download": "Download",
            "downloadImage": "Download image",
            "fullscreen": "Fullscreen",
            "zoom": "Zoom",
            "share": "Share",
            "playVideo": "Play Video",
            "previous": "Previous",
            "next": "Next",
            "close": "Close",
            "a11yCarouselPrevSlideMessage": "Previous slide",
            "a11yCarouselNextSlideMessage": "Next slide",
            "a11yCarouselFirstSlideMessage": "This is the first slide",
            "a11yCarouselLastSlideMessage": "This is the last slide",
            "a11yCarouselPaginationBulletMessage": "Go to slide"
        },
        "is_rtl": false,
        "breakpoints": {
            "xs": 0,
            "sm": 480,
            "md": 768,
            "lg": 1025,
            "xl": 1440,
            "xxl": 1600
        },
        "responsive": {
            "breakpoints": {
                "mobile": {
                    "label": "Mobile Portrait",
                    "value": 767,
                    "default_value": 767,
                    "direction": "max",
                    "is_enabled": true
                },
                "mobile_extra": {
                    "label": "Mobile Landscape",
                    "value": 880,
                    "default_value": 880,
                    "direction": "max",
                    "is_enabled": false
                },
                "tablet": {
                    "label": "Tablet Portrait",
                    "value": 1024,
                    "default_value": 1024,
                    "direction": "max",
                    "is_enabled": true
                },
                "tablet_extra": {
                    "label": "Tablet Landscape",
                    "value": 1200,
                    "default_value": 1200,
                    "direction": "max",
                    "is_enabled": false
                },
                "laptop": {
                    "label": "Laptop",
                    "value": 1366,
                    "default_value": 1366,
                    "direction": "max",
                    "is_enabled": false
                },
                "widescreen": {
                    "label": "Widescreen",
                    "value": 2400,
                    "default_value": 2400,
                    "direction": "min",
                    "is_enabled": false
                }
            },
            "hasCustomBreakpoints": false
        },
        "version": "3.29.2",
        "is_static": false,
        "experimentalFeatures": {
            "container": true,
            "home_screen": true,
            "e_opt_in_v4_page": true
        },
        "urls": {
            "assets": "https:\/\/ewebotwp.com\/wp-content\/plugins\/elementor\/frontend/assets\ / ",
            "ajaxurl": "https:\/\/ewebotwp.com\/wp-admin\/admin-ajax.php",
            "uploadUrl": "https:\/\/ewebotwp.com\/wp-content\/uploads"
        },
        "nonces": {
            "floatingButtonsClickTracking": "e2e20dee26"
        },
        "swiperClass": "swiper",
        "settings": {
            "page": [],
            "editorPreferences": []
        },
        "kit": {
            "body_background_background": "classic",
            "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
            "global_image_lightbox": "yes",
            "lightbox_enable_counter": "yes",
            "lightbox_enable_fullscreen": "yes",
            "lightbox_enable_zoom": "yes",
            "lightbox_enable_share": "yes",
            "lightbox_title_src": "title",
            "lightbox_description_src": "description"
        },
        "post": {
            "id": 623,
            "title": "About%20Us%20%E2%80%93%20Ewebot",
            "excerpt": "",
            "featuredImage": false
        }
    };
    /* ]]> */
</script>
<script type="text/javascript">
    /* <![CDATA[ */
    var wc_order_attribution = {
        "params": {
            "lifetime": 1.0e-5,
            "session": 30,
            "base64": false,
            "ajaxurl": "https:\/\/ewebotwp.com\/wp-admin\/admin-ajax.php",
            "prefix": "wc_order_attribution_",
            "allowTracking": true
        },
        "fields": {
            "source_type": "current.typ",
            "referrer": "current_add.rf",
            "utm_campaign": "current.cmp",
            "utm_source": "current.src",
            "utm_medium": "current.mdm",
            "utm_content": "current.cnt",
            "utm_id": "current.id",
            "utm_term": "current.trm",
            "utm_source_platform": "current.plt",
            "utm_creative_format": "current.fmt",
            "utm_marketing_tactic": "current.tct",
            "session_entry": "current_add.ep",
            "session_start_time": "current_add.fd",
            "session_pages": "session.pgs",
            "session_count": "udata.vst",
            "user_agent": "udata.uag"
        }
    };
    /* ]]> */
</script>
<script type="text/javascript" id="wp-util-js-extra">
    /* <![CDATA[ */
    var _wpUtilSettings = {
        "ajax": {
            "url": "\/wp-admin\/admin-ajax.php"
        }
    };
    /* ]]> */
</script>
<script type="text/javascript" id="wc-add-to-cart-variation-js-extra">
    /*
<![CDATA[ */
    var wc_add_to_cart_variation_params = {
        "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
        "i18n_no_matching_variations_text": "Sorry, no products matched your selection. Please choose a different combination.",
        "i18n_make_a_selection_text": "Please select some product options before adding this product to your cart.",
        "i18n_unavailable_text": "Sorry, this product is unavailable. Please choose a different combination.",
        "i18n_reset_alert_text": "Your selection has been reset. Please select some product options before adding this product to your cart."
    };
    /* ]]> */
</script>
<script type="text/javascript" id="wc-single-product-js-extra">
    /* <![CDATA[ */
    var wc_single_product_params = {
        "i18n_required_rating_text": "Please select a rating",
        "i18n_rating_options": ["1 of 5 stars", "2 of 5 stars", "3 of 5 stars", "4 of 5 stars", "5 of 5 stars"],
        "i18n_product_gallery_trigger_text": "View full-screen image gallery",
        "review_rating_required": "yes",
        "flexslider": {
            "rtl": false,
            "animation": "fade",
            "smoothHeight": false,
            "directionNav": true,
            "controlNav": "thumbnails",
            "slideshow": false,
            "animationSpeed": 500,
            "animationLoop": false
        },
        "zoom_enabled": "1",
        "zoom_options": [],
        "photoswipe_enabled": "1",
        "photoswipe_options": {
            "shareEl": false,
            "closeOnScroll": false,
            "history": false,
            "hideAnimationDuration": 0,
            "showAnimationDuration": 0
        },
        "flexslider_enabled": "1"
    };
    /* ]]> */
</script>


<script src="/frontend/assets/js/jquery.min.js" id="jquery-core-js"></script>
<script src="/frontend/assets/js/jquery-migrate.min.js"></script>
<script type="text/javascript" src="/frontend/assets/js/core.js"></script>
<script type="text/javascript" src="/frontend/assets/js/column.js"></script>
<script type="text/javascript" src="/frontend/assets/js/anime.js"></script>
<script type="text/javascript" src="/frontend/assets/js/lenis.min.js"></script>
<script type="text/javascript" src="/frontend/assets/js/theme.js"></script>
<script type="text/javascript" src="/frontend/assets/js/hooks.min.js"></script>
<script type="text/javascript" src="/frontend/assets/js/i18n.min.js"></script>
<script type="text/javascript" src="/frontend/assets/js/index.js"></script>
<script type="text/javascript" src="/frontend/assets/js/imagesloaded.min.js"></script>
<script type="text/javascript" src="/frontend/assets/js/appear.js"></script>
<script type="text/javascript" src="/frontend/assets/js/theme-woo.js"></script>
<script type="text/javascript" src="/frontend/assets/js/sourcebuster.min.js"></script>
<script type="text/javascript" src="/frontend/assets/js/order-attribution.min.js"></script>
{{-- <script type="text/javascript" src="/frontend/assets/js/webpack.runtime.min.js"></script> --}}
<script type="text/javascript" src="/frontend/assets/js/frontend-modules.min.js"></script>
<script type="text/javascript" src="/frontend/assets/js/core.min.js"></script>
<script type="text/javascript" src="/frontend/assets/js/frontend.min.js"></script>
<script type="text/javascript" src="/frontend/assets/js/mega-menu-frontend.js"></script>
<script type="text/javascript" src="/frontend/assets/js/gt3-core-imagebox.js"></script>
<script type="text/javascript" src="/frontend/assets/js/frontend.js"></script>
<script type="text/javascript" src="/frontend/assets/js/circle-progress.min.js"></script>
<script type="text/javascript" src="/frontend/assets/js/gt3-core-button.js"></script>
<script type="text/javascript" src="/frontend/assets/js/gt3-core-videopopup.js"></script>
<script type="text/javascript" src="/frontend/assets/js/gt3-core-piechart.js"></script>
<script type="text/javascript" src="/frontend/assets/js/gt3-core-processbar.js"></script>
<script type="text/javascript" src="/frontend/assets/js/isotope.js"></script>
<script type="text/javascript" src="/frontend/assets/js/gt3-core-team.js"></script>
<script type="text/javascript" src="/frontend/assets/js/slick.js"></script>
<script type="text/javascript" src="/frontend/assets/js/gt3-core-testimonialslite.js"></script>
<script type="text/javascript" src="/frontend/assets/js/comment-reply.min.js"></script>
<script type="text/javascript" src="/frontend/assets/js/core-gridlist-woo.js"></script>
<script type="text/javascript" defer src="/frontend/assets/js/forms.js"></script>
<script type="text/javascript" src="/frontend/assets/js/underscore.min.js"></script>
<script type="text/javascript" src="/frontend/assets/js/wp-util.min.js"></script>
<script type="text/javascript" src="/frontend/assets/js/jquery.blockUI.min.js" defer="defer" data-wp-strategy="defer">
</script>
<script type="text/javascript" src="/frontend/assets/js/add-to-cart-variation.min.js" defer="defer"
    data-wp-strategy="defer"></script>
<script type="text/javascript" src="/frontend/assets/js/jquery.zoom.min.js" defer="defer" data-wp-strategy="defer">
</script>
<script type="text/javascript" src="/frontend/assets/js/photoswipe.min.js" defer="defer" data-wp-strategy="defer">
</script>
<script type="text/javascript" src="/frontend/assets/js/photoswipe-ui-default.min.js" defer="defer"
    data-wp-strategy="defer"></script>
<script type="text/javascript" src="/frontend/assets/js/single-product.min.js" defer="defer" data-wp-strategy="defer">
</script>
<script type="text/javascript" src="/frontend/assets/js/core-frontend.js"></script>
<script id="gt3_custom_footer_js"></script>
<!-- 404 -->
<script type="text/javascript" src="https://ewebotwp.com/wp-includes/js/jquery/ui/tabs.min.justify-content"></script>
