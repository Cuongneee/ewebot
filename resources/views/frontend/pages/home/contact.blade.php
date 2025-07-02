<section
    class="elementor-section elementor-top-section elementor-element elementor-element-e787d2f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
    data-id="e787d2f" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6c3e58d"
            data-id="6c3e58d" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-1436dbe animated-fast elementor-widget elementor-widget-image animated fadeInLeft"
                    data-id="1436dbe" data-element_type="widget" data-settings='{"_animation":"fadeInLeft"}'
                    data-widget_type="image.default">
                    <div class="elementor-widget-container">
                        <img loading="lazy" decoding="async" width="665" height="585"
                            src="/frontend/assets/img/home10_img5.jpg" class="attachment-full size-full wp-image-7565"
                            alt="" sizes="auto, (max-width: 665px) 100vw, 665px" title="Smiling girl" />
                    </div>
                </div>
            </div>
        </div>
        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-0138aa4"
            data-id="0138aa4" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <section
                    class="elementor-section elementor-inner-section elementor-element elementor-element-a85ef1c elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="a85ef1c" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-81cd046"
                            data-id="81cd046" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-eb8944d elementor-widget elementor-widget-heading"
                                    data-id="eb8944d" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">
                                            Bạn cần tư vấn?
                                        </h2>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-738ce57 elementor-widget elementor-widget-text-editor"
                                    data-id="738ce57" data-element_type="widget" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <p>
                                            Vui lòng điền thông tin, chúng tôi sẽ liên hệ sớm nhất có thể.
                                        </p>
                                    </div>
                                    <div id="successMessage" class="alert alert-success" style="display:none;">
                                        Gửi yêu cầu thành công! Chúng tôi sẽ liên hệ sớm.
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-3d1883c gt3_custom_form_large default elementor-widget elementor-widget-shortcode"
                                    data-id="3d1883c" data-element_type="widget" data-widget_type="shortcode.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-shortcode">
                                            <div class="wpcf7 js" id="wpcf7-f5426-p6782-o2" lang="en-US"
                                                dir="ltr" data-wpcf7-id="5426">
                                                <div class="screen-reader-response">
                                                    <p role="status" aria-live="polite" aria-atomic="true"></p>
                                                    <ul></ul>
                                                </div>
                                                <form id="contactForm" method="post"
                                                    action="{{ route('contact.send') }}" novalidate="novalidate">
                                                    @csrf
                                                    <div class="row gt3_contactform_home6">
                                                        <div class="span6">
                                                            <p>
                                                                <span class="wpcf7-form-control-wrap"
                                                                    data-name="name"><input size="40"
                                                                        maxlength="400"
                                                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                        aria-required="true" aria-invalid="false"
                                                                        placeholder="Nhập tên*" value=""
                                                                        type="text" name="name" /></span>
                                                            </p>
                                                        </div>
                                                        <div class="span6">
                                                            <p>
                                                                <span class="wpcf7-form-control-wrap"
                                                                    data-name="your-email"><input size="40"
                                                                        maxlength="400"
                                                                        class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email"
                                                                        aria-required="true" aria-invalid="false"
                                                                        placeholder="Email*" value=""
                                                                        type="email" name="email"
                                                                        id="email" /></span>
                                                            </p>
                                                        </div>
                                                        <div class="span6">
                                                            <p>
                                                                <span class="wpcf7-form-control-wrap"
                                                                    data-name="phone"><input size="40"
                                                                        maxlength="400"
                                                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                        aria-required="true" aria-invalid="false"
                                                                        placeholder="Phone*" value=""
                                                                        type="text" name="phone" /></span>
                                                            </p>
                                                        </div>
                                                        <div class="span6">
                                                            <p>
                                                                <span class="wpcf7-form-control-wrap"
                                                                    data-name="website"><input size="40"
                                                                        maxlength="400"
                                                                        class="wpcf7-form-control wpcf7-url wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-url"
                                                                        aria-invalid="false" placeholder="Website"
                                                                        value="" type="url" name="website"
                                                                        id="website" /></span>
                                                            </p>
                                                        </div>
                                                        <div class="span12">
                                                            <p>
                                                                <span class="wpcf7-form-control-wrap"
                                                                    data-name="message">
                                                                    <textarea cols="40" rows="10" maxlength="2000" class="wpcf7-form-control wpcf7-textarea"
                                                                        aria-invalid="false" placeholder="Nội dung" name="message"></textarea>
                                                                </span>
                                                            </p>
                                                        </div>
                                                        <div class="span12">
                                                            <button type="submit" class="submit-btn">
                                                                <span class="btn-text">Gửi yêu cầu</span>
                                                            </button>
                                                        </div>


                                                    </div>
                                                    <div class="wpcf7-response-output" aria-hidden="true"></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
