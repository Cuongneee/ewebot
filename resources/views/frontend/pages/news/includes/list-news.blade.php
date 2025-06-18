<section id='main_content'>
    <div data-elementor-type="wp-page" data-elementor-id="15361" class="elementor elementor-15361">
        <div class="elementor-element elementor-element-37d460d9 gt3-blog-main e-flex e-con-boxed e-con e-parent"
            data-id="37d460d9" data-element_type="container">
            <div class="e-con-inner">
                <div class="elementor-element elementor-element-724264a6 post_has_media_content-yes elementor-widget elementor-widget-gt3-core-blog"
                    data-id="724264a6" data-element_type="widget" data-widget_type="gt3-core-blog.default">
                    <div class="elementor-widget-container">
                        <script type="application/json" id="settings--724264a6">{"packery":false,"isotope_settings":{"layoutMode":"masonry"}}</script>
                        <div class="gt3_module_blog items1  items_type1">
                            @foreach ($allNews as $news)
                                <div
                                    class="blog_post_preview isotope_item isotope-item  format-standard-image new packery_blog_item_1  ">
                                    <div class="item_wrapper">
                                        <div class="blog_content">
                                            <div class="blog_post_media"><a href="{{route('detailNews', $news->slug)}}"><img decoding="async"
                                                        srcset="" src="{{ $news->image }}"
                                                        sizes="(min-width: 1200px) 1600px, (min-width: 992px) 1200px, (min-width: 768px) 992px, (min-width: 600px) 768px, (min-width: 420px) 600px, (max-width: 600px) 420px"
                                                        alt="How to Increase Your ROI Through scientific SEM?" /></a>
                                            </div>
                                            <div class="listing_meta_wrap">
                                                <div class="listing_meta"><span
                                                        class="post_date">{{ $news->posted_at->format('d-m-Y') }}
                                                    </span><span class="post_category"><a
                                                            href="https://ewebotwp.com/category/new/"
                                                            rel="category tag">New</a></span>
                                                </div>
                                            </div>
                                            <h2 class="blogpost_title"><a
                                                    href="https://ewebotwp.com/how-to-increase-your-roi-through-scientific-sem-2/">{{ $news->title }}</a>
                                            </h2>
                                            <div class="blog_item_description">
                                                {{ \Illuminate\Support\Str::limit($news->short_description, 160) }}
                                            </div>

                                            <div class="clear post_clear"></div>
                                            <div class="gt3_post_footer">
                                                <div class="gt3_module_button_list"><a
                                                        href="https://ewebotwp.com/how-to-increase-your-roi-through-scientific-sem-2/">Read
                                                        More</a></div>
                                                <div class="blog_post_info">
                                                    <!-- post share block -->
                                                    <div class="post_share_block">
                                                        <a href="javascript:void(0)"><span
                                                                class="sharing_title">Share</span></a>
                                                        <div class="post_share_wrap">
                                                            <ul>
                                                                <li class="post_share-facebook"><a target="_blank"
                                                                        href="https://www.facebook.com/share.php?u=https://ewebotwp.com/how-to-increase-your-roi-through-scientific-sem-2/"
                                                                        data-title="Facebook"><span
                                                                            class="fa fa-facebook"></span></a>
                                                                </li>
                                                                <li class="post_share-twitter"><a target="_blank"
                                                                        href="https://twitter.com/intent/tweet?text=How%20to%20Increase%20Your%20ROI%20Through%20scientific%20SEM?&#038;url=https://ewebotwp.com/how-to-increase-your-roi-through-scientific-sem-2/"
                                                                        data-title="Twitter"><span
                                                                            class="fa fa-twitter"></span></a>
                                                                </li>
                                                                <li class="post_share-pinterest">
                                                                    <a target="_blank"
                                                                        href="https://pinterest.com/pin/create/button/?url=https://ewebotwp.com/how-to-increase-your-roi-through-scientific-sem-2/&#038;media=https://ewebotwp.com/wp-content/uploads/2025/01/blog-article-image-01.jpg"
                                                                        data-elementor-open-lightbox="no"
                                                                        data-title="Pinterest"><span
                                                                            class="fa fa-pinterest"></span></a>
                                                                </li>
                                                                <li class="post_share-linkedin"><a target="_blank"
                                                                        href="https://www.linkedin.com/shareArticle?mini=true&#038;url=https://ewebotwp.com/how-to-increase-your-roi-through-scientific-sem-2/&#038;title=How%20to%20Increase%20Your%20ROI%20Through%20scientific%20SEM?&#038;source=Ewebot"
                                                                        data-title="Linkedin"><span
                                                                            class="fa fa-linkedin"></span></a>
                                                                </li>
                                                                <li class="post_share-mail"><a target="_blank"
                                                                        href="mailto:?subject=How+to+Increase+Your+ROI+Through+scientific+SEM%3F&body=https://ewebotwp.com/how-to-increase-your-roi-through-scientific-sem-2/"
                                                                        data-title="Email"><span
                                                                            class="fa fa-envelope"></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- //post share block -->
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            {{ $allNews->links('vendor.pagination.custom') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>

    <div id="comments"></div>
</section>
