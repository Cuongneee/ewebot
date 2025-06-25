 <section
     class="elementor-section elementor-top-section elementor-element elementor-element-1f1a41e elementor-section-boxed elementor-section-height-default elementor-section-height-default"
     data-id="1f1a41e" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
     <div class="elementor-container elementor-column-gap-default">
         <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-bf10177"
             data-id="bf10177" data-element_type="column">
             <div class="elementor-widget-wrap elementor-element-populated">
                 <section
                     class="elementor-section elementor-inner-section elementor-element elementor-element-b50a47f elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                     data-id="b50a47f" data-element_type="section">
                     <div class="elementor-container elementor-column-gap-default">
                         <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-d3eaf9a"
                             data-id="d3eaf9a" data-element_type="column">
                             <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-715c482 elementor-widget elementor-widget-spacer"
                                     data-id="715c482" data-element_type="widget" data-widget_type="spacer.default">
                                     <div class="elementor-widget-container">
                                         <div class="elementor-spacer">
                                             <div class="elementor-spacer-inner"></div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="elementor-element elementor-element-9680a26 elementor-widget elementor-widget-wpda-header-logo"
                                     data-id="9680a26" data-element_type="widget"
                                     data-widget_type="wpda-header-logo.default">
                                     <div class="elementor-widget-container">
                                         <div class="wpda-builder-logo_container ">
                                             <a aria-label="Logo" href="{{ route('home') }}">
                                                 <img class="wpda-builder-logo"
                                                     src="{{ showImage($setting->logo_footer) }}" alt=""
                                                     title="logo_retina" width="298" height="96" />
                                             </a>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="elementor-element elementor-element-57b6a96 elementor-widget elementor-widget-spacer"
                                     data-id="57b6a96" data-element_type="widget" data-widget_type="spacer.default">
                                     <div class="elementor-widget-container">
                                         <div class="elementor-spacer">
                                             <div class="elementor-spacer-inner"></div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-7babad7"
                             data-id="7babad7" data-element_type="column">
                             <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-47b350d elementor-widget elementor-widget-spacer"
                                     data-id="47b350d" data-element_type="widget" data-widget_type="spacer.default">
                                     <div class="elementor-widget-container">
                                         <div class="elementor-spacer">
                                             <div class="elementor-spacer-inner"></div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="elementor-element elementor-element-554c80a elementor-position-left elementor-widget__width-auto elementor-widget-tablet__width-auto elementor-widget-mobile__width-inherit elementor-vertical-align-top elementor-widget elementor-widget-gt3-core-imagebox"
                                     data-id="554c80a" data-element_type="widget"
                                     data-widget_type="gt3-core-imagebox.default">
                                     <div class="elementor-widget-container">
                                         <div class="gt3-core-imagebox-wrapper elementor-image_icon-position-default">
                                             <figure class="gt3-core-imagebox-img"><img width="58" height="74"
                                                     src="/frontend/assets/img/img_box_29.png"
                                                     class="attachment-full size-full wp-image-1444" alt=""
                                                     decoding="async" title="img_box_29" />
                                             </figure>
                                             <div class="gt3-core-imagebox-content">
                                                 <div class="gt3-core-imagebox-title">
                                                     <h6 class="gt3-core-imagebox-title">{{ $setting->hotline }}</h6>
                                                 </div>
                                                 <p class="gt3-core-imagebox-description">{{ $setting->email }}
                                                 </p>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="elementor-element elementor-element-3e4def9 elementor-position-left elementor-widget__width-auto elementor-widget-tablet__width-auto elementor-widget-mobile__width-inherit elementor-vertical-align-top elementor-widget elementor-widget-gt3-core-imagebox"
                                     data-id="3e4def9" data-element_type="widget"
                                     data-widget_type="gt3-core-imagebox.default">
                                     <div class="elementor-widget-container">
                                         <div class="gt3-core-imagebox-wrapper elementor-image_icon-position-default">
                                             <figure class="gt3-core-imagebox-img"><img width="76" height="74"
                                                     src="/frontend/assets/img/img_box_30.png"
                                                     class="attachment-full size-full wp-image-1445" alt=""
                                                     decoding="async"
                                                     srcset="/frontend/assets/img/img_box_30.png 76w, /frontend/assets/img/img_box_30-50x50.png 50w"
                                                     sizes="(max-width: 76px) 100vw, 76px" title="img_box_30" />
                                             </figure>
                                             @php
                                                 $addresses = json_decode($setting->address, true) ?: [];
                                             @endphp
                                             <div class="gt3-core-imagebox-content">
                                                 @foreach ($addresses as $line)
                                                     <p class="gt3-core-imagebox-description">
                                                         @foreach (explode(',', $line) as $part)
                                                             {{ trim($part) }}<br>
                                                         @endforeach
                                                     </p>
                                                 @endforeach
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </section>
                 <section
                     class="elementor-section elementor-inner-section elementor-element elementor-element-cb19c3f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                     data-id="cb19c3f" data-element_type="section">
                     <div class="elementor-container elementor-column-gap-default">
                         <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-c7b7f8b"
                             data-id="c7b7f8b" data-element_type="column">
                             <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-0d591c3 elementor-widget elementor-widget-spacer"
                                     data-id="0d591c3" data-element_type="widget" data-widget_type="spacer.default">
                                     <div class="elementor-widget-container">
                                         <div class="elementor-spacer">
                                             <div class="elementor-spacer-inner"></div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element-custom_font_weight elementor-element-custom_color elementor-element elementor-element-3149677 elementor-widget elementor-widget-text-editor"
                                     data-id="3149677" data-element_type="widget"
                                     data-widget_type="text-editor.default">
                                     <div class="elementor-widget-container">
                                         <h4>Giới thiệu</h4>
                                     </div>
                                 </div>
                                 <div class="elementor-element-custom_font_size elementor-element elementor-element-2641689 elementor-widget elementor-widget-text-editor"
                                     data-id="2641689" data-element_type="widget"
                                     data-widget_type="text-editor.default">
                                     <div class="elementor-widget-container">
                                         <p>{{ $setting->small_text_footer }}</p>
                                     </div>
                                 </div>
                                 <div class="elementor-element elementor-element-33054d3 elementor-shape-square e-grid-align-left elementor-grid-0 elementor-widget elementor-widget-social-icons"
                                     data-id="33054d3" data-element_type="widget"
                                     data-widget_type="social-icons.default">
                                     <div class="elementor-widget-container">
                                         <div class="elementor-social-icons-wrapper elementor-grid" role="list">
                                             <span class="elementor-grid-item" role="listitem">
                                                 <a class="elementor-icon elementor-social-icon elementor-social-icon-x-twitter elementor-repeater-item-91c0e5f"
                                                     target="_blank">
                                                     <span class="elementor-screen-only">X-twitter</span>
                                                     <i class="fab fa-youtube"></i> </a>
                                             </span>
                                             <span class="elementor-grid-item" role="listitem">
                                                 <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook-f elementor-repeater-item-5ffa149"
                                                     target="_blank">
                                                     <span class="elementor-screen-only">Facebook-f</span>
                                                     <i class="fab fa-facebook-f"></i> </a>
                                             </span>
                                             <span class="elementor-grid-item" role="listitem">
                                                 <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook-f elementor-repeater-item-5ffa149"
                                                     target="_blank">
                                                     <span class="elementor-screen-only">Facebook-f</span>
                                                     <i class="fab fa-instagram"></i> </a>
                                             </span>

                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-2553905"
                             data-id="2553905" data-element_type="column">
                             <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-8f1042e elementor-widget elementor-widget-spacer"
                                     data-id="8f1042e" data-element_type="widget" data-widget_type="spacer.default">
                                     <div class="elementor-widget-container">
                                         <div class="elementor-spacer">
                                             <div class="elementor-spacer-inner"></div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element-custom_font_weight elementor-element-custom_color elementor-element elementor-element-0ed0b2b elementor-widget elementor-widget-text-editor"
                                     data-id="0ed0b2b" data-element_type="widget"
                                     data-widget_type="text-editor.default">
                                     <div class="elementor-widget-container">
                                         <h4>Dịch vụ</h4>
                                     </div>
                                 </div>
                                 <div class="elementor-element elementor-element-da1e5f6 wpda_alignment-left elementor-widget elementor-widget-wpda-builder-menu"
                                     data-id="da1e5f6" data-element_type="widget"
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
                                                             <a
                                                                 href="{{ route('services') }}">{{ $category->name }}</a>
                                                         </li>
                                                     @endforeach
                                                 </ul>
                                             </nav>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-df42308"
                             data-id="df42308" data-element_type="column">
                             <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-1483eb9 elementor-widget elementor-widget-spacer"
                                     data-id="1483eb9" data-element_type="widget" data-widget_type="spacer.default">
                                     <div class="elementor-widget-container">
                                         <div class="elementor-spacer">
                                             <div class="elementor-spacer-inner"></div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element-custom_font_weight elementor-element-custom_color elementor-element elementor-element-27a447b elementor-widget elementor-widget-text-editor"
                                     data-id="27a447b" data-element_type="widget"
                                     data-widget_type="text-editor.default">
                                     <div class="elementor-widget-container">
                                         <h4>Blogs</h4>
                                     </div>
                                 </div>
                                 <div class="elementor-element elementor-element-87c5085 wpda_alignment-left elementor-widget elementor-widget-wpda-builder-menu"
                                     data-id="87c5085" data-element_type="widget"
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
                                                             <a
                                                                 href="{{ route('listNews') }}">{{ $category->name }}</a>
                                                         </li>
                                                     @endforeach

                                                 </ul>
                                             </nav>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-360e1c4"
                             data-id="360e1c4" data-element_type="column">
                             <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-aa54bce elementor-widget elementor-widget-spacer"
                                     data-id="aa54bce" data-element_type="widget" data-widget_type="spacer.default">
                                     <div class="elementor-widget-container">
                                         <div class="elementor-spacer">
                                             <div class="elementor-spacer-inner"></div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element-custom_font_weight elementor-element-custom_color elementor-element elementor-element-a764dfc elementor-widget elementor-widget-text-editor"
                                     data-id="a764dfc" data-element_type="widget"
                                     data-widget_type="text-editor.default">
                                     <div class="elementor-widget-container">
                                         <h4>Đường dẫn nhanh</h4>
                                     </div>
                                 </div>
                                 <div class="elementor-element elementor-element-5413d9d wpda_alignment-left elementor-widget elementor-widget-wpda-builder-menu"
                                     data-id="5413d9d" data-element_type="widget"
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
                                                         <a href="{{route('home')}}">Trang chủ</a>
                                                     </li>
                                                     <li id="menu-item-12024"
                                                         class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-623 current_page_item menu-item-12024">
                                                         <a href="{{route('about')}}">Giới thiệu</a>
                                                     </li>
                                                     <li id="menu-item-12025"
                                                         class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12025">
                                                         <a href="{{route('services')}}">Dịch vụ</a>
                                                     </li>
                                                     <li id="menu-item-12021"
                                                         class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12021">
                                                         <a href="{{route('listNews')}}">Blogs</a>
                                                     </li>
                                                     
                                                 </ul>
                                             </nav>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </section>
                 <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element-custom_color elementor-element elementor-element-e23a8f5 elementor-widget elementor-widget-text-editor"
                     data-id="e23a8f5" data-element_type="widget" data-widget_type="text-editor.default">
                     <div class="elementor-widget-container">
                         <p style="text-align: center;">© <a href="">{{ $setting->footer }}</a></p>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
