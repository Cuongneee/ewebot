<script>
    if (localStorage.getItem("gt3_gridlist_woo") === null) {
        localStorage.setItem("gt3_gridlist_woo", "grid");
    }
</script>
<script>
    (function() {
        function maybePrefixUrlField() {
            const value = this.value.trim();
            if (value !== "" && value.indexOf("http") !== 0) {
                this.value = "http://" + value;
            }
        }



    })();
</script>
<script>
    // Patch to handle events with passive: true
    (function() {
        // Override addEventListener
        var originalAddEventListener = EventTarget.prototype.addEventListener;
        EventTarget.prototype.addEventListener = function(
            type,
            listener,
            options
        ) {
            if (type === "touchstart" || type === "touchmove") {
                if (options === undefined) {
                    options = {
                        passive: true
                    };
                } else if (typeof options === "object") {
                    options.passive = true;
                }
            }
            originalAddEventListener.call(this, type, listener, options);
        };
    })();
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        if (window.innerWidth <= 768) {
            const images = document.querySelectorAll("img:not([loading])");
            images.forEach((img) => {
                img.setAttribute("loading", "lazy");
            });

            const disableElement = document.querySelector(
                '.gt3_disable_lazy [loading="lazy"]'
            );
            if (disableElement) {
                disableElement.removeAttribute("loading");
            }
        }
    });
</script>

<script>
    const lazyloadRunObserver = () => {
        const lazyloadBackgrounds = document.querySelectorAll(
            `.e-con.e-parent:not(.e-lazyloaded)`
        );
        const lazyloadBackgroundObserver = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        let lazyloadBackground = entry.target;
                        if (lazyloadBackground) {
                            lazyloadBackground.classList.add("e-lazyloaded");
                        }
                        lazyloadBackgroundObserver.unobserve(entry.target);
                    }
                });
            }, {
                rootMargin: "200px 0px 200px 0px"
            }
        );
        lazyloadBackgrounds.forEach((lazyloadBackground) => {
            lazyloadBackgroundObserver.observe(lazyloadBackground);
        });
    };
    const events = ["DOMContentLoaded", "elementor/lazyload/observe"];
    events.forEach((event) => {
        document.addEventListener(event, lazyloadRunObserver);
    });
</script>
<script type="text/javascript">
    (function() {
        var c = document.body.className;
        c = c.replace(/woocommerce-no-js/, "woocommerce-js");
        document.body.className = c;
    })();
</script>

<script type="text/template" id="tmpl-variation-template">
      {{-- <div class="woocommerce-variation-description">{{{ data.variation.variation_description }}}</div>
      <div class="woocommerce-variation-price">{{{ data.variation.price_html }}}</div>
      <div class="woocommerce-variation-availability">{{{ data.variation.availability_html }}}</div> --}}
    </script>
<script type="text/template" id="tmpl-unavailable-variation-template">
      <p role="alert">Sorry, this product is unavailable. Please choose a different combination.</p>
    </script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="/frontend/assets/js/menu-mobile.js"></script>
<script src="/frontend/assets/js/search-bar.js"></script>
<script>
    const swiper = new Swiper(".swiper", {
        loop: true, // Bật chế độ lặp lại
        spaceBetween: 30, // Khoảng cách giữa các slide
        centeredSlides: true,
        autoplay: {
            delay: 5000, // Tự động chuyển slide sau 3 giây
            disableOnInteraction: false, // Nếu người dùng tương tác, autoplay không dừng
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        slidesPerView: 1,
        breakpoints: {
            768: {
                slidesPerView: 3,
            },

        },

    });
</script>

<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

<script>
    const swiperPortfolio = new Swiper('.portfolio_carousel_wrapper .swiper', {
        loop: true,
        spaceBetween: 30,
        slidesPerView: 3,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            992: {
                slidesPerView: 3,
            },
            768: {
                slidesPerView: 2,
            },
            0: {
                slidesPerView: 1,
            },
        },
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggleBtn = document.querySelector('.wpda-mobile-navigation-toggle');
        const targetMenu = document.querySelector('.elementor-element-f89fc0c');

        if (toggleBtn && targetMenu) {
            toggleBtn.addEventListener('click', function() {
                targetMenu.classList.toggle('mobile_menu_active');
            });
        }
    });
</script>
<script>
    window.addEventListener('scroll', function() {
        const section = document.querySelector('.elementor-element-1c7d0e5b');

        if (window.scrollY > 10) { // 100px là ngưỡng cuộn, bạn có thể chỉnh
            section.classList.add('sticky_enabled');
        } else {
            section.classList.remove('sticky_enabled');
        }
    });
</script>
\
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const backToTopButton = document.getElementById("back_to_top");
        const scrollThreshold = 300; // Số pixel cuộn xuống để hiển thị nút

        window.addEventListener("scroll", function() {
            if (window.scrollY > scrollThreshold) {
                backToTopButton.style.display = "block";
            } else {
                backToTopButton.style.display = "none";
            }
        });

        backToTopButton.addEventListener("click", function() {
            window.scrollTo({
                top: 0,
                behavior: "smooth",
            });
        });
    });
</script>
