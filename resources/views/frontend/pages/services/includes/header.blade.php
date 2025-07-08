<section
    class="wpda_builder_section sticky_section_desktop sticky_section_tablet sticky_section_mobile elementor-section elementor-top-section elementor-element elementor-element-1c7d0e5b elementor-section-stretched elementor-section-full_width elementor-section-height-min-height elementor-section-height-default elementor-section-items-middle"
    data-id="1c7d0e5b" data-element_type="section" data-settings='{"stretch_section":"section-stretched"}' style="">
    <div class="elementor-container elementor-column-gap-no">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4c7824b4"
            data-id="4c7824b4" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <section
                    class="wpda_builder_section elementor-section elementor-inner-section elementor-element elementor-element-1477da7f elementor-section-full_width elementor-section-content-middle elementor-section-height-default elementor-section-height-default"
                    data-id="1477da7f" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-7489d207"
                            data-id="7489d207" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-74b3b867 elementor-widget__width-auto elementor-widget elementor-widget-wpda-header-logo"
                                    data-id="74b3b867" data-element_type="widget"
                                    data-widget_type="wpda-header-logo.default">
                                    <div class="sgo-logo-widget-wrapper">
                                        <div class="sgo-logo-container">
                                            <a aria-label="Logo" href="{{ route('home') }}">
                                                <img class="sgo-logo-img" src="{{ showImage($setting->logo) }}"
                                                    alt="" title="logo_retina(black)" width="298"
                                                    height="96" />
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-a2529b2"
                            data-id="a2529b2" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-f89fc0c elementor-widget__width-auto elementor-widget elementor-widget-wpda-builder-menu"
                                    data-id="f89fc0c" data-element_type="widget"
                                    data-widget_type="wpda-builder-menu.default">
                                    <div class="elementor-widget-container">
                                        <div class="wpda-mobile-navigation-toggle">
                                            <div class="wpda-toggle-box">
                                                <div class="wpda-toggle-inner"></div>
                                            </div>
                                        </div>
                                        <div class="wpda-navbar-collapse">
                                            <nav class="wpda-builder-menu">
                                                <ul id="menu-main-menu" class="wpda-menu">
                                                    <li id="menu-item-12047"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12047 wpda-menu-item-12047">
                                                        <a href="{{ route('home') }}">TRANG CHỦ</a>
                                                    </li>
                                                    <li id="menu-item-12047"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12047 wpda-menu-item-12047">
                                                        <a href="{{ route('about') }}">GIỚI THIỆU</a>
                                                    </li>
                                                    <li id="menu-item-12047"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12047 wpda-menu-item-12047">
                                                        <a href="{{ route('services') }}">DỊCH VỤ</a>
                                                    </li>
                                                    <li id="menu-item-12047"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12047 wpda-menu-item-12047">
                                                        <a
                                                            href="{{ route('listNewsByCategory', ['slug' => 'tuyen-dung']) }}">TUYỂN
                                                            DỤNG</a>
                                                    </li>
                                                    <li id="menu-item-12047"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12047 wpda-menu-item-12047">
                                                        <a href="{{ route('listNews') }}">BLOG</a>
                                                    </li>
                                                    <li id="menu-item-12047"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12047 wpda-menu-item-12047">
                                                        <a href="{{ route('contact') }}">LIÊN HỆ</a>
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
            </div>
        </div>
    </div>
</section>
