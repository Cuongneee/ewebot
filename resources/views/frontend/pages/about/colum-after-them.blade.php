 <section
     class="elementor-section elementor-top-section elementor-element elementor-element-b7b6f7d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
     data-id="b7b6f7d" data-element_type="section">
     <div class="elementor-container elementor-column-gap-default">
         <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c744c2a"
             data-id="c744c2a" data-element_type="column">
             <div class="elementor-widget-wrap elementor-element-populated">
                 <section
                     class="elementor-section elementor-inner-section elementor-element elementor-element-11214ec elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                     data-id="11214ec" data-element_type="section">
                     <div class="container-fluid">
                         <div class="services-section">

                             <div class="services-container">
                                 @foreach ($aboutUs as $about)
                                     <!-- Card 1: Website Design -->
                                     <div class="service-card">
                                         <div class="decorative-dot dot-1"></div>
                                         <div class="decorative-dot dot-2"></div>
                                         <div class="decorative-dot dot-3"></div>

                                         <div class="service-icon">
                                             <img src="{{ showImage($about->image) }}" alt="{{ $about->title }}">
                                         </div>
                                         <div class="service-title">
                                             {{ $about->title }}
                                         </div>
                                         <div class="service-description">
                                             {{ $about->description }}
                                         </div>
                                     </div>
                                 @endforeach
                             </div>
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

     /* Đảm bảo tất cả các card có cùng kích thước */
     .services-container {
         display: grid;
         grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
         gap: 30px;
         max-width: 1200px;
         margin: 0 auto;
     }

     @media (min-width: 768px) {
         .services-container {
             grid-template-columns: repeat(4, 1fr);
         }
     }

     @media (max-width: 767px) {
         .services-container {
             grid-template-columns: 1fr;
             gap: 20px;
         }
     }

     .service-card {
         background: white;
         border-radius: 20px;
         padding: 35px 25px;
         text-align: center;
         box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
         transition: transform 0.3s ease, box-shadow 0.3s ease;
         display: flex;
         flex-direction: column;
         position: relative;
         overflow: hidden;
         width: 100%;
         min-height: 400px;
     }

     .service-card:hover {
         transform: translateY(-10px);
         box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
     }

     .service-title {
         font-size: 1.1rem;
         font-weight: 700;
         color: #2d3748;
         margin-bottom: 20px;
         text-transform: uppercase;
         letter-spacing: 0.3px;
         flex-shrink: 0;
         height: 60px;
         display: flex;
         align-items: center;
         justify-content: center;
         line-height: 1.3;
         padding: 0 5px;
     }

     .service-description {
         color: #4a5568;
         line-height: 1.6;
         font-size: 0.95rem;
         flex-grow: 1;
         display: flex;
         align-items: center;
         justify-content: center;
         text-align: center;
         padding: 0 15px;
         font-weight: 400;
         /* Kiểm soát việc xuống dòng tự nhiên */
         word-wrap: break-word;
         hyphens: auto;
         text-align: justify;
         text-align-last: center;
     }

     /* Decorative elements */
     .decorative-dot {
         position: absolute;
         width: 8px;
         height: 8px;
         border-radius: 50%;
         background: rgba(255, 42, 56, 0.3);
     }

     .dot-1 {
         top: 20px;
         right: 20px;
     }

     .dot-2 {
         top: 50px;
         right: 40px;
         background: rgba(251, 44, 44, 0.3);
     }

     .dot-3 {
         bottom: 30px;
         left: 20px;
         background: rgba(246, 69, 53, 0.2);
     }

     /* Mobile responsive */
     @media (max-width: 768px) {
         .service-card {
             padding: 30px 20px;
             min-height: 350px;
         }

         .service-icon {
             width: 60px;
             height: 60px;
             font-size: 1.5rem;
             margin-bottom: 20px;
         }

         .service-title {
             font-size: 1rem;
             height: 50px;
         }

         .service-description {
             font-size: 0.9rem;
             padding: 0 10px;
         }
     }

     .service-icon {
         text-align: center;
         padding: 20px 0;
     }

     .service-icon img {
         max-width: 100px;
         height: auto;
         object-fit: contain;
         transition: transform 0.3s ease;
     }

     .service-icon img:hover {
         transform: scale(1.05);
         /* Nhẹ nhàng phóng to khi hover */
     }
 </style>
