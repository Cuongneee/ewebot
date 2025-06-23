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

    /*
    jQuery Parallax 1.1.3
    Author: Ian Lunn
    Plugin URL: https://www.ianlunn.co.uk/plugins/jquery-parallax/

    Dual licensed under the MIT and GPL licenses:
    https://www.opensource.org/licenses/mit-license.php
    https://www.gnu.org/licenses/gpl.html
    */
    ! function(n) {
        var t = n(window),
            e = t.height();
        t.resize(function() {
            e = t.height()
        }), n.fn.parallax = function(o, r, i) {
            function u() {
                var i = t.scrollTop();
                l.each(function(t, u) {
                    var l = n(u),
                        f = l.offset().top,
                        s = a(l);
                    i > f + s || f > i + e || l.css("backgroundPosition", o + " " + Math.round((l.data(
                        "firstTop") - i) * r) + "px")
                })
            }
            var a, l = n(this);
            l.each(function(t, e) {
                $element = n(e), $element.data("firstTop", $element.offset().top)
            }), a = i ? function(n) {
                return n.outerHeight(!0)
            } : function(n) {
                return n.height()
            }, (arguments.length < 1 || null === o) && (o = "50%"), (arguments.length < 2 || null === r) && (r =
                .1), (arguments.length < 3 || null === i) && (i = !0), t.bind("scroll", u).resize(u), u()
        }
    }(jQuery);
</script>
<script>
    if (localStorage.getItem('gt3_gridlist_woo') === null) {
        localStorage.setItem('gt3_gridlist_woo', 'grid')
    }
</script>
<script type="speculationrules">
{"prefetch":[{"source":"document","where":{"and":[{"href_matches":"\/*"},{"not":{"href_matches":["\/wp-*.php","\/wp-admin\/*","\/wp-content\/uploads\/*","\/wp-content\/*","\/wp-content\/plugins\/*","\/wp-content\/themes\/ewebot-child\/*","\/wp-content\/themes\/ewebot\/*","\/*\\?(.+)"]}},{"not":{"selector_matches":"a[rel~=\"nofollow\"]"}},{"not":{"selector_matches":".no-prefetch, .no-prefetch a"}}]},"eagerness":"conservative"}]}
</script>
<script>
    (function() {
        function maybePrefixUrlField() {
            const value = this.value.trim()
            if (value !== '' && value.indexOf('http') !== 0) {
                this.value = 'http://' + value
            }
        }

        const urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]')
        for (let j = 0; j < urlFields.length; j++) {
            urlFields[j].addEventListener('blur', maybePrefixUrlField)
        }
    })();
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




<script type="text/javascript" src="/frontend/assets/js/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.all.min.js"></script>

<script type="text/javascript" src="/frontend/assets/js/jquery-migrate.min.js"></script>
<script type="text/javascript" src="/frontend/assets/js/core.js"></script>
<script type="text/javascript" src="/frontend/assets/js/column.js"></script>
<script type="text/javascript" src="/frontend/assets/js/anime.js"></script>
<script type="text/javascript" src="/frontend/assets/js/lenis.min.js"></script>
<script type="text/javascript" src="/frontend/assets/js/theme.js"></script>
<script type="text/javascript" src="/frontend/assets/js/hooks.min.js"></script>
<script type="text/javascript" src="/frontend/assets/js/i18n.min.js"></script>
<script type="text/javascript" src="/frontend/assets/js/index.js"></script>
{{-- <script type="text/javascript" src="/frontend/assets/js/contact-form-7-index.js"></script> --}}
<script type="text/javascript" src="/frontend/assets/js/imagesloaded.min.js"></script>
<script type="text/javascript" src="/frontend/assets/js/appear.js"></script>
<script type="text/javascript" src="/frontend/assets/js/theme-woo.js"></script>
<script type="text/javascript" src="/frontend/assets/js/sourcebuster.min.js"></script>
<script type="text/javascript" src="/frontend/assets/js/webpack.runtime.min.js"></script>
<script type="text/javascript" src="/frontend/assets/js/frontend-modules.min.js"></script>
<script type="text/javascript" src="/frontend/assets/js/core.min.js"></script>
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
            "assets": "https:\/\/ewebotwp.com\/wp-content\/plugins\/elementor\/assets\/",
            "ajaxurl": "https:\/\/ewebotwp.com\/wp-admin\/admin-ajax.php",
            "uploadUrl": "https:\/\/ewebotwp.com\/wp-content\/uploads"
        },
        "nonces": {
            "floatingButtonsClickTracking": "0622bae244"
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
            "id": 14335,
            "title": "PPC%20Services%20%E2%80%93%20Ewebot",
            "excerpt": "",
            "featuredImage": false
        }
    };
    /* ]]> */
</script>
<script type="text/javascript" src="/frontend/assets/js/frontend.min.js"></script>
<script type="text/javascript" src="/frontend/assets/js/mega-menu-frontend.js"></script>
<script type="text/javascript" src="/frontend/assets/js/gt3-core-imagebox.js"></script>
<script type="text/javascript" src="/frontend/assets/js/frontend.js"></script>
<script src="/frontend/assets/js/tabs.min.js"></script>
<script type="text/javascript" src="/frontend/assets/js/gt3-core-tabs.js"></script>
<script type="text/javascript" src="/frontend/assets/js/gt3-core-button.js"></script>
<script type="text/javascript" src="/frontend/assets/js/slick.js"></script>
<script type="text/javascript" src="/frontend/assets/js/gt3-core-portfoliocarousel.js"></script>
<script type="/frontend/assets/js/accordion.min.js"
    ></script>
<script type="text/javascript" src="/frontend/assets/js/gt3-core-advanced-tabs.js"></script>
<script type="text/javascript" src="/frontend/assets/js/gt3-core-pricebox.js"></script>
<script type="text/javascript" src="/frontend/assets/js/toggle.js"></script>
<script type="text/javascript" src="https://ewebotwp.com/wp-includes/js/comment-reply.min.js"></script>
<script type="text/javascript" src="/frontend/assets/js/core-gridlist-woo.js"></script>
<script type="text/javascript" defer src="/frontend/assets/js/forms.js"></script>
<script type="text/javascript" src="https://ewebotwp.com/wp-includes/js/underscore.min.js"></script>
<script type="text/javascript" id="wp-util-js-extra">
    /* <![CDATA[ */
    var _wpUtilSettings = {
        "ajax": {
            "url": "\/wp-admin\/admin-ajax.php"
        }
    };
    /* ]]> */
</script>
<script type="text/javascript" src="/frontend/assets/js/jquery.blockUI.min.js" defer="defer" data-wp-strategy="defer">
</script>

<script type="text/javascript" src="/frontend/assets/js/add-to-cart-variation.min.js" defer="defer"
    data-wp-strategy="defer"></script>
<script type="text/javascript" src="/frontend/assets/js/jquery.zoom.min.js" data-wp-strategy="defer"></script>
<script type="text/javascript" src="/frontend/assets/js/photoswipe.min.js" defer="defer" data-wp-strategy="defer">
</script>
<script type="text/javascript" src="/frontend/assets/js/photoswipe-ui-default.min.js" defer="defer"
    data-wp-strategy="defer"></script>

<script type="text/javascript" src="/frontend/assets/js/single-product.min.js" defer="defer" data-wp-strategy="defer">
</script>
<script type="text/javascript" src="/frontend/assets/js/core-frontend.js"></script>
<script id="gt3_custom_footer_js"></script>
