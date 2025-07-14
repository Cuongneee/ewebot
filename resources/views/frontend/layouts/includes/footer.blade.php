<section
    class="elementor-section elementor-top-section elementor-element elementor-element-70be064 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
    data-id="70be064" data-element_type="section" data-settings='{"background_background":"classic"}'>
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6550ca10"
            data-id="6550ca10" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">

                <div class="elementor-element elementor-element-73feaf10 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                    data-id="73feaf10" data-element_type="widget" data-widget_type="divider.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-divider">
                            <span class="elementor-divider-separator"> </span>
                        </div>
                    </div>
                </div>
                <section
                    class="elementor-section elementor-inner-section elementor-element elementor-element-36b79983 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="36b79983" data-element_type="section">
                    <div class="widget-container">
                        <img src="{{ showImage($setting->logo_footer) }}" alt="">
                    </div>
                    <div class="elementor-container elementor-column-gap-extended">

                        <div class="elementor-column elementor-col-40 elementor-inner-column elementor-element elementor-element-415e9e5a"
                            data-id="415e9e5a" data-element_type="column">

                            <div class="elementor-widget-wrap elementor-element-populated">

                                <div class="elementor-element elementor-element-3ee659aa elementor-widget elementor-widget-spacer"
                                    data-id="3ee659aa" data-element_type="widget" data-widget_type="spacer.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-spacer">
                                            <div class="elementor-spacer-inner"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element-custom_font_weight elementor-element-custom_color elementor-element elementor-element-46108c3a elementor-widget elementor-widget-text-editor"
                                    data-id="46108c3a" data-element_type="widget"
                                    data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <h4 class="footer-title">Liên hệ với chúng tôi</h4>

                                        <div class="social-links">
                                            <a href="{{ $setting->facebook_link }}" class="facebook" target="_blank"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a href="{{ $setting->twitter_link }}" class="twitter" target="_blank"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a href="{{ $setting->ig_link }}" class="instagram" target="_blank"><i
                                                    class="fab fa-instagram"></i></a>
                                            <a href="{{ $setting->linkedin_link }}" class="linkedin" target="_blank"><i
                                                    class="fab fa-linkedin-in"></i></a>
                                            <a href="{{ $setting->youtube_link }}" class="youtube" target="_blank"><i
                                                    class="fab fa-youtube"></i></a>
                                        </div>

                                    </div>

                                </div>

                                <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element-custom_color elementor-element elementor-element-7555758f elementor-widget elementor-widget-text-editor"
                                    data-id="7555758f" data-element_type="widget"
                                    data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <p>
                                            {{ $setting->company }}
                                        </p>
                                    </div>
                                    @php
                                        $addresses = json_decode($setting->address, true) ?: [];
                                    @endphp
                                    <div class="elementor-widget-container">
                                        @foreach ($addresses as $line)
                                            <li class="gt3-core-imagebox-description"
                                                style="margin: 0; font-weight: 400;">
                                                {{ $line }}
                                            </li>
                                        @endforeach
                                        <li class="gt3-core-imagebox-description mt-1"
                                            style="margin: 0; font-weight: 400;">
                                            Điện thoại:{{ $setting->hotline }} / Hotline:
                                            {{ $setting->hotline_kinhdoanh }}
                                        </li>
                                        <li class="gt3-core-imagebox-description mt-1"
                                            style="margin: 0; font-weight: 400;">
                                            Email:{{ $setting->email }}
                                        </li>
                                        <li class="gt3-core-imagebox-description mt-1"
                                            style="margin: 0; font-weight: 400;">
                                            MST:{{ $setting->mst }}
                                        </li>
                                        <li class="gt3-core-imagebox-description mt-1"
                                            style="margin: 0; font-weight: 400;">
                                            STK:{{ $setting->stk }} - {{ $setting->bank }}
                                        </li>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-79dc8458"
                            data-id="79dc8458" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-3a437120 elementor-widget elementor-widget-spacer"
                                    data-id="3a437120" data-element_type="widget" data-widget_type="spacer.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-spacer">
                                            <div class="elementor-spacer-inner"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element-custom_font_weight elementor-element-custom_color elementor-element elementor-element-3c04219b elementor-widget elementor-widget-text-editor"
                                    data-id="3c04219b" data-element_type="widget"
                                    data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <h4 class="footer-title">Dịch vụ</h4>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-2e2cb06f wpda_alignment-left elementor-widget elementor-widget-wpda-builder-menu"
                                    data-id="2e2cb06f" data-element_type="widget"
                                    data-widget_type="wpda-builder-menu.default">
                                    <div class="elementor-widget-container">
                                        <div class="wpda-mobile-navigation-toggle">
                                            <div class="wpda-toggle-box">
                                                <div class="wpda-toggle-inner"></div>
                                            </div>
                                        </div>
                                        <div class="wpda-navbar-collapse">
                                            <nav class="wpda-builder-menu">
                                                <ul id="menu-services" class="wpda-menu">
                                                    @foreach ($categoryService as $category)
                                                        <li id="menu-item-12026"
                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12026">
                                                            <a href="#">{{ $category->name }}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-7512ac0a"
                            data-id="7512ac0a" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-261f93ce elementor-widget elementor-widget-spacer"
                                    data-id="261f93ce" data-element_type="widget" data-widget_type="spacer.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-spacer">
                                            <div class="elementor-spacer-inner"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element-custom_font_weight elementor-element-custom_color elementor-element elementor-element-7ec1e2c2 elementor-widget elementor-widget-text-editor"
                                    data-id="7ec1e2c2" data-element_type="widget"
                                    data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <h4 class="footer-title">Blogs</h4>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-35f524d1 wpda_alignment-left elementor-widget elementor-widget-wpda-builder-menu"
                                    data-id="35f524d1" data-element_type="widget"
                                    data-widget_type="wpda-builder-menu.default">
                                    <div class="elementor-widget-container">
                                        <div class="wpda-mobile-navigation-toggle">
                                            <div class="wpda-toggle-box">
                                                <div class="wpda-toggle-inner"></div>
                                            </div>
                                        </div>
                                        <div class="wpda-navbar-collapse">
                                            <nav class="wpda-builder-menu">
                                                <ul id="menu-community" class="wpda-menu">
                                                    @foreach ($categoryBlog as $category)
                                                        <li id="menu-item-12031"
                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12031">
                                                            <a href="#">{{ $category->name }}</a>
                                                        </li>
                                                    @endforeach

                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-5ee14e87"
                            data-id="5ee14e87" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-2865ca4a elementor-widget elementor-widget-spacer"
                                    data-id="2865ca4a" data-element_type="widget" data-widget_type="spacer.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-spacer">
                                            <div class="elementor-spacer-inner"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element-custom_font_weight elementor-element-custom_color elementor-element elementor-element-2db723de elementor-widget elementor-widget-text-editor"
                                    data-id="2db723de" data-element_type="widget"
                                    data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <h4 class="footer-title">Liên kết nhanh</h4>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-4773ffed wpda_alignment-left elementor-widget elementor-widget-wpda-builder-menu"
                                    data-id="4773ffed" data-element_type="widget"
                                    data-widget_type="wpda-builder-menu.default">
                                    <div class="elementor-widget-container">
                                        <div class="wpda-mobile-navigation-toggle">
                                            <div class="wpda-toggle-box">
                                                <div class="wpda-toggle-inner"></div>
                                            </div>
                                        </div>
                                        <div class="wpda-navbar-collapse">
                                            <nav class="wpda-builder-menu">
                                                <ul id="menu-quick-links" class="wpda-menu">
                                                    <li id="menu-item-12023"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12023">
                                                        <a href="{{ route('home') }}">Trang chủ</a>
                                                    </li>
                                                    <li id="menu-item-12024"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12024">
                                                        <a href="{{ route(name: 'about') }}">Giới thiệu</a>
                                                    </li>
                                                    <li id="menu-item-12021"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12021">
                                                        <a href="{{ route('services') }}">Dịch vụ</a>
                                                    </li>

                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-5ee14e87"
                            data-id="5ee14e87" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-2865ca4a elementor-widget elementor-widget-spacer"
                                    data-id="2865ca4a" data-element_type="widget" data-widget_type="spacer.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-spacer">
                                            <div class="elementor-spacer-inner"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element-custom_font_weight elementor-element-custom_color elementor-element elementor-element-2db723de elementor-widget elementor-widget-text-editor"
                                    data-id="2db723de" data-element_type="widget"
                                    data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <h4 class="footer-title">Đăng ký nhận tin</h4>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-4773ffed wpda_alignment-left elementor-widget elementor-widget-wpda-builder-menu"
                                    data-id="4773ffed" data-element_type="widget"
                                    data-widget_type="wpda-builder-menu.default">
                                    <div class="elementor-widget-container">
                                        <div class="wpda-mobile-navigation-toggle">
                                            <div class="wpda-toggle-box">
                                                <div class="wpda-toggle-inner"></div>
                                            </div>
                                        </div>
                                        <div class="wpda-navbar-collapse">
                                            <form class="newsletter-form  contactForm" method="post"
                                                action="{{ route('contact.send') }}">
                                                @csrf
                                                <input type="email" id="email" class="newsletter-input"
                                                    name="email" placeholder="Nhập email của bạn">
                                                <button type="submit" class="newsletter-btn">
                                                    <i class="fas fa-paper-plane me-2"></i><span class="btn-text">Đăng
                                                        ký</span>
                                                </button>
                                            </form>
                                            <div id="successMessage"
                                                style="display: none; color: #16a34a; margin-top: 1rem; font-weight: 500;">
                                                ✅ Đăng ký email thành công!
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="elementor-element elementor-element-90ddb52 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                    data-id="90ddb52" data-element_type="widget" data-widget_type="divider.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-divider">
                            <span class="elementor-divider-separator"> </span>
                        </div>
                    </div>
                </div>
                <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element-custom_color elementor-element elementor-element-1d26260d elementor-widget elementor-widget-text-editor"
                    data-id="1d26260d" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <p>
                            <a href="">{{ $setting->footer }}</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    .widget-container img {
        max-width: 100%;
        height: auto;
        display: block;
        margin: 0 auto;
        /* căn giữa nếu cần */
    }

    .widget-container {
        max-width: 220px;
        /* hoặc điều chỉnh tùy bạn muốn nhỏ lại bao nhiêu */
        width: 100%;
    }

    @media (max-width: 767px) {
        .widget-container {
            max-width: 160px;
        }
    }

    .social-links {
        display: flex;
        gap: 15px;
        margin-top: 1.5rem;
    }

    .social-links a {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 45px;
        height: 45px;
        background: #f9fafb;
        border-radius: 50%;
        color: #6b7280;
        text-decoration: none;
        transition: all 0.3s ease;
        border: 2px solid #e5e7eb;
        filter: none;
    }

    .social-links a i {
        font-size: 18px;
        transition: transform 0.3s ease, color 0.3s ease;
        filter: none;
        text-shadow: none;
        line-height: 1;
        /* đảm bảo không bị giãn icon */
        display: inline-block;
        /* tránh bị kéo giãn */
        color: #d2d2d2
    }

    .social-links a:hover i {
        color: white;
        transform: scale(1.1);
        /* optional effect */
    }

    .social-links a:hover {
        background: #dc2626;
        color: white;
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(220, 38, 38, 0.3);
        border-color: #dc2626;
    }

    .social-links a.facebook:hover {
        background: #1877f2;
        border-color: #1877f2;
    }

    .social-links a.twitter:hover {
        background: #1da1f2;
        border-color: #1da1f2;
    }

    .social-links a.instagram:hover {
        background: linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888);
        border-color: #e6683c;
    }

    .social-links a.linkedin:hover {
        background: #0077b5;
        border-color: #0077b5;
    }

    .social-links a.youtube:hover {
        background: #ff0000;
        border-color: #ff0000;
    }

    .footer-title {
        position: relative;
        padding-bottom: 5px;
    }

    .footer-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 45px;
        height: 2px;
        background: linear-gradient(45deg, #dc2626, #ef4444);
        border-radius: 2px;

    }

    .newsletter-input {
        background: #f9fafb;
        border: 2px solid #e5e7eb;
        border-radius: 25px;
        padding: 12px 20px;
        color: #1f2937;
        width: 100%;
        margin-bottom: 1rem;
        transition: all 0.3s ease;
    }

    .newsletter-input::placeholder {
        color: #9ca3af;
    }

    .newsletter-input:focus {
        outline: none;
        border-color: #dc2626;
        box-shadow: 0 0 0 3px rgba(220, 38, 38, 0.1);
        background: #ffffff;
    }

    .newsletter-btn {
        background: linear-gradient(135deg, #dc2626 0%, #ef4444 50%, #f87171 100%);
        border: none;
        border-radius: 25px;
        padding: 12px 30px;
        color: white;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.4s ease;
        width: 100%;
        position: relative;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(220, 38, 38, 0.3);
    }

    .newsletter-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
        transition: left 0.6s ease;
    }

    .newsletter-btn:hover::before {
        left: 100%;
    }

    .newsletter-btn:hover {
        background: linear-gradient(135deg, #991b1b 0%, #dc2626 50%, #ef4444 100%);
        transform: translateY(-3px) scale(1.02);
        box-shadow: 0 8px 25px rgba(220, 38, 38, 0.4);
        color: white
    }

    .newsletter-btn:active {
        transform: translateY(-1px) scale(1.01);
        box-shadow: 0 4px 15px rgba(220, 38, 38, 0.5);
    }
</style>

<script>
    document.querySelectorAll('.contactForm').forEach(form => {
        form.addEventListener('submit', function (e) {
            e.preventDefault();

            const email = form.querySelector('input[name="email"]');
            const submitBtn = form.querySelector('.newsletter-btn');
            const successMessage = form.querySelector('.successMessage');
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            // Reset trạng thái
            email.classList.remove('is-invalid', 'is-valid');

            if (!email.value.trim() || !emailRegex.test(email.value)) {
                email.classList.add('is-invalid');
                return;
            } else {
                email.classList.add('is-valid');
            }

            // Loading UI
            submitBtn.disabled = true;
            submitBtn.querySelector('.btn-text').textContent = 'ĐANG GỬI...';

            const formData = new FormData(form);

            jQuery.ajax({
                url: form.action,
                method: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-TOKEN': form.querySelector('input[name="_token"]')?.value || ''
                },
                success: function () {
                    submitBtn.disabled = false;
                    submitBtn.querySelector('.btn-text').textContent = 'Đăng ký';
                    successMessage.style.display = 'block';
                    form.reset();
                    email.classList.remove('is-valid');

                    setTimeout(() => {
                        successMessage.style.display = 'none';
                    }, 5000);
                },
                error: function () {
                    submitBtn.disabled = false;
                    submitBtn.querySelector('.btn-text').textContent = 'Đăng ký';
                    alert('Gửi thất bại. Vui lòng thử lại.');
                }
            });
        });
    });
</script>

