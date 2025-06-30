<section
    class="elementor-section elementor-top-section elementor-element elementor-element-2612415 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
    data-id="2612415" data-element_type="section" data-settings='{"background_background":"classic"}'>
    <div class="elementor-background-overlay"></div>
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-070e3dc"
            data-id="070e3dc" data-element_type="column" data-settings='{"background_background":"classic"}'>
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element-custom_font_size elementor-element-custom_font_weight elementor-element elementor-element-f701ff1 elementor-widget elementor-widget-text-editor animated gt3-slideup-animation"
                    data-id="f701ff1" data-element_type="widget" data-settings='{"_animation":"gt3-slideup-animation"}'
                    data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <h5>Tại sao chọn chúng tôi</h5>
                    </div>
                </div>
                <div class="elementor-element elementor-element-95b5262 elementor-widget elementor-widget-heading animated gt3-slideup-animation"
                    data-id="95b5262" data-element_type="widget" data-settings='{"_animation":"gt3-slideup-animation"}'
                    data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">
                            Với trên 5+ kinh nghiệm!
                        </h2>
                    </div>
                </div>
                <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element elementor-element-069a3a4 elementor-widget elementor-widget-text-editor"
                    data-id="069a3a4" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <p>
                            SGO MEDIA tự hòa cung cấp tới khách hàng các dịch vụ chuyên nghiệp, uy tín, chất lượng
                            trong ngành công nghệ và truyền thông.
                        </p>
                    </div>
                </div>
                <div class="gt3-core-button--alignment_inline elementor-element elementor-element-0cd96d5 elementor-widget elementor-widget-gt3-core-button"
                    data-id="0cd96d5" data-element_type="widget" data-widget_type="gt3-core-button.default">

                </div>
            </div>
        </div>
        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-305a0ea"
            data-id="305a0ea" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <section
                    class="elementor-section elementor-inner-section elementor-element elementor-element-bac22bd elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="bac22bd" data-element_type="section">
                    @foreach ($categoryService->chunk(2) as $chunk)
                        <div class="elementor-container elementor-column-gap-default">
                            @foreach ($chunk as $category)
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-e66bff8"
                                    data-id="e66bff8" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-5530f44 elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-gt3-core-imagebox"
                                            data-id="5530f44" data-element_type="widget"
                                            data-widget_type="gt3-core-imagebox.default">
                                            <div class="elementor-widget-container">
                                                <div
                                                    class="gt3-core-imagebox-wrapper elementor-image_icon-position-default">
                                                    <figure class="gt3-core-imagebox-img gt3-core-imagebox-img_hover">
                                                        <a href="{{ route('services') }}"><img loading="lazy"
                                                                decoding="async" width="100" height="100"
                                                                src="{{ showImage($category->logo) }}"
                                                                class="attachment-full size-full wp-image-6786"
                                                                alt=""
                                                                srcset="
                                                {{ showImage($category->logo) }} 100w,
                                                {{ showImage($category->logo) }}  50w
                                              "
                                                                sizes="auto, (max-width: 100px) 100vw, 100px"
                                                                title="circle_orange" /><img loading="lazy"
                                                                decoding="async" width="100" height="100"
                                                                src="{{ showImage($category->logo) }}"
                                                                class="attachment-full size-full wp-image-6786"
                                                                alt=""
                                                                srcset="
                                                {{ showImage($category->logo) }} 100w,
                                                {{ showImage($category->logo) }}  50w
                                              "
                                                                sizes="auto, (max-width: 100px) 100vw, 100px"
                                                                title="circle_orange" /></a>
                                                    </figure>
                                                    <div class="gt3-core-imagebox-content">
                                                        <div class="gt3-core-imagebox-title">
                                                            <h3 class="gt3-core-imagebox-title">
                                                                <a href="{{ route('services') }}">
                                                                    {{ $category->name }}
                                                                </a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    @endforeach

                </section>
            </div>
        </div>
    </div>
</section>
