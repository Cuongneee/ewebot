<section
    class="elementor-section elementor-top-section elementor-element elementor-element-3a8bc7d7 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
    data-id="3a8bc7d7" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-4f8aac3e"
            data-id="4f8aac3e" data-element_type="column">
            <div class="elementor-widget-wrap"></div>
        </div>
        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4a0c52bd"
            data-id="4a0c52bd" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element-custom_font_size elementor-element-custom_font_weight elementor-element elementor-element-4ebe3b57 elementor-widget elementor-widget-text-editor animated gt3-slideup-animation"
                    data-id="4ebe3b57" data-element_type="widget" data-settings='{"_animation":"gt3-slideup-animation"}'
                    data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <h5>Blog</h5>
                    </div>
                </div>
                <div class="elementor-element elementor-element-4294d3d9 elementor-widget elementor-widget-heading animated gt3-slideup-animation"
                    data-id="4294d3d9" data-element_type="widget" data-settings='{"_animation":"gt3-slideup-animation"}'
                    data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">
                            Bài viết mới nhất </h2>
                    </div>
                </div>
               
            </div>
        </div>
        <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-354fe797"
            data-id="354fe797" data-element_type="column">
            <div class="elementor-widget-wrap"></div>
        </div>
    </div>
</section>
<section
    class="elementor-section elementor-top-section elementor-element elementor-element-345935df elementor-section-boxed elementor-section-height-default elementor-section-height-default"
    data-id="345935df" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-57fe3fe7 animated fadeIn"
            data-id="57fe3fe7" data-element_type="column" data-settings='{"animation":"fadeIn"}'>
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-93ec1db has_color_block color_block-#FFFFFF gt3_featured_default_state-yes elementor-widget elementor-widget-gt3-core-blogboxed"
                    data-id="93ec1db" data-element_type="widget" data-widget_type="gt3-core-blogboxed.default">
                    <div class="elementor-widget-container">
                        <div class="gt3_module_blogboxed items3 post_content_front_visible module_type1"
                            data-settings='{"slick":false}'>

                            <div class="blogboxed_grid">
                                @foreach ($highViewNews as $news)
                                    <div class="boxed_block_item">
                                        <div class="item_wrapper gt3_center_mode has_post_meta">
                                            <div class="blogboxed_img_block"
                                                style="
                                          background-image: url({{ asset($news->image) }});
                                        ">
                                            </div>
                                            <div class="blogboxed_content without_bordered has_img_block">
                                                <div class="gt3blogboxed_block_wrap">
                                                    <div class="listing_meta">
                                                        <span
                                                            class="post_date">{{ $news->created_at->format('d-m-Y') }}</span>
                                                    </div>
                                                    <h2 class="blog_post_title">
                                                        <a href="{{ route('detailNews', $news->slug) }}">
                                                            {{ $news->title }}</a>
                                                    </h2>
                                                    <div class="blogboxed_info_box">
                                                        <div class="clear"></div>
                                                        <div class="gt3_post_footer">
                                                            <div class="gt3_module_button_list">
                                                                <a href="{{ route('listNews') }}">Read
                                                                    More</a>
                                                            </div>
                                                            <div class="blog_post_info">
                                                                <!-- post share block -->
                                                                <div class="post_share_block">
                                                                    <a href="javascript:void(0)"><span
                                                                            class="sharing_title">Share</span></a>
                                                                    <div class="post_share_wrap">
                                                                        <ul>
                                                                            <li class="post_share-facebook">
                                                                                <a target="_blank"
                                                                                    href="https://www.facebook.com/share.php?u=https://ewebotwp.com/how-to-increase-your-roi-through-scientific-sem/"
                                                                                    data-title="Facebook"><span
                                                                                        class="fa fa-facebook"></span></a>
                                                                            </li>
                                                                            <li class="post_share-twitter">
                                                                                <a target="_blank"
                                                                                    href="https://twitter.com/intent/tweet?text=How%20to%20Increase%20Your%20ROI%20Through%20scientific%20SEM?&amp;url=https://ewebotwp.com/how-to-increase-your-roi-through-scientific-sem/"
                                                                                    data-title="Twitter"><span
                                                                                        class="fa fa-twitter"></span></a>
                                                                            </li>
                                                                            <li class="post_share-pinterest">
                                                                                <a target="_blank"
                                                                                    href="https://pinterest.com/pin/create/button/?url=https://ewebotwp.com/how-to-increase-your-roi-through-scientific-sem/&amp;media=https://ewebotwp.com/wp-content/uploads/2019/07/blog_img_01.jpg"
                                                                                    data-elementor-open-lightbox="no"
                                                                                    data-title="Pinterest"><span
                                                                                        class="fa fa-pinterest"></span></a>
                                                                            </li>
                                                                            <li class="post_share-linkedin">
                                                                                <a target="_blank"
                                                                                    href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://ewebotwp.com/how-to-increase-your-roi-through-scientific-sem/&amp;title=How%20to%20Increase%20Your%20ROI%20Through%20scientific%20SEM?&amp;source=Ewebot"
                                                                                    data-title="Linkedin"><span
                                                                                        class="fa fa-linkedin"></span></a>
                                                                            </li>
                                                                            <li class="post_share-mail">
                                                                                <a target="_blank"
                                                                                    href="mailto:?subject=How+to+Increase+Your+ROI+Through+scientific+SEM%3F&amp;body=https://ewebotwp.com/how-to-increase-your-roi-through-scientific-sem/"
                                                                                    data-title="Email"><span
                                                                                        class="fa fa-envelope"></span></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <!-- //post share block -->
                                                            </div>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-8b8547c gt3_rotated_element elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image"
                    data-id="8b8547c" data-element_type="widget" data-settings='{"_position":"absolute"}'
                    data-widget_type="image.default">
                    <div class="elementor-widget-container">
                        <img loading="lazy" decoding="async" width="42" height="42"
                            src="/frontend/assets/img/home_06_icon_23.png"
                            class="attachment-full size-full wp-image-5555" alt="" title="home_06_icon_23" />
                    </div>
                </div>
                <div class="elementor-element elementor-element-a5e4853 gt3_moved_element elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image"
                    data-id="a5e4853" data-element_type="widget" data-settings='{"_position":"absolute"}'
                    data-widget_type="image.default">
                    <div class="elementor-widget-container">
                        <img loading="lazy" decoding="async" width="26" height="26"
                            src="/frontend/assets/img/home_06_icon_22.png"
                            class="attachment-full size-full wp-image-5556" alt="" title="home_06_icon_22" />
                    </div>
                </div>
                <div class="elementor-element elementor-element-3d05b1d gt3_moved_element elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image"
                    data-id="3d05b1d" data-element_type="widget" data-settings='{"_position":"absolute"}'
                    data-widget_type="image.default">
                    <div class="elementor-widget-container">
                        <img loading="lazy" decoding="async" width="26" height="26"
                            src="/frontend/assets/img/home_06_icon_22.png"
                            class="attachment-full size-full wp-image-5556" alt="" title="home_06_icon_22" />
                    </div>
                </div>
                <div class="elementor-element elementor-element-319caf7 gt3_rotated_element elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image"
                    data-id="319caf7" data-element_type="widget" data-settings='{"_position":"absolute"}'
                    data-widget_type="image.default">
                    <div class="elementor-widget-container">
                        <img loading="lazy" decoding="async" width="72" height="74"
                            src="/frontend/assets/img/triangle_blue.png"
                            class="attachment-full size-full wp-image-3275" alt=""
                            srcset="
                                  /frontend/assets/img/triangle_blue.png 72w,
                                  /frontend/assets/img/triangle_blue.png 50w
                                "
                            sizes="auto, (max-width: 72px) 100vw, 72px" title="triangle" />
                    </div>
                </div>
                <div class="elementor-element elementor-element-1fac3f5 gt3_rotated_element elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image"
                    data-id="1fac3f5" data-element_type="widget" data-settings='{"_position":"absolute"}'
                    data-widget_type="image.default">
                    <div class="elementor-widget-container">
                        <img loading="lazy" decoding="async" width="72" height="74"
                            src="/frontend/assets/img/triangle_orange.png"
                            class="attachment-full size-full wp-image-3274" alt=""
                            srcset="
                                  /frontend/assets/img/triangle_orange.png 72w,
                                  /frontend/assets/img/triangle_orange.png 50w
                                "
                            sizes="auto, (max-width: 72px) 100vw, 72px" title="triangle" />
                    </div>
                </div>
                <div class="elementor-element elementor-element-c57e3a6 gt3_moved_element elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image"
                    data-id="c57e3a6" data-element_type="widget" data-settings='{"_position":"absolute"}'
                    data-widget_type="image.default">
                    <div class="elementor-widget-container">
                        <img loading="lazy" decoding="async" width="48" height="48"
                            src="/frontend/assets/img/circle.png" class="attachment-full size-full wp-image-3276"
                            alt="" title="circle" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