<style>
    .submit-btn {
        background: linear-gradient(135deg, #ff9500 0%, #ff6b35 100%);
        color: var(--white);
        border: none;
        padding: 12px 24px;
        border-radius: 8px;
        font-size: 1rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(255, 149, 0, 0.3);
        cursor: pointer;
        width: auto;
        display: inline-block;
        position: relative;
        overflow: hidden;
        z-index: 1;
    }

    /* Hiệu ứng sweep từ trái qua phải */
    .submit-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, #ffb347 0%, #ff8c42 100%);
        transition: left 0.4s ease;
        z-index: -1;
    }

    .submit-btn:hover::before {
        left: 0;
    }

    .submit-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(255, 149, 0, 0.4);
        color: var(--white);
    }

    .submit-btn:active {
        transform: translateY(0);
    }

    /* Đảm bảo text luôn ở trên */
    .submit-btn .btn-text {
        position: relative;
        color: white
    }
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();

        const form = this;
        const formData = new FormData(form);
        const submitBtn = form.querySelector('.submit-btn');
        const successMessage = document.getElementById('successMessage');

        // Reset validation
        form.querySelectorAll('.wpcf7-form-control-wrap').forEach(input => {
            input.classList.remove('is-invalid', 'is-valid');
        });

        // Validate form
        let isValid = true;
        const requiredFields = form.querySelectorAll('[required]');

        requiredFields.forEach(field => {
            if (!field.value.trim()) {
                field.classList.add('is-invalid');
                isValid = false;
            } else {
                field.classList.add('is-valid');
            }
        });

        // Email validation
        const email = form.querySelector('#email');
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (email.value && !emailRegex.test(email.value)) {
            email.classList.add('is-invalid');
            isValid = false;
        }

        // Website validation
        const website = form.querySelector('#website');
        if (website.value && !website.value.includes('.')) {
            website.classList.add('is-invalid');
            isValid = false;
        }

        if (isValid) {
            // Show loading
            submitBtn.classList.add('loading');
            submitBtn.querySelector('.btn-text').textContent = 'SENDING...';

            // Gửi mail qua AJAX
            jQuery.ajax({
                url: '/send-contact',
                method: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    // Reset nút
                    // console.log(response);

                    submitBtn.classList.remove('loading');
                    submitBtn.querySelector('.btn-text').textContent = 'GỬI YÊU CẦU';

                    // Hiện thông báo thành công
                    successMessage.style.display = 'block';
                    // Reset form
                    form.reset();
                    form.querySelectorAll('.form-control').forEach(input => {
                        input.classList.remove('is-valid');
                    });

                    // Ẩn thông báo sau 5s
                    setTimeout(() => {
                        successMessage.style.display = 'none';
                    }, 5000);
                },
                error: function(xhr) {
                    // console.log('lỗi', xhr);

                    submitBtn.classList.remove('loading');
                    submitBtn.querySelector('.btn-text').textContent = 'GỬI YÊU CẦU';

                    alert('Gửi thất bại. Vui lòng thử lại.');
                }
            });
        }
    });

    // Real-time validation giữ nguyên như bạn viết
    document.querySelectorAll('.form-control').forEach(input => {
        input.addEventListener('blur', function() {
            if (this.hasAttribute('required') && !this.value.trim()) {
                this.classList.add('is-invalid');
                this.classList.remove('is-valid');
            } else if (this.value.trim()) {
                this.classList.remove('is-invalid');
                this.classList.add('is-valid');
            }
        });

        input.addEventListener('input', function() {
            if (this.classList.contains('is-invalid') && this.value.trim()) {
                this.classList.remove('is-invalid');
                this.classList.add('is-valid');
            }
        });
    });
</script>
