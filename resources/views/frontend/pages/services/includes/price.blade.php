 <section
     class="elementor-section elementor-top-section elementor-element elementor-element-2e2484d2 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
     data-id="2e2484d2" data-element_type="section">
     <div class="elementor-container elementor-column-gap-default">
         <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2b66badf"
             data-id="2b66badf" data-element_type="column">
             <div class="elementor-widget-wrap elementor-element-populated">
                 <div class="elementor-element-custom_font_size elementor-element-custom_font_family elementor-element-custom_font_weight elementor-element-custom_color elementor-element elementor-element-76726333 elementor-widget elementor-widget-text-editor"
                     data-id="76726333" data-element_type="widget" data-widget_type="text-editor.default">
                     <div class="elementor-widget-container">
                         <h5>price plans</h5>
                     </div>
                 </div>
                 <div class="elementor-element elementor-element-70ee1513 elementor-widget elementor-widget-heading"
                     data-id="70ee1513" data-element_type="widget" data-widget_type="heading.default">
                     <div class="elementor-widget-container">
                         <h2 class="elementor-heading-title elementor-size-default">
                             Choose a plan that<br>works for you</h2>
                     </div>
                 </div>
                 <div class="elementor-element elementor-element-19564d06 gt3_tabs_size-mini gt3_custom_advanced_tabs gt3_tabs_alignment-center gt3_tabs_space-0 elementor-widget elementor-widget-gt3-core-advanced-tabs"
                     data-id="19564d06" data-element_type="widget" data-widget_type="gt3-core-advanced-tabs.default">
                     <div class="elementor-widget-container">
                         <div data-active-tab="0" class="gt3_advanced_tabs ">
                             <div class="gt3_advanced_tabs_nav_wrapper">
                                 <ul class="gt3_advanced_tabs_nav">
                                     @foreach ($categories as $category)
                                         <li class="elementor-repeater-item-a73f6ae"><a
                                                 href="#tab-{{ $category->id }}"><span
                                                     class="gt3_tabs_nav__title">{{ $category->name }}</span></a>
                                         </li>
                                     @endforeach
                                 </ul>
                             </div>
                             @foreach ($categories as $category)
                                 <div id="tab-{{ $category->id }}">
                                     <div data-elementor-type="gt3-tabs" data-elementor-id="14367"
                                         class="elementor elementor-14367 gt3-template-14367 gt3-template gt3-tabs-template">
                                         <section
                                             class="elementor-section elementor-top-section elementor-element elementor-element-692b1540 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                             data-id="692b1540" data-element_type="section">
                                             <div class="elementor-container elementor-column-gap-default">
                                                 @foreach ($category->services as $service)
                                                     <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-4fb3f01a gt3_custom_price_box {{ $service->is_featured ? 'featured' : '' }}"
                                                         data-id="4fb3f01a" data-element_type="column">


                                                         <div class="elementor-widget-wrap elementor-element-populated">
                                                             <div class="elementor-element elementor-element-584815c2 elementor-widget elementor-widget-gt3-core-pricebox"
                                                                 data-id="584815c2" data-element_type="widget"
                                                                 data-widget_type="gt3-core-pricebox.default">
                                                                 <div class="elementor-widget-container">
                                                                     <div class="gt3_pricebox_module_wrapper type4">
                                                                         <div class="gt3_price_item-elementor">
                                                                             <div
                                                                                 class="gt3_price_item_wrapper-elementor">
                                                                                 <div class="gt3_item_cost_wrapper">
                                                                                     <div
                                                                                         class="price_item_title-elementor">
                                                                                         <h3>{{ $service->name }}
                                                                                         </h3>
                                                                                     </div>
                                                                                 </div>
                                                                                 <div
                                                                                     class="gt3_price_item-cost-elementor">
                                                                                     <span
                                                                                         class="price_item_prefix-elementor"></span>{{ number_format($service->price, 0, ',', '.') }}₫<span
                                                                                         class="price_item_suffix-elementor"></span>

                                                                                 </div>

                                                                                 <div
                                                                                     class="gt3_price_item_body-elementor">
                                                                                     <div class="items_text-price">
                                                                                     </div>
                                                                                 </div>
                                                                             </div>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="elementor-element-custom_font_size elementor-element elementor-element-6c664961 elementor-widget elementor-widget-text-editor"
                                                                 data-id="6c664961" data-element_type="widget"
                                                                 data-widget_type="text-editor.default">
                                                                 <div class="elementor-widget-container">
                                                                     <p>{{ $service->description }}
                                                                     </p>
                                                                 </div>
                                                             </div>
                                                             <div class="elementor-element elementor-element-66971121 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                                 data-id="66971121" data-element_type="widget"
                                                                 data-widget_type="divider.default">
                                                                 <div class="elementor-widget-container">
                                                                     <div class="elementor-divider">
                                                                         <span class="elementor-divider-separator">
                                                                         </span>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element-custom_color elementor-element elementor-element-7b68579a elementor-widget elementor-widget-text-editor"
                                                                 data-id="7b68579a" data-element_type="widget"
                                                                 data-widget_type="text-editor.default">
                                                                 <div class="elementor-widget-container">
                                                                     <ul class="gt3_styled_list">
                                                                         @foreach ($service->features as $feature)
                                                                             <li><i class="gt3_list__icon fa fa-check"
                                                                                     style="color: #55e1cf"></i>
                                                                                 {{ $feature }} </li>
                                                                         @endforeach
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                             <div class="gt3-core-button--alignment_inline elementor-element elementor-element-317eeefa elementor-widget elementor-widget-gt3-core-button"
                                                                 data-id="317eeefa" data-element_type="widget"
                                                                 data-widget_type="gt3-core-button.default">
                                                                 <div class="elementor-widget-container">
                                                                     <div
                                                                         class="gt3_module_button_elementor size_custom alignment_inline button_icon_none hover_type5 rounded">
                                                                         <a class="button_size_elementor_custom alignment_inline border_icon_none hover_type5 btn_icon_position_left {{ $service->is_featured ? 'btn-featured' : '' }}"
                                                                             href="#">

                                                                             <span class="gt3_module_button__container">
                                                                                 <span
                                                                                     class="elementor_gt3_btn_text">Register</span>
                                                                                 <span
                                                                                     class="gt3_module_button__cover front"></span>
                                                                                 <span
                                                                                     class="gt3_module_button__cover back"></span>
                                                                             </span>
                                                                         </a>
                                                                     </div>

                                                                     <script type="application/json" id="settings--317eeefa">[]</script>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 @endforeach
                                             </div>
                                         </section>
                                     </div>
                                 </div>
                             @endforeach
                         </div>

                         <script type="application/json" id="settings--19564d06">[]</script>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
