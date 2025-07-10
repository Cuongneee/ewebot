   <script>
       // Tự động đếm số lượng service cards và set data attribute
       document.addEventListener('DOMContentLoaded', function() {
           const servicesGrid = document.getElementById('servicesGrid');
           const serviceCards = servicesGrid.querySelectorAll('.service-card');
           const itemCount = serviceCards.length;

           // Set data attribute để CSS có thể điều chỉnh layout
           servicesGrid.setAttribute('data-items', itemCount);

           // Update layout info display
           document.getElementById('itemCount').textContent = itemCount;


       });
   </script>
   <section
       class="elementor-section elementor-top-section elementor-element elementor-element-ea07f38 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
       data-id="ea07f38" data-element_type="section">
       <div class="elementor-container elementor-column-gap-default">
           <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7de0ca6"
               data-id="7de0ca6" data-element_type="column">
               <div class="elementor-widget-wrap elementor-element-populated">
                   <div class="elementor-element elementor-element-b2de140 gt3_pulse_out_element elementor-absolute elementor-widget elementor-widget-image"
                       data-id="b2de140" data-element_type="widget"
                       data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
                       <div class="elementor-widget-container">
                           <img loading="lazy" decoding="async" width="832" height="690"
                               src="/frontend/assets/img/home10_ellipse2.png"
                               class="attachment-full size-full wp-image-7548" alt=""
                               srcset="/frontend/assets/img/home10_ellipse2.png 832w"
                               sizes="auto, (max-width: 832px) 100vw, 832px" title="Ellipse" />
                       </div>
                   </div>


                   <div class="elementor-element elementor-element-24b0c58 gt3_rotated_element elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image"
                       data-id="24b0c58" data-element_type="widget"
                       data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
                       <div class="elementor-widget-container">
                           <img loading="lazy" decoding="async" width="26" height="26"
                               src="/frontend/assets/img/home_06_icon_22.png"
                               class="attachment-full size-full wp-image-5556" alt="" title="home_06_icon_22" />
                       </div>
                   </div>
                   <div class="elementor-element elementor-element-86024f6 gt3_rotated_element elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image"
                       data-id="86024f6" data-element_type="widget"
                       data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
                       <div class="elementor-widget-container">
                           <img loading="lazy" decoding="async" width="72" height="74"
                               src="/frontend/assets/img/triangle_orange.png"
                               class="attachment-full size-full wp-image-3274" alt=""
                               srcset="/frontend/assets/img/triangle_orange.png 72w"
                               sizes="auto, (max-width: 72px) 100vw, 72px" title="triangle" />
                       </div>
                   </div>
                   <div class="elementor-element elementor-element-7776b0b gt3_rotated_element elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image"
                       data-id="7776b0b" data-element_type="widget"
                       data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
                       <div class="elementor-widget-container">
                           <img loading="lazy" decoding="async" width="72" height="74"
                               src="/frontend/assets/img/triangle_blue.png"
                               class="attachment-full size-full wp-image-3275" alt=""
                               srcset="/frontend/assets/img/triangle_blue.png 72w"
                               sizes="auto, (max-width: 72px) 100vw, 72px" title="triangle" />
                       </div>
                   </div>
                   <div class="elementor-element elementor-element-cdd51bd gt3_rotated_element elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image"
                       data-id="cdd51bd" data-element_type="widget"
                       data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
                       <div class="elementor-widget-container">
                           <img loading="lazy" decoding="async" width="26" height="26"
                               src="/frontend/assets/img/home_06_icon_22.png"
                               class="attachment-full size-full wp-image-5556" alt="" title="home_06_icon_22" />
                       </div>
                   </div>
                   <div class="elementor-element elementor-element-04af53c gt3_moved_element elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image"
                       data-id="04af53c" data-element_type="widget"
                       data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
                       <div class="elementor-widget-container">
                           <img loading="lazy" decoding="async" width="42" height="42"
                               src="/frontend/assets/img/home_06_icon_23.png"
                               class="attachment-full size-full wp-image-5555" alt="" title="home_06_icon_23" />
                       </div>
                   </div>
                   <section class="services-section">
                       <div class="container container-custom">
                           <!-- Grid sẽ tự động điều chỉnh dựa trên số lượng items -->
                           <div class="services-grid" id="servicesGrid">
                               @foreach ($categoryService as $category)
                                   <!-- Development Service -->
                                   <div class="service-card">
                                       <div class="decorative-dots">
                                           <div class="dot"></div>
                                           <div class="dot"></div>
                                           <div class="dot"></div>
                                       </div>
                                       <div class="service-icon icon-development">
                                           <img src="{{ showImage($category->logo) }}" alt="">
                                       </div>
                                       <h3 class="service-title">{{ $category->name }}</h3>
                                       <p class="service-description">
                                           {!! $category->description !!}
                                       </p>
                                   </div>
                               @endforeach


                           </div>
                       </div>
                   </section>

               </div>
           </div>
       </div>
   </section>
   <style>
       .services-section {
           padding: 60px 0;
       }

       /* Flexible Grid Layout */
       .services-grid {
           display: grid;
           gap: 25px;
           justify-content: center;
           align-items: start;
       }

       /* Optimized layout logic */
       .services-grid[data-items="1"] {
           grid-template-columns: minmax(300px, 400px);
       }

       .services-grid[data-items="2"] {
           grid-template-columns: repeat(2, minmax(300px, 400px));
           max-width: 900px;
           margin: 0 auto;
       }

       .services-grid[data-items="3"] {
           grid-template-columns: repeat(3, minmax(280px, 350px));
           max-width: 1100px;
           margin: 0 auto;
       }

       .services-grid[data-items="4"] {
           grid-template-columns: repeat(4, minmax(250px, 280px));
           max-width: 1200px;
           margin: 0 auto;
       }

       .services-grid[data-items="5"] {
           grid-template-columns: repeat(3, minmax(280px, 350px));
           max-width: 1100px;
           margin: 0 auto;
       }

       .services-grid[data-items="6"] {
           grid-template-columns: repeat(3, minmax(280px, 350px));
           max-width: 1100px;
           margin: 0 auto;
       }

       .services-grid[data-items="7"] {
           grid-template-columns: repeat(3, minmax(280px, 350px));
           max-width: 1100px;
           margin: 0 auto;
       }

       .services-grid[data-items="8"] {
           grid-template-columns: repeat(4, minmax(250px, 280px));
           max-width: 1200px;
           margin: 0 auto;
       }

       /* Responsive Grid */
       @media (max-width: 1300px) {

           .services-grid[data-items="4"],
           .services-grid[data-items="8"] {
               grid-template-columns: repeat(3, minmax(280px, 350px));
               max-width: 1100px;
           }
       }

       @media (max-width: 992px) {

           .services-grid[data-items="3"],
           .services-grid[data-items="4"],
           .services-grid[data-items="5"],
           .services-grid[data-items="6"],
           .services-grid[data-items="7"],
           .services-grid[data-items="8"] {
               grid-template-columns: repeat(2, minmax(300px, 400px));
               max-width: 900px;
           }
       }

       @media (max-width: 768px) {
           .services-grid {
               grid-template-columns: 1fr !important;
               max-width: 400px;
               margin: 0 auto;
           }
       }

       .service-card {
           background: white;
           border-radius: 15px;
           padding: 25px 20px;
           position: relative;
           transform: rotateX(3deg) rotateY(-2deg);
           transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
           z-index: 1;
           height: fit-content;

           /* Hiệu ứng 3D với multiple shadows */
           box-shadow:
               0 8px 16px rgba(0, 0, 0, 0.15),
               0 16px 32px rgba(0, 0, 0, 0.1),
               0 32px 64px rgba(0, 0, 0, 0.05);
       }

       .service-card:hover {
           transform: rotateX(0deg) rotateY(0deg) translateY(-12px) scale(1.03);
           z-index: 10;
           box-shadow:
               0 16px 32px rgba(0, 0, 0, 0.2),
               0 32px 64px rgba(0, 0, 0, 0.15),
               0 64px 128px rgba(0, 0, 0, 0.1);
       }

       .service-card.featured .service-title {
           color: white;
       }

       .service-card.featured .service-description {
           color: rgba(255, 255, 255, 0.9);
       }

       .service-icon {
           width: 65px;
           height: 65px;
           display: flex;
           align-items: center;
           justify-content: center;
           margin-bottom: 18px;
           font-size: 22px;
           position: relative;
       }


       .service-title {
           font-size: 20px;
           font-weight: 700;
           color: #2d3436;
           margin-bottom: 15px;
           letter-spacing: -0.3px;
           transition: all 0.3s ease;
       }

       .service-description {
           color: #636e72;
           line-height: 1.6;
           font-size: 14px;
           font-weight: 400;
           margin-bottom: 0;
           transition: all 0.3s ease;
       }

       .container-custom {
           max-width: 1300px;
       }

       /* Decorative elements */
       .decorative-dots {
           position: absolute;
           top: 20px;
           right: 20px;
           display: flex;
           gap: 6px;
       }

       .dot {
           width: 6px;
           height: 6px;
           border-radius: 50%;
           background: rgba(255, 255, 255, 0.4);
           box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
           transition: all 0.3s ease;
       }

       .service-card:hover .dot {
           transform: translateY(-2px);
           box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
       }

       .service-card:not(.featured) .decorative-dots .dot {
           background: rgba(0, 0, 0, 0.15);
       }

       /* Layout info display */
       .layout-info {
           position: fixed;
           top: 20px;
           right: 20px;
           background: rgba(0, 0, 0, 0.8);
           color: white;
           padding: 10px 15px;
           border-radius: 8px;
           font-size: 12px;
           z-index: 1000;
       }
   </style>
