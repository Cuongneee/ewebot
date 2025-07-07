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
                    <div class="elementor-container elementor-column-gap-extended">
                        @foreach ($aboutUs as $item)
                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-916a6e8"
                                data-id="916a6e8" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-3b26c0d elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-gt3-core-imagebox"
                                        data-id="3b26c0d" data-element_type="widget"
                                        data-widget_type="gt3-core-imagebox.default">
                                        <div class="elementor-widget-container">
                                            <div
                                                class="gt3-core-imagebox-wrapper elementor-image_icon-position-default">
                                                <figure class="gt3-core-imagebox-img"><img fetchpriority="high"
                                                        decoding="async" width="280" height="240"
                                                        src="{{showImage($item->image)}}"
                                                        class="attachment-full size-full wp-image-1019" alt=""
                                                        title="{{$item->title}}" />
                                                </figure>
                                                <div class="gt3-core-imagebox-content">
                                                    <div class="gt3-core-imagebox-title">
                                                        <h5 class="gt3-core-imagebox-title">
                                                           {{$item->title}}</h5>
                                                    </div>
                                                    <p class="gt3-core-imagebox-description">
                                                       {{$item->description}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
