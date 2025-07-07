 <section
     class="elementor-section elementor-top-section elementor-element elementor-element-af3eb13 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
     data-id="af3eb13" data-element_type="section">
     <div class="elementor-container elementor-column-gap-default">
         <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-a15aad9"
             data-id="a15aad9" data-element_type="column">
             <div class="elementor-widget-wrap elementor-element-populated">
                 <div class="elementor-element-custom_font_size elementor-element-custom_font_weight elementor-element elementor-element-7ca78cd elementor-widget elementor-widget-text-editor"
                     data-id="7ca78cd" data-element_type="widget" data-widget_type="text-editor.default">
                     <div class="elementor-widget-container">
                         <h5>Get in touch</h5>
                     </div>
                 </div>
                 <div class="elementor-element elementor-element-f7ab0d8 elementor-widget elementor-widget-heading"
                     data-id="f7ab0d8" data-element_type="widget" data-widget_type="heading.default">
                     <div class="elementor-widget-container">
                         <h2 class="elementor-heading-title elementor-size-default">
                             Contact Us</h2>
                     </div>
                 </div>
                 <div class="elementor-element elementor-element-3c0a276 elementor-widget elementor-widget-text-editor"
                     data-id="3c0a276" data-element_type="widget" data-widget_type="text-editor.default">
                     <div class="elementor-widget-container">
                         <p>I have worls-class, flexible support via live chat, email and
                             hone. I guarantee that you’ll be able to have any issue
                             resolved within 24 hours.</p>
                     </div>
                 </div>
                 <div class="elementor-element elementor-element-5d1fa19 elementor-widget elementor-widget-spacer"
                     data-id="5d1fa19" data-element_type="widget" data-widget_type="spacer.default">
                     <div class="elementor-widget-container">
                         <div class="elementor-spacer">
                             <div class="elementor-spacer-inner"></div>
                         </div>
                     </div>
                 </div>
                 <div class="elementor-element elementor-element-c2807bc elementor-widget elementor-widget-gt3-core-custommeta"
                     data-id="c2807bc" data-element_type="widget" data-widget_type="gt3-core-custommeta.default">
                     <div class="elementor-widget-container">
                         <div class="gt3_meta_values_wrapper vertical align_left">
                             <div class="gt3_meta_values_item elementor-repeater-item-04db689">
                                 <span class="gt3_meta_label_title">Điện thoại:</span>
                                 <div class="gt3_meta_value type_custom">{{ $setting->hotline }}
                                 </div>
                             </div>
                             <div class="gt3_meta_values_item elementor-repeater-item-210ff16">
                                 <span class="gt3_meta_label_title">Gửi Email:</span>
                                 <div class="gt3_meta_value type_custom">

                                     {{ $setting->email }}</div>
                             </div>
                             <div class="gt3_meta_values_item elementor-repeater-item-30f9222">
                                 <span class="gt3_meta_label_title">Địa chỉ:</span>
                                 @php
                                     $addresses = json_decode($setting->address, true) ?: [];
                                 @endphp
                                 @foreach ($addresses as $line)
                                     <div class="gt3_meta_value type_custom">
                                         @foreach (explode(',', $line) as $part)
                                             {{ trim($part) }}
                                         @endforeach
                                     </div>
                                 @endforeach
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="elementor-element elementor-element-96b973e elementor-widget elementor-widget-gt3-core-custommeta"
                     data-id="96b973e" data-element_type="widget" data-widget_type="gt3-core-custommeta.default">
                     <div class="elementor-widget-container">
                         <div class="gt3_meta_values_wrapper vertical align_left">
                             <div class="gt3_meta_values_item elementor-repeater-item-914ef92">
                                 <div class="gt3_meta_value type_custom"></div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-baec281"
             data-id="baec281" data-element_type="column">
             <div class="elementor-widget-wrap">
             </div>
         </div>
         <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-1e81522"
             data-id="1e81522" data-element_type="column">
             <div class="elementor-widget-wrap elementor-element-populated">
                 <section
                     class="elementor-section elementor-inner-section elementor-element elementor-element-0e7dee3 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                     data-id="0e7dee3" data-element_type="section">
                     <div class="elementor-container elementor-column-gap-default">
                         <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-8b975d4"
                             data-id="8b975d4" data-element_type="column"
                             data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                             <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-c9a556c elementor-widget elementor-widget-heading"
                                     data-id="c9a556c" data-element_type="widget" data-widget_type="heading.default">
                                     <div id="successMessage" class="alert alert-success" style="display:none;">
                                         Gửi yêu cầu thành công! Chúng tôi sẽ liên hệ sớm.
                                     </div>
                                     <div class="elementor-widget-container">
                                         <h2 class="elementor-heading-title elementor-size-default">
                                             Gửi thông tin cho chúng tôi</h2>
                                     </div>
                                 </div>
                                 <div class="elementor-element elementor-element-5d82e16 elementor-widget elementor-widget-text-editor"
                                     data-id="5d82e16" data-element_type="widget"
                                     data-widget_type="text-editor.default">
                                     <div class="elementor-widget-container">
                                         <p>Trong vòng 24h chúng tôi sẽ sớm liên hệ lại với bạn.</p>
                                     </div>

                                 </div>
                                 <div class="elementor-element elementor-element-ba9d379 elementor-widget elementor-widget-spacer"
                                     data-id="ba9d379" data-element_type="widget" data-widget_type="spacer.default">
                                     <div class="elementor-widget-container">
                                         <div class="elementor-spacer">
                                             <div class="elementor-spacer-inner"></div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="elementor-element elementor-element-c3a456a elementor-widget elementor-widget-html"
                                     data-id="c3a456a" data-element_type="widget" data-widget_type="html.default">
                                     <div class="elementor-widget-container">

                                         <div class="wpcf7 no-js" id="wpcf7-f1881-p382-o1" lang="en-US"
                                             dir="ltr" data-wpcf7-id="1881">
                                             <div class="screen-reader-response">
                                                 <p role="status" aria-live="polite" aria-atomic="true"></p>
                                                 <ul></ul>
                                             </div>
                                             <form id="contactForm" action="{{ route('contact.send') }}"
                                                 method="post" class="wpcf7-form init" aria-label="Contact form">
                                                 @csrf
                                                 <div class="row contact_form_2">
                                                     <div class="span6">
                                                         <p>
                                                             <span class="wpcf7-form-control-wrap"
                                                                 data-name="name"><input size="40"
                                                                     maxlength="400"
                                                                     class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                     aria-required="true" aria-invalid="false"
                                                                     placeholder="Nhập tên*" value="" required
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
                                                                     type="email" name="email" required
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
                                                                     placeholder="SĐT*" value="" type="text"
                                                                     required name="phone" /></span>
                                                         </p>
                                                     </div>
                                                     <div class="span6">
                                                         <p>
                                                             <span class="wpcf7-form-control-wrap"
                                                                 data-name="website"><input size="40"
                                                                     maxlength="400"
                                                                     class="wpcf7-form-control wpcf7-url wpcf7-validates-as-required wpcf7-text"
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
                 </section>
                 <div class="elementor-element elementor-element-33e5731 elementor-widget elementor-widget-spacer"
                     data-id="33e5731" data-element_type="widget" data-widget_type="spacer.default">
                     <div class="elementor-widget-container">
                         <div class="elementor-spacer">
                             <div class="elementor-spacer-inner"></div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

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
