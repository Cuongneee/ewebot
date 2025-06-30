<style>
    .curved-image-wrapper {
        position: relative;
        width: 100%;
        max-width: 500px;
        height: 500px;
    }

    .professional-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: inherit;
    }

    /* Right side - Form section */
    .form-section {
        padding: 60px 50px;

        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .form-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: #374151;
        margin-bottom: 20px;
        line-height: 1.2;
    }

    .form-subtitle {
        color: var(--text-gray);
        font-size: 1.1rem;
        line-height: 1.6;
        margin-bottom: 40px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-control:focus {
        border-color: var(--primary-red);
        box-shadow: 0 0 0 0.2rem rgba(220, 38, 38, 0.1);

        outline: none;
    }

    .form-control::placeholder {
        color: #9ca3af;
        font-weight: 400;
    }

    textarea.form-control {
        min-height: 120px;
        resize: vertical;
    }

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

    /* Form validation styles */
    .form-control.is-invalid {
        border-color: var(--primary-red);
    }

    .form-control.is-valid {
        border-color: #10b981;
    }

    .invalid-feedback {
        color: var(--primary-red);
        font-size: 0.875rem;
        margin-top: 5px;
        display: block;
    }

    .success-message {
        background: #10b981;
        color: white;
        padding: 15px 20px;
        border-radius: 8px;
        margin-bottom: 20px;
        display: none;
    }

    .success-message.show {
        display: block;
        animation: slideDown 0.3s ease;
    }

    @keyframes slideDown {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Responsive design */
    @media (max-width: 768px) {
        .contact-section {
            padding: 40px 0;
        }

        .contact-container {
            margin: 0 15px;
            border-radius: 15px;
        }

        .image-section {
            padding: 30px 20px;
            min-height: 400px;
        }

        .curved-image-wrapper {
            max-width: 350px;
            height: 350px;
        }

        .curved-shape {
            width: 300px;
            height: 300px;
        }

        .curve-blue {
            width: 120px;
            height: 120px;
            top: -10px;
            right: -10px;
        }

        .curve-green {
            width: 100px;
            height: 100px;
            bottom: 10px;
            left: -20px;
        }

        .form-section {
            padding: 40px 30px;
        }

        .form-title {
            font-size: 2rem;
        }

        .form-subtitle {
            font-size: 1rem;
        }

        .submit-btn {
            width: 100%;
        }
    }

    @media (max-width: 576px) {
        .form-section {
            padding: 30px 20px;
        }

        .form-title {
            font-size: 1.8rem;
        }

        .image-section {
            padding: 30px 15px;
        }

        .curved-image-wrapper {
            max-width: 280px;
            height: 280px;
        }

        .curved-shape {
            width: 250px;
            height: 250px;
        }
    }

    /* Loading state */
    .submit-btn.loading {
        pointer-events: none;
        opacity: 0.7;
        position: relative;
    }

    .submit-btn.loading::after {
        content: '';
        position: absolute;
        width: 20px;
        height: 20px;
        border: 2px solid transparent;
        border-top: 2px solid var(--white);
        border-radius: 50%;
        animation: spin 1s linear infinite;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    @keyframes spin {
        0% {
            transform: translate(-50%, -50%) rotate(0deg);
        }

        100% {
            transform: translate(-50%, -50%) rotate(360deg);
        }
    }
</style>

<section class="contact-section">
    <div class="container-fluid">
        <div class="contact-container">
            <div class="row g-0 h-100">
                <!-- Left side - Image with curved design -->
                <div class="col-lg-6">
                    <div class="image-section">
                        <div class="curved-image-wrapper">
                            <div class="curved-shape">
                                <img src="/frontend/assets/img/home10_img5.jpg" alt="Professional SEO Consultant"
                                    class="professional-image">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right side - Form -->
                <div class="col-lg-6">
                    <div class="form-section">
                        <div class="success-message" id="successMessage">
                            <i class="fas fa-check-circle me-2"></i>
                            Cảm ơn! Chúng tôi sẽ liên hệ lại với bạn sớm nhất.
                        </div>

                        <h2 class="form-title">Bạn cần tư vấn?</h2>
                        <p class="form-subtitle">
                            Vui lòng điền thông tin, chúng tôi sẽ liên hệ sớm nhất có thể. </p>

                        <form id="contactForm" novalidate method="POST" action="{{ route('contact.send') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Tên của bạn*" required>
                                        <div class="invalid-feedback">
                                            Vui lòng nhập tên
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Email*" required>
                                        <div class="invalid-feedback">
                                            Vui lòng nhập email
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="tel" class="form-control" id="phone" name="phone"
                                            placeholder="SĐT*" required>
                                        <div class="invalid-feedback">
                                            Vui lòng nhập số điện thoại
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="url" class="form-control" id="website" name="website"
                                            placeholder="Website">
                                    </div>
                                </div>

                            </div>

                            <div class="form-group">
                                <textarea class="form-control" id="message" name="message" placeholder="Nội dung" rows="4"></textarea>
                            </div>

                            <button type="submit" class="submit-btn">
                                <span class="btn-text">Gửi yêu cầu</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();

        const form = this;
        const formData = new FormData(form);
        const submitBtn = form.querySelector('.submit-btn');
        const successMessage = document.getElementById('successMessage');

        // Reset validation
        form.querySelectorAll('.form-control').forEach(input => {
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
                    successMessage.classList.add('show');

                    // Reset form
                    form.reset();
                    form.querySelectorAll('.form-control').forEach(input => {
                        input.classList.remove('is-valid');
                    });

                    // Ẩn thông báo sau 5s
                    setTimeout(() => {
                        successMessage.classList.remove('show');
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
