<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- <script>
        document.documentElement.className =
            document.documentElement.className + " yes-js js_active js";
    </script> -->

    <style id="gt3-dynamic-handle-inline-css" type="text/css">
        .back_to_top_container {
            position: fixed;
            z-index: 3;
            right: 40px;
            bottom: 40px;
            pointer-events: none;
        }

        #back_to_top {
            display: block;
            width: 40px;
            height: 40px;
            cursor: pointer;
            transition: all 0.3s;
            text-align: center;
            pointer-events: none;
            opacity: 0;
            color: #fff;
            border: 2px solid;
            border-radius: 5px;
            background: #fff;
        }

        #back_to_top:before {
            content: "\f106";
            z-index: 1;
            position: absolute;
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            font-size: 26px;
            font-family: FontAwesome;
            font-weight: 400;
            font-style: normal;
        }

        #back_to_top.show {
            pointer-events: auto;
            opacity: 1;
        }

        #back_to_top.show:hover {
            color: #fff;
        }

        @media only screen and (max-width: 600px) {
            .back_to_top_container {
                right: 25px;
                bottom: 25px;
            }
        }

        .gt3_back2top {
            font-size: 0;
        }

        /* Custom CSS */
        body,
        body .widget .yit-wcan-select-open,
        body .widget-hotspot,
        body div[id*="ajaxsearchlitesettings"].searchsettings form fieldset legend,
        span.elementor-drop-cap span.elementor-drop-cap-letter,
        input[type="date"],
        input[type="email"],
        input[type="number"],
        input[type="password"],
        input[type="search"],
        input[type="tel"],
        input[type="text"],
        input[type="url"],
        select,
        textarea,
        .wrapper_404 .gt3_module_button a,
        .mc_form_inside #mc_signup_submit,
        .mc4wp-form-fields input[type="submit"],
        .elementor-counter .elementor-counter-number-suffix {
            font-family: Rubik;
        }

        input[type="date"],
        input[type="email"],
        input[type="number"],
        input[type="password"],
        input[type="search"],
        input[type="tel"],
        input[type="text"],
        input[type="url"],
        select,
        textarea {
            font-weight: 400;
        }

        body {
            background: #ffffff;
            font-size: 18px;
            line-height: 27px;
            font-weight: 400;
            color: #696687;
        }

        .elementor-widget-gt3-core-team .module_team.type2 .item-team-member .item_wrapper,
        .elementor-widget-gt3-core-team .module_team.type2 .item-team-member:nth-child(even) .item_wrapper,
        .gt3pg_pro_FSSlider .gt3pg_pro_gallery_wrap {
            background: #ffffff;
        }

        p {
            line-height: 1.5;
        }

        /* Secondaty Fonts */
        .secondary {
            font-family: Nunito;
            font-size: 18px;
            line-height: 27px;
            font-weight: 400;
            color: #696687;
        }

        /* Custom Fonts */
        .module_team .team_info,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .main_wrapper .gt3_search_form:before,
        .widget_search .gt3_search_form label,
        .main_wrapper .gt3_search_form label,
        .main_wrapper .sidebar-container .widget_categories ul li>a:hover:before,
        .main_wrapper .sidebar-container .widget_product_categories ul li>a:hover:before,
        .main_wrapper .sidebar-container .widget_layered_nav ul li>a:hover:before,
        .logged-in-as a:hover,
        .sidebar-container .widget.widget_posts .recent_posts .post_title a,
        .elementor-widget-gt3-core-tabs .ui-tabs-nav .ui-state-default a,
        .single_prev_next_posts .gt3_post_navi:after,
        .elementor-widget-gt3-core-portfolio .portfolio_wrapper.hover_type6 .text_wrap .title,
        .gt3_price_item-elementor .gt3_item_cost_wrapper h3,
        .sidebar .widget .widget-title,
        .gt3_single_team_header .gt3_team_title_position,
        .gt3_pricebox_module_wrapper.type2 .gt3_price_item-cost-elementor,
        .gt3_modern_shop.woocommerce div.product form.cart .variations th .woo-selected-variation-item-name {
            color: #3b3663;
        }

        .search-results .blogpost_title a {
            color: #3b3663 !important;
        }

        .search-results .blogpost_title a:hover,
        .elementor-widget-gt3-core-TestimonialsLite .slick-arrow:hover {
            color: #6254e7 !important;
        }

        .gt3_icon_box__icon--number,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .strip_template .strip-item a span,
        .column1 .item_title a,
        .index_number,
        .price_item_btn a,
        .shortcode_tab_item_title,
        .gt3_twitter .twitt_title,
        .elementor-widget-gt3-core-counter .counter,
        .gt3_dropcaps,
        .dropcap,
        .single_prev_next_posts .gt3_post_navi:after,
        .gt3_single_team_header .gt3_team_title_position,
        .elementor-widget-image.gt3_new_demo_label a:after {
            font-family: Nunito;
            font-weight: 800;
        }

        .gt3-page-title .page_title_meta.cpt_portf * {
            font-weight: inherit;
        }

        .widget .calendar_wrap tbody td>a:before,
        .elementor-widget-gt3-core-team .module_team .team_icons_wrapper .team-icons a:before,
        .elementor-widget-gt3-core-teamcarousel .module_team .team_icons_wrapper .team-icons a:before,
        p.form-submit button#submit,
        .woocommerce .gt3-products-bottom nav.woocommerce-pagination ul li .page-numbers:hover,
        .woocommerce .gt3-products-bottom nav.woocommerce-pagination ul li .page-numbers.current,
        div.slick-slider ul.slick-dots li.slick-active,
        div.slick-slider ul.slick-dots li,
        .gt3_default_footer {
            background: #6254e7;
        }

        h1,
        .elementor-widget-heading h1.elementor-heading-title,
        .logo_container .site-title {
            font-size: 40px;
            line-height: 43px;
        }

        h2,
        .elementor-widget-heading h2.elementor-heading-title,
        .elementor-widget-gt3-core-blog .blogpost_title {
            font-size: 30px;
            line-height: 40px;
        }

        h3,
        .elementor-widget-heading h3.elementor-heading-title,
        #customer_login h2,
        .sidepanel .title {
            font-size: 24px;
            line-height: 30px;
        }

        h4,
        .elementor-widget-heading h4.elementor-heading-title {
            font-size: 20px;
            line-height: 33px;
        }

        h5,
        .elementor-widget-heading h5.elementor-heading-title {
            font-family: Nunito;
            font-weight: 700;
            font-size: 18px;
            line-height: 30px;
        }

        h6,
        .elementor-widget-heading h6.elementor-heading-title {
            font-family: Nunito;
            font-weight: 600;
            font-size: 16px;
            line-height: 24px;
        }

        .woocommerce-MyAccount-navigation ul li a,
        .diagram_item .chart,
        .item_title a,
        .contentarea ul,
        .blog_post_media--link .blog_post_media__link_text p,
        .woocommerce-LostPassword a:hover {
            color: #3b3663;
        }

        .gt3_module_button a,
        .learn_more,
        .gt3_custom_tooltip:before,
        .gt3_custom_tooltip:after,
        .elementor-widget-gt3-core-TestimonialsLite .testimonials-text {
            font-family: Nunito;
            font-weight: 400;
        }

        /* Theme color */
        a,
        .calendar_wrap thead,
        .gt3_practice_list__image-holder i,
        .load_more_works:hover,
        .copyright a:hover,
        .price_item .items_text ul li:before,
        .price_item.most_popular .item_cost_wrapper h3,
        .gt3_practice_list__title a:hover,
        .listing_meta,
        .ribbon_arrow,
        .flow_arrow,
        ol>li:before,
        .main_wrapper #main_content ul.gt3_list_line li:before,
        .main_wrapper .elementor-section ul.gt3_list_line li:before,
        .main_wrapper #main_content ul.gt3_list_disc li:before,
        .main_wrapper .elementor-section ul.gt3_list_disc li:before,
        .main_wrapper .sidebar-container .widget_categories ul>li.current-cat>a,
        .single_prev_next_posts a:hover .gt3_post_navi:after,
        .gt3_practice_list__link:before,
        .content-container ul>li:before,
        .main_wrapper .elementor-widget-text-editor ul>li:before,
        .gt3_styled_list .gt3_list__icon:before,
        .load_more_works,
        .woocommerce ul.products li.product .woocommerce-loop-product__title:hover,
        .woocommerce ul.cart_list li a:hover,
        ul.gt3_list_disc li:before,
        .woocommerce-MyAccount-navigation ul li a:hover,
        .elementor-widget-gt3-core-portfolio .portfolio_wrapper.hover_type6 .text_wrap:hover .title,
        .elementor-widget-gt3-core-team .module_team.type3 .team_link a:hover,
        .elementor-widget-gt3-core-team .module_team .team_title__text a:hover,
        .elementor-element-custom_color a:hover,
        .woocommerce ul.products li.product:hover .price ins,
        .gt3_blockquote .gt3_blockquote__quote_icon,
        .gt3_left_rounded div.slick-slider ul.slick-dots {
            color: #6254e7;
        }

        .gt3_practice_list__link:before,
        .load_more_works,
        .woocommerce ul.products:not(.list) li.product .gt3_woocommerce_open_control_tag div a:before,
        .woocommerce ul.products:not(.list) li.product .gt3_woocommerce_open_control_tag .added_to_cart:hover,
        .woocommerce ul.products:not(.list) li.product .gt3_woocommerce_open_control_tag div a:hover,
        .blog_post_media--quote .quote_text:before,
        .blog_post_media__link_text:before,
        .woocommerce .widget_shopping_cart .buttons a.button.checkout.wc-forward,
        .woocommerce.widget_shopping_cart .buttons a.button.checkout.wc-forward,
        .woocommerce div.product form.cart .button,
        .woocommerce #respond input#submit,
        .woocommerce a.button,
        .woocommerce input.button,
        .woocommerce #respond input#submit:hover,
        .woocommerce a.button:hover,
        .woocommerce input.button:hover,
        ul.pagerblock li a:hover,
        ul.pagerblock li a.current {
            background-color: #6254e7;
        }

        .comment-reply-link:hover,
        .main_wrapper .gt3_product_list_nav li a:hover {
            color: #6254e7;
        }

        .calendar_wrap caption,
        .widget .calendar_wrap table td#today:before {
            background: #6254e7;
        }

        div:not(.packery_wrapper) .blog_post_preview .listing_meta a:hover,
        .single_blogpost_title_content .listing_meta a:hover,
        .blog_post_media--quote .quote_text a:hover {
            color: #6254e7;
        }

        .blogpost_title a:hover,
        .apps_style_price .elementor-widget-gt3-core-pricebox .gt3_pricebox_module_wrapper.type5 .price_button-elementor .shortcode_button:hover {
            color: #6254e7 !important;
        }

        .gt3_icon_box__link a:before,
        .gt3_icon_box__link a:before,
        .stripe_item-divider,
        .apps_subscribe #mc_signup_submit:hover,
        .apps_subscribe .mc4wp-form-fields .mc_signup_submit input[type="submit"]:hover {
            background-color: #6254e7;
        }

        .single-member-page .member-icon:hover,
        .single-member-page .team-link:hover,
        .sidebar .widget_nav_menu .menu .menu-item>a:hover,
        .widget.widget_recent_entries>ul>li:hover a,
        .gt3_widget>ul>li:hover a,
        #main_content ul.wp-block-archives li>a:hover,
        #main_content ul.wp-block-categories li>a:hover,
        #main_content ul.wp-block-latest-posts li>a:hover,
        #respond #commentform p[class*="comment-form-"]>label.gt3_onfocus,
        .comment-notes .required,
        #cancel-comment-reply-link,
        .widget_archive ul li:hover .post_count {
            color: #6254e7;
        }

        /* menu fonts */
        .main-menu>.gt3-menu-categories-title,
        .main-menu>ul,
        .main-menu>div>ul,
        .column_menu>ul,
        .column_menu>.gt3-menu-categories-title,
        .column_menu>div>ul {
            /* font-family:
        font-weight:
        line-height:
        font-size:  */
        }

        input::-webkit-input-placeholder,
        textarea::-webkit-input-placeholder,
        .sidebar-container .widget.widget_posts .recent_posts .listing_meta span {
            color: #696687;
        }

        input:-moz-placeholder,
        textarea:-moz-placeholder {
            color: #696687;
        }

        input::-moz-placeholder,
        textarea::-moz-placeholder {
            color: #696687;
        }

        input:-ms-input-placeholder,
        textarea:-ms-input-placeholder {
            color: #696687;
        }

        /* widgets */
        body div[id*="ajaxsearchlitesettings"].searchsettings fieldset .label:hover,
        body div[id*="ajaxsearchlite"] .probox .proclose:hover,
        .module_team.type2 .team_title__text,
        .widget.widget_rss>ul>li a,
        .woocommerce ul.cart_list li .quantity,
        .woocommerce ul.product_list_widget li .quantity,
        .wpcf7-form label,
        blockquote {
            color: #3b3663;
        }

        /* blog */
        .countdown-period,
        .gt3-page-title_default_color_a .gt3-page-title__content .gt3_breadcrumb a,
        .gt3-page-title_default_color_a .gt3-page-title__content .gt3_breadcrumb .gt3_pagination_delimiter,
        .module_team.type2 .team-positions,
        .widget.widget_recent_entries>ul>li a,
        .gt3_widget>ul>li a,
        #main_content ul.wp-block-archives li>a,
        #main_content ul.wp-block-categories li>a,
        #main_content ul.wp-block-latest-posts li>a,
        .sidebar .widget_nav_menu .menu .menu-item>a,
        .blog_post_info,
        .likes_block.already_liked .icon,
        .likes_block.already_liked:hover .icon,
        .gt3_form label,
        .wpcf7-form .label,
        .wrapper_404 label,
        .widget .gt3_search_form label,
        #respond #commentform p[class*="comment-form-"]>label,
        .comment_author_says span,
        .search_form .search_text,
        .widget_search .search_form .search_submit,
        .widget_search .search_form:before,
        body .gt3_module_related_posts .blog_post_preview .listing_meta,
        .widget_archive ul li .post_count {
            color: #696687;
        }

        div:not(.packery_wrapper) .blog_post_preview .listing_meta,
        .single_blogpost_title_content .listing_meta {
            color: rgba(105, 102, 135);
        }

        .woocommerce ul.products li.product .price del .amount {
            color: rgba(105, 102, 135, 0.65);
        }

        .blogpost_title i,
        .widget.widget_recent_comments>ul>li a:hover,
        .widget.widget_rss>ul>li:hover a,
        .sidebar-container .widget.widget_posts .recent_posts .post_title a:hover,
        .comment_info a:hover,
        .gt3_module_button_list a,
        .widget.widget_text ul li:before,
        .widget.widget_product_categories ul li:before,
        .widget.widget_nav_menu ul li:before,
        .widget.widget_archive ul li:before,
        .widget.widget_pages ul li:before,
        .widget.widget_categories ul li:before,
        .widget.widget_recent_entries ul li:before,
        .widget.widget_meta ul li:before,
        .widget.widget_recent_comments ul li:before,
        .widget.main_wrapper ul li:before,
        ul.wp-block-archives li:before,
        ul.wp-block-categories li:before,
        ul.wp-block-latest-posts li:before,
        .comment-reply-link,
        .main_wrapper .sidebar-container .widget_categories ul>li:hover>a,
        .widget_categories ul li:hover .post_count {
            color: #6254e7;
        }

        .prev_next_links .title,
        .widget.widget_recent_comments>ul>li a {
            color: #3b3663;
        }

        .gt3_module_title .carousel_arrows a:hover span,
        .stripe_item:after,
        .packery-item .packery_overlay,
        .ui-datepicker .ui-datepicker-buttonpane button.ui-state-hover {
            background: #6254e7;
        }

        .elementor-widget-gt3-core-pricebox .price_button-elementor a,
        .elementor-widget-gt3-core-pricebox .price_button-elementor a:hover,
        button:hover,
        .ui-datepicker .ui-datepicker-buttonpane button.ui-state-hover,
        .woocommerce ul.products li.product .gt3_woocommerce_open_control_tag_bottom div a,
        .woocommerce ul.products li.product .gt3_woocommerce_open_control_tag_bottom div a:hover,
        .woocommerce-account .woocommerce-MyAccount-content .woocommerce-message--info .button,
        .woocommerce-account .woocommerce-MyAccount-content .woocommerce-message--info .button:hover,
        div.slick-slider ul.slick-dots li.slick-active,
        div.slick-slider ul.slick-dots li {
            border-color: #6254e7;
        }

        .gt3_module_title .carousel_arrows a:hover span:before {
            border-color: #6254e7;
        }

        .gt3_module_title .carousel_arrows a span,
        .elementor-slick-slider .slick-slider .slick-prev:after,
        .elementor-slick-slider .slick-slider .slick-next:after {
            background: #3b3663;
        }

        .gt3_module_title .carousel_arrows a span:before {
            border-color: #3b3663;
        }

        .post_share_block:hover>a,
        .woocommerce ul.products li.product .gt3_woocommerce_open_control_tag_bottom div a:hover,
        .woocommerce ul.products.list li.product .gt3_woocommerce_open_control_tag div a:hover:before,
        .woocommerce ul.products li.product .gt3_woocommerce_open_control_tag_bottom div a:hover:before,
        .single-product.woocommerce div.product .product_meta a:hover,
        .woocommerce div.product span.price,
        .likes_block:hover .icon,
        .woocommerce .gt3-pagination_nav nav.woocommerce-pagination ul li a.prev:hover,
        .woocommerce .gt3-pagination_nav nav.woocommerce-pagination ul li a.next:hover,
        .woocommerce .gt3-pagination_nav nav.woocommerce-pagination ul li a.gt3_show_all:hover,
        .woocommerce div.product div.images div.woocommerce-product-gallery__trigger:hover {
            color: #6254e7;
        }

        .gt3_practice_list__filter {
            color: #3b3663;
        }

        body:not(.gt3_modern_shop) ul.products:not(.list) li.product:hover .gt3_woocommerce_open_control_tag div a {
            background: #3b3663;
        }

        .gt3_module_title .external_link .learn_more {
            line-height: 27px;
        }

        .blog_post_media__link_text a:hover,
        h3#reply-title a,
        .comment_author_says a:hover,
        .dropcap,
        .gt3_custom_text a,
        .gt3_custom_button i {
            color: #6254e7;
        }

        .main_wrapper #main_content ul[class*="gt3_list_"] li:before,
        .single .post_tags>span,
        h3#reply-title a:hover,
        .comment_author_says,
        .comment_author_says a {
            color: #3b3663;
        }

        ::-moz-selection {
            background: #6254e7;
            color: #ffffff;
        }

        ::selection {
            background: #6254e7;
            color: #ffffff;
        }

        .gt3_practice_list__overlay:before {
            background-color: #6254e7;
        }

        @media only screen and (max-width: 767px) {
            .gt3-hotspot-shortcode-wrapper .gt3_tooltip {
                background-color: #ffffff;
            }
        }

        .quantity-spinner.quantity-up:hover,
        .quantity-spinner.quantity-down:hover,
        .woocommerce .gt3-products-header .gridlist-toggle:hover,
        .elementor-widget-gt3-core-accordion .item_title .ui-accordion-header-icon:before,
        .elementor-element.elementor-widget-gt3-core-accordion .accordion_wrapper .item_title.ui-accordion-header-active.ui-state-active,
        .elementor-widget-gt3-core-accordion .accordion_wrapper .item_title:hover {
            color: #6254e7;
        }

        .woocommerce #respond input#submit:hover,
        .woocommerce #respond input#submit.alt:hover,
        .woocommerce #reviews button.button:hover,
        .woocommerce #reviews input.button:hover,
        .woocommerce #respond input#submit.disabled:hover,
        .woocommerce #respond input#submit:disabled:hover,
        .woocommerce #respond input#submit:disabled[disabled]:hover,
        .woocommerce a.button.disabled:hover,
        .woocommerce a.button:disabled:hover,
        .woocommerce a.button:disabled[disabled]:hover,
        .woocommerce input.button.disabled:hover,
        .woocommerce input.button:disabled:hover,
        .woocommerce input.button:disabled[disabled]:hover {
            border-color: #6254e7;
            background-color: #6254e7;
        }

        .woocommerce #respond input#submit.alt.disabled:hover,
        .woocommerce #respond input#submit.alt:disabled:hover,
        .woocommerce #respond input#submit.alt:disabled[disabled]:hover,
        .woocommerce input.button.alt.disabled:hover,
        .woocommerce input.button.alt:disabled:hover,
        .woocommerce input.button.alt:disabled[disabled]:hover,
        .woocommerce div.product form.cart .qty,
        .gt3-page-title__content .breadcrumbs,
        .sidebar .widget .widget-title,
        blockquote cite,
        .woocommerce-cart .cart_totals table.shop_table tr th,
        .woocommerce-cart .cart_totals table.shop_table tr td span.woocommerce-Price-amount.amount,
        .sidebar-container .widget.widget_posts .recent_posts .listing_meta span,
        .blog_post_preview .listing_meta span,
        .gt3_pricebox_module_wrapper .gt3_price_item-cost-elementor,
        .logo_container .site-title,
        .elementor-widget-gt3-core-blogboxed .gt3_module_blogboxed.module_type1 .item_wrapper span.post_date {
            font-family: Nunito;
        }

        .quantity-spinner.quantity-up:hover,
        .quantity-spinner.quantity-down:hover,
        .woocommerce .gt3-products-header .gridlist-toggle:hover,
        .elementor-widget-gt3-core-accordion .item_title .ui-accordion-header-icon:before,
        .elementor-element.elementor-widget-gt3-core-accordion .accordion_wrapper .item_title.ui-accordion-header-active.ui-state-active {
            color: #6254e7;
        }

        .woocommerce #respond input#submit:hover,
        .woocommerce #respond input#submit.alt:hover,
        .woocommerce #reviews a.button:hover,
        .woocommerce #reviews button.button:hover,
        .woocommerce #reviews input.button:hover,
        .woocommerce #respond input#submit.disabled:hover,
        .woocommerce #respond input#submit:disabled:hover,
        .woocommerce #respond input#submit:disabled[disabled]:hover,
        .woocommerce a.button.disabled:hover,
        .woocommerce a.button:disabled:hover,
        .woocommerce a.button:disabled[disabled]:hover,
        .woocommerce input.button.disabled:hover,
        .woocommerce input.button:disabled:hover,
        .woocommerce input.button:disabled[disabled]:hover {
            border-color: #6254e7;
            background-color: #6254e7;
        }

        .woocommerce #respond input#submit.alt.disabled,
        .woocommerce #respond input#submit.alt:disabled,
        .woocommerce #respond input#submit.alt:disabled[disabled],
        .woocommerce a.button.alt.disabled,
        .woocommerce a.button.alt:disabled,
        .woocommerce a.button.alt:disabled[disabled],
        .woocommerce button.button.alt.disabled,
        .woocommerce button.button.alt:disabled,
        .woocommerce button.button.alt:disabled[disabled],
        .woocommerce input.button.alt.disabled,
        .woocommerce input.button.alt:disabled,
        .woocommerce input.button.alt:disabled[disabled] {
            color: #6254e7;
        }

        .woocommerce #respond input#submit.alt.disabled:hover,
        .woocommerce #respond input#submit.alt:disabled:hover,
        .woocommerce #respond input#submit.alt:disabled[disabled]:hover,
        .woocommerce a.button.alt.disabled:hover,
        .woocommerce a.button.alt:disabled:hover,
        .woocommerce a.button.alt:disabled[disabled]:hover,
        .woocommerce input.button.alt.disabled:hover,
        .woocommerce input.button.alt:disabled:hover,
        .woocommerce input.button.alt:disabled[disabled]:hover {
            background-color: #6254e7;
            border-color: #6254e7;
        }

        .woocommerce table.shop_table .product-quantity .qty.allotted,
        .woocommerce div.product form.cart .qty.allotted,
        .image_size_popup .close,
        #yith-quick-view-content .product_meta,
        .single-product.woocommerce div.product .product_meta,
        .woocommerce div.product form.cart .variations td,
        .woocommerce .widget_shopping_cart .total,
        .woocommerce.widget_shopping_cart .total,
        .woocommerce table.shop_table thead th,
        .woocommerce table.woocommerce-checkout-review-order-table tfoot td .woocommerce-Price-amount,
        .gt3_custom_tooltip,
        .woocommerce-cart .cart_totals table.shop_table tr th,
        .wpcf7-form .gt3_contactform_home6 input[type="submit"] {
            color: #3b3663;
        }

        .woocommerce ul.products li.product .price,
        .widget.widget_product_categories ul li:hover:before,
        .woocommerce ul.product_list_widget li .price,
        .woocommerce ul.cart_list li .quantity,
        body ul.cart_list li .quantity,
        body ul.product_list_widget li .quantity,
        .gt3_widget .quantity span.woocommerce-Price-amount.amount,
        .woocommerce-page ul.products li.product span.price,
        span.woocommerce-Price-amount.amount,
        .gt3_module_button_list a:hover,
        #back_to_top.show,
        body .elementor-widget-gt3-core-blogboxed .gt3_module_blogboxed.module_type1 .item_wrapper .blogboxed_content .gt3_post_footer .gt3_module_button_list a,
        .wpcf7-form .gt3_contactform_home6 input[type="submit"]:hover,
        .elementor-widget-gt3-core-pricebox .gt3_pricebox_module_wrapper.type4 .price_button-elementor a {
            color: #ff7426;
        }

        .elementor-widget-gt3-core-pricebox.active-package-yes .gt3_pricebox_module_wrapper.type4 .price_button-elementor a.shortcode_button,
        .elementor-widget-gt3-core-pricebox.active-package-yes .gt3_pricebox_module_wrapper.type4 .price_button-elementor .shortcode_button {
            color: #ff7426 !important;
        }

        .elementor-widget-gt3-core-blogboxed .gt3_module_blogboxed.module_type1 .blogboxed_content .gt3_module_button_list a,
        .elementor-widget-gt3-core-blogboxed .gt3_module_blogboxed.module_type1 .blogboxed_content.without_img_block .gt3_module_button_list a {
            color: #6254e7 !important;
        }

        .gt3_price_item-elementor .label_text span {
            background: #3b3663;
        }

        .gt3_custom_tooltip:before,
        .gt3_pagination_delimiter:after,
        .woocommerce .woocommerce-breadcrumb span.gt3_pagination_delimiter:before,
        blockquote:before,
        .blog_post_media--quote .quote_text:before,
        .blog_post_media__link_text:before,
        #back_to_top.show:hover {
            background: #ff7426;
        }

        .active-package-yes.elementor-widget-gt3-core-pricebox .gt3_pricebox_module_wrapper.type1 .gt3_price_item-cost-elementor .inner_circle,
        #back_to_top,
        #back_to_top:hover,
        #back_to_top.show:hover {
            border-color: #ff7426;
        }

        .gt3_custom_tooltip:after {
            border-color: #ff7426 transparent transparent transparent;
        }

        .woocommerce button.button.alt:hover,
        .woocommerce .woocommerce-message a.button:hover {
            background-color: transparent;
        }

        #yith-quick-view-content .product_meta a,
        #yith-quick-view-content .product_meta .sku,
        .single-product.woocommerce div.product .product_meta a,
        .single-product.woocommerce div.product .product_meta .sku,
        .select2-container--default .select2-selection--single .select2-selection__rendered,
        .woocommerce ul.products li.product .woocommerce-loop-product__title,
        .search_result_form .search_form label,
        .woocommerce .star-rating::before,
        .woocommerce #reviews p.stars span a,
        .woocommerce p.stars span a:hover~a::before,
        .woocommerce p.stars.selected span a.active~a::before,
        .select2-container--default .select2-results__option--highlighted[aria-selected],
        .select2-container--default .select2-results__option--highlighted[data-selected],
        .cart_list.product_list_widget a.remove,
        .elementor-widget-gt3-core-accordion .accordion_wrapper .item_title,
        .woocommerce .gt3-pagination_nav nav.woocommerce-pagination ul li .gt3_pagination_delimiter,
        .woocommerce .woocommerce-widget-layered-nav-list .woocommerce-widget-layered-nav-list__item span.count,
        .widget_categories ul li .post_count,
        .woocommerce .gt3-products-bottom nav.woocommerce-pagination ul li .page-numbers,
        .woocommerce ul.cart_list li .quantity {
            color: #696687;
        }

        .woocommerce #reviews a.button:hover,
        .woocommerce #reviews button.button:hover,
        .woocommerce #reviews input.button:hover,
        .widget .calendar_wrap table td#today,
        .woocommerce ul.products li.product .woocommerce-loop-product__title:hover {
            color: #6254e7;
        }

        .woocommerce.single-product #respond #commentform textarea:focus {
            border-bottom-color: #6254e7;
        }

        .woocommerce .gridlist-toggle,
        .woocommerce .gt3-products-header .gt3-gridlist-toggle,
        .wrapper_404 .gt3_module_button a:hover {
            background-color: #ffffff;
        }

        .woocommerce ul.products li.product .onsale,
        #yith-quick-view-content .onsale,
        .woocommerce span.onsale {
            background-color: rgba(233, 54, 49, 1);
        }

        .woocommerce ul.products li.product .onsale.hot-product,
        #yith-quick-view-content .onsale.hot-product,
        .woocommerce span.onsale.hot-product {
            background-color: rgba(44, 138, 34, 1);
        }

        .woocommerce ul.products li.product .onsale.new-product,
        #yith-quick-view-content .onsale.new-product,
        .woocommerce span.onsale.new-product {
            background-color: rgba(26, 29, 32, 1);
        }

        .search_form .search_text,
        .widget_product_search .gt3_search_form input#woocommerce-product-search-field-0,
        .gt3_burger_sidebar_container .mc_merge_var input#mc_mv_EMAIL,
        .wpda-builder__burger_container .mc_merge_var input#mc_mv_EMAIL,
        .gt3_burger_sidebar_container .mc_merge_var input[type="email"],
        .wpda-builder__burger_container .mc_merge_var input[type="email"] {
            border-color: rgba(98, 84, 231, 0.5) !important;
        }

        .gt3_widget.woocommerce .widget-title,
        .woocommerce div.product>.woocommerce-tabs ul.tabs li a,
        .logo_container .site-title {
            color: #3b3663;
        }

        blockquote,
        p.form-submit button#submit,
        .woocommerce ul.products li.product a .woocommerce-loop-product__title,
        .woocommerce div.product form.cart .button,
        .woocommerce-cart table.cart td.actions .coupon .button,
        .woocommerce-cart table.cart td.actions>.button,
        .home2_form input.wpcf7-form-control.wpcf7-submit,
        .home5_form input.wpcf7-form-control.wpcf7-submit,
        .wpcf7-form input[type="submit"],
        .woocommerce #respond input#submit,
        .woocommerce a.button,
        .woocommerce button.button,
        .woocommerce input.button {
            font-family: Rubik;
        }

        .woocommerce div.product form.cart div.quantity,
        .woocommerce #review_form #respond input[type="date"],
        .woocommerce #review_form #respond input[type="email"],
        .woocommerce #review_form #respond input[type="number"],
        .woocommerce #review_form #respond input[type="password"],
        .woocommerce #review_form #respond input[type="search"],
        .woocommerce #review_form #respond input[type="tel"],
        .woocommerce #review_form #respond input[type="text"],
        .woocommerce #review_form #respond input[type="url"],
        .woocommerce #review_form #respond select,
        .woocommerce #review_form #respond textarea,
        .woocommerce-cart table.cart td.actions .coupon .input-text,
        .woocommerce table.shop_table td,
        .woocommerce-cart .cart_totals table.shop_table tr th,
        .woocommerce-cart .cart_totals table.shop_table tr td,
        .widget_product_search .gt3_search_form input#woocommerce-product-search-field-0,
        .woocommerce ul.products li.product .gt3-animation-wrapper,
        .woocommerce-page ul.products li.product .gt3-animation-wrapper,
        .gt3_qty_spinner,
        .woocommerce-cart table.cart td.actions>.button,
        .woocommerce .cart-collaterals .cart_totals,
        .woocommerce-page .cart-collaterals .cart_totals,
        .woocommerce table.shop_table {
            border-color: rgba(98, 84, 231, 0.1) !important;
        }

        .coming_soon_form #mc_signup_form .mc_input,
        .coming_soon_form .mc4wp-form .mc_merge_var input {
            border-color: rgba(98, 84, 231, 0.04) !important;
        }

        .gt3_theme_textgradient-yes .elementor-heading-title::selection,
        .gt3_theme_textgradient-yes .gt3_typed_widget::selection,
        .gt3_theme_textgradient-yes .gt3-scrolling-text-element::selection {
            background: rgba(98, 84, 231, 0.5);
        }

        .price_item .item_cost_wrapper h3,
        .price_item-cost,
        .ribbon_arrow .control_text span:not(.all_slides),
        .elementor-widget-tabs .elementor-tab-desktop-title,
        .woocommerce.widget_product_categories ul li:hover>a,
        .product-categories>li.cat-parent:hover .gt3-button-cat-open,
        .woocommerce .woocommerce-widget-layered-nav-list .woocommerce-widget-layered-nav-list__item:hover>a,
        .woocommerce .woocommerce-widget-layered-nav-list .woocommerce-widget-layered-nav-list__item:hover span,
        .cart_list.product_list_widget a.remove:hover,
        .woocommerce ul.products li.product a:hover,
        .woocommerce table.shop_table td.product-remove a:hover:before,
        .woocommerce table.shop_table td.product-name a:hover {
            color: #6254e7;
        }

        .elementor-widget-gt3-core-portfolio .hover_none .wrapper .img:after,
        .elementor-widget-gt3-core-portfolio .hover_type1 .wrapper .img:after,
        .elementor-widget-gt3-core-portfolio .hover_type2 .wrapper:hover .img:after,
        .elementor-widget-gt3-core-portfolio .hover_type6 .wrapper .img_wrap:after {
            background: -moz-linear-gradient(top,
                    rgba(0, 0, 0, 0) 50%,
                    rgba(98, 84, 231) 100%);
            background: -webkit-linear-gradient(top,
                    rgba(0, 0, 0, 0) 50%,
                    rgba(98, 84, 231) 100%);
            background: linear-gradient(to bottom,
                    rgba(0, 0, 0, 0) 50%,
                    rgba(98, 84, 231) 100%);
        }

        .elementor-widget-gt3-core-portfolio .hover_type4 .wrapper .img:after,
        .elementor-widget-gt3-core-portfolio .hover_type5 .wrapper .img:after {
            background: -moz-linear-gradient(top,
                    rgba(0, 0, 0, 0) 0%,
                    rgba(98, 84, 231) 65%);
            background: -webkit-linear-gradient(top,
                    rgba(0, 0, 0, 0) 0%,
                    rgba(98, 84, 231) 65%);
            background: linear-gradient(to bottom,
                    rgba(0, 0, 0, 0) 0%,
                    rgba(98, 84, 231) 65%);
        }

        .tagcloud a,
        ul.pagerblock li a,
        ul.pagerblock li a,
        ul.pagerblock li span,
        .page-link .page-number,
        .gt3_comments_pagination .page,
        .gt3_comments_pagination .page-numbers {
            background: rgba(98, 84, 231, 0.04);
        }

        .tagcloud a:hover {
            background: rgba(98, 84, 231, 0.14);
        }

        .gt3_single_team_info__item a:hover span {
            color: #6254e7;
        }

        .woocommerce ul.products li.product .gt3_woocommerce_open_control_tag .button,
        .woocommerce div.product>.woocommerce-tabs .panel,
        .woocommerce .woocommerce-error,
        .woocommerce .woocommerce-info,
        .woocommerce .woocommerce-message,
        .gt3_product_list_nav {
            border-color: rgba(98, 84, 231, 0.1);
        }

        input[type="date"],
        input[type="email"],
        input[type="number"],
        input[type="password"],
        input[type="search"],
        input[type="tel"],
        input[type="text"],
        input[type="url"],
        select,
        textarea,
        button:hover {
            border-bottom-color: rgba(98, 84, 231, 0.3);
            color: #696687;
        }

        .mc_form_inside .mc_signup_submit:before,
        .mc4wp-form-fields .mc_signup_submit:before {
            color: rgba(98, 84, 231, 0.3);
        }

        .mc_form_inside .mc_signup_submit:hover:before,
        .mc4wp-form-fields .mc_signup_submit:hover:before {
            color: rgba(98, 84, 231, 0.5);
        }

        .price_item .label_text span,
        a.bordered:hover,
        .woocommerce ul.products li.product .gt3_woocommerce_open_control_tag_bottom div a,
        .woocommerce-cart .shipping-calculator-form .button:hover,
        .woocommerce #payment .woocommerce-page #place_order,
        .woocommerce #payment .woocommerce-page #place_order:hover,
        .woocommerce .return-to-shop a.button.wc-backward:hover,
        span.ui-slider-handle.ui-state-default.ui-corner-all.ui-state-hover,
        body table.compare-list .add-to-cart td a:hover,
        .woocommerce .widget_price_filter .price_slider_amount .button:hover,
        .woocommerce-account .woocommerce-MyAccount-content .woocommerce-Message.woocommerce-Message--info.woocommerce-info .button,
        .woo_mini-count>span:not(:empty),
        #review_form form#commentform input#submit:hover,
        .woocommerce .widget_price_filter .ui-slider .ui-slider-range,
        .infinite-scroll-request>div,
        .elementor-widget-gt3-core-button .gt3_module_button_elementor .hover_type2 .gt3_module_button__container span.gt3_module_button__cover.back,
        .elementor-widget-gt3-core-button .gt3_module_button_elementor .hover_type3:after,
        .elementor-widget-gt3-core-button .gt3_module_button_elementor .hover_type4:hover .gt3_module_button__cover:after,
        .elementor-widget-gt3-core-button .gt3_module_button_elementor .hover_type5 .gt3_module_button__container .gt3_module_button__cover.back:before,
        .elementor-widget-gt3-core-button .gt3_module_button_elementor .hover_type5 .gt3_module_button__container .gt3_module_button__cover.back:after,
        .elementor-widget-gt3-core-button .gt3_module_button_elementor .hover_type6:hover:before,
        .elementor-widget-gt3-core-button .gt3_module_button_elementor .hover_type6:hover:after,
        .woocommerce .widget_price_filter .ui-slider .ui-slider-handle:before,
        .woocommerce .widget_price_filter .price_slider_amount .button,
        .woocommerce div.product>.woocommerce-tabs ul.tabs li.active,
        .woocommerce-Reviews #respond form#commentform input#submit,
        .mc_form_inside #mc_signup_submit,
        .mc4wp-form-fields input[type="submit"],
        .woocommerce .woocommerce-message a.button:hover,
        .woocommerce .woocommerce-message a.button,
        .woocommerce .woocommerce-message a.woocommerce-Button.button:hover,
        .woocommerce-account .woocommerce-MyAccount-content .woocommerce-message--info .button:hover,
        .woocommerce-account .woocommerce-MyAccount-content .woocommerce-Message.woocommerce-Message--info.woocommerce-info .button:hover,
        .woocommerce-account form.woocommerce-EditAccountForm>p>.woocommerce-Button,
        .elementor-toggle span.gt3_dropcaps {
            background-color: #6254e7;
        }

        .woocommerce .widget_shopping_cart .buttons a,
        .woocommerce.widget_shopping_cart .buttons a,
        .woocommerce #respond input#submit.alt:hover,
        .woocommerce a.button.alt:hover,
        .woocommerce button.button.alt:hover,
        .woocommerce input.button.alt:hover,
        .revolution_form input.wpcf7-form-control.wpcf7-submit,
        .home2_form input.wpcf7-form-control.wpcf7-submit,
        .home5_form input.wpcf7-form-control.wpcf7-submit,
        .coming_soon_form .mc_form_inside #mc_signup_submit,
        .coming_soon_form .mc4wp-form-fields input[type="submit"],
        #respond .form-submit button#submit,
        .dark_style .revolution_form input.wpcf7-form-control.wpcf7-submit:hover {
            background-color: #ff7426;
        }

        .dark_style .revolution_form input.wpcf7-form-control.wpcf7-submit {
            background-color: #3b3663;
        }

        .gt3_comments_pagination .page-numbers,
        .page-link .page-number {
            border-color: rgba(98, 84, 231, 0.1);
            color: #696687;
        }

        .tagcloud a:hover,
        .woocommerce nav.woocommerce-pagination ul li a,
        .widget_product_search .gt3_search_form:before,
        ul.pagerblock li a,
        ul.pagerblock li span {
            color: #696687;
        }

        .elementor-widget-gt3-core-blogboxed .gt3_module_blogboxed.module_type1 .item_wrapper span.post_date {
            color: #696687 !important;
        }

        .page-link>span.page-number,
        .gt3_comments_pagination .page-numbers.current {
            color: #6254e7;
        }

        .page-link>span.page-number,
        .elementor-widget-gt3-core-tabs .ui-tabs-nav .ui-state-default.ui-tabs-active a,
        #review_form form#commentform input#submit,
        .woocommerce nav.woocommerce-pagination ul li span.current,
        .woocommerce #respond input#submit {
            background-color: #696687;
        }

        a.bordered:hover,
        .elementor-widget-tabs.elementor-tabs-view-horizontal .elementor-tab-desktop-title.elementor-active:after,
        .woocommerce .widget_price_filter .ui-slider .ui-slider-handle,
        .woocommerce .widget_price_filter .ui-slider .ui-slider-handle:before,
        .woocommerce ul.products li.product .gt3_woocommerce_open_control_tag .button:hover,
        .gt3_pricebox_module_wrapper.type1 .gt3_price_item-cost-elementor span.inner_circle {
            border-color: #6254e7;
        }

        .price_item-cost,
        .countdown-section,
        .gt3_process_bar_container--type-vertical .gt3_process_item .gt3_process_item__number,
        .widget.widget_posts .recent_posts .post_title a,
        .woocommerce .widget_shopping_cart .total strong,
        .woocommerce.widget_shopping_cart .total strong,
        .search .blog_post_preview .listing_meta span {
            font-family: Nunito;
        }

        .price_item-cost span,
        .ribbon_arrow .control_text span.all_slides,
        .woocommerce ul.cart_list li a,
        .isotope-filter a {
            color: #696687;
        }

        .fs_gallery_wrapper .status .first,
        .fs_gallery_wrapper .status .divider,
        .countdown-section,
        .page_nav_ancor a,
        .woocommerce .widget_price_filter .price_label,
        .woocommerce table.shop_table td.product-remove a,
        .woocommerce table.shop_table td.product-name a,
        .gt3_single_team_info__item h4 {
            color: #3b3663;
        }

        /* PixProof */
        .mfp-container button.mfp-arrow-right:hover {
            border-left-color: #6254e7;
        }

        .mfp-container button.mfp-arrow-left:hover {
            border-right-color: #6254e7;
        }

        /* End PixProof */
        /* Map */
        .map_info_marker {
            background: #0a0b0b;
        }

        .map_info_marker:after {
            border-color: #0a0b0b transparent transparent transparent;
        }

        .marker_info_street_number,
        .marker_info_street,
        .footer_back2top .gt3_svg_line_icon,
        button:hover {
            color: #6254e7;
        }

        .marker_info_desc {
            color: #ffffff;
        }

        /* .map_info_marker_content {
        font-family: ;
        font-weight: ;
      } */
        .marker_info_divider:after {
            background: #ffffff;
        }

        .elementor-custom-embed-play {
            color: rgba(98, 84, 231, 0.1);
        }

        .elementor-widget-gt3-core-button a {
            border-color: rgba(98, 84, 231, 0.1);
            color: #696687;
        }

        .elementor-widget-gt3-core-button a:hover {
            border-color: rgba(98, 84, 231, 0.1);
            color: #6254e7;
        }

        .search_result_form input[type="submit"]:hover,
        .elementor-widget-gt3-core-advanced-tabs:not(.gt3_tabs_marker-yes) .gt3_advanced_tabs_nav>li.ui-tabs-active>a,
        .elementor-widget-gt3-core-pricebox .gt3_pricebox_module_wrapper.type1 .gt3_price_item-cost-elementor span.inner_2_circles:before,
        .elementor-widget-gt3-core-pricebox .gt3_pricebox_module_wrapper.type1 .gt3_price_item-cost-elementor span.inner_2_circles:after,
        .elementor-widget-gt3-core-pricebox .gt3_pricebox_module_wrapper.type1 .gt3_price_item-cost-elementor,
        .elementor-widget-gt3-core-pricetable .price_button-elementor a,
        .woocommerce .gt3-products-bottom nav.woocommerce-pagination ul li .page-numbers:hover,
        .woocommerce .gt3-products-bottom nav.woocommerce-pagination ul li .page-numbers.current,
        .elementor-widget-gt3-core-button.gt3_portfolio_view_more_link_wrapper .gt3_module_button_elementor a:before,
        .elementor-widget-gt3-core-pricebox .price_button-elementor a span.gt3_module_button__cover.front:before,
        .gt3_pricebox_module_wrapper.type2 .gt3_price_item-wrapper_block:before,
        .gt3_pricebox_module_wrapper.type2 .gt3_price_item-elementor .gt3_item_cost_wrapper h3 {
            background-image: linear-gradient(96deg, #9289f1 0%, #6254e7 100%);
        }

        .elementor-widget-gt3-core-pricebox .gt3_pricebox_module_wrapper.type1 .price_button-elementor .shortcode_button .gt3_module_button__cover.back:before,
        .elementor-widget-gt3-core-pricebox .gt3_pricebox_module_wrapper.type2 .price_button-elementor .shortcode_button .gt3_module_button__cover.back:before,
        .elementor-widget-gt3-core-pricebox .gt3_pricebox_module_wrapper.type3 .price_button-elementor .shortcode_button .gt3_module_button__cover.back:before,
        .elementor-widget-gt3-core-pricebox .gt3_pricebox_module_wrapper.type4 .price_button-elementor .shortcode_button .gt3_module_button__cover.back:before {
            border-color: #6254e7;
        }

        .elementor-widget-gt3-core-pricebox .gt3_pricebox_module_wrapper.type1 .price_button-elementor .shortcode_button:hover,
        .elementor-widget-gt3-core-pricebox .gt3_pricebox_module_wrapper.type2 .price_button-elementor .shortcode_button:hover,
        .elementor-widget-gt3-core-pricebox .gt3_pricebox_module_wrapper.type3 .price_button-elementor .shortcode_button:hover,
        .elementor-widget-gt3-core-pricebox .gt3_pricebox_module_wrapper.type3 .gt3_price_item-cost-elementor,
        .elementor-widget-gt3-core-pricebox .gt3_pricebox_module_wrapper.type4 .price_button-elementor .shortcode_button:hover {
            color: #6254e7;
        }

        .elementor-widget-gt3-core-pricetable .price_button-elementor a:hover,
        .elementor-widget-gt3-core-button.gt3_portfolio_view_more_link_wrapper .gt3_module_button_elementor a:after {
            background-image: linear-gradient(96deg, #6254e7 0%, #9289f1 100%);
        }

        .isotope-filter a.active:before,
        .isotope-filter a:before,
        .search_result_form input[type="submit"],
        .elementor-widget-gt3-core-blog-packery .format-video .gt3_video__play_button,
        .active-package-yes.elementor-widget-gt3-core-pricebox .price_button-elementor span.gt3_module_button__cover.front:before,
        .elementor-widget-gt3-core-advanced-tabs:not(.gt3_tabs_marker-yes) .gt3_advanced_tabs_nav>li.ui-state-active>a,
        .gt3_advanced_tabs .gt3_advanced_tabs_nav_wrapper.ui-state-active .gt3_advanced_tabs_nav>li>a,
        .active-package-yes.elementor-widget-gt3-core-pricebox .gt3_pricebox_module_wrapper.type1 .gt3_price_item-cost-elementor span.inner_2_circles:before,
        .active-package-yes.elementor-widget-gt3-core-pricebox .gt3_pricebox_module_wrapper.type1 .gt3_price_item-cost-elementor span.inner_2_circles:after,
        .active-package-yes.elementor-widget-gt3-core-pricebox .gt3_pricebox_module_wrapper.type1 .gt3_price_item-cost-elementor,
        .active-package-yes.elementor-widget-gt3-core-pricebox .gt3_pricebox_module_wrapper.type2 .gt3_price_item_body-elementor,
        .active-package-yes.elementor-widget-gt3-core-pricebox .gt3_pricebox_module_wrapper.type2 .gt3_price_item-elementor .gt3_item_cost_wrapper h3,
        .active-package-yes.elementor-widget-gt3-core-pricebox .gt3_pricebox_module_wrapper.type3 .gt3_price_item_wrapper-elementor,
        .active-package-yes.elementor-widget-gt3-core-pricebox .gt3_pricebox_module_wrapper.type4 .gt3_price_item_wrapper-elementor,
        .format-video .gt3_video__play_button {
            background-image: linear-gradient(96deg, #f0ac0e 0%, #ff7426 100%);
        }

        .active-package-yes.elementor-widget-gt3-core-pricebox .price_button-elementor a:hover span.gt3_module_button__cover.back:before {
            background-image: linear-gradient(96deg, #ff7426 0%, #f0ac0e 100%);
        }

        .active-package-yes.elementor-widget-gt3-core-pricebox .gt3_pricebox_module_wrapper.type1 .price_button-elementor .shortcode_button .gt3_module_button__cover.back:before {
            border-color: #ff7426;
        }

        .active-package-yes.elementor-widget-gt3-core-pricebox .gt3_pricebox_module_wrapper.type2 .price_button-elementor .shortcode_button,
        .active-package-yes.elementor-widget-gt3-core-pricebox .gt3_pricebox_module_wrapper.type3 .price_button-elementor .shortcode_button,
        .active-package-yes.elementor-widget-gt3-core-pricebox .gt3_pricebox_module_wrapper.type4 .price_button-elementor .shortcode_button,
        .active-package-yes.elementor-widget-gt3-core-pricebox .gt3_pricebox_module_wrapper.type1 .price_button-elementor .shortcode_button:hover {
            color: #ff7426;
        }

        .wpcf7-form input[type="submit"],
        .mc_form_inside #mc_signup_submit,
        .mc4wp-form-fields input[type="submit"],
        ul.pagerblock li a.current,
        .woocommerce .widget_price_filter .price_slider_amount .button,
        .woocommerce .widget_shopping_cart .buttons a.button.checkout.wc-forward,
        .woocommerce.widget_shopping_cart .buttons a.button.checkout.wc-forward,
        .woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
        .woocommerce div.product form.cart .button,
        .woocommerce button.button,
        .woocommerce button.button:hover,
        .woocommerce div.product>.woocommerce-tabs ul.tabs li.active,
        .woocommerce-Reviews #respond form#commentform input#submit,
        .woocommerce .woocommerce-message a.button,
        .woocommerce #respond input#submit:hover,
        .woocommerce a.button:hover,
        .woocommerce input.button:hover,
        .woocommerce .return-to-shop a.button.wc-backward,
        input[type="submit"],
        button {
            background-image: linear-gradient(96deg,
                    #9289f1 0%,
                    #6254e7 51%,
                    #9289f1 100%);
        }

        .home08_ctf .wpcf7-form input[type="submit"] {
            border-color: #6254e7;
        }

        .elementor-widget-gt3-core-pricebox .gt3_pricebox_module_wrapper.type5 .price_button-elementor .shortcode_button {
            border-color: #6254e7;
        }

        .elementor-widget-gt3-core-pricebox .gt3_pricebox_module_wrapper.type5 .gt3_price_item_wrapper-elementor .price_button-elementor .price-button-icon {
            color: #6254e7;
        }

        .elementor-widget-gt3-core-pricebox .gt3_pricebox_module_wrapper.type5 .price_button-elementor .shortcode_button:hover {
            background-color: #6254e7;
        }

        .home08_ctf .wpcf7-form input[type="submit"]:hover {
            background-color: #6254e7;
        }

        .revolution_form input.wpcf7-form-control.wpcf7-submit,
        .home2_form input.wpcf7-form-control.wpcf7-submit,
        .home5_form input.wpcf7-form-control.wpcf7-submit,
        .coming_soon_form .mc_form_inside #mc_signup_submit,
        .coming_soon_form .mc4wp-form-fields input[type="submit"],
        .wrapper_404 .gt3_module_button a,
        #respond .form-submit button#submit,
        .woocommerce .widget_shopping_cart .buttons a,
        .woocommerce.widget_shopping_cart .buttons a,
        .woocommerce ul.products li.product .gt3_woocommerce_open_control_tag .button,
        .woocommerce #payment #place_order,
        .woocommerce-page #payment #place_order,
        form.revolution_form input[type="submit"],
        .gt3_home6_form .mc_form_inside #mc_signup_submit,
        .gt3_home6_form .mc4wp-form-fields input[type="submit"],
        .gt3_custom_form_large.default .wpcf7-form .gt3_contactform_home6 input[type="submit"] {
            background-image: linear-gradient(96deg,
                    #f0ac0e 0%,
                    #ff7426 51%,
                    #f0ac0e 100%);
        }

        .portfolio_carousel_wrapper .portfolio_item .wrapper .video-popup-wrapper .video-popup__link {
            background-color: #6254e7;
        }

        .portfolio_carousel_wrapper .portfolio_item .wrapper .video-popup-wrapper .video-popup__link:hover {
            color: #6254e7;
        }

        .gt3_modern_shop .woocommerce ul.products li.product a .woocommerce-loop-product__title,
        .woocommerce.gt3_modern_shop ul.products li.product a .woocommerce-loop-product__title {
            font-family: Nunito;
            color: #3b3663;
        }

        .gt3_modern_shop .gt3-page-title__content .page_title h1,
        .gt3_modern_shop h1,
        .gt3_modern_shop h2,
        .gt3_modern_shop h3,
        .gt3_modern_shop h4,
        .gt3_modern_shop h5,
        .gt3_modern_shop h6,
        .woocommerce.gt3_modern_shop #reviews .comment-reply-title,
        .gt3_modern_shop button.bapf_reset {
            font-family: Nunito;
            font-weight: 800;
        }

        .single-product.woocommerce.gt3_modern_shop div.product p.price,
        .woocommerce.gt3_modern_shop div.product .woocommerce-variation-price,
        .gt3_modern_shop .woocommerce table.shop_table td.product-name>a,
        .gt3_modern_shop .woocommerce table.shop_table.cart td.actions>label,
        .woocommerce-cart.gt3_modern_shop .cart-collaterals .cart_totals table th,
        .woocommerce-cart.gt3_modern_shop .cart-collaterals .cart_totals table td,
        .gt3_modern_shop .woocommerce .gt3_order_review_wrap table.shop_table th,
        .gt3_modern_shop .woocommerce .gt3_order_review_wrap table.shop_table .cart_item td,
        .gt3_modern_shop .woocommerce .gt3_order_review_wrap table.shop_table td span.amount,
        .gt3_modern_shop .woocommerce table.shop_table.woocommerce-table--order-details th,
        .gt3_modern_shop .woocommerce table.shop_table.woocommerce-table--order-details span.amount,
        .woocommerce.gt3_modern_shop ul.products li.product .price,
        .gt3_modern_shop .woocommerce ul.products li.product .price,
        .gt3_modern_shop .elementor-widget-gt3-core-blogboxed.modern_style-yes .gt3_module_blogboxed.module_type1 .post_category a,
        .gt3_modern_shop .elementor-widget-wpda-builder-cart .wpda-builder-cart .wpda-cart-inner .wpda-cart-container ul.cart_list li a,
        .gt3_modern_shop .elementor-widget-wpda-builder-cart .wpda-builder-cart .wpda-cart-inner .wpda-cart-container ul.cart_list li .quantity,
        .gt3_modern_shop .elementor-widget-wpda-builder-cart .wpda-builder-cart .wpda-cart-inner .wpda-cart-container p.woocommerce-mini-cart__total {
            font-family: Nunito;
        }

        .gt3_modern_shop .gt3_typed_widget .typing-effect-strings {
            font-family: Nunito !important;
        }

        .gt3_modern_shop .gt3-page-title__content .breadcrumbs,
        .gt3_modern_toggle_info_wrapper .woocommerce-Tabs-panel h6,
        .woocommerce.gt3_modern_shop table.shop_attributes th,
        .gt3_modern_shop [data-wvstooltip]:before,
        .single-product.woocommerce.gt3_modern_shop div.product p.price del,
        .gt3_modern_shop #yith-quick-view-modal .woocommerce div.product p.price del,
        .woocommerce.gt3_modern_shop div.product .woocommerce-variation-price p.price del,
        .woocommerce.gt3_modern_shop div.product .woocommerce-variation-price span.price del,
        .woocommerce-cart.gt3_modern_shop .cart-collaterals .cart_totals table .woocommerce-shipping-totals td,
        .woocommerce-checkout.gt3_modern_shop .woocommerce table.shop_table td.product-name .gt3-cart_category,
        .woocommerce-checkout.gt3_modern_shop .woocommerce table.shop_table .product-quantity,
        .woocommerce.gt3_modern_shop ul.products li.product .price del,
        .gt3_modern_shop .woocommerce ul.products li.product .price del {
            font-family: Rubik;
        }

        .gt3_modern_shop .sidebar .widget ul.yith-wcan-color li a:before {
            background: #ffffff;
        }

        .gt3_modern_shop .gt3_toggle_review,
        .woocommerce.gt3_modern_shop div.product .summary form.cart .variations td label,
        .gt3_modern_shop .summary .woocommerce-breadcrumb,
        .gt3_modern_shop .summary .woocommerce-breadcrumb a,
        .woocommerce.gt3_modern_shop div.product .woocommerce-variation-price span.price,
        .woocommerce.gt3_modern_shop span.woocommerce-Price-amount.amount,
        .gt3_modern_shop .gt3-page-title.gt3-page-title_horiz_align_center .gt3_breadcrumb a:not(:hover),
        .woocommerce-checkout.gt3_modern_shop .select2-container .select2-selection--single,
        .gt3_modern_shop .select2-container--default span.select2-selection--single,
        .woocommerce-checkout.gt3_modern_shop .woocommerce table.shop_table td.product-name .gt3-cart_category,
        .gt3_modern_shop .bapf_from:before,
        .gt3_modern_shop .bapf_to:before,
        .woocommerce.gt3_modern_shop ul.products li.product .price,
        .gt3_modern_shop .woocommerce ul.products li.product .price,
        .woocommerce.gt3_modern_shop .gt3-products-header .woocommerce-breadcrumb a:not(:hover),
        .woocommerce.gt3_modern_shop .gt3-products-header .woocommerce-breadcrumb,
        .woocommerce.gt3_modern_shop .gt3-products-header .gt3-gridlist-toggle>a,
        .woo-variation-swatches.gt3_modern_shop .product .variable-items-wrapper .variable-item .variable-item-span.variable-item-span-button,
        .gt3-mobile__burger_shop_sidebar_close,
        .gt3_modern_shop .gt3_custom_woo.elementor-widget-gt3-core-shoplist ul.products li.product .price del {
            color: #696687;
        }

        .gt3_modern_shop .comment-form-cookies-consent label,
        .gt3_modern_shop .elementor-widget-wpda-builder-cart .wpda-builder-cart .wpda-cart-inner .wpda-cart-container p.woocommerce-mini-cart__buttons a {
            color: #696687 !important;
        }

        .woocommerce.gt3_modern_shop #reviews .comment-reply-title,
        .woocommerce #reviews #comments ol.commentlist li .comment-text .gt3_woocommerce_open_control_tag p.meta,
        .woocommerce.gt3_modern_shop .star-rating,
        .woocommerce.single-product.gt3_modern_shop #respond #commentform .comment-form-rating label,
        .woocommerce.gt3_modern_shop p.stars:hover a:before,
        .woocommerce.gt3_modern_shop table.shop_attributes th,
        .gt3_product_sharing a:hover,
        .gt3_modern_shop #yith-quick-view-content .product_meta a,
        .single-product.woocommerce.gt3_modern_shop div.product .product_meta a,
        .gt3_woocommerce-review-link,
        .gt3_modern_shop .woocommerce table.shop_table td.product-name .gt3-cart_category a:hover,
        .gt3_modern_shop .woocommerce table.shop_table.cart td.product-subtotal span,
        .gt3_modern_shop .woocommerce table.shop_table.cart td.actions>label,
        .woocommerce-cart.gt3_modern_shop .cart-collaterals .cart_totals table tr.order-total,
        .gt3_back_cart:hover,
        .gt3_modern_shop .woocommerce form.woocommerce-checkout .form-row label,
        .gt3_modern_shop .woocommerce .gt3_order_review_wrap table.shop_table .cart_item td,
        .gt3_modern_shop .woocommerce .gt3_order_review_wrap table.shop_table .order-total th,
        .gt3_modern_shop .woocommerce ul.order_details span.amount,
        .gt3_modern_shop .woocommerce table.shop_table.woocommerce-table--order-details span.amount,
        .gt3_modern_shop button.bapf_reset,
        .gt3_modern_shop .bapf_sfilter.bapf_ckbox li label:hover,
        .gt3_modern_shop .berocket_aapf_widget_selected_filter li a:hover,
        .gt3_modern_shop .bapf_slidr_main.ui-widget-content .ui-slider-handle,
        .gt3_modern_shop .bapf_slidr_jqrui .bapf_from,
        .gt3_modern_shop .bapf_slidr_jqrui .bapf_to,
        .woocommerce.gt3_modern_shop .gt3-products-header .gt3-gridlist-toggle>a:hover,
        .woocommerce.gt3_modern_shop .gt3-products-header .gt3-gridlist-toggle>a.active,
        .woo-variation-swatches.gt3_modern_shop .product .variable-items-wrapper .variable-item:hover .variable-item-span.variable-item-span-button,
        .woo-variation-swatches.gt3_modern_shop .product .variable-items-wrapper .variable-item.selected .variable-item-span.variable-item-span-button,
        .gt3-mobile__burger_shop_sidebar_close:hover,
        .gt3-mobile_filter_btn:hover,
        .gt3_modern_shop .elementor-widget-wpda-builder-cart .wpda-builder-cart .wpda-cart-inner .wpda-cart-container p.woocommerce-mini-cart__total {
            color: #3b3663;
        }

        .gt3_modern_shop .woocommerce-Reviews #respond form#commentform input#submit,
        .gt3_modern_shop div.product form.cart button.single_add_to_cart_button,
        .gt3_modern_shop .woocommerce a.button,
        .gt3_modern_shop .woocommerce button.button,
        .gt3_modern_shop .woocommerce input.button,
        .gt3_modern_shop .woocommerce table.shop_table.cart td.actions button.button:disabled:hover,
        .gt3_modern_shop .woocommerce table.shop_table.cart td.actions button.button:disabled[disabled]:hover,
        .woocommerce-page.gt3_modern_shop #payment #place_order {
            background: #3b3663;
            border-color: #3b3663;
        }

        .gt3_modern_shop .bapf_slidr_main.ui-widget-content .ui-slider-range,
        .gt3_modern_shop .mc_form_inside .mc_signup_submit #mc_signup_submit,
        .gt3_modern_shop .mc4wp-form-fields .mc_signup_submit input[type="submit"],
        .gt3_modern_shop .woocommerce-message a.button {
            background: #3b3663;
        }

        .gt3_modern_shop .gt3_pagination_delimiter:after {
            background: #696687;
        }

        .gt3_modern_shop .woocommerce-Reviews #respond form#commentform input#submit:hover,
        .gt3_modern_shop div.product form.cart button.single_add_to_cart_button:hover,
        .gt3_modern_shop .woocommerce a.button:hover,
        .gt3_modern_shop .woocommerce button.button:hover,
        .gt3_modern_shop .woocommerce input.button:hover,
        .woocommerce-page.gt3_modern_shop #payment #place_order:hover,
        .gt3_modern_shop #back_to_top:hover,
        .gt3_modern_shop .gt3-products-bottom nav.woocommerce-pagination ul.page-numbers li .page-numbers:hover,
        .gt3_modern_shop .gt3-products-bottom nav.woocommerce-pagination ul.page-numbers li .page-numbers.current,
        .gt3_modern_shop .gt3_toggle_review:hover,
        .gt3_modern_shop .entry-summary .yith-wcwl-add-to-wishlist>div[class*="yith-wcwl-"]>a:hover,
        .gt3_modern_shop .woocommerce table.shop_table.cart td.actions input+button.button:hover {
            background: #6254e7;
            border-color: #6254e7;
        }

        .woocommerce-page.gt3_modern_shop ul.products.list li.product .gt3_modern_shop_item .gt3_woocommerce_open_control_tag>a:first-child,
        .gt3_modern_shop .woocommerce ul.products.list li.product .gt3_modern_shop_item .gt3_woocommerce_open_control_tag>a:first-child,
        .gt3_modern_shop .elementor-widget-wpda-builder-cart .wpda-builder-cart .wpda-cart-inner .wpda-cart-container p.woocommerce-mini-cart__buttons a.checkout {
            background: #3b3663 !important;
            border-color: #3b3663;
        }

        .woocommerce-page.gt3_modern_shop ul.products.list li.product .gt3_modern_shop_item .gt3_woocommerce_open_control_tag>a:hover,
        .gt3_modern_shop .woocommerce ul.products.list li.product .gt3_modern_shop_item .gt3_woocommerce_open_control_tag>a:hover,
        .gt3_modern_shop .elementor-widget-wpda-builder-cart .wpda-builder-cart .wpda-cart-inner .wpda-cart-container p.woocommerce-mini-cart__buttons a:hover,
        .gt3_subscribe_form input[type="submit"]:hover {
            background-color: #6254e7 !important;
            border-color: #6254e7;
        }

        .gt3_modern_shop .mc_form_inside .mc_signup_submit #mc_signup_submit:hover,
        .gt3_modern_shop .mc4wp-form-fields .mc_signup_submit input[type="submit"]:hover,
        .gt3_modern_shop .woocommerce-message a.button:hover,
        .gt3_modern_shop .wishlist_table td.product-add-to-cart a:hover,
        .gt3_modern_shop .wishlist_table .product-add-to-cart a:hover,
        .woocommerce.gt3_modern_shop .gt3-products-header>.gt3-mobile_filter_btn.has_active_filters:after {
            background: #6254e7;
        }

        .wpda-builder-cart .wpda-cart-inner .wpda-cart-container p.woocommerce-mini-cart__buttons a:hover {
            background: #6254e7 !important;
        }

        .gt3_modern_shop #yith-quick-view-content .product_meta a:hover,
        .single-product.woocommerce.gt3_modern_shop div.product .product_meta a:hover,
        .gt3_woocommerce-review-link:hover {
            color: #6254e7;
        }

        :root {
            --min_price_title: "Min Price";
            --max_price_title: "Max Price";
        }
    </style>
    <style id="gt3-stats-handle-inline-css" type="text/css">
        .wpda-header-builder .wpda-menu .gt3_megamenu_active>ul.sub-menu>li.megamenu-item-has-title>a {
            color: inherit !important;
        }

        .gt3-review_wrapper {
            font-size: 18px;
            line-height: 1;
        }

        .gt3-review_wrapper>span,
        .gt3-review_wrapper .stars_wrapper {
            display: inline-block;
            vertical-align: top;
            margin: 5px 20px;
        }

        .gt3-review_wrapper .stars_wrapper {
            margin: 0;
            width: 95px;
            height: 17px;
            background-image: url("https://ewebotwp.com/wp-content/themes/ewebot-child/img/gt3_stats.png");
            background-repeat: repeat-x;
            background-position: 0 -51px;
            background-size: 19px 68px;
            position: relative;
            overflow: hidden;
        }

        .gt3-review_wrapper .stars_wrapper:after {
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            content: "";
            background-image: url("https://ewebotwp.com/wp-content/themes/ewebot-child/img/gt3_stats.png");
            background-repeat: repeat-x;
            background-position: 0 -34px;
            background-size: 19px 68px;
        }

        .gt3-stats_sales a {
            color: #5a34bc;
        }

        .gt3-stats_reviews a {
            color: #3b3663;
        }

        .gt3-stats_comments a {
            color: #4d820f;
        }

        .gt3-stats_sales:before,
        .gt3-stats_comments:before {
            width: 19px;
            height: 17px;
            display: inline-block;
            vertical-align: top;
            content: "";
            margin-right: 8px;
            background-image: url("https://ewebotwp.com/wp-content/themes/ewebot-child/img/gt3_stats.png");
            background-repeat: no-repeat;
            background-position: 0 0;
            background-size: 19px 68px;
        }

        .gt3-stats_comments:before {
            background-position: 0 -17px;
        }

        #launcher {
            right: 85px !important;
            bottom: 25px !important;
        }

        @media only screen and (max-width: 600px) {
            #launcher {
                display: none !important;
            }

            .gt3_min_width_mobile a {
                min-width: 200px;
            }

            .gt3_min_width_mobile+.gt3_min_width_mobile a {
                min-width: 198px;
            }
        }

        @media screen and (min-width: 1199px) {
            .wpda-mobile-navigation-toggle {
                display: none;
            }
        }

        @media only screen and (min-width: 1025px) and (max-width: 1198px) {
            .elementor-widget-wpda-builder-menu:not(.mobile_menu_active) .wpda-mobile-navigation-toggle {
                margin-top: 17px;
                margin-bottom: 18px;
            }
        }
    </style>
    <style id="gt3-main_inline-handle-inline-css" type="text/css">
        html,
        body {
            margin: 0;
            padding: 0;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin: 0;
            padding: 0;
            word-wrap: break-word;
        }
    </style>
    <style id="gt3-core-elementor-core-inline-css" type="text/css">
        .elementor-section {
            z-index: 1;
        }

        img {
            vertical-align: top;
            outline: none !important;
            max-width: 100%;
            height: auto;
            user-select: none;
        }

        .isotope_item {
            opacity: 1;
        }

        .isotope_item.loading {
            opacity: 0 !important;
        }

        .elementor-widget-gt3-core-blog .isotope_item.loading {
            opacity: 1 !important;
        }

        .elementor-element-gt3_portfolio_archive {
            margin-bottom: 50px;
        }

        .archive .isotope_wrapper {
            margin-right: -30px;
        }

        .archive .isotope_wrapper .isotope_item {
            padding-right: 30px;
            padding-bottom: 30px;
        }
    </style>
    <style>
        /* latin */
        @font-face {
            font-family: "Inter";
            font-style: italic;
            font-weight: 100 900;
            font-display: swap;
            src: url(https://ewebotwp.com/wp-content/themes/ewebot-child/fonts/inter_i.woff2) format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122,
                U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* latin */
        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 100 900;
            font-display: swap;
            src: url(https://ewebotwp.com/wp-content/themes/ewebot-child/fonts/inter.woff2) format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122,
                U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* latin */
        @font-face {
            font-family: "Nunito";
            font-style: italic;
            font-weight: 200 1000;
            font-display: swap;
            src: url(https://ewebotwp.com/wp-content/themes/ewebot-child/fonts/nunito_i.woff2) format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122,
                U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* latin */
        @font-face {
            font-family: "Nunito";
            font-style: normal;
            font-weight: 200 1000;
            font-display: swap;
            src: url(https://ewebotwp.com/wp-content/themes/ewebot-child/fonts/nunito.woff2) format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122,
                U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* latin */
        @font-face {
            font-family: "Roboto";
            font-style: italic;
            font-weight: 100;
            font-display: swap;
            src: url(https://ewebotwp.com/wp-content/themes/ewebot-child/fonts/roboto_100i.woff2) format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122,
                U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* latin */
        @font-face {
            font-family: "Roboto";
            font-style: italic;
            font-weight: 300;
            font-display: swap;
            src: url(https://ewebotwp.com/wp-content/themes/ewebot-child/fonts/roboto_300i.woff2) format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122,
                U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* latin */
        @font-face {
            font-family: "Roboto";
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(https://ewebotwp.com/wp-content/themes/ewebot-child/fonts/roboto_400i.woff2) format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122,
                U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* latin */
        @font-face {
            font-family: "Roboto";
            font-style: italic;
            font-weight: 500;
            font-display: swap;
            src: url(https://ewebotwp.com/wp-content/themes/ewebot-child/fonts/roboto_500i.woff2) format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122,
                U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* latin */
        @font-face {
            font-family: "Roboto";
            font-style: italic;
            font-weight: 700;
            font-display: swap;
            src: url(https://ewebotwp.com/wp-content/themes/ewebot-child/fonts/roboto_700i.woff2) format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122,
                U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* latin */
        @font-face {
            font-family: "Roboto";
            font-style: italic;
            font-weight: 900;
            font-display: swap;
            src: url(https://ewebotwp.com/wp-content/themes/ewebot-child/fonts/roboto_900i.woff2) format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122,
                U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* latin */
        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 100;
            font-display: swap;
            src: url(https://ewebotwp.com/wp-content/themes/ewebot-child/fonts/roboto_100.woff2) format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122,
                U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* latin */
        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://ewebotwp.com/wp-content/themes/ewebot-child/fonts/roboto_300.woff2) format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122,
                U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* latin */
        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://ewebotwp.com/wp-content/themes/ewebot-child/fonts/roboto_400.woff2) format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122,
                U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* latin */
        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://ewebotwp.com/wp-content/themes/ewebot-child/fonts/roboto_500.woff2) format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122,
                U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* latin */
        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://ewebotwp.com/wp-content/themes/ewebot-child/fonts/roboto_700.woff2) format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122,
                U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* latin */
        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(https://ewebotwp.com/wp-content/themes/ewebot-child/fonts/roboto_900.woff2) format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122,
                U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* latin */
        @font-face {
            font-family: "Rubik";
            font-style: italic;
            font-weight: 300 900;
            font-display: swap;
            src: url(https://ewebotwp.com/wp-content/themes/ewebot-child/fonts/rubik_i.woff2) format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122,
                U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* latin */
        @font-face {
            font-family: "Rubik";
            font-style: normal;
            font-weight: 300 900;
            font-display: swap;
            src: url(https://ewebotwp.com/wp-content/themes/ewebot-child/fonts/rubik.woff2) format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122,
                U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* latin */
        @font-face {
            font-family: "Montserrat";
            font-style: italic;
            font-weight: 100 900;
            font-display: swap;
            src: url(https://ewebotwp.com/wp-content/themes/ewebot-child/fonts/montserrat_i.woff2) format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122,
                U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* latin */
        @font-face {
            font-family: "Montserrat";
            font-style: normal;
            font-weight: 100 900;
            font-display: swap;
            src: url(https://ewebotwp.com/wp-content/themes/ewebot-child/fonts/montserrat.woff2) format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122,
                U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* latin */
        @font-face {
            font-family: "Manrope";
            font-style: normal;
            font-weight: 200 800;
            font-display: swap;
            src: url(https://ewebotwp.com/wp-content/themes/ewebot-child/fonts/manrope.woff2) format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122,
                U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
    </style>
    <style>
        @font-face {
            font-family: "Theme_icon";
            src: url(https://ewebotwp.com/wp-content/themes/ewebot/fonts/theme.woff) format("woff2");
            font-weight: 400;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: "FontAwesome";
            src: url(https://ewebotwp.com/wp-content/themes/ewebot/fonts/fontawesome-webfont.woff2) format("woff2");
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }
    </style>
    <title>Home 10 &#8211; Ewebot</title>

    <meta name="robots" content="max-image-preview:large" />

    <style>
        img:is([sizes="auto" i],
        [sizes^="auto," i]) {
            contain-intrinsic-size: 3000px 1500px;
        }
    </style>

    <style id="gt3-core-elementor-core-inline-css" type="text/css">
        .elementor-section {
            z-index: 1;
        }

        img {
            vertical-align: top;
            outline: none !important;
            max-width: 100%;
            height: auto;
            user-select: none;
        }

        .isotope_item {
            opacity: 1;
        }

        .isotope_item.loading {
            opacity: 0 !important;
        }

        .elementor-widget-gt3-core-blog .isotope_item.loading {
            opacity: 1 !important;
        }

        .elementor-element-gt3_portfolio_archive {
            margin-bottom: 50px;
        }

        .archive .isotope_wrapper {
            margin-right: -30px;
        }

        .archive .isotope_wrapper .isotope_item {
            padding-right: 30px;
            padding-bottom: 30px;
        }
    </style>
    <style id="gt3-main_inline-handle-inline-css" type="text/css">
        html,
        body {
            margin: 0;
            padding: 0;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin: 0;
            padding: 0;
            word-wrap: break-word;
        }
    </style>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/frontend/assets/css/wc-blocks.css" />
    <link rel="stylesheet" href="/frontend/assets/css/custom-html.css" />
    <link rel="stylesheet" href="/frontend/assets/css/default-skin.css" />
    <link rel="stylesheet" href="/frontend/assets/css/theme-font.css" />
    <link rel="stylesheet" href="/frontend/assets/css/fontawesome.min.css" />
    <link rel="stylesheet" href="/frontend/assets/css/brands.min.css" />
    <link rel="stylesheet" href="/frontend/assets/css/style.min.css" />
    <link rel="stylesheet" href="/frontend/assets/css/apple-webkit.min.css" />
    <link rel="stylesheet" href="/frontend/assets/css/brands.css" />
    <link rel="stylesheet" href="/frontend/assets/css/elementor-icons.min.css" />
    <link rel="stylesheet" href="/frontend/assets/css/style.css" />
    <link rel="stylesheet" href="/frontend/assets/css/base.css" />
    <link rel="stylesheet" href="/frontend/assets/css/bubble.css" />
    <link rel="stylesheet" href="/frontend/assets/css/cf7.css" />
    <link rel="stylesheet" href="/frontend/assets/css/column.css" />
    <link rel="stylesheet" href="/frontend/assets/css/fadeIn.min.css" />
    <link rel="stylesheet" href="/frontend/assets/css/font-awesome.css" />
    <link rel="stylesheet" href="/frontend/assets/css/frontend.css" />
    <link rel="stylesheet" href="/frontend/assets/css/frontend.min.css" />
    <link rel="stylesheet" href="/frontend/assets/css/gt3-core-blogboxed.css" />
    <link rel="stylesheet" href="/frontend/assets/css/gt3-core-button.css" />
    <link rel="stylesheet" href="/frontend/assets/css/gt3-core-counter.css" />
    <link rel="stylesheet" href="/frontend/assets/css/gt3-core-imagebox.css" />
    <link rel="stylesheet" href="/frontend/assets/css/gt3-core-portfoliocarousel.css" />
    <link rel="stylesheet" href="/frontend/assets/css/gt3-core-testimonialslite.css" />
    <link rel="stylesheet" href="/frontend/assets/css/gt3-core-typed-text.css" />
    <link rel="stylesheet" href="/frontend/assets/css/lenit.css" />
    <link rel="stylesheet" href="/frontend/assets/css/mailchimp.css" />
    <link rel="stylesheet" href="/frontend/assets/css/mega-menu-frontend.css" />
    <link rel="stylesheet" href="/frontend/assets/css/post-7.css" />
    <link rel="stylesheet" href="/frontend/assets/css/progess.css" />
    <link rel="stylesheet" href="/frontend/assets/css/single.css" />
    <link rel="stylesheet" href="/frontend/assets/css/slick.css" />
    <link rel="stylesheet" href="/frontend/assets/css/widget-social-icons.min.css" />
    <link rel="stylesheet" href="/frontend/assets/css/widget-devider.min.css" />
    <link rel="stylesheet" href="/frontend/assets/css/widget-heading.css" />
    <link rel="stylesheet" href="/frontend/assets/css/widget-image.css" />
    <link rel="stylesheet" href="/frontend/assets/css/widget-spacer.min.css" />
    <link rel="stylesheet" href="/frontend/assets/css/wp-widgets.css" />
    <link rel="stylesheet" href="/frontend/assets/css/wpda.css" />
    <link rel="stylesheet" href="/frontend/assets/css/animations.css" />
    <link rel="stylesheet" href="/frontend/assets/css/customizer.css" />
    <link rel="stylesheet" href="/frontend/assets/css/fadeInDown.min.css " />
    <link rel="stylesheet" href="/frontend/assets/css/elementor-icons.min.css" />
    <link rel="stylesheet" href="/frontend/assets/css/fadeInLeft.min.css" />
    <link rel="stylesheet" href="/frontend/assets/css/zoomIn.min.css" />
    <link rel="stylesheet" href="/frontend/assets/css/fadeInRight.min.css" />
    <link rel="stylesheet" href="/frontend/assets/css/fadeInUp.min.css" />
    <link rel="stylesheet" href="/frontend/assets/css/widget-progress.min.css" />
    <link rel="stylesheet" href="/frontend/assets/css/post-14462.css" />
    <link rel="stylesheet" href="/frontend/assets/css/post-7803.css" />
    <link rel="stylesheet" href="/frontend/assets/css/post-7813.css" />
    <link rel="stylesheet" href="/frontend/assets/css/post-6782.css" />
    <link rel="stylesheet" href="/frontend/assets/css/post-9676.css" />
    <link rel="stylesheet" href="/frontend/assets/css/post-9684.css" />
    <link rel="stylesheet" href="/frontend/assets/css/photoswipe.css" />
</head>

<body
    class="wp-singular page-template-default page page-id-6782 wp-theme-ewebot wp-child-theme-ewebot-child theme-ewebot woocommerce-js woo-variation-swatches wvs-behavior-blur wvs-theme-ewebot-child wvs-show-label wvs-tooltip gt3_lenis_scroll gt3_enable_sticky_sidebar elementor-default elementor-kit-7 elementor-page elementor-page-6782 page-loaded e--ua-blink e--ua-chrome e--ua-webkit page-done"
    data-theme-color="#6254e7" data-elementor-device-mode="desktop">
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "G-FKS0NB8P2E");
    </script>

    <div data-elementor-type="wpda-header" data-elementor-id="7813"
        class="elementor elementor-7813 wpda-builder-page-7813 wpda-builder wpda-header-builder header_over_bg header_over_bg_tablet header_over_bg_mobile">
        <section
            class="wpda_builder_section sticky_section_desktop sticky_section_tablet sticky_section_mobile elementor-section elementor-top-section elementor-element elementor-element-1c7d0e5b elementor-section-stretched elementor-section-full_width elementor-section-height-min-height elementor-section-height-default elementor-section-items-middle"
            data-id="1c7d0e5b" data-element_type="section" data-settings='{"stretch_section":"section-stretched"}'
            style="">
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
                                            <div class="elementor-widget-container">
                                                <div class="wpda-builder-logo_container">
                                                    <a aria-label="Logo" href="https://ewebotwp.com/">
                                                        <img class="wpda-builder-logo"
                                                            src="/assets/img/logo_retinablack.png" alt=""
                                                            title="logo_retina(black)" width="298"
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
                                                            <li id="menu-item-12041"
                                                                class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor menu-item-has-children menu-item-12041 wpda-menu-item-12041 mega-menu-wrapper original-mobile-menu">
                                                                <a href="#">Home</a>
                                                                <ul class="sub-menu wpda-menu">
                                                                    <li id="menu-item-12076"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-12076 wpda-menu-item-12076">
                                                                        <a href="#">HOME VARIANTS 1-9</a>
                                                                        <ul class="sub-menu wpda-menu">
                                                                            <li id="menu-item-12049"
                                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12049 wpda-menu-item-12049">
                                                                                <a
                                                                                    href="https://ewebotwp.com/home-01/">Homepage
                                                                                    01</a>
                                                                            </li>
                                                                            <li id="menu-item-12044"
                                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12044 wpda-menu-item-12044">
                                                                                <a
                                                                                    href="https://ewebotwp.com/home-02/">Homepage
                                                                                    02</a>
                                                                            </li>
                                                                            <li id="menu-item-12043"
                                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12043 wpda-menu-item-12043">
                                                                                <a
                                                                                    href="https://ewebotwp.com/home-03/">Homepage
                                                                                    03</a>
                                                                            </li>
                                                                            <li id="menu-item-12071"
                                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12071 wpda-menu-item-12071">
                                                                                <a
                                                                                    href="https://ewebotwp.com/home-04/">Homepage
                                                                                    04</a>
                                                                            </li>
                                                                            <li id="menu-item-12072"
                                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12072 wpda-menu-item-12072">
                                                                                <a
                                                                                    href="https://ewebotwp.com/home-05/">Homepage
                                                                                    05</a>
                                                                            </li>
                                                                            <li id="menu-item-12074"
                                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12074 wpda-menu-item-12074">
                                                                                <a
                                                                                    href="https://ewebotwp.com/home-06/">Homepage
                                                                                    06</a>
                                                                            </li>
                                                                            <li id="menu-item-12075"
                                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12075 wpda-menu-item-12075">
                                                                                <a
                                                                                    href="https://ewebotwp.com/home-07/">Homepage
                                                                                    07</a>
                                                                            </li>
                                                                            <li id="menu-item-12078"
                                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12078 wpda-menu-item-12078">
                                                                                <a
                                                                                    href="https://ewebotwp.com/home-08/">Homepage
                                                                                    08</a>
                                                                            </li>
                                                                            <li id="menu-item-12079"
                                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12079 wpda-menu-item-12079">
                                                                                <a
                                                                                    href="https://ewebotwp.com/home-09/">Homepage
                                                                                    09</a>
                                                                            </li>
                                                                        </ul>
                                                                        <div class="mobile_switcher"></div>
                                                                    </li>
                                                                    <li id="menu-item-12077"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-12077 wpda-menu-item-12077">
                                                                        <a href="#">HOME VARIANTS 10-18</a>
                                                                        <ul class="sub-menu wpda-menu">
                                                                            <li id="menu-item-12080"
                                                                                class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-6782 current_page_item menu-item-12080 wpda-menu-item-12080">
                                                                                <a href="https://ewebotwp.com/home-10/"
                                                                                    aria-current="page">Homepage 10</a>
                                                                            </li>
                                                                            <li id="menu-item-12084"
                                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12084 wpda-menu-item-12084">
                                                                                <a
                                                                                    href="https://ewebotwp.com/modern-shop/">Homepage
                                                                                    11</a>
                                                                            </li>
                                                                            <li id="menu-item-12086"
                                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12086 wpda-menu-item-12086">
                                                                                <a
                                                                                    href="https://ewebotwp.com/home-12/">Homepage
                                                                                    12</a>
                                                                            </li>
                                                                            <li id="menu-item-12087"
                                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12087 wpda-menu-item-12087">
                                                                                <a
                                                                                    href="https://ewebotwp.com/home-13/">Homepage
                                                                                    13</a>
                                                                            </li>
                                                                            <li id="menu-item-12092"
                                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12092 wpda-menu-item-12092">
                                                                                <a
                                                                                    href="https://ewebotwp.com/home-motion/">Homepage
                                                                                    14</a>
                                                                            </li>
                                                                            <li id="menu-item-12518"
                                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12518 wpda-menu-item-12518">
                                                                                <a
                                                                                    href="https://ewebotwp.com/home-leads/">Homepage
                                                                                    15</a>
                                                                            </li>
                                                                            <li id="menu-item-12951"
                                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12951 wpda-menu-item-12951">
                                                                                <a
                                                                                    href="https://ewebotwp.com/home-agency/">Homepage
                                                                                    16</a>
                                                                            </li>
                                                                            <li id="menu-item-12950"
                                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12950 wpda-menu-item-12950">
                                                                                <a
                                                                                    href="https://ewebotwp.com/home-17/">Homepage
                                                                                    17</a>
                                                                            </li>
                                                                            <li id="menu-item-14145"
                                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14145 wpda-menu-item-14145">
                                                                                <a
                                                                                    href="https://ewebotwp.com/web-agency/">Homepage
                                                                                    18</a>
                                                                            </li>
                                                                        </ul>
                                                                        <div class="mobile_switcher"></div>
                                                                    </li>
                                                                </ul>
                                                                <ul data-elementor-type="wpda-menu"
                                                                    data-elementor-id="9684"
                                                                    class="elementor elementor-9684 wpda-builder-page-9684 wpda-builder wpda-menu-builder sub-menu wpda-menu wpda-mega-menu wpda-builder-page-9684 wpda-mega-menu-9684 wpda-builder wpda-menu-builder"
                                                                    id="wpda-mega-menu-9684" data-menu-type="boxed"
                                                                    data-menu-boxed-align="right">
                                                                    <div class="elementor-inner">
                                                                        <div class="elementor-section-wrap">
                                                                            <section
                                                                                class="elementor-section elementor-top-section elementor-element elementor-element-674c294a elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                                                data-id="674c294a"
                                                                                data-element_type="section">
                                                                                <div
                                                                                    class="elementor-container elementor-column-gap-default">
                                                                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-55da0e49"
                                                                                        data-id="55da0e49"
                                                                                        data-element_type="column">
                                                                                        <div
                                                                                            class="elementor-widget-wrap elementor-element-populated">
                                                                                            <section
                                                                                                class="elementor-section elementor-inner-section elementor-element elementor-element-bc636f0 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                                                                data-id="bc636f0"
                                                                                                data-element_type="section">
                                                                                                <div
                                                                                                    class="elementor-container elementor-column-gap-default">
                                                                                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2f4ff477"
                                                                                                        data-id="2f4ff477"
                                                                                                        data-element_type="column">
                                                                                                        <div
                                                                                                            class="elementor-widget-wrap elementor-element-populated">
                                                                                                            <div class="elementor-element elementor-element-17eb3a6a elementor-widget elementor-widget-heading"
                                                                                                                data-id="17eb3a6a"
                                                                                                                data-element_type="widget"
                                                                                                                data-widget_type="heading.default">
                                                                                                                <div
                                                                                                                    class="elementor-widget-container">
                                                                                                                    <h2
                                                                                                                        class="elementor-heading-title elementor-size-default">
                                                                                                                        HOME
                                                                                                                        VARIANTS
                                                                                                                        1-10
                                                                                                                    </h2>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="elementor-element elementor-element-5c1c86c4 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                                                                                data-id="5c1c86c4"
                                                                                                                data-element_type="widget"
                                                                                                                data-widget_type="divider.default">
                                                                                                                <div
                                                                                                                    class="elementor-widget-container">
                                                                                                                    <div
                                                                                                                        class="elementor-divider">
                                                                                                                        <span
                                                                                                                            class="elementor-divider-separator">
                                                                                                                        </span>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="elementor-element elementor-element-6930c838 elementor-widget elementor-widget-wpda-builder-menu-items"
                                                                                                                data-id="6930c838"
                                                                                                                data-element_type="widget"
                                                                                                                data-widget_type="wpda-builder-menu-items.default">
                                                                                                                <div
                                                                                                                    class="elementor-widget-container">
                                                                                                                    <div
                                                                                                                        class="wpda-builder-menu-items align_left">
                                                                                                                        <div
                                                                                                                            class="menu_item elementor-repeater-item-c730743">
                                                                                                                            <span
                                                                                                                                class="menu_item-title"><a
                                                                                                                                    href="https://ewebotwp.com/home-01/">Homepage
                                                                                                                                    01</a></span><span
                                                                                                                                class="menu_item_label">Classic</span>
                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="menu_item elementor-repeater-item-762b979">
                                                                                                                            <span
                                                                                                                                class="menu_item-title"><a
                                                                                                                                    href="https://ewebotwp.com/home-02/">Homepage
                                                                                                                                    02</a></span>
                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="menu_item elementor-repeater-item-8b0dd82">
                                                                                                                            <span
                                                                                                                                class="menu_item-title"><a
                                                                                                                                    href="https://ewebotwp.com/home-03/">Homepage
                                                                                                                                    03</a></span>
                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="menu_item elementor-repeater-item-9f5ca5a">
                                                                                                                            <span
                                                                                                                                class="menu_item-title"><a
                                                                                                                                    href="https://ewebotwp.com/home-04/">Homepage
                                                                                                                                    04</a></span><span
                                                                                                                                class="menu_item_label">HOT</span>
                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="menu_item elementor-repeater-item-d09e6d3">
                                                                                                                            <span
                                                                                                                                class="menu_item-title"><a
                                                                                                                                    href="https://ewebotwp.com/home-05/">Homepage
                                                                                                                                    05</a></span><span
                                                                                                                                class="menu_item_label">Popular</span>
                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="menu_item elementor-repeater-item-17c8d64">
                                                                                                                            <span
                                                                                                                                class="menu_item-title"><a
                                                                                                                                    href="https://ewebotwp.com/home-06/">Homepage
                                                                                                                                    06</a></span>
                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="menu_item elementor-repeater-item-e890617">
                                                                                                                            <span
                                                                                                                                class="menu_item-title"><a
                                                                                                                                    href="https://ewebotwp.com/home-07/">Homepage
                                                                                                                                    07</a></span>
                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="menu_item elementor-repeater-item-6a1c6e4">
                                                                                                                            <span
                                                                                                                                class="menu_item-title"><a
                                                                                                                                    href="https://ewebotwp.com/home-08/">Homepage
                                                                                                                                    08</a></span><span
                                                                                                                                class="menu_item_label">Business</span>
                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="menu_item elementor-repeater-item-c9e6456">
                                                                                                                            <span
                                                                                                                                class="menu_item-title"><a
                                                                                                                                    href="https://ewebotwp.com/home-09/">Homepage
                                                                                                                                    09</a></span><span
                                                                                                                                class="menu_item_label">Creative</span>
                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="menu_item elementor-repeater-item-361adfc current">
                                                                                                                            <span
                                                                                                                                class="menu_item-title"><a
                                                                                                                                    href="https://ewebotwp.com/home-10/">Homepage
                                                                                                                                    10</a></span><span
                                                                                                                                class="menu_item_label">Popular</span>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-df0972e"
                                                                                                        data-id="df0972e"
                                                                                                        data-element_type="column">
                                                                                                        <div
                                                                                                            class="elementor-widget-wrap elementor-element-populated">
                                                                                                            <div class="elementor-element elementor-element-32799eb9 elementor-widget elementor-widget-heading"
                                                                                                                data-id="32799eb9"
                                                                                                                data-element_type="widget"
                                                                                                                data-widget_type="heading.default">
                                                                                                                <div
                                                                                                                    class="elementor-widget-container">
                                                                                                                    <h2
                                                                                                                        class="elementor-heading-title elementor-size-default">
                                                                                                                        HOME
                                                                                                                        VARIANTS
                                                                                                                        11-20
                                                                                                                    </h2>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="elementor-element elementor-element-79dae228 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                                                                                data-id="79dae228"
                                                                                                                data-element_type="widget"
                                                                                                                data-widget_type="divider.default">
                                                                                                                <div
                                                                                                                    class="elementor-widget-container">
                                                                                                                    <div
                                                                                                                        class="elementor-divider">
                                                                                                                        <span
                                                                                                                            class="elementor-divider-separator">
                                                                                                                        </span>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="elementor-element elementor-element-7f2889c9 elementor-widget elementor-widget-wpda-builder-menu-items"
                                                                                                                data-id="7f2889c9"
                                                                                                                data-element_type="widget"
                                                                                                                data-widget_type="wpda-builder-menu-items.default">
                                                                                                                <div
                                                                                                                    class="elementor-widget-container">
                                                                                                                    <div
                                                                                                                        class="wpda-builder-menu-items align_left">
                                                                                                                        <div
                                                                                                                            class="menu_item elementor-repeater-item-9f5ca5a">
                                                                                                                            <span
                                                                                                                                class="menu_item-title"><a
                                                                                                                                    href="https://ewebotwp.com/modern-shop/">Homepage
                                                                                                                                    11</a></span><span
                                                                                                                                class="menu_item_label">Modern
                                                                                                                                Shop</span>
                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="menu_item elementor-repeater-item-d09e6d3">
                                                                                                                            <span
                                                                                                                                class="menu_item-title"><a
                                                                                                                                    href="https://ewebotwp.com/home-12/">Homepage
                                                                                                                                    12</a></span><span
                                                                                                                                class="menu_item_label">Influencer</span>
                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="menu_item elementor-repeater-item-17c8d64">
                                                                                                                            <span
                                                                                                                                class="menu_item-title"><a
                                                                                                                                    href="https://ewebotwp.com/home-13/">Homepage
                                                                                                                                    13</a></span><span
                                                                                                                                class="menu_item_label">App</span>
                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="menu_item elementor-repeater-item-3ee1aac">
                                                                                                                            <span
                                                                                                                                class="menu_item-title"><a
                                                                                                                                    href="https://ewebotwp.com/home-motion/">Homepage
                                                                                                                                    14</a></span><span
                                                                                                                                class="menu_item_label">Motion
                                                                                                                                Video</span>
                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="menu_item elementor-repeater-item-b525dc6">
                                                                                                                            <span
                                                                                                                                class="menu_item-title"><a
                                                                                                                                    href="https://ewebotwp.com/home-leads/">Homepage
                                                                                                                                    15</a></span><span
                                                                                                                                class="menu_item_label">Leads</span>
                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="menu_item elementor-repeater-item-e96d719">
                                                                                                                            <span
                                                                                                                                class="menu_item-title"><a
                                                                                                                                    href="https://ewebotwp.com/home-agency/">Homepage
                                                                                                                                    16</a></span><span
                                                                                                                                class="menu_item_label">Agency</span>
                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="menu_item elementor-repeater-item-c8336be">
                                                                                                                            <span
                                                                                                                                class="menu_item-title"><a
                                                                                                                                    href="https://ewebotwp.com/home-17/">Homepage
                                                                                                                                    17</a></span><span
                                                                                                                                class="menu_item_label">Social</span>
                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="menu_item elementor-repeater-item-c250477">
                                                                                                                            <span
                                                                                                                                class="menu_item-title"><a
                                                                                                                                    href="https://ewebotwp.com/web-agency/">Homepage
                                                                                                                                    18</a></span><span
                                                                                                                                class="menu_item_label">Web
                                                                                                                                Agency</span>
                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="menu_item elementor-repeater-item-3bca517">
                                                                                                                            <span
                                                                                                                                class="menu_item-title"><a
                                                                                                                                    href="https://ewebotwp.com/branding/">Homepage
                                                                                                                                    19</a></span><span
                                                                                                                                class="menu_item_label">Branding
                                                                                                                                NEW</span>
                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="menu_item elementor-repeater-item-fa4131e">
                                                                                                                            <span
                                                                                                                                class="menu_item-title"><a
                                                                                                                                    href="https://ewebotwp.com/webagency/">Homepage
                                                                                                                                    20</a></span><span
                                                                                                                                class="menu_item_label">Web
                                                                                                                                Design
                                                                                                                                NEW</span>
                                                                                                                        </div>
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
                                                                        </div>
                                                                    </div>
                                                                </ul>
                                                                <div class="mobile_switcher"></div>
                                                            </li>
                                                            <li id="menu-item-12042"
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-12042 wpda-menu-item-12042 mega-menu-wrapper">
                                                                <a href="#">Pages</a>
                                                                <ul data-elementor-type="wpda-menu"
                                                                    data-elementor-id="14462"
                                                                    class="elementor elementor-14462 wpda-builder-page-14462 wpda-builder wpda-menu-builder sub-menu wpda-menu wpda-mega-menu wpda-builder-page-14462 wpda-mega-menu-14462 wpda-builder wpda-menu-builder"
                                                                    id="wpda-mega-menu-14462" data-menu-type="boxed"
                                                                    data-menu-boxed-align="right">
                                                                    <div class="elementor-inner">
                                                                        <div class="elementor-section-wrap">
                                                                            <section
                                                                                class="elementor-section elementor-top-section elementor-element elementor-element-205974db gt3-mobile-fullwidth elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                                                data-id="205974db"
                                                                                data-element_type="section"
                                                                                data-settings='{"background_background":"classic"}'>
                                                                                <div
                                                                                    class="elementor-container elementor-column-gap-default">
                                                                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5849c67b"
                                                                                        data-id="5849c67b"
                                                                                        data-element_type="column">
                                                                                        <div
                                                                                            class="elementor-widget-wrap elementor-element-populated">
                                                                                            <section
                                                                                                class="elementor-section elementor-inner-section elementor-element elementor-element-5e81345a elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                                                                data-id="5e81345a"
                                                                                                data-element_type="section">
                                                                                                <div
                                                                                                    class="elementor-container elementor-column-gap-default">
                                                                                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-ad0ce03"
                                                                                                        data-id="ad0ce03"
                                                                                                        data-element_type="column"
                                                                                                        data-settings='{"background_background":"classic"}'>
                                                                                                        <div
                                                                                                            class="elementor-widget-wrap elementor-element-populated">
                                                                                                            <div class="elementor-element elementor-element-1dbd5bc elementor-widget elementor-widget-spacer"
                                                                                                                data-id="1dbd5bc"
                                                                                                                data-element_type="widget"
                                                                                                                data-widget_type="spacer.default">
                                                                                                                <div
                                                                                                                    class="elementor-widget-container">
                                                                                                                    <div
                                                                                                                        class="elementor-spacer">
                                                                                                                        <div
                                                                                                                            class="elementor-spacer-inner">
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="elementor-element elementor-element-75180aa0 elementor-widget__width-auto elementor-widget elementor-widget-heading"
                                                                                                                data-id="75180aa0"
                                                                                                                data-element_type="widget"
                                                                                                                data-widget_type="heading.default">
                                                                                                                <div
                                                                                                                    class="elementor-widget-container">
                                                                                                                    <h2
                                                                                                                        class="elementor-heading-title elementor-size-default">
                                                                                                                        NEW
                                                                                                                        STYLE
                                                                                                                        PAGES
                                                                                                                    </h2>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="elementor-element elementor-element-9217e1d elementor-widget__width-auto elementor-widget elementor-widget-heading"
                                                                                                                data-id="9217e1d"
                                                                                                                data-element_type="widget"
                                                                                                                data-widget_type="heading.default">
                                                                                                                <div
                                                                                                                    class="elementor-widget-container">
                                                                                                                    <h2
                                                                                                                        class="elementor-heading-title elementor-size-default">
                                                                                                                        New
                                                                                                                    </h2>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="elementor-element elementor-element-396a25b9 elementor-widget elementor-widget-wpda-builder-menu-items"
                                                                                                                data-id="396a25b9"
                                                                                                                data-element_type="widget"
                                                                                                                data-widget_type="wpda-builder-menu-items.default">
                                                                                                                <div
                                                                                                                    class="elementor-widget-container">
                                                                                                                    <div
                                                                                                                        class="wpda-builder-menu-items align_left">
                                                                                                                        <div
                                                                                                                            class="menu_item elementor-repeater-item-c730743">
                                                                                                                            <span
                                                                                                                                class="menu_item-title"><a
                                                                                                                                    href="https://ewebotwp.com/about-us-new/">About
                                                                                                                                    Us</a></span>
                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="menu_item elementor-repeater-item-7e64662">
                                                                                                                            <span
                                                                                                                                class="menu_item-title"><a
                                                                                                                                    href="https://ewebotwp.com/smm-services-new/">SMM
                                                                                                                                    Services</a></span>
                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="menu_item elementor-repeater-item-16848ab">
                                                                                                                            <span
                                                                                                                                class="menu_item-title"><a
                                                                                                                                    href="https://ewebotwp.com/services-new/">Marketing
                                                                                                                                    Services</a></span>
                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="menu_item elementor-repeater-item-a57643b">
                                                                                                                            <span
                                                                                                                                class="menu_item-title"><a
                                                                                                                                    href="https://ewebotwp.com/ppc-services-new/">PPC
                                                                                                                                    Services</a></span>
                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="menu_item elementor-repeater-item-5da1943">
                                                                                                                            <span
                                                                                                                                class="menu_item-title"><a
                                                                                                                                    href="https://ewebotwp.com/seo-services-new/">SEO
                                                                                                                                    Services</a></span>
                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="menu_item elementor-repeater-item-d1a9a50">
                                                                                                                            <span
                                                                                                                                class="menu_item-title"><a
                                                                                                                                    href="https://ewebotwp.com/our-team-new/">Our
                                                                                                                                    Agency
                                                                                                                                    Team</a></span>
                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="menu_item elementor-repeater-item-639e00c">
                                                                                                                            <span
                                                                                                                                class="menu_item-title"><a
                                                                                                                                    href="https://ewebotwp.com/team/angela-lung/">Single
                                                                                                                                    Team
                                                                                                                                    Page</a></span>
                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="menu_item elementor-repeater-item-d8439c2">
                                                                                                                            <span
                                                                                                                                class="menu_item-title"><a
                                                                                                                                    href="https://ewebotwp.com/blog-new/">Blog
                                                                                                                                    New
                                                                                                                                </a></span>
                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="menu_item elementor-repeater-item-91aefcd">
                                                                                                                            <span
                                                                                                                                class="menu_item-title"><a
                                                                                                                                    href="https://ewebotwp.com/how-to-increase-your-roi-through-scientific-sem-2/">Blog
                                                                                                                                    Single
                                                                                                                                    Page</a></span>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="elementor-element elementor-element-1f280a2 elementor-widget elementor-widget-spacer"
                                                                                                                data-id="1f280a2"
                                                                                                                data-element_type="widget"
                                                                                                                data-widget_type="spacer.default">
                                                                                                                <div
                                                                                                                    class="elementor-widget-container">
                                                                                                                    <div
                                                                                                                        class="elementor-spacer">
                                                                                                                        <div
                                                                                                                            class="elementor-spacer-inner">
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="elementor-element elementor-element-f867d7b gt3_theme_textgradient-yes elementor-absolute e-transform e-transform gt3-pages-menu-custom-heading elementor-widget elementor-widget-heading"
                                                                                                                data-id="f867d7b"
                                                                                                                data-element_type="widget"
                                                                                                                data-settings='{"_position":"absolute","_transform_rotateZ_effect":{"unit":"px","size":-90,"sizes":[]},"_transform_translateX_effect":{"unit":"%","size":-11,"sizes":[]},"_transform_translateX_effect_tablet":{"unit":"%","size":"","sizes":[]},"_transform_translateX_effect_mobile":{"unit":"%","size":"","sizes":[]},"_transform_translateY_effect":{"unit":"%","size":-36,"sizes":[]},"_transform_translateY_effect_tablet":{"unit":"%","size":"","sizes":[]},"_transform_translateY_effect_mobile":{"unit":"%","size":"","sizes":[]},"_transform_rotateZ_effect_tablet":{"unit":"deg","size":"","sizes":[]},"_transform_rotateZ_effect_mobile":{"unit":"deg","size":"","sizes":[]}}'
                                                                                                                data-widget_type="heading.default">
                                                                                                                <div
                                                                                                                    class="elementor-widget-container">
                                                                                                                    <h3
                                                                                                                        class="elementor-heading-title elementor-size-default">
                                                                                                                        NEWNEWNEW
                                                                                                                    </h3>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-197cf9fa"
                                                                                                        data-id="197cf9fa"
                                                                                                        data-element_type="column">
                                                                                                        <div
                                                                                                            class="elementor-widget-wrap elementor-element-populated">
                                                                                                            <div class="elementor-element elementor-element-d6802c6 elementor-widget elementor-widget-spacer"
                                                                                                                data-id="d6802c6"
                                                                                                                data-element_type="widget"
                                                                                                                data-widget_type="spacer.default">
                                                                                                                <div
                                                                                                                    class="elementor-widget-container">
                                                                                                                    <div
                                                                                                                        class="elementor-spacer">
                                                                                                                        <div
                                                                                                                            class="elementor-spacer-inner">
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="elementor-element elementor-element-9ce12ff elementor-widget elementor-widget-heading"
                                                                                                                data-id="9ce12ff"
                                                                                                                data-element_type="widget"
                                                                                                                data-widget_type="heading.default">
                                                                                                                <div
                                                                                                                    class="elementor-widget-container">
                                                                                                                    <h2
                                                                                                                        class="elementor-heading-title elementor-size-default">
                                                                                                                        OTHER
                                                                                                                        INNER
                                                                                                                        PAGES
                                                                                                                    </h2>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="elementor-element elementor-element-7a3f78a wpda_alignment-left elementor-widget elementor-widget-wpda-builder-menu"
                                                                                                                data-id="7a3f78a"
                                                                                                                data-element_type="widget"
                                                                                                                data-widget_type="wpda-builder-menu.default">
                                                                                                                <div
                                                                                                                    class="elementor-widget-container">
                                                                                                                    <div
                                                                                                                        class="wpda-mobile-navigation-toggle">
                                                                                                                        <div
                                                                                                                            class="wpda-toggle-box">
                                                                                                                            <div
                                                                                                                                class="wpda-toggle-inner">
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="wpda-navbar-collapse">
                                                                                                                        <nav
                                                                                                                            class="wpda-builder-menu">
                                                                                                                            <ul id="menu-inner-pages"
                                                                                                                                class="wpda-menu">
                                                                                                                                <li id="menu-item-14481"
                                                                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14481">
                                                                                                                                    <a
                                                                                                                                        href="https://ewebotwp.com/about-us/">About
                                                                                                                                        Us</a>
                                                                                                                                </li>
                                                                                                                                <li id="menu-item-14488"
                                                                                                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-14488">
                                                                                                                                    <a
                                                                                                                                        href="#">Services</a>
                                                                                                                                    <ul
                                                                                                                                        class="sub-menu">
                                                                                                                                        <li id="menu-item-14500"
                                                                                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14500 megamenu-item-has-title">
                                                                                                                                            <a
                                                                                                                                                href="https://ewebotwp.com/services/">Main
                                                                                                                                                Services</a>
                                                                                                                                        </li>
                                                                                                                                        <li id="menu-item-14498"
                                                                                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14498 megamenu-item-has-title">
                                                                                                                                            <a
                                                                                                                                                href="https://ewebotwp.com/ppc-services/">PPC
                                                                                                                                                Services</a>
                                                                                                                                        </li>
                                                                                                                                        <li id="menu-item-14496"
                                                                                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14496 megamenu-item-has-title">
                                                                                                                                            <a
                                                                                                                                                href="https://ewebotwp.com/seo-services/">SEO
                                                                                                                                                Services</a>
                                                                                                                                        </li>
                                                                                                                                        <li id="menu-item-14492"
                                                                                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14492 megamenu-item-has-title">
                                                                                                                                            <a
                                                                                                                                                href="https://ewebotwp.com/smm-services/">SMM
                                                                                                                                                Services</a>
                                                                                                                                        </li>
                                                                                                                                    </ul>
                                                                                                                                    <div
                                                                                                                                        class="mobile_switcher">
                                                                                                                                    </div>
                                                                                                                                </li>
                                                                                                                                <li id="menu-item-14501"
                                                                                                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-14501">
                                                                                                                                    <a
                                                                                                                                        href="#">Our
                                                                                                                                        Case
                                                                                                                                        Studies</a>
                                                                                                                                    <ul
                                                                                                                                        class="sub-menu">
                                                                                                                                        <li id="menu-item-14503"
                                                                                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14503 megamenu-item-has-title">
                                                                                                                                            <a
                                                                                                                                                href="https://ewebotwp.com/our-case-studies/">Case
                                                                                                                                                Studies
                                                                                                                                                Grid</a>
                                                                                                                                        </li>
                                                                                                                                        <li id="menu-item-14502"
                                                                                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14502 megamenu-item-has-title">
                                                                                                                                            <a
                                                                                                                                                href="https://ewebotwp.com/our-case-studies-layout-2/">Case
                                                                                                                                                Studies
                                                                                                                                                Grid
                                                                                                                                                II</a>
                                                                                                                                        </li>
                                                                                                                                        <li id="menu-item-14504"
                                                                                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14504 megamenu-item-has-title">
                                                                                                                                            <a
                                                                                                                                                href="https://ewebotwp.com/our-case-studies-2/">Case
                                                                                                                                                Studies
                                                                                                                                                Packery</a>
                                                                                                                                        </li>
                                                                                                                                        <li id="menu-item-14506"
                                                                                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14506 megamenu-item-has-title">
                                                                                                                                            <a
                                                                                                                                                href="https://ewebotwp.com/case-studies-with-ajax/">Case
                                                                                                                                                Studies
                                                                                                                                                with
                                                                                                                                                Ajax</a>
                                                                                                                                        </li>
                                                                                                                                        <li id="menu-item-14508"
                                                                                                                                            class="menu-item menu-item-type-post_type menu-item-object-portfolio menu-item-14508 megamenu-item-has-title">
                                                                                                                                            <a
                                                                                                                                                href="https://ewebotwp.com/portfolio/online-media-management/">Single
                                                                                                                                                Case</a>
                                                                                                                                        </li>
                                                                                                                                    </ul>
                                                                                                                                    <div
                                                                                                                                        class="mobile_switcher">
                                                                                                                                    </div>
                                                                                                                                </li>
                                                                                                                                <li id="menu-item-14509"
                                                                                                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-14509">
                                                                                                                                    <a
                                                                                                                                        href="#">Our
                                                                                                                                        Team</a>
                                                                                                                                    <ul
                                                                                                                                        class="sub-menu">
                                                                                                                                        <li id="menu-item-14510"
                                                                                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14510 megamenu-item-has-title">
                                                                                                                                            <a
                                                                                                                                                href="https://ewebotwp.com/our-team/">Team
                                                                                                                                                Members</a>
                                                                                                                                        </li>
                                                                                                                                        <li id="menu-item-14511"
                                                                                                                                            class="menu-item menu-item-type-post_type menu-item-object-team menu-item-14511 megamenu-item-has-title">
                                                                                                                                            <a
                                                                                                                                                href="https://ewebotwp.com/team/sandra-willson/">Single
                                                                                                                                                Team</a>
                                                                                                                                        </li>
                                                                                                                                    </ul>
                                                                                                                                    <div
                                                                                                                                        class="mobile_switcher">
                                                                                                                                    </div>
                                                                                                                                </li>
                                                                                                                                <li id="menu-item-14512"
                                                                                                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-14512">
                                                                                                                                    <a
                                                                                                                                        href="#">FAQ</a>
                                                                                                                                    <ul
                                                                                                                                        class="sub-menu">
                                                                                                                                        <li id="menu-item-14514"
                                                                                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14514 megamenu-item-has-title">
                                                                                                                                            <a
                                                                                                                                                href="https://ewebotwp.com/faq/">FAQ
                                                                                                                                                Variant
                                                                                                                                                I</a>
                                                                                                                                        </li>
                                                                                                                                        <li id="menu-item-14513"
                                                                                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14513 megamenu-item-has-title">
                                                                                                                                            <a
                                                                                                                                                href="https://ewebotwp.com/faq-2/">FAQ
                                                                                                                                                Variant
                                                                                                                                                II</a>
                                                                                                                                        </li>
                                                                                                                                    </ul>
                                                                                                                                    <div
                                                                                                                                        class="mobile_switcher">
                                                                                                                                    </div>
                                                                                                                                </li>
                                                                                                                                <li id="menu-item-14515"
                                                                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14515">
                                                                                                                                    <a
                                                                                                                                        href="https://ewebotwp.com/pricing-plans/">Pricing
                                                                                                                                        Plans</a>
                                                                                                                                </li>
                                                                                                                                <li id="menu-item-14516"
                                                                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14516">
                                                                                                                                    <a
                                                                                                                                        href="https://ewebotwp.com/photo-gallery/">Photo
                                                                                                                                        Gallery</a>
                                                                                                                                </li>
                                                                                                                                <li id="menu-item-14517"
                                                                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14517">
                                                                                                                                    <a
                                                                                                                                        href="https://ewebotwp.com/coming-soon/">Coming
                                                                                                                                        Soon</a>
                                                                                                                                </li>
                                                                                                                                <li id="menu-item-14518"
                                                                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14518">
                                                                                                                                    <a
                                                                                                                                        href="https://ewebotwp.com/typography/">Typography</a>
                                                                                                                                </li>
                                                                                                                                <li id="menu-item-14519"
                                                                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14519">
                                                                                                                                    <a
                                                                                                                                        href="https://ewebotwp.com/page-404/">Page
                                                                                                                                        404</a>
                                                                                                                                </li>
                                                                                                                            </ul>
                                                                                                                        </nav>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="elementor-element elementor-element-b4c653a elementor-widget elementor-widget-spacer"
                                                                                                                data-id="b4c653a"
                                                                                                                data-element_type="widget"
                                                                                                                data-widget_type="spacer.default">
                                                                                                                <div
                                                                                                                    class="elementor-widget-container">
                                                                                                                    <div
                                                                                                                        class="elementor-spacer">
                                                                                                                        <div
                                                                                                                            class="elementor-spacer-inner">
                                                                                                                        </div>
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
                                                                        </div>
                                                                    </div>
                                                                </ul>
                                                                <div class="mobile_switcher"></div>
                                                            </li>
                                                            <li id="menu-item-12089"
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-12089 wpda-menu-item-12089 mega-menu-wrapper">
                                                                <a href="#">Mega Menu</a>
                                                                <ul data-elementor-type="wpda-menu"
                                                                    data-elementor-id="9676"
                                                                    class="elementor elementor-9676 wpda-builder-page-9676 wpda-builder wpda-menu-builder sub-menu wpda-menu wpda-mega-menu wpda-builder-page-9676 wpda-mega-menu-9676 wpda-builder wpda-menu-builder"
                                                                    id="wpda-mega-menu-9676"
                                                                    data-menu-type="fullwidth"
                                                                    style="
                                      width: 1405.2px;
                                      margin-left: -803.75px;
                                    ">
                                                                    <div class="elementor-inner">
                                                                        <div class="elementor-section-wrap">
                                                                            <section
                                                                                class="elementor-section elementor-top-section elementor-element elementor-element-239051bc elementor-section-full_width gt3_relative_section elementor-section-height-default elementor-section-height-default"
                                                                                data-id="239051bc"
                                                                                data-element_type="section"
                                                                                data-settings='{"background_background":"classic"}'>
                                                                                <div
                                                                                    class="elementor-container elementor-column-gap-default">
                                                                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6fd3d047"
                                                                                        data-id="6fd3d047"
                                                                                        data-element_type="column">
                                                                                        <div
                                                                                            class="elementor-widget-wrap elementor-element-populated">
                                                                                            <div class="elementor-element elementor-element-602ecd6 gt3_absolute_block elementor-absolute elementor-widget elementor-widget-html"
                                                                                                data-id="602ecd6"
                                                                                                data-element_type="widget"
                                                                                                data-settings='{"_position":"absolute"}'
                                                                                                data-widget_type="html.default">
                                                                                                <div
                                                                                                    class="elementor-widget-container">
                                                                                                    <style
                                                                                                        type="text/css">
                                                                                                        canvas#gt3_landing_canvas {
                                                                                                            background-color: transparent;
                                                                                                            width: 100%;
                                                                                                            height: 100%;
                                                                                                        }
                                                                                                    </style>
                                                                                                    <canvas
                                                                                                        id="gt3_landing_canvas"
                                                                                                        width="1491"
                                                                                                        height="378">
                                                                                                    </canvas>
                                                                                                    <script type="text/javascript">
                                                                                                        (function() {
                                                                                                            var canvas =
                                                                                                                document.getElementById(
                                                                                                                    "gt3_landing_canvas"
                                                                                                                ),
                                                                                                                can_w = parseInt(
                                                                                                                    canvas.getAttribute(
                                                                                                                        "width"
                                                                                                                    )
                                                                                                                ),
                                                                                                                can_h = parseInt(
                                                                                                                    canvas.getAttribute(
                                                                                                                        "height"
                                                                                                                    )
                                                                                                                ),
                                                                                                                ctx =
                                                                                                                canvas.getContext(
                                                                                                                    "2d"
                                                                                                                );

                                                                                                            var ball = {
                                                                                                                    x: 0,
                                                                                                                    y: 0,
                                                                                                                    vx: 0,
                                                                                                                    vy: 0,
                                                                                                                    r: 0,
                                                                                                                    alpha: 1,
                                                                                                                    phase: 0,
                                                                                                                },
                                                                                                                ball_color = {
                                                                                                                    r: 209,
                                                                                                                    g: 214,
                                                                                                                    b: 218,
                                                                                                                },
                                                                                                                R = 7,
                                                                                                                balls = [],
                                                                                                                alpha_f = 0.03,
                                                                                                                alpha_phase = 0,
                                                                                                                // Line
                                                                                                                link_line_width = 0.8,
                                                                                                                dis_limit = 260,
                                                                                                                add_mouse_point = true,
                                                                                                                mouse_in = false,
                                                                                                                mouse_ball = {
                                                                                                                    x: 0,
                                                                                                                    y: 0,
                                                                                                                    vx: 0,
                                                                                                                    vy: 0,
                                                                                                                    r: 0,
                                                                                                                    type: "mouse",
                                                                                                                };

                                                                                                            // Random speed
                                                                                                            function getRandomSpeed(
                                                                                                                pos
                                                                                                            ) {
                                                                                                                var min = -1,
                                                                                                                    max = 1;
                                                                                                                switch (pos) {
                                                                                                                    case "top":
                                                                                                                        return [
                                                                                                                            randomNumFrom(
                                                                                                                                min,
                                                                                                                                max
                                                                                                                            ),
                                                                                                                            randomNumFrom(
                                                                                                                                0.1,
                                                                                                                                max
                                                                                                                            ),
                                                                                                                        ];
                                                                                                                        break;
                                                                                                                    case "right":
                                                                                                                        return [
                                                                                                                            randomNumFrom(
                                                                                                                                min,
                                                                                                                                -0.1
                                                                                                                            ),
                                                                                                                            randomNumFrom(
                                                                                                                                min,
                                                                                                                                max
                                                                                                                            ),
                                                                                                                        ];
                                                                                                                        break;
                                                                                                                    case "bottom":
                                                                                                                        return [
                                                                                                                            randomNumFrom(
                                                                                                                                min,
                                                                                                                                max
                                                                                                                            ),
                                                                                                                            randomNumFrom(
                                                                                                                                min,
                                                                                                                                -0.1
                                                                                                                            ),
                                                                                                                        ];
                                                                                                                        break;
                                                                                                                    case "left":
                                                                                                                        return [
                                                                                                                            randomNumFrom(
                                                                                                                                0.1,
                                                                                                                                max
                                                                                                                            ),
                                                                                                                            randomNumFrom(
                                                                                                                                min,
                                                                                                                                max
                                                                                                                            ),
                                                                                                                        ];
                                                                                                                        break;
                                                                                                                    default:
                                                                                                                        return;
                                                                                                                        break;
                                                                                                                }
                                                                                                            }

                                                                                                            function randomArrayItem(
                                                                                                                arr
                                                                                                            ) {
                                                                                                                return arr[
                                                                                                                    Math.floor(
                                                                                                                        Math.random() *
                                                                                                                        arr.length
                                                                                                                    )
                                                                                                                ];
                                                                                                            }

                                                                                                            function randomNumFrom(
                                                                                                                min,
                                                                                                                max
                                                                                                            ) {
                                                                                                                return (
                                                                                                                    Math.random() *
                                                                                                                    (max - min) +
                                                                                                                    min
                                                                                                                );
                                                                                                            }
                                                                                                            // Random Ball
                                                                                                            function getRandomBall() {
                                                                                                                var pos =
                                                                                                                    randomArrayItem([
                                                                                                                        "top",
                                                                                                                        "right",
                                                                                                                        "bottom",
                                                                                                                        "left",
                                                                                                                    ]);
                                                                                                                switch (pos) {
                                                                                                                    case "top":
                                                                                                                        return {
                                                                                                                            x: randomSidePos(
                                                                                                                                    can_w
                                                                                                                                ),
                                                                                                                                y: -R,
                                                                                                                                vx: getRandomSpeed(
                                                                                                                                    "top"
                                                                                                                                )[0],
                                                                                                                                vy: getRandomSpeed(
                                                                                                                                    "top"
                                                                                                                                )[1],
                                                                                                                                r: R,
                                                                                                                                alpha: 1,
                                                                                                                                phase:
                                                                                                                                randomNumFrom(
                                                                                                                                    0,
                                                                                                                                    10
                                                                                                                                ),
                                                                                                                        };
                                                                                                                        break;
                                                                                                                    case "right":
                                                                                                                        return {
                                                                                                                            x: can_w + R,
                                                                                                                                y: randomSidePos(
                                                                                                                                    can_h
                                                                                                                                ),
                                                                                                                                vx: getRandomSpeed(
                                                                                                                                    "right"
                                                                                                                                )[0],
                                                                                                                                vy: getRandomSpeed(
                                                                                                                                    "right"
                                                                                                                                )[1],
                                                                                                                                r: R,
                                                                                                                                alpha: 1,
                                                                                                                                phase:
                                                                                                                                randomNumFrom(
                                                                                                                                    0,
                                                                                                                                    10
                                                                                                                                ),
                                                                                                                        };
                                                                                                                        break;
                                                                                                                    case "bottom":
                                                                                                                        return {
                                                                                                                            x: randomSidePos(
                                                                                                                                    can_w
                                                                                                                                ),
                                                                                                                                y: can_h + R,
                                                                                                                                vx: getRandomSpeed(
                                                                                                                                    "bottom"
                                                                                                                                )[0],
                                                                                                                                vy: getRandomSpeed(
                                                                                                                                    "bottom"
                                                                                                                                )[1],
                                                                                                                                r: R,
                                                                                                                                alpha: 1,
                                                                                                                                phase:
                                                                                                                                randomNumFrom(
                                                                                                                                    0,
                                                                                                                                    10
                                                                                                                                ),
                                                                                                                        };
                                                                                                                        break;
                                                                                                                    case "left":
                                                                                                                        return {
                                                                                                                            x: -R,
                                                                                                                                y: randomSidePos(
                                                                                                                                    can_h
                                                                                                                                ),
                                                                                                                                vx: getRandomSpeed(
                                                                                                                                    "left"
                                                                                                                                )[0],
                                                                                                                                vy: getRandomSpeed(
                                                                                                                                    "left"
                                                                                                                                )[1],
                                                                                                                                r: R,
                                                                                                                                alpha: 1,
                                                                                                                                phase:
                                                                                                                                randomNumFrom(
                                                                                                                                    0,
                                                                                                                                    10
                                                                                                                                ),
                                                                                                                        };
                                                                                                                        break;
                                                                                                                }
                                                                                                            }

                                                                                                            function randomSidePos(
                                                                                                                length
                                                                                                            ) {
                                                                                                                return Math.ceil(
                                                                                                                    Math.random() *
                                                                                                                    length
                                                                                                                );
                                                                                                            }

                                                                                                            // Draw Ball
                                                                                                            function renderBalls() {
                                                                                                                Array.prototype.forEach.call(
                                                                                                                    balls,
                                                                                                                    function(b) {
                                                                                                                        if (
                                                                                                                            !b.hasOwnProperty(
                                                                                                                                "type"
                                                                                                                            )
                                                                                                                        ) {
                                                                                                                            ctx.fillStyle =
                                                                                                                                "rgba(" +
                                                                                                                                ball_color.r +
                                                                                                                                "," +
                                                                                                                                ball_color.g +
                                                                                                                                "," +
                                                                                                                                ball_color.b +
                                                                                                                                "," +
                                                                                                                                b.alpha +
                                                                                                                                ")";
                                                                                                                            ctx.beginPath();
                                                                                                                            ctx.arc(
                                                                                                                                b.x,
                                                                                                                                b.y,
                                                                                                                                R,
                                                                                                                                0,
                                                                                                                                Math.PI * 2,
                                                                                                                                true
                                                                                                                            );
                                                                                                                            ctx.closePath();
                                                                                                                            ctx.fill();
                                                                                                                        }
                                                                                                                    }
                                                                                                                );
                                                                                                            }

                                                                                                            // Update balls
                                                                                                            function updateBalls() {
                                                                                                                var new_balls = [];
                                                                                                                Array.prototype.forEach.call(
                                                                                                                    balls,
                                                                                                                    function(b) {
                                                                                                                        b.x += b.vx;
                                                                                                                        b.y += b.vy;

                                                                                                                        if (
                                                                                                                            b.x > -50 &&
                                                                                                                            b.x <
                                                                                                                            can_w + 50 &&
                                                                                                                            b.y > -50 &&
                                                                                                                            b.y < can_h + 50
                                                                                                                        ) {
                                                                                                                            new_balls.push(
                                                                                                                                b
                                                                                                                            );
                                                                                                                        }

                                                                                                                        // alpha change
                                                                                                                        b.phase +=
                                                                                                                            alpha_f;
                                                                                                                        b.alpha =
                                                                                                                            Math.abs(
                                                                                                                                Math.cos(
                                                                                                                                    b.phase
                                                                                                                                )
                                                                                                                            );
                                                                                                                    }
                                                                                                                );

                                                                                                                balls =
                                                                                                                    new_balls.slice(0);
                                                                                                            }

                                                                                                            // loop alpha
                                                                                                            function loopAlphaInf() {}

                                                                                                            // Draw lines
                                                                                                            function renderLines() {
                                                                                                                var fraction, alpha;
                                                                                                                for (
                                                                                                                    var i = 0; i < balls.length; i++
                                                                                                                ) {
                                                                                                                    for (
                                                                                                                        var j = i + 1; j < balls.length; j++
                                                                                                                    ) {
                                                                                                                        fraction =
                                                                                                                            getDisOf(
                                                                                                                                balls[i],
                                                                                                                                balls[j]
                                                                                                                            ) / dis_limit;

                                                                                                                        if (
                                                                                                                            fraction < 1
                                                                                                                        ) {
                                                                                                                            alpha = (
                                                                                                                                1 - fraction
                                                                                                                            ).toString();

                                                                                                                            ctx.strokeStyle =
                                                                                                                                "rgba(208,213,216," +
                                                                                                                                alpha +
                                                                                                                                ")";
                                                                                                                            ctx.lineWidth =
                                                                                                                                link_line_width;

                                                                                                                            ctx.beginPath();
                                                                                                                            ctx.moveTo(
                                                                                                                                balls[i].x,
                                                                                                                                balls[i].y
                                                                                                                            );
                                                                                                                            ctx.lineTo(
                                                                                                                                balls[j].x,
                                                                                                                                balls[j].y
                                                                                                                            );
                                                                                                                            ctx.stroke();
                                                                                                                            ctx.closePath();
                                                                                                                        }
                                                                                                                    }
                                                                                                                }
                                                                                                            }

                                                                                                            // calculate distance between two points
                                                                                                            function getDisOf(
                                                                                                                b1,
                                                                                                                b2
                                                                                                            ) {
                                                                                                                var delta_x =
                                                                                                                    Math.abs(
                                                                                                                        b1.x - b2.x
                                                                                                                    ),
                                                                                                                    delta_y = Math.abs(
                                                                                                                        b1.y - b2.y
                                                                                                                    );

                                                                                                                return Math.sqrt(
                                                                                                                    delta_x * delta_x +
                                                                                                                    delta_y * delta_y
                                                                                                                );
                                                                                                            }

                                                                                                            // add balls if there a little balls
                                                                                                            function addBallIfy() {
                                                                                                                if (
                                                                                                                    balls.length < 20
                                                                                                                ) {
                                                                                                                    balls.push(
                                                                                                                        getRandomBall()
                                                                                                                    );
                                                                                                                }
                                                                                                            }

                                                                                                            // Render
                                                                                                            function render() {
                                                                                                                ctx.clearRect(
                                                                                                                    0,
                                                                                                                    0,
                                                                                                                    can_w,
                                                                                                                    can_h
                                                                                                                );

                                                                                                                renderBalls();

                                                                                                                renderLines();

                                                                                                                updateBalls();

                                                                                                                addBallIfy();

                                                                                                                window.requestAnimationFrame(
                                                                                                                    render
                                                                                                                );
                                                                                                            }

                                                                                                            // Init Balls
                                                                                                            function initBalls(
                                                                                                                num
                                                                                                            ) {
                                                                                                                for (
                                                                                                                    var i = 1; i <= num; i++
                                                                                                                ) {
                                                                                                                    balls.push({
                                                                                                                        x: randomSidePos(
                                                                                                                            can_w
                                                                                                                        ),
                                                                                                                        y: randomSidePos(
                                                                                                                            can_h
                                                                                                                        ),
                                                                                                                        vx: getRandomSpeed(
                                                                                                                            "top"
                                                                                                                        )[0],
                                                                                                                        vy: getRandomSpeed(
                                                                                                                            "top"
                                                                                                                        )[1],
                                                                                                                        r: R,
                                                                                                                        alpha: 1,
                                                                                                                        phase: randomNumFrom(
                                                                                                                            0,
                                                                                                                            10
                                                                                                                        ),
                                                                                                                    });
                                                                                                                }
                                                                                                            }
                                                                                                            // Init Canvas
                                                                                                            function initCanvas() {
                                                                                                                canvas.setAttribute(
                                                                                                                    "width",
                                                                                                                    window.innerWidth
                                                                                                                );
                                                                                                                canvas.setAttribute(
                                                                                                                    "height",
                                                                                                                    window.innerHeight
                                                                                                                );

                                                                                                                can_w = parseInt(
                                                                                                                    canvas.getAttribute(
                                                                                                                        "width"
                                                                                                                    )
                                                                                                                );
                                                                                                                can_h = parseInt(
                                                                                                                    canvas.getAttribute(
                                                                                                                        "height"
                                                                                                                    )
                                                                                                                );
                                                                                                            }
                                                                                                            window.addEventListener(
                                                                                                                "resize",
                                                                                                                function(e) {
                                                                                                                    initCanvas();
                                                                                                                }
                                                                                                            );

                                                                                                            function goMovie() {
                                                                                                                initCanvas();
                                                                                                                initBalls(30);
                                                                                                                window.requestAnimationFrame(
                                                                                                                    render
                                                                                                                );
                                                                                                            }
                                                                                                            goMovie();

                                                                                                            // Mouse effect
                                                                                                            canvas.addEventListener(
                                                                                                                "mouseenter",
                                                                                                                function() {
                                                                                                                    mouse_in = true;
                                                                                                                    balls.push(
                                                                                                                        mouse_ball
                                                                                                                    );
                                                                                                                }
                                                                                                            );
                                                                                                            canvas.addEventListener(
                                                                                                                "mouseleave",
                                                                                                                function() {
                                                                                                                    mouse_in = false;
                                                                                                                    var new_balls = [];
                                                                                                                    Array.prototype.forEach.call(
                                                                                                                        balls,
                                                                                                                        function(b) {
                                                                                                                            if (
                                                                                                                                !b.hasOwnProperty(
                                                                                                                                    "type"
                                                                                                                                )
                                                                                                                            ) {
                                                                                                                                new_balls.push(
                                                                                                                                    b
                                                                                                                                );
                                                                                                                            }
                                                                                                                        }
                                                                                                                    );
                                                                                                                    balls =
                                                                                                                        new_balls.slice(
                                                                                                                            0
                                                                                                                        );
                                                                                                                }
                                                                                                            );
                                                                                                            canvas.addEventListener(
                                                                                                                "mousemove",
                                                                                                                function(e) {
                                                                                                                    var e =
                                                                                                                        e || window.event;
                                                                                                                    mouse_ball.x =
                                                                                                                        e.pageX;
                                                                                                                    mouse_ball.y =
                                                                                                                        e.pageY;
                                                                                                                }
                                                                                                            );
                                                                                                        })();
                                                                                                    </script>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="elementor-element elementor-element-f6a3183 elementor-absolute elementor-widget elementor-widget-heading"
                                                                                                data-id="f6a3183"
                                                                                                data-element_type="widget"
                                                                                                data-settings='{"_position":"absolute"}'
                                                                                                data-widget_type="heading.default">
                                                                                                <div
                                                                                                    class="elementor-widget-container">
                                                                                                    <h1
                                                                                                        class="elementor-heading-title elementor-size-default">
                                                                                                        ewebot
                                                                                                    </h1>
                                                                                                </div>
                                                                                            </div>
                                                                                            <section
                                                                                                class="elementor-section elementor-inner-section elementor-element elementor-element-47514165 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                                                                data-id="47514165"
                                                                                                data-element_type="section">
                                                                                                <div
                                                                                                    class="elementor-container elementor-column-gap-default">
                                                                                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-17b6953"
                                                                                                        data-id="17b6953"
                                                                                                        data-element_type="column">
                                                                                                        <div
                                                                                                            class="elementor-widget-wrap elementor-element-populated">
                                                                                                            <div class="elementor-element elementor-element-5782b071 elementor-widget elementor-widget-heading"
                                                                                                                data-id="5782b071"
                                                                                                                data-element_type="widget"
                                                                                                                data-widget_type="heading.default">
                                                                                                                <div
                                                                                                                    class="elementor-widget-container">
                                                                                                                    <h2
                                                                                                                        class="elementor-heading-title elementor-size-default">
                                                                                                                        Key
                                                                                                                        Features
                                                                                                                    </h2>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="elementor-element elementor-element-4b7d725f elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                                                                                data-id="4b7d725f"
                                                                                                                data-element_type="widget"
                                                                                                                data-widget_type="divider.default">
                                                                                                                <div
                                                                                                                    class="elementor-widget-container">
                                                                                                                    <div
                                                                                                                        class="elementor-divider">
                                                                                                                        <span
                                                                                                                            class="elementor-divider-separator">
                                                                                                                        </span>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </section>
                                                                                            <section
                                                                                                class="elementor-section elementor-inner-section elementor-element elementor-element-605f2db0 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                                                                data-id="605f2db0"
                                                                                                data-element_type="section">
                                                                                                <div
                                                                                                    class="elementor-container elementor-column-gap-default">
                                                                                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-2fa1a4d1"
                                                                                                        data-id="2fa1a4d1"
                                                                                                        data-element_type="column">
                                                                                                        <div
                                                                                                            class="elementor-widget-wrap elementor-element-populated">
                                                                                                            <div class="elementor-element elementor-element-2585ecae elementor-position-left elementor-vertical-align-top elementor-widget elementor-widget-gt3-core-imagebox"
                                                                                                                data-id="2585ecae"
                                                                                                                data-element_type="widget"
                                                                                                                data-widget_type="gt3-core-imagebox.default">
                                                                                                                <div
                                                                                                                    class="elementor-widget-container">
                                                                                                                    <div
                                                                                                                        class="gt3-core-imagebox-wrapper elementor-image_icon-position-default">
                                                                                                                        <figure
                                                                                                                            class="gt3-core-imagebox-img">
                                                                                                                            <img width="88"
                                                                                                                                height="76"
                                                                                                                                src="/assets/img/lifetime_icon.png"
                                                                                                                                class="attachment-full size-full wp-image-8661"
                                                                                                                                alt=""
                                                                                                                                decoding="async"
                                                                                                                                title="" />
                                                                                                                        </figure>
                                                                                                                        <div
                                                                                                                            class="gt3-core-imagebox-content">
                                                                                                                            <div
                                                                                                                                class="gt3-core-imagebox-title">
                                                                                                                                <h5
                                                                                                                                    class="gt3-core-imagebox-title">
                                                                                                                                    Top
                                                                                                                                    30
                                                                                                                                    Power
                                                                                                                                    Elite
                                                                                                                                    Author
                                                                                                                                </h5>
                                                                                                                            </div>
                                                                                                                            <p
                                                                                                                                class="gt3-core-imagebox-description">
                                                                                                                                10
                                                                                                                                Years
                                                                                                                                of
                                                                                                                                Membership.
                                                                                                                                More
                                                                                                                                than
                                                                                                                                64k
                                                                                                                                Customers.
                                                                                                                                Exclusive
                                                                                                                                Author.
                                                                                                                            </p>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="elementor-element elementor-element-649b9657 elementor-position-left elementor-vertical-align-top elementor-widget elementor-widget-gt3-core-imagebox"
                                                                                                                data-id="649b9657"
                                                                                                                data-element_type="widget"
                                                                                                                data-widget_type="gt3-core-imagebox.default">
                                                                                                                <div
                                                                                                                    class="elementor-widget-container">
                                                                                                                    <div
                                                                                                                        class="gt3-core-imagebox-wrapper elementor-image_icon-position-default">
                                                                                                                        <figure
                                                                                                                            class="gt3-core-imagebox-img">
                                                                                                                            <img width="88"
                                                                                                                                height="76"
                                                                                                                                src="/assets/img/elementor_icon.png"
                                                                                                                                class="attachment-full size-full wp-image-8642"
                                                                                                                                alt=""
                                                                                                                                decoding="async"
                                                                                                                                title="" />
                                                                                                                        </figure>
                                                                                                                        <div
                                                                                                                            class="gt3-core-imagebox-content">
                                                                                                                            <div
                                                                                                                                class="gt3-core-imagebox-title">
                                                                                                                                <h5
                                                                                                                                    class="gt3-core-imagebox-title">
                                                                                                                                    Elementor
                                                                                                                                    Visual
                                                                                                                                    Page
                                                                                                                                    Builder
                                                                                                                                </h5>
                                                                                                                            </div>
                                                                                                                            <p
                                                                                                                                class="gt3-core-imagebox-description">
                                                                                                                                One
                                                                                                                                of
                                                                                                                                the
                                                                                                                                Best
                                                                                                                                Drag
                                                                                                                                &amp;
                                                                                                                                Drop
                                                                                                                                Visual
                                                                                                                                Builder
                                                                                                                                for
                                                                                                                                WordPress.
                                                                                                                                Absolutely
                                                                                                                                Free.
                                                                                                                            </p>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="elementor-element elementor-element-4a91938a elementor-position-left elementor-vertical-align-top elementor-widget elementor-widget-gt3-core-imagebox"
                                                                                                                data-id="4a91938a"
                                                                                                                data-element_type="widget"
                                                                                                                data-widget_type="gt3-core-imagebox.default">
                                                                                                                <div
                                                                                                                    class="elementor-widget-container">
                                                                                                                    <div
                                                                                                                        class="gt3-core-imagebox-wrapper elementor-image_icon-position-default">
                                                                                                                        <figure
                                                                                                                            class="gt3-core-imagebox-img">
                                                                                                                            <img width="88"
                                                                                                                                height="76"
                                                                                                                                src="/assets/img/wpdaddy_icon.png"
                                                                                                                                class="attachment-full size-full wp-image-8673"
                                                                                                                                alt=""
                                                                                                                                decoding="async"
                                                                                                                                title="" />
                                                                                                                        </figure>
                                                                                                                        <div
                                                                                                                            class="gt3-core-imagebox-content">
                                                                                                                            <div
                                                                                                                                class="gt3-core-imagebox-title">
                                                                                                                                <h5
                                                                                                                                    class="gt3-core-imagebox-title">
                                                                                                                                    WPDaddy
                                                                                                                                    Builder
                                                                                                                                    Pro
                                                                                                                                </h5>
                                                                                                                            </div>
                                                                                                                            <p
                                                                                                                                class="gt3-core-imagebox-description">
                                                                                                                                Front-End
                                                                                                                                Drag
                                                                                                                                &amp;
                                                                                                                                Drop
                                                                                                                                Visual
                                                                                                                                Header
                                                                                                                                and
                                                                                                                                Footer
                                                                                                                                Builder
                                                                                                                                for
                                                                                                                                Elementor.
                                                                                                                            </p>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="elementor-element elementor-element-159b24bf elementor-position-left elementor-vertical-align-top elementor-widget elementor-widget-gt3-core-imagebox"
                                                                                                                data-id="159b24bf"
                                                                                                                data-element_type="widget"
                                                                                                                data-widget_type="gt3-core-imagebox.default">
                                                                                                                <div
                                                                                                                    class="elementor-widget-container">
                                                                                                                    <div
                                                                                                                        class="gt3-core-imagebox-wrapper elementor-image_icon-position-default">
                                                                                                                        <figure
                                                                                                                            class="gt3-core-imagebox-img">
                                                                                                                            <img width="92"
                                                                                                                                height="78"
                                                                                                                                src="/assets/img/smart_import_icon.png"
                                                                                                                                class="attachment-full size-full wp-image-9284"
                                                                                                                                alt=""
                                                                                                                                decoding="async"
                                                                                                                                title="" />
                                                                                                                        </figure>
                                                                                                                        <div
                                                                                                                            class="gt3-core-imagebox-content">
                                                                                                                            <div
                                                                                                                                class="gt3-core-imagebox-title">
                                                                                                                                <h5
                                                                                                                                    class="gt3-core-imagebox-title">
                                                                                                                                    Smart
                                                                                                                                    Demo
                                                                                                                                    Import
                                                                                                                                </h5>
                                                                                                                            </div>
                                                                                                                            <p
                                                                                                                                class="gt3-core-imagebox-description">
                                                                                                                                Import
                                                                                                                                the
                                                                                                                                Entire
                                                                                                                                Site
                                                                                                                                Content,
                                                                                                                                Specific
                                                                                                                                Homepages
                                                                                                                                or
                                                                                                                                Custom
                                                                                                                                Import
                                                                                                                                Settings.
                                                                                                                            </p>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-88c2e79"
                                                                                                        data-id="88c2e79"
                                                                                                        data-element_type="column">
                                                                                                        <div
                                                                                                            class="elementor-widget-wrap elementor-element-populated">
                                                                                                            <div class="elementor-element elementor-element-42d1fcd4 elementor-position-left elementor-vertical-align-top elementor-widget elementor-widget-gt3-core-imagebox"
                                                                                                                data-id="42d1fcd4"
                                                                                                                data-element_type="widget"
                                                                                                                data-widget_type="gt3-core-imagebox.default">
                                                                                                                <div
                                                                                                                    class="elementor-widget-container">
                                                                                                                    <div
                                                                                                                        class="gt3-core-imagebox-wrapper elementor-image_icon-position-default">
                                                                                                                        <figure
                                                                                                                            class="gt3-core-imagebox-img">
                                                                                                                            <img width="100"
                                                                                                                                height="76"
                                                                                                                                src="/assets/img/woo_icon_shop.png"
                                                                                                                                class="attachment-full size-full wp-image-9285"
                                                                                                                                alt=""
                                                                                                                                decoding="async"
                                                                                                                                title="" />
                                                                                                                        </figure>
                                                                                                                        <div
                                                                                                                            class="gt3-core-imagebox-content">
                                                                                                                            <div
                                                                                                                                class="gt3-core-imagebox-title">
                                                                                                                                <h5
                                                                                                                                    class="gt3-core-imagebox-title">
                                                                                                                                    WooCommerce
                                                                                                                                    Online
                                                                                                                                    Shop
                                                                                                                                </h5>
                                                                                                                            </div>
                                                                                                                            <p
                                                                                                                                class="gt3-core-imagebox-description">
                                                                                                                                Run
                                                                                                                                Your
                                                                                                                                Online
                                                                                                                                Shopping
                                                                                                                                Business.
                                                                                                                                Immerse
                                                                                                                                Your
                                                                                                                                Customers
                                                                                                                                in
                                                                                                                                a
                                                                                                                                Cool
                                                                                                                                Way.
                                                                                                                            </p>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="elementor-element elementor-element-d8bb09f elementor-position-left elementor-vertical-align-top elementor-widget elementor-widget-gt3-core-imagebox"
                                                                                                                data-id="d8bb09f"
                                                                                                                data-element_type="widget"
                                                                                                                data-widget_type="gt3-core-imagebox.default">
                                                                                                                <div
                                                                                                                    class="elementor-widget-container">
                                                                                                                    <div
                                                                                                                        class="gt3-core-imagebox-wrapper elementor-image_icon-position-default">
                                                                                                                        <figure
                                                                                                                            class="gt3-core-imagebox-img">
                                                                                                                            <img width="128"
                                                                                                                                height="128"
                                                                                                                                src="/assets/img/mega-menu.png"
                                                                                                                                class="attachment-full size-full wp-image-9757"
                                                                                                                                alt=""
                                                                                                                                decoding="async"
                                                                                                                                sizes="(max-width: 128px) 100vw, 128px"
                                                                                                                                title="mega-menu" />
                                                                                                                        </figure>
                                                                                                                        <div
                                                                                                                            class="gt3-core-imagebox-content">
                                                                                                                            <div
                                                                                                                                class="gt3-core-imagebox-title">
                                                                                                                                <h5
                                                                                                                                    class="gt3-core-imagebox-title">
                                                                                                                                    WPDA
                                                                                                                                    Mega
                                                                                                                                    Menu
                                                                                                                                </h5>
                                                                                                                            </div>
                                                                                                                            <p
                                                                                                                                class="gt3-core-imagebox-description">
                                                                                                                                Build
                                                                                                                                Any
                                                                                                                                Mega
                                                                                                                                Menu
                                                                                                                                with
                                                                                                                                WPDaddy
                                                                                                                                Builder
                                                                                                                                Pro.
                                                                                                                                Advanced
                                                                                                                                Cool
                                                                                                                                Feature.
                                                                                                                            </p>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="elementor-element elementor-element-5cf950f3 elementor-position-left elementor-vertical-align-top elementor-widget elementor-widget-gt3-core-imagebox"
                                                                                                                data-id="5cf950f3"
                                                                                                                data-element_type="widget"
                                                                                                                data-widget_type="gt3-core-imagebox.default">
                                                                                                                <div
                                                                                                                    class="elementor-widget-container">
                                                                                                                    <div
                                                                                                                        class="gt3-core-imagebox-wrapper elementor-image_icon-position-default">
                                                                                                                        <figure
                                                                                                                            class="gt3-core-imagebox-img">
                                                                                                                            <img width="128"
                                                                                                                                height="128"
                                                                                                                                src="/assets/img/auto-update.png"
                                                                                                                                class="attachment-full size-full wp-image-9759"
                                                                                                                                alt=""
                                                                                                                                decoding="async"
                                                                                                                                srcset="
                                                                    /assets/img/auto-update.png 128w,
                                                                    /assets/img/auto-update.png  50w,
                                                                    /assets/img/auto-update.png 100w
                                                                  "
                                                                                                                                sizes="(max-width: 128px) 100vw, 128px"
                                                                                                                                title="auto-update" />
                                                                                                                        </figure>
                                                                                                                        <div
                                                                                                                            class="gt3-core-imagebox-content">
                                                                                                                            <div
                                                                                                                                class="gt3-core-imagebox-title">
                                                                                                                                <h5
                                                                                                                                    class="gt3-core-imagebox-title">
                                                                                                                                    Auto-Update
                                                                                                                                    System
                                                                                                                                </h5>
                                                                                                                            </div>
                                                                                                                            <p
                                                                                                                                class="gt3-core-imagebox-description">
                                                                                                                                Get
                                                                                                                                Instant
                                                                                                                                Theme
                                                                                                                                and
                                                                                                                                Plugins
                                                                                                                                Updates
                                                                                                                                via
                                                                                                                                Your
                                                                                                                                WordPress
                                                                                                                                Dashboard.
                                                                                                                            </p>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="elementor-element elementor-element-51202da elementor-position-left elementor-vertical-align-top elementor-widget elementor-widget-gt3-core-imagebox"
                                                                                                                data-id="51202da"
                                                                                                                data-element_type="widget"
                                                                                                                data-widget_type="gt3-core-imagebox.default">
                                                                                                                <div
                                                                                                                    class="elementor-widget-container">
                                                                                                                    <div
                                                                                                                        class="gt3-core-imagebox-wrapper elementor-image_icon-position-default">
                                                                                                                        <figure
                                                                                                                            class="gt3-core-imagebox-img">
                                                                                                                            <img width="128"
                                                                                                                                height="128"
                                                                                                                                src="/assets/img/multilanguage.png"
                                                                                                                                class="attachment-full size-full wp-image-9762"
                                                                                                                                alt=""
                                                                                                                                decoding="async"
                                                                                                                                sizes="(max-width: 128px) 100vw, 128px"
                                                                                                                                title="multilanguage" />
                                                                                                                        </figure>
                                                                                                                        <div
                                                                                                                            class="gt3-core-imagebox-content">
                                                                                                                            <div
                                                                                                                                class="gt3-core-imagebox-title">
                                                                                                                                <h5
                                                                                                                                    class="gt3-core-imagebox-title">
                                                                                                                                    Multi-Language
                                                                                                                                    Support
                                                                                                                                </h5>
                                                                                                                            </div>
                                                                                                                            <p
                                                                                                                                class="gt3-core-imagebox-description">
                                                                                                                                Build
                                                                                                                                Multi-Language
                                                                                                                                Website
                                                                                                                                with
                                                                                                                                WPML
                                                                                                                                or
                                                                                                                                Polylang
                                                                                                                                Plugins
                                                                                                                                Easily.
                                                                                                                            </p>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3679d674"
                                                                                                        data-id="3679d674"
                                                                                                        data-element_type="column">
                                                                                                        <div
                                                                                                            class="elementor-widget-wrap elementor-element-populated">
                                                                                                            <div class="elementor-element elementor-element-3b5d732b elementor-position-left elementor-vertical-align-top elementor-widget elementor-widget-gt3-core-imagebox"
                                                                                                                data-id="3b5d732b"
                                                                                                                data-element_type="widget"
                                                                                                                data-widget_type="gt3-core-imagebox.default">
                                                                                                                <div
                                                                                                                    class="elementor-widget-container">
                                                                                                                    <div
                                                                                                                        class="gt3-core-imagebox-wrapper elementor-image_icon-position-default">
                                                                                                                        <figure
                                                                                                                            class="gt3-core-imagebox-img">
                                                                                                                            <img width="128"
                                                                                                                                height="128"
                                                                                                                                src="/assets/img/theme-options.png"
                                                                                                                                class="attachment-full size-full wp-image-9764"
                                                                                                                                alt=""
                                                                                                                                decoding="async"
                                                                                                                                sizes="(max-width: 128px) 100vw, 128px"
                                                                                                                                title="theme-options" />
                                                                                                                        </figure>
                                                                                                                        <div
                                                                                                                            class="gt3-core-imagebox-content">
                                                                                                                            <div
                                                                                                                                class="gt3-core-imagebox-title">
                                                                                                                                <h5
                                                                                                                                    class="gt3-core-imagebox-title">
                                                                                                                                    Advanced
                                                                                                                                    Theme
                                                                                                                                    Options
                                                                                                                                    Panel
                                                                                                                                </h5>
                                                                                                                            </div>
                                                                                                                            <p
                                                                                                                                class="gt3-core-imagebox-description">
                                                                                                                                Ewebot
                                                                                                                                Comes
                                                                                                                                with
                                                                                                                                Theme
                                                                                                                                Options
                                                                                                                                Panel.
                                                                                                                                Control
                                                                                                                                Everything
                                                                                                                                in
                                                                                                                                One
                                                                                                                                Place.
                                                                                                                            </p>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="elementor-element elementor-element-3e99862 elementor-position-left elementor-vertical-align-top elementor-widget elementor-widget-gt3-core-imagebox"
                                                                                                                data-id="3e99862"
                                                                                                                data-element_type="widget"
                                                                                                                data-widget_type="gt3-core-imagebox.default">
                                                                                                                <div
                                                                                                                    class="elementor-widget-container">
                                                                                                                    <div
                                                                                                                        class="gt3-core-imagebox-wrapper elementor-image_icon-position-default">
                                                                                                                        <figure
                                                                                                                            class="gt3-core-imagebox-img">
                                                                                                                            <img width="128"
                                                                                                                                height="128"
                                                                                                                                src="/assets/img/custom-widgets.png"
                                                                                                                                class="attachment-full size-full wp-image-9766"
                                                                                                                                alt=""
                                                                                                                                decoding="async"
                                                                                                                                sizes="(max-width: 128px) 100vw, 128px"
                                                                                                                                title="custom-widgets" />
                                                                                                                        </figure>
                                                                                                                        <div
                                                                                                                            class="gt3-core-imagebox-content">
                                                                                                                            <div
                                                                                                                                class="gt3-core-imagebox-title">
                                                                                                                                <h5
                                                                                                                                    class="gt3-core-imagebox-title">
                                                                                                                                    Custom
                                                                                                                                    Elementor
                                                                                                                                    Widgets
                                                                                                                                </h5>
                                                                                                                            </div>
                                                                                                                            <p
                                                                                                                                class="gt3-core-imagebox-description">
                                                                                                                                Build
                                                                                                                                a
                                                                                                                                Website
                                                                                                                                with
                                                                                                                                Custom
                                                                                                                                Elementor
                                                                                                                                Widgets
                                                                                                                                Developed
                                                                                                                                by
                                                                                                                                GT3Themes.
                                                                                                                            </p>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="elementor-element elementor-element-6e6daf20 elementor-position-left elementor-vertical-align-top elementor-widget elementor-widget-gt3-core-imagebox"
                                                                                                                data-id="6e6daf20"
                                                                                                                data-element_type="widget"
                                                                                                                data-widget_type="gt3-core-imagebox.default">
                                                                                                                <div
                                                                                                                    class="elementor-widget-container">
                                                                                                                    <div
                                                                                                                        class="gt3-core-imagebox-wrapper elementor-image_icon-position-default">
                                                                                                                        <figure
                                                                                                                            class="gt3-core-imagebox-img">
                                                                                                                            <img width="128"
                                                                                                                                height="128"
                                                                                                                                src="/assets/img/responsive-retina.png"
                                                                                                                                class="attachment-full size-full wp-image-9768"
                                                                                                                                alt=""
                                                                                                                                decoding="async"
                                                                                                                                sizes="(max-width: 128px) 100vw, 128px"
                                                                                                                                title="responsive-retina" />
                                                                                                                        </figure>
                                                                                                                        <div
                                                                                                                            class="gt3-core-imagebox-content">
                                                                                                                            <div
                                                                                                                                class="gt3-core-imagebox-title">
                                                                                                                                <h5
                                                                                                                                    class="gt3-core-imagebox-title">
                                                                                                                                    Fully
                                                                                                                                    Responsive
                                                                                                                                    Retina
                                                                                                                                    Ready
                                                                                                                                </h5>
                                                                                                                            </div>
                                                                                                                            <p
                                                                                                                                class="gt3-core-imagebox-description">
                                                                                                                                Ewebot
                                                                                                                                is
                                                                                                                                Fully
                                                                                                                                Responsive
                                                                                                                                and
                                                                                                                                Retina
                                                                                                                                Ready.
                                                                                                                                Adjust
                                                                                                                                Settings
                                                                                                                                using
                                                                                                                                Elementor.
                                                                                                                            </p>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="elementor-element elementor-element-fab4db9 elementor-position-left elementor-vertical-align-top elementor-widget elementor-widget-gt3-core-imagebox"
                                                                                                                data-id="fab4db9"
                                                                                                                data-element_type="widget"
                                                                                                                data-widget_type="gt3-core-imagebox.default">
                                                                                                                <div
                                                                                                                    class="elementor-widget-container">
                                                                                                                    <div
                                                                                                                        class="gt3-core-imagebox-wrapper elementor-image_icon-position-default">
                                                                                                                        <figure
                                                                                                                            class="gt3-core-imagebox-img">
                                                                                                                            <img width="128"
                                                                                                                                height="128"
                                                                                                                                src="/assets/img/optimization.png"
                                                                                                                                class="attachment-full size-full wp-image-9770"
                                                                                                                                alt=""
                                                                                                                                decoding="async"
                                                                                                                                sizes="(max-width: 128px) 100vw, 128px"
                                                                                                                                title="optimization" />
                                                                                                                        </figure>
                                                                                                                        <div
                                                                                                                            class="gt3-core-imagebox-content">
                                                                                                                            <div
                                                                                                                                class="gt3-core-imagebox-title">
                                                                                                                                <h5
                                                                                                                                    class="gt3-core-imagebox-title">
                                                                                                                                    Optimized
                                                                                                                                    For
                                                                                                                                    Better
                                                                                                                                    Performance
                                                                                                                                </h5>
                                                                                                                            </div>
                                                                                                                            <p
                                                                                                                                class="gt3-core-imagebox-description">
                                                                                                                                Ewebot
                                                                                                                                is
                                                                                                                                Optimized
                                                                                                                                WP
                                                                                                                                Theme
                                                                                                                                that
                                                                                                                                Comes
                                                                                                                                with
                                                                                                                                Extra
                                                                                                                                Optimization
                                                                                                                                Options.
                                                                                                                            </p>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </section>
                                                                                            <section
                                                                                                class="elementor-section elementor-inner-section elementor-element elementor-element-df0cf21 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                                                                data-id="df0cf21"
                                                                                                data-element_type="section"
                                                                                                data-settings='{"background_background":"classic"}'>
                                                                                                <div
                                                                                                    class="elementor-container elementor-column-gap-default">
                                                                                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-b5eab6d"
                                                                                                        data-id="b5eab6d"
                                                                                                        data-element_type="column">
                                                                                                        <div
                                                                                                            class="elementor-widget-wrap elementor-element-populated">
                                                                                                            <div class="elementor-element elementor-element-d8a4f2d elementor-widget__width-auto elementor-widget elementor-widget-image animated fadeIn"
                                                                                                                data-id="d8a4f2d"
                                                                                                                data-element_type="widget"
                                                                                                                data-settings='{"_animation":"fadeIn"}'
                                                                                                                data-widget_type="image.default">
                                                                                                                <div
                                                                                                                    class="elementor-widget-container">
                                                                                                                    <img width="298"
                                                                                                                        height="96"
                                                                                                                        src="/assets/img/logo_retina.png"
                                                                                                                        class="attachment-full size-full wp-image-1455"
                                                                                                                        alt=""
                                                                                                                        title="logo_retina" />
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="elementor-element-custom_color elementor-element elementor-element-1e915f5 elementor-widget__width-auto elementor-widget elementor-widget-text-editor"
                                                                                                                data-id="1e915f5"
                                                                                                                data-element_type="widget"
                                                                                                                data-widget_type="text-editor.default">
                                                                                                                <div
                                                                                                                    class="elementor-widget-container">
                                                                                                                    <p>
                                                                                                                        SEO
                                                                                                                        &amp;
                                                                                                                        Digital
                                                                                                                        Marketing
                                                                                                                        Agency
                                                                                                                        WordPress
                                                                                                                        Bestseller
                                                                                                                    </p>
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
                                                                        </div>
                                                                    </div>
                                                                </ul>
                                                                <div class="mobile_switcher"></div>
                                                            </li>
                                                            <li id="menu-item-12073"
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-12073 wpda-menu-item-12073">
                                                                <a href="#">Blog</a>
                                                                <ul class="sub-menu wpda-menu wpda-mega-menu">
                                                                    <li id="menu-item-12059"
                                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12059 wpda-menu-item-12059">
                                                                        <a href="https://ewebotwp.com/blog/">Blog with
                                                                            Sidebar</a>
                                                                    </li>
                                                                    <li id="menu-item-13148"
                                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13148 wpda-menu-item-13148">
                                                                        <a href="https://ewebotwp.com/blog-grid/">Blog
                                                                            Grid 3 Colmn</a>
                                                                    </li>
                                                                    <li id="menu-item-13120"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-13120 wpda-menu-item-13120">
                                                                        <a href="#">Blog Packery</a>
                                                                        <ul
                                                                            class="sub-menu wpda  -menu wpda-mega-menu">
                                                                            <li id="menu-item-12066"
                                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12066 wpda-menu-item-12066">
                                                                                <a
                                                                                    href="https://ewebotwp.com/blog-packery/">Blog
                                                                                    Packery 1</a>
                                                                            </li>
                                                                            <li id="menu-item-12068"
                                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12068 wpda-menu-item-12068">
                                                                                <a
                                                                                    href="https://ewebotwp.com/blog-packery-2/">Blog
                                                                                    Packery 2</a>
                                                                            </li>
                                                                            <li id="menu-item-12067"
                                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12067 wpda-menu-item-12067">
                                                                                <a
                                                                                    href="https://ewebotwp.com/blog-packery-3/">Blog
                                                                                    Packery 3</a>
                                                                            </li>
                                                                        </ul>
                                                                        <div class="mobile_switcher"></div>
                                                                    </li>
                                                                    <li id="menu-item-12065"
                                                                        class="menu-item menu-item-type-post_type menu-item-object-post menu-item-12065 wpda-menu-item-12065">
                                                                        <a
                                                                            href="https://ewebotwp.com/how-to-increase-your-roi-through-scientific-sem/">Single
                                                                            News</a>
                                                                    </li>
                                                                </ul>
                                                                <div class="mobile_switcher"></div>
                                                            </li>
                                                            <li id="menu-item-12081"
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-12081 wpda-menu-item-12081">
                                                                <a href="#">Shop</a>
                                                                <ul class="sub-menu wpda-menu wpda-mega-menu">
                                                                    <li id="menu-item-12085"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12085 wpda-menu-item-12085">
                                                                        <a href="https://ewebotwp.com/shop/">All Woo
                                                                            Products</a>
                                                                    </li>
                                                                    <li id="menu-item-12252"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12252 wpda-menu-item-12252">
                                                                        <a
                                                                            href="https://ewebotwp.com/product/menu-knitting-lounge-chair/">Single
                                                                            Product
                                                                            Page</a>
                                                                    </li>
                                                                    <li id="menu-item-12082"
                                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12082 wpda-menu-item-12082">
                                                                        <a href="https://ewebotwp.com/cart-2/">Shopping
                                                                            Cart</a>
                                                                    </li>
                                                                    <li id="menu-item-12083"
                                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12083 wpda-menu-item-12083">
                                                                        <a href="https://ewebotwp.com/modern-shop/">Shop
                                                                            Landing Page</a>
                                                                    </li>
                                                                </ul>
                                                                <div class="mobile_switcher"></div>
                                                            </li>
                                                            <li id="menu-item-12047"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12047 wpda-menu-item-12047">
                                                                <a
                                                                    href="https://ewebotwp.com/contact-us/">Contacts</a>
                                                            </li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="gt3-core-button--alignment_center elementor-element elementor-element-48a0292 elementor-widget__width-auto elementor-hidden-mobile elementor-widget elementor-widget-gt3-core-button"
                                            data-id="48a0292" data-element_type="widget"
                                            data-widget_type="gt3-core-button.default">
                                            <div class="elementor-widget-container">
                                                <div
                                                    class="gt3_module_button_elementor size_custom alignment_center button_icon_none hover_type5 rounded">
                                                    <a class="button_size_elementor_custom alignment_center border_icon_none hover_type5 btn_icon_position_left"
                                                        href="#">
                                                        <span class="gt3_module_button__container">
                                                            <span class="elementor_gt3_btn_text">Get in touch</span>
                                                            <span class="gt3_module_button__cover front"></span>
                                                            <span class="gt3_module_button__cover back"></span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-da910fb elementor-widget__width-auto elementor-widget-tablet__width-auto alignment-right elementor-hidden-mobile elementor-widget elementor-widget-wpda-builder-search"
                                            data-id="da910fb" data-element_type="widget"
                                            data-widget_type="wpda-builder-search.default">
                                            <div class="elementor-widget-container">
                                                <div class="wpda-builder-search">
                                                    <div class="wpda-search_icon"><i></i></div>
                                                    <div class="wpda-search_inner">
                                                        <form role="search" method="get"
                                                            class="search_form gt3_search_form" action="#">
                                                            <label for="search-form-6822b2fd5bb42"
                                                                class="">Search</label>
                                                            <input class="search_text"
                                                                id="search-form-6822b2fd5bb42" type="text"
                                                                name="s" placeholder="Search">
                                                            <input class="search_submit" type="submit"
                                                                value="Search">
                                                        </form>
                                                    </div>
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
    </div>
    <div class="site_wrapper fadeOnLoad">
        <div class="main_wrapper">
            <div class="container container-sidebar_none">
                <div class="row sidebar_none">
                    <div class="content-container span12">
                        <section id="main_content">
                            <div data-elementor-type="wp-page" data-elementor-id="6782"
                                class="elementor elementor-6782">
                                <section
                                    class="elementor-section elementor-top-section elementor-element elementor-element-4bf712c elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="4bf712c" data-element_type="section"
                                    data-settings='{"animation":"none"}'>
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-9fac688"
                                            data-id="9fac688" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-a32c371 elementor-widget elementor-widget-image"
                                                    data-id="a32c371" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="785"
                                                            height="802" src="/assets/img/smiling_girl.jpg"
                                                            class="attachment-full size-full wp-image-8067"
                                                            alt=""
                                                            srcset="
                                  /assets/img/smiling_girl.jpg 785w,
                                  /assets/img/smiling_girl.jpg 294w,
                                  /assets/img/smiling_girl.jpg 768w,
                                  /assets/img/smiling_girl.jpg 480w,
                                  /assets/img/smiling_girl.jpg  50w
                                "
                                                            sizes="auto, (max-width: 785px) 100vw, 785px"
                                                            title="" />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-d7f5990 elementor-absolute elementor-widget elementor-widget-image animated fadeInDown"
                                                    data-id="d7f5990" data-element_type="widget"
                                                    data-settings='{"_position":"absolute","_animation":"fadeInDown"}'
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="192"
                                                            height="235" src="/assets/img/home10-img1.png"
                                                            class="attachment-full size-full wp-image-6910"
                                                            alt="" title="Digital" />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-5b8ee48 elementor-absolute elementor-widget elementor-widget-image animated zoomIn"
                                                    data-id="5b8ee48" data-element_type="widget"
                                                    data-settings='{"_position":"absolute","_animation":"zoomIn"}'
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="250"
                                                            height="157" src="/assets/img/home10-img2.png"
                                                            class="attachment-full size-full wp-image-6911"
                                                            alt="" title="Marketing" />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-93e8a01 elementor-absolute elementor-widget elementor-widget-image animated fadeInLeft"
                                                    data-id="93e8a01" data-element_type="widget"
                                                    data-settings='{"_position":"absolute","_animation":"fadeInLeft"}'
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="233"
                                                            height="165" src="/assets/img/home10-img3.png"
                                                            class="attachment-full size-full wp-image-6912"
                                                            alt="" title="Grow" />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-ce4bde3 elementor-absolute elementor-widget elementor-widget-image animated fadeInUp"
                                                    data-id="ce4bde3" data-element_type="widget"
                                                    data-settings='{"_position":"absolute","_animation":"fadeInUp"}'
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="250"
                                                            height="102" src="/assets/img/home10-img4.png"
                                                            class="attachment-full size-full wp-image-6913"
                                                            alt="" title="Success" />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-07e1766 gt3_rotated_element elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image"
                                                    data-id="07e1766" data-element_type="widget"
                                                    data-settings='{"_position":"absolute"}'
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="26"
                                                            height="26" src="/assets/img/home_06_icon_22.png"
                                                            class="attachment-full size-full wp-image-5556"
                                                            alt="" title="home_06_icon_22" />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-e739be3 gt3_rotated_element elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image"
                                                    data-id="e739be3" data-element_type="widget"
                                                    data-settings='{"_position":"absolute"}'
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="42"
                                                            height="42" src="/assets/img/home_06_icon_23.png"
                                                            class="attachment-full size-full wp-image-5555"
                                                            alt="" title="home_06_icon_23" />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-de268ec gt3_rotated_element elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image"
                                                    data-id="de268ec" data-element_type="widget"
                                                    data-settings='{"_position":"absolute"}'
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="72"
                                                            height="74" src="/assets/img/triangle_orange.png"
                                                            class="attachment-full size-full wp-image-3274"
                                                            alt=""
                                                            srcset="
                                  /assets/img/triangle_orange.png 72w,
                                  /assets/img/triangle_orange.png 50w
                                "
                                                            sizes="auto, (max-width: 72px) 100vw, 72px"
                                                            title="triangle" />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-fb37729 gt3_rotated_element elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image"
                                                    data-id="fb37729" data-element_type="widget"
                                                    data-settings='{"_position":"absolute"}'
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="26"
                                                            height="26" src="/assets/img/home_06_icon_22.png"
                                                            class="attachment-full size-full wp-image-5556"
                                                            alt="" title="home_06_icon_22" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-b4cb8e0"
                                            data-id="b4cb8e0" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-e8de75d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="e8de75d" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-551fc34"
                                                            data-id="551fc34" data-element_type="column">
                                                            <div
                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-dee550e gt3_theme_textgradient-yes elementor-widget elementor-widget-heading"
                                                                    data-id="dee550e" data-element_type="widget"
                                                                    data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <h2
                                                                            class="elementor-heading-title elementor-size-default">
                                                                            Digital
                                                                        </h2>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-bf7567a gt3_theme_textgradient-yes elementor-widget elementor-widget-heading"
                                                                    data-id="bf7567a" data-element_type="widget"
                                                                    data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <h2
                                                                            class="elementor-heading-title elementor-size-default">
                                                                            Marketing
                                                                        </h2>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-937c14f gt3_theme_textgradient-yes elementor-widget elementor-widget-gt3-core-typed-text"
                                                                    data-id="937c14f" data-element_type="widget"
                                                                    data-widget_type="gt3-core-typed-text.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="gt3_typed_widget">
                                                                            <span
                                                                                class="gt3_typed_holder">&nbsp;</span><span
                                                                                class="typing-effect-strings"
                                                                                id="typed_937c14f">Success</span><span
                                                                                class="typed-cursor">&nbsp;</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-b1b55b5 elementor-widget elementor-widget-text-editor"
                                                                    data-id="b1b55b5" data-element_type="widget"
                                                                    data-widget_type="text-editor.default">
                                                                    <div class="elementor-widget-container">
                                                                        <p>
                                                                            Ensuring the best return on investment
                                                                            for your bespoke SEO campaign
                                                                            requirement.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-da8fd1c dark_style elementor-widget elementor-widget-shortcode"
                                                                    data-id="da8fd1c" data-element_type="widget"
                                                                    data-widget_type="shortcode.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-shortcode">
                                                                            <div class="wpcf7 js"
                                                                                id="wpcf7-f1133-p6782-o1"
                                                                                lang="en-US" dir="ltr"
                                                                                data-wpcf7-id="1133">
                                                                                <div class="screen-reader-response">
                                                                                    <p role="status"
                                                                                        aria-live="polite"
                                                                                        aria-atomic="true"></p>
                                                                                    <ul></ul>
                                                                                </div>
                                                                                <form
                                                                                    action="/home-10/#wpcf7-f1133-p6782-o1"
                                                                                    method="post"
                                                                                    class="wpcf7-form init"
                                                                                    aria-label="Contact form"
                                                                                    novalidate="novalidate"
                                                                                    data-status="init">
                                                                                    <div style="display: none">
                                                                                        <input type="hidden"
                                                                                            name="_wpcf7"
                                                                                            value="1133" />
                                                                                        <input type="hidden"
                                                                                            name="_wpcf7_version"
                                                                                            value="6.0.6" />
                                                                                        <input type="hidden"
                                                                                            name="_wpcf7_locale"
                                                                                            value="en_US" />
                                                                                        <input type="hidden"
                                                                                            name="_wpcf7_unit_tag"
                                                                                            value="wpcf7-f1133-p6782-o1" />
                                                                                        <input type="hidden"
                                                                                            name="_wpcf7_container_post"
                                                                                            value="6782" />
                                                                                        <input type="hidden"
                                                                                            name="_wpcf7_posted_data_hash"
                                                                                            value="" />
                                                                                    </div>
                                                                                    <div
                                                                                        class="revolution_form with_border">
                                                                                        <p>
                                                                                            <span
                                                                                                class="wpcf7-form-control-wrap"
                                                                                                data-name="site-url"><input
                                                                                                    size="40"
                                                                                                    maxlength="400"
                                                                                                    class="wpcf7-form-control wpcf7-url wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-url"
                                                                                                    aria-required="true"
                                                                                                    aria-invalid="false"
                                                                                                    placeholder="https:// yoursite.com"
                                                                                                    value=""
                                                                                                    type="url"
                                                                                                    name="site-url" /></span>
                                                                                        </p>
                                                                                        <div
                                                                                            class="revolution_form_btn">
                                                                                            <p>
                                                                                                <input
                                                                                                    class="wpcf7-form-control wpcf7-submit has-spinner"
                                                                                                    type="submit"
                                                                                                    value="Analyze your site" /><span
                                                                                                    class="wpcf7-spinner"></span>
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="wpcf7-response-output"
                                                                                        aria-hidden="true"></div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-beb5f45 elementor-position-left elementor-widget__width-auto elementor-vertical-align-top elementor-widget elementor-widget-gt3-core-imagebox"
                                                                    data-id="beb5f45" data-element_type="widget"
                                                                    data-widget_type="gt3-core-imagebox.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div
                                                                            class="gt3-core-imagebox-wrapper elementor-image_icon-position-default">
                                                                            <figure class="gt3-core-imagebox-img">
                                                                                <a href="#"><img
                                                                                        loading="lazy"
                                                                                        decoding="async"
                                                                                        width="58"
                                                                                        height="74"
                                                                                        src="/assets/img/img_box_29_orange.png"
                                                                                        class="attachment-full size-full wp-image-3492"
                                                                                        alt=""
                                                                                        title="Phone" /></a>
                                                                            </figure>
                                                                            <div class="gt3-core-imagebox-content">
                                                                                <div class="gt3-core-imagebox-title">
                                                                                    <h2
                                                                                        class="gt3-core-imagebox-title">
                                                                                        <a
                                                                                            href="#">800-123-4567</a>
                                                                                    </h2>
                                                                                </div>
                                                                                <p
                                                                                    class="gt3-core-imagebox-description">
                                                                                    info@company.com
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <a href="#"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-d87dace gt3_rotated_element elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image"
                                                                    data-id="d87dace" data-element_type="widget"
                                                                    data-settings='{"_position":"absolute"}'
                                                                    data-widget_type="image.default">
                                                                    <div class="elementor-widget-container">
                                                                        <img loading="lazy" decoding="async"
                                                                            width="26" height="26"
                                                                            src="/assets/img/home_06_icon_22.png"
                                                                            class="attachment-full size-full wp-image-5556"
                                                                            alt=""
                                                                            title="home_06_icon_22" />
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-29f3943 gt3_rotated_element elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image"
                                                                    data-id="29f3943" data-element_type="widget"
                                                                    data-settings='{"_position":"absolute"}'
                                                                    data-widget_type="image.default">
                                                                    <div class="elementor-widget-container">
                                                                        <img loading="lazy" decoding="async"
                                                                            width="72" height="74"
                                                                            src="/assets/img/triangle_blue.png"
                                                                            class="attachment-full size-full wp-image-3275"
                                                                            alt=""
                                                                            srcset="
                                          /assets/img/triangle_blue.png 72w,
                                          /assets/img/triangle_blue.png 50w
                                        "
                                                                            sizes="auto, (max-width: 72px) 100vw, 72px"
                                                                            title="triangle" />
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-9aac484 gt3_moved_element elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image"
                                                                    data-id="9aac484" data-element_type="widget"
                                                                    data-settings='{"_position":"absolute"}'
                                                                    data-widget_type="image.default">
                                                                    <div class="elementor-widget-container">
                                                                        <img loading="lazy" decoding="async"
                                                                            width="48" height="48"
                                                                            src="/assets/img/circle.png"
                                                                            class="attachment-full size-full wp-image-3276"
                                                                            alt="" title="circle" />
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-4c7a213 gt3_rotated_element elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image"
                                                                    data-id="4c7a213" data-element_type="widget"
                                                                    data-settings='{"_position":"absolute"}'
                                                                    data-widget_type="image.default">
                                                                    <div class="elementor-widget-container">
                                                                        <img loading="lazy" decoding="async"
                                                                            width="42" height="42"
                                                                            src="/assets/img/home_06_icon_23.png"
                                                                            class="attachment-full size-full wp-image-5555"
                                                                            alt=""
                                                                            title="home_06_icon_23" />
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
                                <section
                                    class="elementor-section elementor-top-section elementor-element elementor-element-5f358f2f elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="5f358f2f" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-27d092c"
                                            data-id="27d092c" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-47d8d97c elementor-widget elementor-widget-image"
                                                    data-id="47d8d97c" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="348"
                                                            height="54" src="/assets/img/1-300x47.png"
                                                            class="attachment-full size-full wp-image-967"
                                                            alt=""
                                                            srcset="
                                  /assets/img/1-300x47.png 348w,
                                  /assets/img/1-300x47.png 300w
                                "
                                                            sizes="auto, (max-width: 348px) 100vw, 348px"
                                                            title="Zazzle Media" />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-6e12748 elementor-widget elementor-widget-spacer"
                                                    data-id="6e12748" data-element_type="widget"
                                                    data-widget_type="spacer.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-spacer">
                                                            <div class="elementor-spacer-inner"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-3a173988"
                                            data-id="3a173988" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-ef2b42b elementor-widget elementor-widget-image"
                                                    data-id="ef2b42b" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="346"
                                                            height="56" src="/assets/img/2-300x49.png"
                                                            class="attachment-full size-full wp-image-968"
                                                            alt=""
                                                            srcset="
                                  /assets/img/2-300x49.png 346w,
                                  /assets/img/2-300x49.png 300w
                                "
                                                            sizes="auto, (max-width: 346px) 100vw, 346px"
                                                            title="Air Track" />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-46da3952 elementor-widget elementor-widget-spacer"
                                                    data-id="46da3952" data-element_type="widget"
                                                    data-widget_type="spacer.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-spacer">
                                                            <div class="elementor-spacer-inner"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-1acd0942"
                                            data-id="1acd0942" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-176f7b4f elementor-widget elementor-widget-image"
                                                    data-id="176f7b4f" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="242"
                                                            height="90" src="/assets/img/3.png"
                                                            class="attachment-full size-full wp-image-969"
                                                            alt="" title="Sutra HR" />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-19eaf0d4 elementor-widget elementor-widget-spacer"
                                                    data-id="19eaf0d4" data-element_type="widget"
                                                    data-widget_type="spacer.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-spacer">
                                                            <div class="elementor-spacer-inner"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-6463d6c6"
                                            data-id="6463d6c6" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-2f8e529e elementor-widget elementor-widget-image"
                                                    data-id="2f8e529e" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="286"
                                                            height="58" src="/assets/img/4.png"
                                                            class="attachment-full size-full wp-image-970"
                                                            alt="" title="Sylexcoin" />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-1ba6ffbd elementor-widget elementor-widget-spacer"
                                                    data-id="1ba6ffbd" data-element_type="widget"
                                                    data-widget_type="spacer.default">
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
                                <section
                                    class="elementor-section elementor-top-section elementor-element elementor-element-2612415 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="2612415" data-element_type="section"
                                    data-settings='{"background_background":"classic"}'>
                                    <div class="elementor-background-overlay"></div>
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-070e3dc"
                                            data-id="070e3dc" data-element_type="column"
                                            data-settings='{"background_background":"classic"}'>
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element-custom_font_size elementor-element-custom_font_weight elementor-element elementor-element-f701ff1 elementor-widget elementor-widget-text-editor animated gt3-slideup-animation"
                                                    data-id="f701ff1" data-element_type="widget"
                                                    data-settings='{"_animation":"gt3-slideup-animation"}'
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <h5>Why Choose us</h5>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-95b5262 elementor-widget elementor-widget-heading animated gt3-slideup-animation"
                                                    data-id="95b5262" data-element_type="widget"
                                                    data-settings='{"_animation":"gt3-slideup-animation"}'
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default">
                                                            Boosts Your Website Traffic!
                                                        </h2>
                                                    </div>
                                                </div>
                                                <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element elementor-element-069a3a4 elementor-widget elementor-widget-text-editor"
                                                    data-id="069a3a4" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <p>
                                                            We are passionate about our work. Our designers
                                                            stay ahead of the curve to provide engaging and
                                                            user-friendly website designs to make your
                                                            business stand out. Our developers are committed
                                                            to maintaining the highest web standards so that
                                                            your site will withstand the test of time. We
                                                            care about your business, which is why we work
                                                            with you.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="gt3-core-button--alignment_inline elementor-element elementor-element-0cd96d5 elementor-widget elementor-widget-gt3-core-button"
                                                    data-id="0cd96d5" data-element_type="widget"
                                                    data-widget_type="gt3-core-button.default">
                                                    <div class="elementor-widget-container">
                                                        <div
                                                            class="gt3_module_button_elementor size_custom alignment_inline button_icon_none hover_none rounded">
                                                            <a class="button_size_elementor_custom alignment_inline border_icon_none hover_none btn_icon_position_left"
                                                                href="#">
                                                                <span class="gt3_module_button__container">
                                                                    <span class="gt3_module_button__cover front"><span
                                                                            class="elementor_gt3_btn_text">Discover
                                                                            more</span></span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-305a0ea"
                                            data-id="305a0ea" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-bac22bd elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="bac22bd" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-e66bff8"
                                                            data-id="e66bff8" data-element_type="column">
                                                            <div
                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-5530f44 elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-gt3-core-imagebox"
                                                                    data-id="5530f44" data-element_type="widget"
                                                                    data-widget_type="gt3-core-imagebox.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div
                                                                            class="gt3-core-imagebox-wrapper elementor-image_icon-position-default">
                                                                            <figure
                                                                                class="gt3-core-imagebox-img gt3-core-imagebox-img_hover">
                                                                                <a href="https://ewebotwp.com"><img
                                                                                        loading="lazy"
                                                                                        decoding="async"
                                                                                        width="100"
                                                                                        height="100"
                                                                                        src="/assets/img/circle_orange.png"
                                                                                        class="attachment-full size-full wp-image-6786"
                                                                                        alt=""
                                                                                        srcset="
                                                /assets/img/circle_orange.png 100w,
                                                /assets/img/circle_orange.png  50w
                                              "
                                                                                        sizes="auto, (max-width: 100px) 100vw, 100px"
                                                                                        title="circle_orange" /><img
                                                                                        loading="lazy"
                                                                                        decoding="async"
                                                                                        width="100"
                                                                                        height="100"
                                                                                        src="/assets/img/circle_orange.png"
                                                                                        class="attachment-full size-full wp-image-6786"
                                                                                        alt=""
                                                                                        srcset="
                                                /assets/img/circle_orange.png 100w,
                                                /assets/img/circle_orange.png  50w
                                              "
                                                                                        sizes="auto, (max-width: 100px) 100vw, 100px"
                                                                                        title="circle_orange" /></a>
                                                                            </figure>
                                                                            <div class="gt3-core-imagebox-content">
                                                                                <div class="gt3-core-imagebox-title">
                                                                                    <h3
                                                                                        class="gt3-core-imagebox-title">
                                                                                        <a
                                                                                            href="https://ewebotwp.com">Discover,
                                                                                            Explore the
                                                                                            Product</a>
                                                                                    </h3>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <a href="https://ewebotwp.com"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-ac4fc8e elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-gt3-core-imagebox"
                                                                    data-id="ac4fc8e" data-element_type="widget"
                                                                    data-widget_type="gt3-core-imagebox.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div
                                                                            class="gt3-core-imagebox-wrapper elementor-image_icon-position-default">
                                                                            <figure
                                                                                class="gt3-core-imagebox-img gt3-core-imagebox-img_hover">
                                                                                <a href="#"><img
                                                                                        loading="lazy"
                                                                                        decoding="async"
                                                                                        width="100"
                                                                                        height="100"
                                                                                        src="/assets/img/circle_green.png"
                                                                                        class="attachment-full size-full wp-image-6810"
                                                                                        alt=""
                                                                                        sizes="auto, (max-width: 100px) 100vw, 100px"
                                                                                        title="circle_green" /><img
                                                                                        loading="lazy"
                                                                                        decoding="async"
                                                                                        width="100"
                                                                                        height="100"
                                                                                        src="/assets/img/circle_green.png"
                                                                                        class="attachment-full size-full wp-image-6810"
                                                                                        alt=""
                                                                                        sizes="auto, (max-width: 100px) 100vw, 100px"
                                                                                        title="circle_green" /></a>
                                                                            </figure>
                                                                            <div class="gt3-core-imagebox-content">
                                                                                <div class="gt3-core-imagebox-title">
                                                                                    <h3
                                                                                        class="gt3-core-imagebox-title">
                                                                                        <a href="#">Product UX,
                                                                                            Design &amp;
                                                                                            Development‎</a>
                                                                                    </h3>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <a href="#"></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-a2467fa"
                                                            data-id="a2467fa" data-element_type="column">
                                                            <div
                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-8e5b0d5 elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-gt3-core-imagebox"
                                                                    data-id="8e5b0d5" data-element_type="widget"
                                                                    data-widget_type="gt3-core-imagebox.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div
                                                                            class="gt3-core-imagebox-wrapper elementor-image_icon-position-default">
                                                                            <figure
                                                                                class="gt3-core-imagebox-img gt3-core-imagebox-img_hover">
                                                                                <a href="#"><img
                                                                                        loading="lazy"
                                                                                        decoding="async"
                                                                                        width="100"
                                                                                        height="100"
                                                                                        src="/assets/img/circle_blue.png"
                                                                                        class="attachment-full size-full wp-image-6806"
                                                                                        alt=""
                                                                                        srcset="
                                                /assets/img/circle_blue.png 100w,
                                                /assets/img/circle_blue.png  50w
                                              "
                                                                                        sizes="auto, (max-width: 100px) 100vw, 100px"
                                                                                        title="circle_blue" /><img
                                                                                        loading="lazy"
                                                                                        decoding="async"
                                                                                        width="100"
                                                                                        height="100"
                                                                                        src="/assets/img/circle_blue.png"
                                                                                        class="attachment-full size-full wp-image-6806"
                                                                                        alt=""
                                                                                        srcset="
                                                /assets/img/circle_blue.png 100w,
                                                /assets/img/circle_blue.png  50w
                                              "
                                                                                        sizes="auto, (max-width: 100px) 100vw, 100px"
                                                                                        title="circle_blue" /></a>
                                                                            </figure>
                                                                            <div class="gt3-core-imagebox-content">
                                                                                <div class="gt3-core-imagebox-title">
                                                                                    <h3
                                                                                        class="gt3-core-imagebox-title">
                                                                                        <a href="#">Art
                                                                                            Direction &amp; Brand
                                                                                            Strategy
                                                                                        </a>
                                                                                    </h3>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <a href="#"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-5f8bd3c elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-gt3-core-imagebox"
                                                                    data-id="5f8bd3c" data-element_type="widget"
                                                                    data-widget_type="gt3-core-imagebox.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div
                                                                            class="gt3-core-imagebox-wrapper elementor-image_icon-position-default">
                                                                            <figure
                                                                                class="gt3-core-imagebox-img gt3-core-imagebox-img_hover">
                                                                                <a href="#"><img
                                                                                        loading="lazy"
                                                                                        decoding="async"
                                                                                        width="100"
                                                                                        height="100"
                                                                                        src="/assets/img/circle_purple.png"
                                                                                        class="attachment-full size-full wp-image-6811"
                                                                                        alt=""
                                                                                        srcset="
                                                /assets/img/circle_purple.png 100w,
                                                /assets/img/circle_purple.png  50w
                                              "
                                                                                        sizes="auto, (max-width: 100px) 100vw, 100px"
                                                                                        title="circle_purple" /><img
                                                                                        loading="lazy"
                                                                                        decoding="async"
                                                                                        width="100"
                                                                                        height="100"
                                                                                        src="/assets/img/circle_purple.png"
                                                                                        class="attachment-full size-full wp-image-6811"
                                                                                        alt=""
                                                                                        srcset="
                                                /assets/img/circle_purple.png 100w,
                                                /assets/img/circle_purple.png  50w
                                              "
                                                                                        sizes="auto, (max-width: 100px) 100vw, 100px"
                                                                                        title="circle_purple" /></a>
                                                                            </figure>
                                                                            <div class="gt3-core-imagebox-content">
                                                                                <div class="gt3-core-imagebox-title">
                                                                                    <h3
                                                                                        class="gt3-core-imagebox-title">
                                                                                        <a href="#">Marketing
                                                                                            Strategy &amp; SEO
                                                                                            Campaigns</a>
                                                                                    </h3>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <a href="#"></a>
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
                                <section
                                    class="elementor-section elementor-top-section elementor-element elementor-element-588fcab elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="588fcab" data-element_type="section"
                                    data-settings='{"background_background":"classic"}'>
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-63fd403 animated fadeIn"
                                            data-id="63fd403" data-element_type="column"
                                            data-settings='{"background_background":"classic","animation":"fadeIn"}'>
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-080829e elementor-widget elementor-widget-image animated fadeIn"
                                                    data-id="080829e" data-element_type="widget"
                                                    data-settings='{"_animation":"fadeIn","_animation_delay":500}'
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="600"
                                                            height="533" src="/assets/img/home10-figure1.jpg"
                                                            class="attachment-full size-full wp-image-7143"
                                                            alt=""
                                                            srcset="
                                  /assets/img/home10-figure1.jpg 600w,
                                  /assets/img/home10-figure1.jpg 300w,
                                  /assets/img/home10-figure1.jpg 480w
                                "
                                                            sizes="auto, (max-width: 600px) 100vw, 600px"
                                                            title="Phones Figure" />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-fb4d0d9 elementor-absolute elementor-widget elementor-widget-image animated fadeInLeft"
                                                    data-id="fb4d0d9" data-element_type="widget"
                                                    data-settings='{"_animation":"fadeInLeft","_position":"absolute"}'
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="380"
                                                            height="630" src="/assets/img/home10-phone1.png"
                                                            class="attachment-full size-full wp-image-7189"
                                                            alt=""
                                                            srcset="
                                  /assets/img/home10-phone1.png 380w,
                                  /assets/img/home10-phone1.png 181w
                                "
                                                            sizes="auto, (max-width: 380px) 100vw, 380px"
                                                            title="Statistic" />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-a179278 elementor-absolute elementor-widget elementor-widget-image animated fadeInUp"
                                                    data-id="a179278" data-element_type="widget"
                                                    data-settings='{"_animation":"fadeInUp","_position":"absolute"}'
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="417"
                                                            height="690" src="/assets/img/home10_phone2.png"
                                                            class="attachment-full size-full wp-image-7249"
                                                            alt=""
                                                            srcset="
                                  /assets/img/home10_phone2.png 417w,
                                  /assets/img/home10_phone2.png 181w
                                "
                                                            sizes="auto, (max-width: 417px) 100vw, 417px"
                                                            title="Progress" />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-40c2e73 elementor-absolute elementor-widget elementor-widget-image animated zoomIn"
                                                    data-id="40c2e73" data-element_type="widget"
                                                    data-settings='{"_animation":"zoomIn","_position":"absolute"}'
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="235"
                                                            height="290" src="/assets/img/home10_phone3.png"
                                                            class="attachment-full size-full wp-image-7250"
                                                            alt="" title="Marketing" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-ea4ca7d"
                                            data-id="ea4ca7d" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-ffbfcf3 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="ffbfcf3" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-2ae89d3"
                                                            data-id="2ae89d3" data-element_type="column">
                                                            <div
                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element-custom_font_size elementor-element-custom_font_weight elementor-element elementor-element-60af6a5 elementor-widget elementor-widget-text-editor animated gt3-slideup-animation"
                                                                    data-id="60af6a5" data-element_type="widget"
                                                                    data-settings='{"_animation":"gt3-slideup-animation"}'
                                                                    data-widget_type="text-editor.default">
                                                                    <div class="elementor-widget-container">
                                                                        <h5>experience</h5>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-aa6a2f5 elementor-widget elementor-widget-heading animated gt3-slideup-animation"
                                                                    data-id="aa6a2f5" data-element_type="widget"
                                                                    data-settings='{"_animation":"gt3-slideup-animation"}'
                                                                    data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <h2
                                                                            class="elementor-heading-title elementor-size-default">
                                                                            Pay for Qualified Traffic
                                                                        </h2>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element elementor-element-3417fbd elementor-widget elementor-widget-text-editor"
                                                                    data-id="3417fbd" data-element_type="widget"
                                                                    data-widget_type="text-editor.default">
                                                                    <div class="elementor-widget-container">
                                                                        <p>
                                                                            Ewebot stays ahead of the curve with
                                                                            digital marketing trends. Our success
                                                                            has us leading the pack amongst our
                                                                            competitors with our ability to
                                                                            anticipate change <br />and innovation.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-59b9440 elementor-widget elementor-widget-progress"
                                                                    data-id="59b9440" data-element_type="widget"
                                                                    data-widget_type="progress.default">
                                                                    <div class="elementor-widget-container">
                                                                        <span class="elementor-title"
                                                                            id="elementor-progress-bar-59b9440">
                                                                            SEO Analysis
                                                                        </span>

                                                                        <div aria-labelledby="elementor-progress-bar-59b9440"
                                                                            class="elementor-progress-wrapper progress-success"
                                                                            role="progressbar" aria-valuemin="0"
                                                                            aria-valuemax="100" aria-valuenow="90">
                                                                            <div class="elementor-progress-bar"
                                                                                data-max="90" style="width: 90%">
                                                                                <span
                                                                                    class="elementor-progress-text"></span>
                                                                                <span
                                                                                    class="elementor-progress-percentage">90%</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-d2906f9 elementor-widget elementor-widget-progress"
                                                                    data-id="d2906f9" data-element_type="widget"
                                                                    data-widget_type="progress.default">
                                                                    <div class="elementor-widget-container">
                                                                        <span class="elementor-title"
                                                                            id="elementor-progress-bar-d2906f9">
                                                                            SEO Audit
                                                                        </span>

                                                                        <div aria-labelledby="elementor-progress-bar-d2906f9"
                                                                            class="elementor-progress-wrapper progress-success"
                                                                            role="progressbar" aria-valuemin="0"
                                                                            aria-valuemax="100" aria-valuenow="79">
                                                                            <div class="elementor-progress-bar"
                                                                                data-max="79" style="width: 79%">
                                                                                <span
                                                                                    class="elementor-progress-text"></span>
                                                                                <span
                                                                                    class="elementor-progress-percentage">79%</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-e8f800f elementor-widget elementor-widget-progress"
                                                                    data-id="e8f800f" data-element_type="widget"
                                                                    data-widget_type="progress.default">
                                                                    <div class="elementor-widget-container">
                                                                        <span class="elementor-title"
                                                                            id="elementor-progress-bar-e8f800f">
                                                                            Optimization
                                                                        </span>

                                                                        <div aria-labelledby="elementor-progress-bar-e8f800f"
                                                                            class="elementor-progress-wrapper progress-success"
                                                                            role="progressbar" aria-valuemin="0"
                                                                            aria-valuemax="100" aria-valuenow="95">
                                                                            <div class="elementor-progress-bar"
                                                                                data-max="95" style="width: 95%">
                                                                                <span
                                                                                    class="elementor-progress-text"></span>
                                                                                <span
                                                                                    class="elementor-progress-percentage">95%</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="gt3-core-button--alignment_inline elementor-element elementor-element-d34e637 elementor-widget elementor-widget-gt3-core-button"
                                                                    data-id="d34e637" data-element_type="widget"
                                                                    data-widget_type="gt3-core-button.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div
                                                                            class="gt3_module_button_elementor size_custom alignment_inline button_icon_none hover_none rounded">
                                                                            <a class="button_size_elementor_custom alignment_inline border_icon_none hover_none btn_icon_position_left"
                                                                                href="#">
                                                                                <span
                                                                                    class="gt3_module_button__container">
                                                                                    <span
                                                                                        class="gt3_module_button__cover front"><span
                                                                                            class="elementor_gt3_btn_text">Discover
                                                                                            more</span></span>
                                                                                </span>
                                                                            </a>
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
                                <section
                                    class="elementor-section elementor-top-section elementor-element elementor-element-17a9ca9 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="17a9ca9" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-b3da26e"
                                            data-id="b3da26e" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-94d6df7 gt3_pulse_out_element elementor-widget elementor-widget-image animated fadeInLeft"
                                                    data-id="94d6df7" data-element_type="widget"
                                                    data-settings='{"_animation":"fadeInLeft","_animation_delay":500}'
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="777"
                                                            height="644" src="/assets/img/home10_ellipse.png"
                                                            class="attachment-full size-full wp-image-7358"
                                                            alt=""
                                                            srcset="
                                  /assets/img/home10_ellipse.png 777w,
                                  /assets/img/home10_ellipse.png 300w,
                                  /assets/img/home10_ellipse.png 768w,
                                  /assets/img/home10_ellipse.png 480w
                                "
                                                            sizes="auto, (max-width: 777px) 100vw, 777px"
                                                            title="Ellipse" />
                                                    </div>
                                                </div>
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-d5a07b7 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="d5a07b7" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-fff083a"
                                                            data-id="fff083a" data-element_type="column">
                                                            <div
                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-9f0ac6c elementor-align-left gt3_theme_textgradient-yes elementor-widget elementor-widget-gt3-core-counter"
                                                                    data-id="9f0ac6c" data-element_type="widget"
                                                                    data-widget_type="gt3-core-counter.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div data-settings='{"start":10,"end":320,"decimal":0,"duration":0.5,"options":{"useEasing":false,"easingFn":"","useGrouping":true,"separator":",","decimal":".","prefix":"","suffix":"<span class=\"counter_suffix\">m<\/span>"}}'
                                                                            data-options='{"useEasing":false,"easingFn":"","useGrouping":true,"separator":",","decimal":".","prefix":"","suffix":"<span class=\"counter_suffix\">m<\/span>"}'
                                                                            class="counter-wrapper icon_type-icon icon_position-left text_gradient">
                                                                            <div class="counter_text">
                                                                                <div class="counter">
                                                                                    320<span
                                                                                        class="counter_suffix">m</span>
                                                                                </div>
                                                                                <div class="hidden_end">
                                                                                    320<span
                                                                                        class="counter_suffix">m</span>
                                                                                </div>

                                                                                <div class="description">
                                                                                    <p>Digital global audience reach</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-bda2536 elementor-align-left gt3_theme_textgradient-yes elementor-widget elementor-widget-gt3-core-counter"
                                                                    data-id="bda2536" data-element_type="widget"
                                                                    data-widget_type="gt3-core-counter.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div data-settings='{"start":10,"end":1350,"decimal":0,"duration":0.5,"options":{"useEasing":false,"easingFn":"","useGrouping":true,"separator":"","decimal":".","prefix":"","suffix":""}}'
                                                                            data-options='{"useEasing":false,"easingFn":"","useGrouping":true,"separator":"","decimal":".","prefix":"","suffix":""}'
                                                                            class="counter-wrapper icon_type-icon icon_position-left text_gradient">
                                                                            <div class="counter_text">
                                                                                <div class="counter">1350</div>
                                                                                <div class="hidden_end">1350</div>

                                                                                <div class="description">
                                                                                    <p>
                                                                                        Content pieces produced everyday
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-dff8a53"
                                                            data-id="dff8a53" data-element_type="column">
                                                            <div
                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-0fead66 elementor-align-left gt3_theme_textgradient-yes elementor-widget elementor-widget-gt3-core-counter"
                                                                    data-id="0fead66" data-element_type="widget"
                                                                    data-widget_type="gt3-core-counter.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div data-settings='{"start":10,"end":89,"decimal":0,"duration":0.5,"options":{"useEasing":false,"easingFn":"","useGrouping":true,"separator":",","decimal":".","prefix":"","suffix":"<span class=\"counter_suffix\">%<\/span>"}}'
                                                                            data-options='{"useEasing":false,"easingFn":"","useGrouping":true,"separator":",","decimal":".","prefix":"","suffix":"<span class=\"counter_suffix\">%<\/span>"}'
                                                                            class="counter-wrapper icon_type-icon icon_position-left text_gradient">
                                                                            <div class="counter_text">
                                                                                <div class="counter">
                                                                                    89<span
                                                                                        class="counter_suffix">%</span>
                                                                                </div>
                                                                                <div class="hidden_end">
                                                                                    89<span
                                                                                        class="counter_suffix">%</span>
                                                                                </div>

                                                                                <div class="description">
                                                                                    <p>
                                                                                        Of the audience is under 34
                                                                                        years
                                                                                        old
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-7b5c2d4 elementor-align-left gt3_theme_textgradient-yes elementor-widget elementor-widget-gt3-core-counter"
                                                                    data-id="7b5c2d4" data-element_type="widget"
                                                                    data-widget_type="gt3-core-counter.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div data-settings='{"start":10,"end":94,"decimal":0,"duration":0.5,"options":{"useEasing":false,"easingFn":"","useGrouping":true,"separator":",","decimal":".","prefix":"","suffix":"<span class=\"counter_suffix\">%<\/span>"}}'
                                                                            data-options='{"useEasing":false,"easingFn":"","useGrouping":true,"separator":",","decimal":".","prefix":"","suffix":"<span class=\"counter_suffix\">%<\/span>"}'
                                                                            class="counter-wrapper icon_type-icon icon_position-left text_gradient">
                                                                            <div class="counter_text">
                                                                                <div class="counter">
                                                                                    94<span
                                                                                        class="counter_suffix">%</span>
                                                                                </div>
                                                                                <div class="hidden_end">
                                                                                    94<span
                                                                                        class="counter_suffix">%</span>
                                                                                </div>

                                                                                <div class="description">
                                                                                    <p>Employee <br />worldwide</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <div class="elementor-element elementor-element-d4482c9 gt3_rotated_element elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image"
                                                    data-id="d4482c9" data-element_type="widget"
                                                    data-settings='{"_position":"absolute"}'
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="42"
                                                            height="42" src="/assets/img/home_06_icon_23.png"
                                                            class="attachment-full size-full wp-image-5555"
                                                            alt="" title="home_06_icon_23" />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-16909a5 gt3_rotated_element elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image"
                                                    data-id="16909a5" data-element_type="widget"
                                                    data-settings='{"_position":"absolute"}'
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="26"
                                                            height="26" src="/assets/img/home_06_icon_22.png"
                                                            class="attachment-full size-full wp-image-5556"
                                                            alt="" title="home_06_icon_22" />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-cc54d9e gt3_moved_element elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image"
                                                    data-id="cc54d9e" data-element_type="widget"
                                                    data-settings='{"_position":"absolute"}'
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="72"
                                                            height="74" src="/assets/img/triangle_blue.png"
                                                            class="attachment-full size-full wp-image-3275"
                                                            alt=""
                                                            srcset="
                                  /assets/img/triangle_blue.png 72w,
                                  /assets/img/triangle_blue.png 50w
                                "
                                                            sizes="auto, (max-width: 72px) 100vw, 72px"
                                                            title="triangle" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-25cb59d"
                                            data-id="25cb59d" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-ba6f5f3 animated-fast elementor-widget elementor-widget-image animated fadeInRight"
                                                    data-id="ba6f5f3" data-element_type="widget"
                                                    data-settings='{"_animation":"fadeInRight"}'
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="637"
                                                            height="580" src="/assets/img/girl-with_phone.jpg"
                                                            class="attachment-full size-full wp-image-7346"
                                                            alt=""
                                                            srcset="
                                  /assets/img/girl-with_phone.jpg 637w,
                                  /assets/img/girl-with_phone.jpg 300w,
                                  /assets/img/girl-with_phone.jpg 480w
                                "
                                                            sizes="auto, (max-width: 637px) 100vw, 637px"
                                                            title="Girl with phone" />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-f26a2c2 gt3_moved_element elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image"
                                                    data-id="f26a2c2" data-element_type="widget"
                                                    data-settings='{"_position":"absolute"}'
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="48"
                                                            height="48" src="/assets/img/circle.png"
                                                            class="attachment-full size-full wp-image-3276"
                                                            alt="" title="circle" />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-6db9a99 gt3_rotated_element elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image"
                                                    data-id="6db9a99" data-element_type="widget"
                                                    data-settings='{"_position":"absolute"}'
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="72"
                                                            height="74" src="/assets/img/triangle_orange.png"
                                                            class="attachment-full size-full wp-image-3274"
                                                            alt=""
                                                            srcset="
                                  /assets/img/triangle_orange.png 72w,
                                  /assets/img/triangle_orange.png 50w
                                "
                                                            sizes="auto, (max-width: 72px) 100vw, 72px"
                                                            title="triangle" />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-378900f gt3_rotated_element elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image"
                                                    data-id="378900f" data-element_type="widget"
                                                    data-settings='{"_position":"absolute"}'
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="26"
                                                            height="26" src="/assets/img/home_06_icon_22.png"
                                                            class="attachment-full size-full wp-image-5556"
                                                            alt="" title="home_06_icon_22" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section
                                    class="elementor-section elementor-top-section elementor-element elementor-element-2faee8dc elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                    data-id="2faee8dc" data-element_type="section"
                                    data-settings='{"stretch_section":"section-stretched"}' style="">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7a4e117e"
                                            data-id="7a4e117e" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element-custom_font_size elementor-element-custom_font_weight elementor-element elementor-element-74143d2e elementor-widget elementor-widget-text-editor animated gt3-slideup-animation"
                                                    data-id="74143d2e" data-element_type="widget"
                                                    data-settings='{"_animation":"gt3-slideup-animation"}'
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <h5>featured Projects</h5>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-53f2d37c elementor-widget elementor-widget-heading animated gt3-slideup-animation"
                                                    data-id="53f2d37c" data-element_type="widget"
                                                    data-settings='{"_animation":"gt3-slideup-animation"}'
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default">
                                                            Our Case Studies
                                                        </h2>
                                                    </div>
                                                </div>
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-0e04f44 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                                    data-id="0e04f44" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-no">
                                                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-d4e1dbd"
                                                            data-id="d4e1dbd" data-element_type="column">
                                                            <div
                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-1473596f text_align-left gt3_rounded_block elementor-widget elementor-widget-gt3-core-portfoliocarousel"
                                                                    data-id="1473596f" data-element_type="widget"
                                                                    data-settings='{"_animation":"none"}'
                                                                    data-widget_type="gt3-core-portfoliocarousel.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div
                                                                            class="portfolio_carousel_wrapper portfolio_items_per_line_3 portfolio_items--center_mode elementor text_align-left">
                                                                            <div class="swiper space_30px">


                                                                                <div class="swiper-wrapper">


                                                                                    <div
                                                                                        class="swiper-slide portfolio_item">
                                                                                        <div class="wrapper">
                                                                                            <a href="https://ewebotwp.com/portfolio/online-media-management_112-2/"
                                                                                                class="lightbox"
                                                                                                target="_self">
                                                                                                View More
                                                                                            </a>
                                                                                            <div
                                                                                                class="img_wrap has_text_content">
                                                                                                <div class="img">
                                                                                                    <img src="/assets/img/portfolio_img_02-1200x870.jpg"
                                                                                                        sizes="(min-width: 2000px) 1200px, (min-width: 1920px) 670px, (min-width: 1620px) 640px, (min-width: 1200px) 540px, (min-width: 992px) 400px, (min-width: 768px) 496px, (min-width: 600px) 384px, (min-width: 420px) 600px, (max-width: 600px) 420px"
                                                                                                        alt="portfolio image"
                                                                                                        width="1200"
                                                                                                        height="870" />
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="text_wrap">
                                                                                                <h4 class="title">
                                                                                                    <a href="https://ewebotwp.com/portfolio/online-media-management_112-2/"
                                                                                                        title="Online Media Management"
                                                                                                        target="_self">
                                                                                                        Online Media
                                                                                                        Management
                                                                                                    </a>
                                                                                                </h4>
                                                                                                <div
                                                                                                    class="categories">
                                                                                                    <span>Marketing</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="swiper-slide portfolio_item ">
                                                                                        <div class="wrapper">
                                                                                            <a href="#"
                                                                                                class="lightbox"
                                                                                                target="_self">
                                                                                                View More
                                                                                            </a>
                                                                                            <div
                                                                                                class="img_wrap has_text_content">
                                                                                                <div class="img">
                                                                                                    <img src="/assets/img/portfolio_img_01_new-1200x870.jpg"
                                                                                                        sizes="(min-width: 2000px) 1200px, (min-width: 1920px) 670px, (min-width: 1620px) 640px, (min-width: 1200px) 540px, (min-width: 992px) 400px, (min-width: 768px) 496px, (min-width: 600px) 384px, (min-width: 420px) 600px, (max-width: 600px) 420px"
                                                                                                        alt="portfolio image"
                                                                                                        width="1200"
                                                                                                        height="870" />
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="text_wrap">
                                                                                                <h4 class="title">
                                                                                                    <a href="https://ewebotwp.com/portfolio/online-media-management_112-2/"
                                                                                                        title="Online Media Management"
                                                                                                        target="_self">
                                                                                                        Online Media
                                                                                                        Management
                                                                                                    </a>
                                                                                                </h4>
                                                                                                <div
                                                                                                    class="categories">
                                                                                                    <span>Marketing</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="swiper-slide portfolio_item ">
                                                                                        <div class="wrapper">
                                                                                            <a href="https://ewebotwp.com/portfolio/online-media-management_112-2/"
                                                                                                class="lightbox"
                                                                                                target="_self">
                                                                                                View More
                                                                                            </a>
                                                                                            <div
                                                                                                class="img_wrap has_text_content">
                                                                                                <div class="img">
                                                                                                    <img src="/assets/img/portfolio_img_04-1200x870.jpg"
                                                                                                        sizes="(min-width: 2000px) 1200px, (min-width: 1920px) 670px, (min-width: 1620px) 640px, (min-width: 1200px) 540px, (min-width: 992px) 400px, (min-width: 768px) 496px, (min-width: 600px) 384px, (min-width: 420px) 600px, (max-width: 600px) 420px"
                                                                                                        alt="portfolio image"
                                                                                                        width="1200"
                                                                                                        height="870" />
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="text_wrap">
                                                                                                <h4 class="title">
                                                                                                    <a href="https://ewebotwp.com/portfolio/online-media-management_112-2/"
                                                                                                        title="Online Media Management"
                                                                                                        target="_self">
                                                                                                        Online Media
                                                                                                        Management
                                                                                                    </a>
                                                                                                </h4>
                                                                                                <div
                                                                                                    class="categories">
                                                                                                    <span>Marketing</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="swiper-slide portfolio_item ">
                                                                                        <div class="wrapper">
                                                                                            <a href="https://ewebotwp.com/portfolio/online-media-management_112-2/"
                                                                                                class="lightbox"
                                                                                                target="_self">
                                                                                                View More
                                                                                            </a>
                                                                                            <div
                                                                                                class="img_wrap has_text_content">
                                                                                                <div class="img">
                                                                                                    <img src="/assets/img/flowy-dark-haired-woman-1200x870.jpg"
                                                                                                        sizes="(min-width: 2000px) 1200px, (min-width: 1920px) 670px, (min-width: 1620px) 640px, (min-width: 1200px) 540px, (min-width: 992px) 400px, (min-width: 768px) 496px, (min-width: 600px) 384px, (min-width: 420px) 600px, (max-width: 600px) 420px"
                                                                                                        alt="portfolio image"
                                                                                                        width="1200"
                                                                                                        height="870" />
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="text_wrap">
                                                                                                <h4 class="title">
                                                                                                    <a href="https://ewebotwp.com/portfolio/online-media-management_112-2/"
                                                                                                        title="Online Media Management"
                                                                                                        target="_self">
                                                                                                        Online Media
                                                                                                        Management
                                                                                                    </a>
                                                                                                </h4>
                                                                                                <div
                                                                                                    class="categories">
                                                                                                    <span>Marketing</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>


                                                                                    <!-- Optional Controls -->


                                                                                </div>

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
                                <section
                                    class="elementor-section elementor-top-section elementor-element elementor-element-ea07f38 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="ea07f38" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7de0ca6"
                                            data-id="7de0ca6" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-b2de140 gt3_pulse_out_element elementor-absolute elementor-widget elementor-widget-image"
                                                    data-id="b2de140" data-element_type="widget"
                                                    data-settings='{"_position":"absolute"}'
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="832"
                                                            height="690" src="/assets/img/home10_ellipse2.png"
                                                            class="attachment-full size-full wp-image-7548"
                                                            alt=""
                                                            srcset="
                                  /assets/img/home10_ellipse2.png 832w,
                                  /assets/img/home10_ellipse2.png 300w,
                                  /assets/img/home10_ellipse2.png 768w,
                                  /assets/img/home10_ellipse2.png 480w
                                "
                                                            sizes="auto, (max-width: 832px) 100vw, 832px"
                                                            title="Ellipse" />
                                                    </div>
                                                </div>
                                                <div class="elementor-element-custom_font_size elementor-element-custom_font_weight elementor-element elementor-element-33707e2 elementor-widget elementor-widget-text-editor animated gt3-slideup-animation"
                                                    data-id="33707e2" data-element_type="widget"
                                                    data-settings='{"_animation":"gt3-slideup-animation"}'
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <h5>Why Choose Us</h5>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-71b4482 elementor-widget elementor-widget-heading animated gt3-slideup-animation"
                                                    data-id="71b4482" data-element_type="widget"
                                                    data-settings='{"_animation":"gt3-slideup-animation"}'
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default">
                                                            What We Offer
                                                        </h2>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-24b0c58 gt3_rotated_element elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image"
                                                    data-id="24b0c58" data-element_type="widget"
                                                    data-settings='{"_position":"absolute"}'
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="26"
                                                            height="26" src="/assets/img/home_06_icon_22.png"
                                                            class="attachment-full size-full wp-image-5556"
                                                            alt="" title="home_06_icon_22" />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-86024f6 gt3_rotated_element elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image"
                                                    data-id="86024f6" data-element_type="widget"
                                                    data-settings='{"_position":"absolute"}'
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="72"
                                                            height="74" src="/assets/img/triangle_orange.png"
                                                            class="attachment-full size-full wp-image-3274"
                                                            alt=""
                                                            srcset="
                                  /assets/img/triangle_orange.png 72w,
                                  /assets/img/triangle_orange.png 50w
                                "
                                                            sizes="auto, (max-width: 72px) 100vw, 72px"
                                                            title="triangle" />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-7776b0b gt3_rotated_element elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image"
                                                    data-id="7776b0b" data-element_type="widget"
                                                    data-settings='{"_position":"absolute"}'
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="72"
                                                            height="74" src="/assets/img/triangle_blue.png"
                                                            class="attachment-full size-full wp-image-3275"
                                                            alt=""
                                                            srcset="
                                  /assets/img/triangle_blue.png 72w,
                                  /assets/img/triangle_blue.png 50w
                                "
                                                            sizes="auto, (max-width: 72px) 100vw, 72px"
                                                            title="triangle" />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-cdd51bd gt3_rotated_element elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image"
                                                    data-id="cdd51bd" data-element_type="widget"
                                                    data-settings='{"_position":"absolute"}'
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="26"
                                                            height="26" src="/assets/img/home_06_icon_22.png"
                                                            class="attachment-full size-full wp-image-5556"
                                                            alt="" title="home_06_icon_22" />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-04af53c gt3_moved_element elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image"
                                                    data-id="04af53c" data-element_type="widget"
                                                    data-settings='{"_position":"absolute"}'
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="42"
                                                            height="42" src="/assets/img/home_06_icon_23.png"
                                                            class="attachment-full size-full wp-image-5555"
                                                            alt="" title="home_06_icon_23" />
                                                    </div>
                                                </div>
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-303ac15 gt3_cycled_animation elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="303ac15" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-extended">
                                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5e4e7f8"
                                                            data-id="5e4e7f8" data-element_type="column"
                                                            data-settings='{"background_background":"classic"}'>
                                                            <div
                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-a2aa2a0 elementor-vertical-align-top elementor-widget elementor-widget-gt3-core-imagebox"
                                                                    data-id="a2aa2a0" data-element_type="widget"
                                                                    data-widget_type="gt3-core-imagebox.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div
                                                                            class="gt3-core-imagebox-wrapper elementor-image_icon-position-beside">
                                                                            <div class="gt3-core-imagebox-content">
                                                                                <div class="gt3-core-imagebox-title">
                                                                                    <figure
                                                                                        class="gt3-core-imagebox-img gt3-core-imagebox-img_hover">
                                                                                        <a href="#"><img
                                                                                                loading="lazy"
                                                                                                decoding="async"
                                                                                                width="152"
                                                                                                height="142"
                                                                                                src="/assets/img/home10_service1.png"
                                                                                                class="attachment-full size-full wp-image-7930"
                                                                                                alt=""
                                                                                                title="home10_service1" /><img
                                                                                                loading="lazy"
                                                                                                decoding="async"
                                                                                                width="152"
                                                                                                height="142"
                                                                                                src="/assets/img/home10_service1-active.png"
                                                                                                class="attachment-full size-full wp-image-7931"
                                                                                                alt=""
                                                                                                title="home10_service1-active" /></a>
                                                                                    </figure>
                                                                                    <h3
                                                                                        class="gt3-core-imagebox-title">
                                                                                        <a href="#">SEO</a>
                                                                                    </h3>
                                                                                </div>
                                                                                <p
                                                                                    class="gt3-core-imagebox-description">
                                                                                    Maecenas elementum sapien in metus
                                                                                    placerat finibus. Lorem ipsum dolor
                                                                                    sit amet, vix an.
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <a href="#"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-cfabd60 elementor-vertical-align-top elementor-widget elementor-widget-gt3-core-imagebox"
                                                                    data-id="cfabd60" data-element_type="widget"
                                                                    data-widget_type="gt3-core-imagebox.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div
                                                                            class="gt3-core-imagebox-wrapper elementor-image_icon-position-beside">
                                                                            <div class="gt3-core-imagebox-content">
                                                                                <div class="gt3-core-imagebox-title">
                                                                                    <figure
                                                                                        class="gt3-core-imagebox-img gt3-core-imagebox-img_hover">
                                                                                        <a href="#"><img
                                                                                                loading="lazy"
                                                                                                decoding="async"
                                                                                                width="152"
                                                                                                height="142"
                                                                                                src="/assets/img/home10_service4.png"
                                                                                                class="attachment-full size-full wp-image-7936"
                                                                                                alt=""
                                                                                                title="home10_service4" /><img
                                                                                                loading="lazy"
                                                                                                decoding="async"
                                                                                                width="152"
                                                                                                height="142"
                                                                                                src="/assets/img/home10_service4-active.png"
                                                                                                class="attachment-full size-full wp-image-7937"
                                                                                                alt=""
                                                                                                title="home10_service4-active" /></a>
                                                                                    </figure>
                                                                                    <h3
                                                                                        class="gt3-core-imagebox-title">
                                                                                        <a href="#">CMS</a>
                                                                                    </h3>
                                                                                </div>
                                                                                <p
                                                                                    class="gt3-core-imagebox-description">
                                                                                    Maecenas elementum sapien in metus
                                                                                    placerat finibus. Lorem ipsum dolor
                                                                                    sit amet, vix an.
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <a href="#"></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-8dfa260"
                                                            data-id="8dfa260" data-element_type="column">
                                                            <div
                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-0d58de1 elementor-vertical-align-top elementor-widget elementor-widget-gt3-core-imagebox"
                                                                    data-id="0d58de1" data-element_type="widget"
                                                                    data-widget_type="gt3-core-imagebox.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div
                                                                            class="gt3-core-imagebox-wrapper elementor-image_icon-position-beside">
                                                                            <div class="gt3-core-imagebox-content">
                                                                                <div class="gt3-core-imagebox-title">
                                                                                    <figure
                                                                                        class="gt3-core-imagebox-img gt3-core-imagebox-img_hover">
                                                                                        <a href="#"><img
                                                                                                loading="lazy"
                                                                                                decoding="async"
                                                                                                width="152"
                                                                                                height="142"
                                                                                                src="/assets/img/home10_service2.png"
                                                                                                class="attachment-full size-full wp-image-7932"
                                                                                                alt=""
                                                                                                title="home10_service2" /><img
                                                                                                loading="lazy"
                                                                                                decoding="async"
                                                                                                width="152"
                                                                                                height="142"
                                                                                                src="/assets/img/home10_service2-active.png"
                                                                                                class="attachment-full size-full wp-image-7933"
                                                                                                alt=""
                                                                                                title="home10_service2-active" /></a>
                                                                                    </figure>
                                                                                    <h3
                                                                                        class="gt3-core-imagebox-title">
                                                                                        <a
                                                                                            href="#">Development</a>
                                                                                    </h3>
                                                                                </div>
                                                                                <p
                                                                                    class="gt3-core-imagebox-description">
                                                                                    Maecenas elementum sapien in metus
                                                                                    placerat finibus. Lorem ipsum dolor
                                                                                    sit amet, vix an.
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <a href="#"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-5837fb8 elementor-vertical-align-top elementor-widget elementor-widget-gt3-core-imagebox"
                                                                    data-id="5837fb8" data-element_type="widget"
                                                                    data-widget_type="gt3-core-imagebox.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div
                                                                            class="gt3-core-imagebox-wrapper elementor-image_icon-position-beside">
                                                                            <div class="gt3-core-imagebox-content">
                                                                                <div class="gt3-core-imagebox-title">
                                                                                    <figure
                                                                                        class="gt3-core-imagebox-img gt3-core-imagebox-img_hover">
                                                                                        <a href="#"><img
                                                                                                loading="lazy"
                                                                                                decoding="async"
                                                                                                width="152"
                                                                                                height="142"
                                                                                                src="/assets/img/home10_service5.png"
                                                                                                class="attachment-full size-full wp-image-7938"
                                                                                                alt=""
                                                                                                title="home10_service5" /><img
                                                                                                loading="lazy"
                                                                                                decoding="async"
                                                                                                width="152"
                                                                                                height="142"
                                                                                                src="/assets/img/home10_service5-active.png"
                                                                                                class="attachment-full size-full wp-image-7939"
                                                                                                alt=""
                                                                                                title="home10_service5-active" /></a>
                                                                                    </figure>
                                                                                    <h3
                                                                                        class="gt3-core-imagebox-title">
                                                                                        <a
                                                                                            href="#">Maintenance</a>
                                                                                    </h3>
                                                                                </div>
                                                                                <p
                                                                                    class="gt3-core-imagebox-description">
                                                                                    Maecenas elementum sapien in metus
                                                                                    placerat finibus. Lorem ipsum dolor
                                                                                    sit amet, vix an.
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <a href="#"></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-c60d4d7"
                                                            data-id="c60d4d7" data-element_type="column">
                                                            <div
                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-f36da1d elementor-vertical-align-top elementor-widget elementor-widget-gt3-core-imagebox"
                                                                    data-id="f36da1d" data-element_type="widget"
                                                                    data-widget_type="gt3-core-imagebox.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div
                                                                            class="gt3-core-imagebox-wrapper elementor-image_icon-position-beside">
                                                                            <div class="gt3-core-imagebox-content">
                                                                                <div class="gt3-core-imagebox-title">
                                                                                    <figure
                                                                                        class="gt3-core-imagebox-img gt3-core-imagebox-img_hover">
                                                                                        <a href="#"><img
                                                                                                loading="lazy"
                                                                                                decoding="async"
                                                                                                width="152"
                                                                                                height="142"
                                                                                                src="/assets/img/home10_service3.png"
                                                                                                class="attachment-full size-full wp-image-7934"
                                                                                                alt=""
                                                                                                title="home10_service3" /><img
                                                                                                loading="lazy"
                                                                                                decoding="async"
                                                                                                width="152"
                                                                                                height="142"
                                                                                                src="/assets/img/home10_service3-active.png"
                                                                                                class="attachment-full size-full wp-image-7935"
                                                                                                alt=""
                                                                                                title="home10_service3-active" /></a>
                                                                                    </figure>
                                                                                    <h3
                                                                                        class="gt3-core-imagebox-title">
                                                                                        <a href="#">Web
                                                                                            Design</a>
                                                                                    </h3>
                                                                                </div>
                                                                                <p
                                                                                    class="gt3-core-imagebox-description">
                                                                                    Maecenas elementum sapien in metus
                                                                                    placerat finibus. Lorem ipsum dolor
                                                                                    sit amet, vix an.
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <a href="#"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-b0f3198 elementor-vertical-align-top elementor-widget elementor-widget-gt3-core-imagebox"
                                                                    data-id="b0f3198" data-element_type="widget"
                                                                    data-widget_type="gt3-core-imagebox.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div
                                                                            class="gt3-core-imagebox-wrapper elementor-image_icon-position-beside">
                                                                            <div class="gt3-core-imagebox-content">
                                                                                <div class="gt3-core-imagebox-title">
                                                                                    <figure
                                                                                        class="gt3-core-imagebox-img gt3-core-imagebox-img_hover">
                                                                                        <a href="#"><img
                                                                                                loading="lazy"
                                                                                                decoding="async"
                                                                                                width="152"
                                                                                                height="142"
                                                                                                src="/assets/img/home10_service6.png"
                                                                                                class="attachment-full size-full wp-image-7940"
                                                                                                alt=""
                                                                                                title="home10_service6" /><img
                                                                                                loading="lazy"
                                                                                                decoding="async"
                                                                                                width="152"
                                                                                                height="142"
                                                                                                src="/assets/img/home10_service6-active.png"
                                                                                                class="attachment-full size-full wp-image-7941"
                                                                                                alt=""
                                                                                                title="home10_service6-active" /></a>
                                                                                    </figure>
                                                                                    <h3
                                                                                        class="gt3-core-imagebox-title">
                                                                                        <a href="#">Hosting</a>
                                                                                    </h3>
                                                                                </div>
                                                                                <p
                                                                                    class="gt3-core-imagebox-description">
                                                                                    Maecenas elementum sapien in metus
                                                                                    placerat finibus. Lorem ipsum dolor
                                                                                    sit amet, vix an.
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <a href="#"></a>
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
                                <section
                                    class="elementor-section elementor-top-section elementor-element elementor-element-e787d2f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="e787d2f" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6c3e58d"
                                            data-id="6c3e58d" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-1436dbe animated-fast elementor-widget elementor-widget-image animated fadeInLeft"
                                                    data-id="1436dbe" data-element_type="widget"
                                                    data-settings='{"_animation":"fadeInLeft"}'
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="665"
                                                            height="585" src="/assets/img/home10_img5.jpg"
                                                            class="attachment-full size-full wp-image-7565"
                                                            alt=""
                                                            sizes="auto, (max-width: 665px) 100vw, 665px"
                                                            title="Smiling girl" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-0138aa4"
                                            data-id="0138aa4" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-a85ef1c elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="a85ef1c" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-81cd046"
                                                            data-id="81cd046" data-element_type="column">
                                                            <div
                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-eb8944d elementor-widget elementor-widget-heading"
                                                                    data-id="eb8944d" data-element_type="widget"
                                                                    data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <h2
                                                                            class="elementor-heading-title elementor-size-default">
                                                                            Get Free SEO Analysis?
                                                                        </h2>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-738ce57 elementor-widget elementor-widget-text-editor"
                                                                    data-id="738ce57" data-element_type="widget"
                                                                    data-widget_type="text-editor.default">
                                                                    <div class="elementor-widget-container">
                                                                        <p>
                                                                            Ne summo dictas pertinacia nam. Illum
                                                                            cetero vocent ei vim, case regione
                                                                            signiferumque vim te.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-3d1883c gt3_custom_form_large default elementor-widget elementor-widget-shortcode"
                                                                    data-id="3d1883c" data-element_type="widget"
                                                                    data-widget_type="shortcode.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-shortcode">
                                                                            <div class="wpcf7 js"
                                                                                id="wpcf7-f5426-p6782-o2"
                                                                                lang="en-US" dir="ltr"
                                                                                data-wpcf7-id="5426">
                                                                                <div class="screen-reader-response">
                                                                                    <p role="status"
                                                                                        aria-live="polite"
                                                                                        aria-atomic="true"></p>
                                                                                    <ul></ul>
                                                                                </div>
                                                                                <form
                                                                                    action="/home-10/#wpcf7-f5426-p6782-o2"
                                                                                    method="post"
                                                                                    class="wpcf7-form init"
                                                                                    aria-label="Contact form"
                                                                                    novalidate="novalidate"
                                                                                    data-status="init">
                                                                                    <div style="display: none">
                                                                                        <input type="hidden"
                                                                                            name="_wpcf7"
                                                                                            value="5426" />
                                                                                        <input type="hidden"
                                                                                            name="_wpcf7_version"
                                                                                            value="6.0.6" />
                                                                                        <input type="hidden"
                                                                                            name="_wpcf7_locale"
                                                                                            value="en_US" />
                                                                                        <input type="hidden"
                                                                                            name="_wpcf7_unit_tag"
                                                                                            value="wpcf7-f5426-p6782-o2" />
                                                                                        <input type="hidden"
                                                                                            name="_wpcf7_container_post"
                                                                                            value="6782" />
                                                                                        <input type="hidden"
                                                                                            name="_wpcf7_posted_data_hash"
                                                                                            value="" />
                                                                                    </div>
                                                                                    <div
                                                                                        class="row gt3_contactform_home6">
                                                                                        <div class="span6">
                                                                                            <p>
                                                                                                <span
                                                                                                    class="wpcf7-form-control-wrap"
                                                                                                    data-name="your-name"><input
                                                                                                        size="40"
                                                                                                        maxlength="400"
                                                                                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                                        aria-required="true"
                                                                                                        aria-invalid="false"
                                                                                                        placeholder="Your Name*"
                                                                                                        value=""
                                                                                                        type="text"
                                                                                                        name="your-name" /></span>
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="span6">
                                                                                            <p>
                                                                                                <span
                                                                                                    class="wpcf7-form-control-wrap"
                                                                                                    data-name="your-email"><input
                                                                                                        size="40"
                                                                                                        maxlength="400"
                                                                                                        class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email"
                                                                                                        aria-required="true"
                                                                                                        aria-invalid="false"
                                                                                                        placeholder="Email*"
                                                                                                        value=""
                                                                                                        type="email"
                                                                                                        name="your-email" /></span>
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="span6">
                                                                                            <p>
                                                                                                <span
                                                                                                    class="wpcf7-form-control-wrap"
                                                                                                    data-name="your-name"><input
                                                                                                        size="40"
                                                                                                        maxlength="400"
                                                                                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                                        aria-required="true"
                                                                                                        aria-invalid="false"
                                                                                                        placeholder="Phone"
                                                                                                        value=""
                                                                                                        type="text"
                                                                                                        name="your-name" /></span>
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="span6">
                                                                                            <p>
                                                                                                <span
                                                                                                    class="wpcf7-form-control-wrap"
                                                                                                    data-name="your-url"><input
                                                                                                        size="40"
                                                                                                        maxlength="400"
                                                                                                        class="wpcf7-form-control wpcf7-url wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-url"
                                                                                                        aria-required="true"
                                                                                                        aria-invalid="false"
                                                                                                        placeholder="Website*"
                                                                                                        value=""
                                                                                                        type="url"
                                                                                                        name="your-url" /></span>
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="span12">
                                                                                            <p>
                                                                                                <span
                                                                                                    class="wpcf7-form-control-wrap"
                                                                                                    data-name="your-message">
                                                                                                    <textarea cols="40" rows="10" maxlength="2000" class="wpcf7-form-control wpcf7-textarea"
                                                                                                        aria-invalid="false" placeholder="Message" name="your-message"></textarea>
                                                                                                </span>
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="span12">
                                                                                            <p>
                                                                                                <input
                                                                                                    class="wpcf7-form-control wpcf7-submit has-spinner"
                                                                                                    type="submit"
                                                                                                    value="send message" /><span
                                                                                                    class="wpcf7-spinner"></span>
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="wpcf7-response-output"
                                                                                        aria-hidden="true"></div>
                                                                                </form>
                                                                            </div>
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
                                                    data-id="4ebe3b57" data-element_type="widget"
                                                    data-settings='{"_animation":"gt3-slideup-animation"}'
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <h5>Blog</h5>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-4294d3d9 elementor-widget elementor-widget-heading animated gt3-slideup-animation"
                                                    data-id="4294d3d9" data-element_type="widget"
                                                    data-settings='{"_animation":"gt3-slideup-animation"}'
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default">
                                                            Latest News
                                                        </h2>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-4294d3d9 elementor-widget elementor-widget-heading animated gt3-slideup-animation"
                                                    data-id="3c822831" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <p>
                                                            Ad nec unum copiosae. Sea ex everti labores, ad
                                                            option iuvaret qui. Id quo esse nusquam. Eam
                                                            iriure diceret oporteat.
                                                        </p>
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
                                            data-id="57fe3fe7" data-element_type="column"
                                            data-settings='{"animation":"fadeIn"}'>
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-93ec1db has_color_block color_block-#FFFFFF gt3_featured_default_state-yes elementor-widget elementor-widget-gt3-core-blogboxed"
                                                    data-id="93ec1db" data-element_type="widget"
                                                    data-widget_type="gt3-core-blogboxed.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="gt3_module_blogboxed items3 post_content_front_visible module_type1"
                                                            data-settings='{"slick":false}'>
                                                            <div class="blogboxed_grid">
                                                                <div class="boxed_block_item">
                                                                    <div
                                                                        class="item_wrapper gt3_center_mode has_post_meta">
                                                                        <div class="blogboxed_img_block"
                                                                            style="
                                          background-image: url(/assets/img/blog_img_01-300x300.jpg);
                                        ">
                                                                        </div>
                                                                        <div
                                                                            class="blogboxed_content without_bordered has_img_block">
                                                                            <div class="gt3blogboxed_block_wrap">
                                                                                <div class="listing_meta">
                                                                                    <span class="post_date">August 2,
                                                                                        2023</span>
                                                                                </div>
                                                                                <h2 class="blog_post_title">
                                                                                    <a
                                                                                        href="https://ewebotwp.com/how-to-increase-your-roi-through-scientific-sem/">How
                                                                                        to Increase Your ROI Through
                                                                                        scientific SEM?</a>
                                                                                </h2>
                                                                                <div class="blogboxed_info_box">
                                                                                    <div class="clear"></div>
                                                                                    <div class="gt3_post_footer">
                                                                                        <div
                                                                                            class="gt3_module_button_list">
                                                                                            <a
                                                                                                href="https://ewebotwp.com/how-to-increase-your-roi-through-scientific-sem/">Read
                                                                                                More</a>
                                                                                        </div>
                                                                                        <div class="blog_post_info">
                                                                                            <!-- post share block -->
                                                                                            <div
                                                                                                class="post_share_block">
                                                                                                <a
                                                                                                    href="javascript:void(0)"><span
                                                                                                        class="sharing_title">Share</span></a>
                                                                                                <div
                                                                                                    class="post_share_wrap">
                                                                                                    <ul>
                                                                                                        <li
                                                                                                            class="post_share-facebook">
                                                                                                            <a target="_blank"
                                                                                                                href="https://www.facebook.com/share.php?u=https://ewebotwp.com/how-to-increase-your-roi-through-scientific-sem/"
                                                                                                                data-title="Facebook"><span
                                                                                                                    class="fa fa-facebook"></span></a>
                                                                                                        </li>
                                                                                                        <li
                                                                                                            class="post_share-twitter">
                                                                                                            <a target="_blank"
                                                                                                                href="https://twitter.com/intent/tweet?text=How%20to%20Increase%20Your%20ROI%20Through%20scientific%20SEM?&amp;url=https://ewebotwp.com/how-to-increase-your-roi-through-scientific-sem/"
                                                                                                                data-title="Twitter"><span
                                                                                                                    class="fa fa-twitter"></span></a>
                                                                                                        </li>
                                                                                                        <li
                                                                                                            class="post_share-pinterest">
                                                                                                            <a target="_blank"
                                                                                                                href="https://pinterest.com/pin/create/button/?url=https://ewebotwp.com/how-to-increase-your-roi-through-scientific-sem/&amp;media=https://ewebotwp.com/wp-content/uploads/2019/07/blog_img_01.jpg"
                                                                                                                data-elementor-open-lightbox="no"
                                                                                                                data-title="Pinterest"><span
                                                                                                                    class="fa fa-pinterest"></span></a>
                                                                                                        </li>
                                                                                                        <li
                                                                                                            class="post_share-linkedin">
                                                                                                            <a target="_blank"
                                                                                                                href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://ewebotwp.com/how-to-increase-your-roi-through-scientific-sem/&amp;title=How%20to%20Increase%20Your%20ROI%20Through%20scientific%20SEM?&amp;source=Ewebot"
                                                                                                                data-title="Linkedin"><span
                                                                                                                    class="fa fa-linkedin"></span></a>
                                                                                                        </li>
                                                                                                        <li
                                                                                                            class="post_share-mail">
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
                                                                <div class="boxed_block_item">
                                                                    <div
                                                                        class="item_wrapper gt3_center_mode has_post_meta">
                                                                        <div class="blogboxed_img_block"
                                                                            style="
                                          background-image: url(/assets/img/home5_blog_img-300x300.jpg);
                                        ">
                                                                        </div>
                                                                        <div
                                                                            class="blogboxed_content without_bordered has_img_block">
                                                                            <div class="gt3blogboxed_block_wrap">
                                                                                <div class="listing_meta">
                                                                                    <span class="post_date">August 1,
                                                                                        2023</span>
                                                                                </div>
                                                                                <h2 class="blog_post_title">
                                                                                    <a
                                                                                        href="https://ewebotwp.com/image-post/">Simple
                                                                                        Ways To Optimize Your
                                                                                        Website For SEO</a>
                                                                                </h2>
                                                                                <div class="blogboxed_info_box">
                                                                                    <div class="clear"></div>
                                                                                    <div class="gt3_post_footer">
                                                                                        <div
                                                                                            class="gt3_module_button_list">
                                                                                            <a
                                                                                                href="https://ewebotwp.com/image-post/">Read
                                                                                                More</a>
                                                                                        </div>
                                                                                        <div class="blog_post_info">
                                                                                            <!-- post share block -->
                                                                                            <div
                                                                                                class="post_share_block">
                                                                                                <a
                                                                                                    href="javascript:void(0)"><span
                                                                                                        class="sharing_title">Share</span></a>
                                                                                                <div
                                                                                                    class="post_share_wrap">
                                                                                                    <ul>
                                                                                                        <li
                                                                                                            class="post_share-facebook">
                                                                                                            <a target="_blank"
                                                                                                                href="#"
                                                                                                                data-title="Facebook"><span
                                                                                                                    class="fa fa-facebook"></span></a>
                                                                                                        </li>
                                                                                                        <li
                                                                                                            class="post_share-twitter">
                                                                                                            <a target="_blank"
                                                                                                                href="#"
                                                                                                                data-title="Twitter"><span
                                                                                                                    class="fa fa-twitter"></span></a>
                                                                                                        </li>
                                                                                                        <li
                                                                                                            class="post_share-pinterest">
                                                                                                            <a target="_blank"
                                                                                                                href=""
                                                                                                                data-elementor-open-lightbox="no"
                                                                                                                data-title="Pinterest"><span
                                                                                                                    class="fa fa-pinterest"></span></a>
                                                                                                        </li>
                                                                                                        <li
                                                                                                            class="post_share-linkedin">
                                                                                                            <a target="_blank"
                                                                                                                href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://ewebotwp.com/image-post/&amp;title=Simple%20Ways%20To%20Optimize%20Your%20Website%20For%20SEO&amp;source=Ewebot"
                                                                                                                data-title="Linkedin"><span
                                                                                                                    class="fa fa-linkedin"></span></a>
                                                                                                        </li>
                                                                                                        <li
                                                                                                            class="post_share-mail">
                                                                                                            <a target="_blank"
                                                                                                                href="mailto:?subject=Simple+Ways+To+Optimize+Your+Website+For+SEO&amp;body=https://ewebotwp.com/image-post/"
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
                                                                <div class="boxed_block_item">
                                                                    <div
                                                                        class="item_wrapper gt3_center_mode has_post_meta">
                                                                        <div class="blogboxed_img_block"
                                                                            style="
                                          background-image: url(/assets/img/blog_post_02-300x300.jpg);
                                        ">
                                                                        </div>
                                                                        <div
                                                                            class="blogboxed_content without_bordered has_img_block">
                                                                            <div class="gt3blogboxed_block_wrap">
                                                                                <div class="listing_meta">
                                                                                    <span class="post_date">August 1,
                                                                                        2023</span>
                                                                                </div>
                                                                                <h2 class="blog_post_title">
                                                                                    <a
                                                                                        href="https://ewebotwp.com/standart-post/">The
                                                                                        Basics of Blogging Search
                                                                                        Optimization</a>
                                                                                </h2>
                                                                                <div class="blogboxed_info_box">
                                                                                    <div class="clear"></div>
                                                                                    <div class="gt3_post_footer">
                                                                                        <div
                                                                                            class="gt3_module_button_list">
                                                                                            <a
                                                                                                href="https://ewebotwp.com/standart-post/">Read
                                                                                                More</a>
                                                                                        </div>
                                                                                        <div class="blog_post_info">
                                                                                            <!-- post share block -->
                                                                                            <div
                                                                                                class="post_share_block">
                                                                                                <a
                                                                                                    href="javascript:void(0)"><span
                                                                                                        class="sharing_title">Share</span></a>
                                                                                                <div
                                                                                                    class="post_share_wrap">
                                                                                                    <ul>
                                                                                                        <li
                                                                                                            class="post_share-facebook">
                                                                                                            <a target="_blank"
                                                                                                                href="https://www.facebook.com/share.php?u=https://ewebotwp.com/standart-post/"
                                                                                                                data-title="Facebook"><span
                                                                                                                    class="fa fa-facebook"></span></a>
                                                                                                        </li>
                                                                                                        <li
                                                                                                            class="post_share-twitter">
                                                                                                            <a target="_blank"
                                                                                                                href="https://twitter.com/intent/tweet?text=The%20Basics%20of%20Blogging%20Search%20Optimization&amp;url=https://ewebotwp.com/standart-post/"
                                                                                                                data-title="Twitter"><span
                                                                                                                    class="fa fa-twitter"></span></a>
                                                                                                        </li>
                                                                                                        <li
                                                                                                            class="post_share-pinterest">
                                                                                                            <a target="_blank"
                                                                                                                href="https://pinterest.com/pin/create/button/?url=https://ewebotwp.com/standart-post/&amp;media=/assets/img/blog_post_02-300x300.jpg"
                                                                                                                data-elementor-open-lightbox="no"
                                                                                                                data-title="Pinterest"><span
                                                                                                                    class="fa fa-pinterest"></span></a>
                                                                                                        </li>
                                                                                                        <li
                                                                                                            class="post_share-linkedin">
                                                                                                            <a target="_blank"
                                                                                                                href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://ewebotwp.com/standart-post/&amp;title=The%20Basics%20of%20Blogging%20Search%20Optimization&amp;source=Ewebot"
                                                                                                                data-title="Linkedin"><span
                                                                                                                    class="fa fa-linkedin"></span></a>
                                                                                                        </li>
                                                                                                        <li
                                                                                                            class="post_share-mail">
                                                                                                            <a target="_blank"
                                                                                                                href="mailto:?subject=The+Basics+of+Blogging+Search+Optimization&amp;body=https://ewebotwp.com/standart-post/"
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
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-8b8547c gt3_rotated_element elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image"
                                                    data-id="8b8547c" data-element_type="widget"
                                                    data-settings='{"_position":"absolute"}'
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="42"
                                                            height="42" src="/assets/img/home_06_icon_23.png"
                                                            class="attachment-full size-full wp-image-5555"
                                                            alt="" title="home_06_icon_23" />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-a5e4853 gt3_moved_element elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image"
                                                    data-id="a5e4853" data-element_type="widget"
                                                    data-settings='{"_position":"absolute"}'
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="26"
                                                            height="26" src="/assets/img/home_06_icon_22.png"
                                                            class="attachment-full size-full wp-image-5556"
                                                            alt="" title="home_06_icon_22" />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-3d05b1d gt3_moved_element elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image"
                                                    data-id="3d05b1d" data-element_type="widget"
                                                    data-settings='{"_position":"absolute"}'
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="26"
                                                            height="26" src="/assets/img/home_06_icon_22.png"
                                                            class="attachment-full size-full wp-image-5556"
                                                            alt="" title="home_06_icon_22" />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-319caf7 gt3_rotated_element elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image"
                                                    data-id="319caf7" data-element_type="widget"
                                                    data-settings='{"_position":"absolute"}'
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="72"
                                                            height="74" src="/assets/img/triangle_blue.png"
                                                            class="attachment-full size-full wp-image-3275"
                                                            alt=""
                                                            srcset="
                                  /assets/img/triangle_blue.png 72w,
                                  /assets/img/triangle_blue.png 50w
                                "
                                                            sizes="auto, (max-width: 72px) 100vw, 72px"
                                                            title="triangle" />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-1fac3f5 gt3_rotated_element elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image"
                                                    data-id="1fac3f5" data-element_type="widget"
                                                    data-settings='{"_position":"absolute"}'
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="72"
                                                            height="74" src="/assets/img/triangle_orange.png"
                                                            class="attachment-full size-full wp-image-3274"
                                                            alt=""
                                                            srcset="
                                  /assets/img/triangle_orange.png 72w,
                                  /assets/img/triangle_orange.png 50w
                                "
                                                            sizes="auto, (max-width: 72px) 100vw, 72px"
                                                            title="triangle" />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-c57e3a6 gt3_moved_element elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image"
                                                    data-id="c57e3a6" data-element_type="widget"
                                                    data-settings='{"_position":"absolute"}'
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="48"
                                                            height="48" src="/assets/img/circle.png"
                                                            class="attachment-full size-full wp-image-3276"
                                                            alt="" title="circle" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section
                                    class="elementor-section elementor-top-section elementor-element elementor-element-0feec84 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="0feec84" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c371e8c"
                                            data-id="c371e8c" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-506e610 gt3_theme_textgradient-yes elementor-widget elementor-widget-heading"
                                                    data-id="506e610" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default">
                                                            Got New Project?
                                                        </h2>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-a79b9ff elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                    data-id="a79b9ff" data-element_type="widget"
                                                    data-widget_type="divider.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-divider">
                                                            <span class="elementor-divider-separator">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element-custom_font_size elementor-element-custom_color elementor-element elementor-element-73580e5 elementor-widget elementor-widget-text-editor"
                                                    data-id="73580e5" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <p>Call us for fast support to this number.</p>
                                                    </div>
                                                </div>
                                                <div class="elementor-element-custom_font_size elementor-element-custom_font_size_tablet elementor-element-custom_font_family elementor-element-custom_font_weight elementor-element-custom_color elementor-element elementor-element-8b1270f elementor-widget elementor-widget-text-editor"
                                                    data-id="8b1270f" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <a href="tel:8002563123">800 2563 123</a>
                                                    </div>
                                                </div>
                                                <div class="gt3-core-button--alignment_center elementor-element elementor-element-89b3d94 elementor-widget elementor-widget-gt3-core-button"
                                                    data-id="89b3d94" data-element_type="widget"
                                                    data-widget_type="gt3-core-button.default">
                                                    <div class="elementor-widget-container">
                                                        <div
                                                            class="gt3_module_button_elementor size_custom alignment_center button_icon_none hover_type5 rounded">
                                                            <a class="button_size_elementor_custom alignment_center border_icon_none hover_type5 btn_icon_position_left"
                                                                href="#">
                                                                <span class="gt3_module_button__container">
                                                                    <span class="elementor_gt3_btn_text">Send
                                                                        message</span>
                                                                    <span
                                                                        class="gt3_module_button__cover front"></span>
                                                                    <span
                                                                        class="gt3_module_button__cover back"></span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section
                                    class="elementor-section elementor-top-section elementor-element elementor-element-fbab886 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="fbab886" data-element_type="section"
                                    data-settings='{"background_background":"classic"}'>
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-c937cd4"
                                            data-id="c937cd4" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-6fb4435 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="6fb4435" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-b597f42"
                                                            data-id="b597f42" data-element_type="column">
                                                            <div
                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element-custom_font_size elementor-element-custom_font_weight elementor-element elementor-element-aae1d7a elementor-widget elementor-widget-text-editor animated gt3-slideup-animation"
                                                                    data-id="aae1d7a" data-element_type="widget"
                                                                    data-settings='{"_animation":"gt3-slideup-animation"}'
                                                                    data-widget_type="text-editor.default">
                                                                    <div class="elementor-widget-container">
                                                                        <h5>Testimonials</h5>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-3f39cf7 elementor-widget elementor-widget-heading animated gt3-slideup-animation"
                                                                    data-id="3f39cf7" data-element_type="widget"
                                                                    data-settings='{"_animation":"gt3-slideup-animation"}'
                                                                    data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <h2
                                                                            class="elementor-heading-title elementor-size-default">
                                                                            What Our Clients Say
                                                                        </h2>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element elementor-element-c7c3368 elementor-widget elementor-widget-text-editor"
                                                                    data-id="c7c3368" data-element_type="widget"
                                                                    data-widget_type="text-editor.default">
                                                                    <div class="elementor-widget-container">
                                                                        <p>
                                                                            Ewebot stays ahead of the curve with
                                                                            digital marketing trends.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <div class="elementor-element elementor-element-d0e593a elementor-widget elementor-widget-image animated fadeInUp"
                                                    data-id="d0e593a" data-element_type="widget"
                                                    data-settings='{"_animation":"fadeInUp"}'
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="344"
                                                            height="260" src="/assets/img/home10_quote.png"
                                                            class="attachment-full size-full wp-image-7752"
                                                            alt=""
                                                            srcset="
                                  /assets/img/home10_quote.png 344w,
                                  /assets/img/home10_quote.png 300w
                                "
                                                            sizes="auto, (max-width: 344px) 100vw, 344px"
                                                            title="Quote" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-f92c658"
                                            data-id="f92c658" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-4dfbc95 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="4dfbc95" data-element_type="section"
                                                    data-settings='{"background_background":"classic"}'>
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-0338c05"
                                                            data-id="0338c05" data-element_type="column"
                                                            data-settings='{"background_background":"classic"}'>
                                                            <div
                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-1a5a1ba gt3-testimonials-aligment-left gt3_testimonials_custom_dotts has_items_bg color_#FFFFFF gt3-testimonials-perline1 elementor-widget elementor-widget-gt3-core-TestimonialsLite"
                                                                    data-id="1a5a1ba" data-element_type="widget"
                                                                    data-widget_type="gt3-core-TestimonialsLite.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="gt3_testimonial active-carousel items_per_line-1 text_align-left author_position-after image_position-aside nav-dots"
                                                                            data-quote-src="https://ewebotwp.com/wp-content/themes/ewebot/img/quote.png"
                                                                            data-settings='{"fade":false,"autoplay":false,"items_per_line":1,"autoplaySpeed":5000,"dots":true,"arrows":false,"l10n":{"prev":"Prev","next":"Next"}}'>
                                                                            <div
                                                                                class="module_content testimonials_list">
                                                                                <img class="testimonials-text-quote-holder"
                                                                                    src="data:image/png;base64,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" /><canvas
                                                                                    class="testimonials-canvas-quote"
                                                                                    width="160"
                                                                                    height="160"></canvas>
                                                                                <div
                                                                                    class="testimonials_rotator swiper-container">
                                                                                    <div class="swiper-wrapper">

                                                                                        <div class="testimonials_item swiper-slide"
                                                                                            style=""
                                                                                            data-slick-index="-1"
                                                                                            id=""
                                                                                            aria-hidden="true"
                                                                                            tabindex="-1">
                                                                                            <div class="testimonial_item_wrapper"
                                                                                                style="position: relative">
                                                                                                <div
                                                                                                    class="testimonials_content">
                                                                                                    <div
                                                                                                        class="testimonials-text">
                                                                                                        <div
                                                                                                            class="testimonials-text-quote">
                                                                                                            <div class="testimonials-quote-icon-holder"
                                                                                                                style="
                                                              background-image: url(data:image/png;base64,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);
                                                              -webkit-mask-image: url(data:image/png;base64,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);
                                                            ">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="testimonials-text-wrapper">
                                                                                                            <p>
                                                                                                                Design
                                                                                                                is a way
                                                                                                                of
                                                                                                                life, a
                                                                                                                point of
                                                                                                                view. It
                                                                                                                involves
                                                                                                                the
                                                                                                                whole
                                                                                                                complex
                                                                                                                of
                                                                                                                visual
                                                                                                                commun
                                                                                                                ications:
                                                                                                                talent,
                                                                                                                creative
                                                                                                                ability
                                                                                                                and
                                                                                                                technical
                                                                                                                knowledge.
                                                                                                            </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="testimonials_author_wrapper">
                                                                                                        <div
                                                                                                            class="testimonials_photo">
                                                                                                            <img decoding="async"
                                                                                                                class="rounded"
                                                                                                                src="/assets/img/home6_img_3-148x148.png"
                                                                                                                style="
                                                              width: 74px;
                                                              height: 74px;
                                                            " />
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="gt3_aside_title_wrap">
                                                                                                            <div
                                                                                                                class="testimonials_title">
                                                                                                                Tommy
                                                                                                                Dents
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="testimonials-sub_name">
                                                                                                                Customer
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="testimonials_item swiper-slide"
                                                                                            style="width: 654px"
                                                                                            id="swiper-slide10"
                                                                                            role="tabpanel">
                                                                                            <div class="testimonial_item_wrapper"
                                                                                                style="position: relative">
                                                                                                <div
                                                                                                    class="testimonials_content">
                                                                                                    <div
                                                                                                        class="testimonials-text">
                                                                                                        <div
                                                                                                            class="testimonials-text-quote">
                                                                                                            <div class="testimonials-quote-icon-holder"
                                                                                                                style="
                                                              background-image: url(data:image/png;base64,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);
                                                              -webkit-mask-image: url(data:image/png;base64,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);
                                                            ">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="testimonials-text-wrapper">
                                                                                                            <p>
                                                                                                                Design
                                                                                                                is a way
                                                                                                                of
                                                                                                                life, a
                                                                                                                point of
                                                                                                                view. It
                                                                                                                involves
                                                                                                                the
                                                                                                                whole
                                                                                                                complex
                                                                                                                of
                                                                                                                visual
                                                                                                                commun
                                                                                                                ications:
                                                                                                                talen.t,
                                                                                                                creative
                                                                                                                ability
                                                                                                                manual
                                                                                                                skill.
                                                                                                            </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="testimonials_author_wrapper">
                                                                                                        <div
                                                                                                            class="testimonials_photo">
                                                                                                            <img decoding="async"
                                                                                                                class="rounded"
                                                                                                                src="/assets/img/home10_avatar-148x148.jpg"
                                                                                                                style="
                                                              width: 74px;
                                                              height: 74px;
                                                            " />
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="gt3_aside_title_wrap">
                                                                                                            <div
                                                                                                                class="testimonials_title">
                                                                                                                Denis
                                                                                                                Robinson
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="testimonials-sub_name">
                                                                                                                Customer
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="testimonials_item swiper-slide"
                                                                                            style="width: 654px"
                                                                                            id="swiper-slide11"
                                                                                            role="tabpanel">
                                                                                            <div class="testimonial_item_wrapper"
                                                                                                style="position: relative">
                                                                                                <div
                                                                                                    class="testimonials_content">
                                                                                                    <div
                                                                                                        class="testimonials-text">
                                                                                                        <div
                                                                                                            class="testimonials-text-quote">
                                                                                                            <div class="testimonials-quote-icon-holder"
                                                                                                                style="
                                                              background-image: url(data:image/png;base64,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);
                                                              -webkit-mask-image: url(data:image/png;base64,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);
                                                            ">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="testimonials-text-wrapper">
                                                                                                            <p>
                                                                                                                Design
                                                                                                                is a way
                                                                                                                of
                                                                                                                life, a
                                                                                                                point of
                                                                                                                view. It
                                                                                                                involves
                                                                                                                the
                                                                                                                whole
                                                                                                                complex
                                                                                                                of
                                                                                                                visual
                                                                                                                commun
                                                                                                                ications:
                                                                                                                talent,
                                                                                                                creative
                                                                                                                ability
                                                                                                                and
                                                                                                                technical
                                                                                                                knowledge.
                                                                                                            </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="testimonials_author_wrapper">
                                                                                                        <div
                                                                                                            class="testimonials_photo">
                                                                                                            <img decoding="async"
                                                                                                                class="rounded"
                                                                                                                src="/assets/img/testimonials_09_1-148x148.jpg"
                                                                                                                style="
                                                              width: 74px;
                                                              height: 74px;
                                                            " />
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="gt3_aside_title_wrap">
                                                                                                            <div
                                                                                                                class="testimonials_title">
                                                                                                                Silviia
                                                                                                                Garden
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="testimonials-sub_name">
                                                                                                                Customer
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="testimonials_item swiper-slide"
                                                                                            style="width: 654px"
                                                                                            id="swiper-slide12"
                                                                                            role="tabpanel">
                                                                                            <div class="testimonial_item_wrapper"
                                                                                                style="position: relative">
                                                                                                <div
                                                                                                    class="testimonials_content">
                                                                                                    <div
                                                                                                        class="testimonials-text">
                                                                                                        <div
                                                                                                            class="testimonials-text-quote">
                                                                                                            <div class="testimonials-quote-icon-holder"
                                                                                                                style="
                                                              background-image: url(data:image/png;base64,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);
                                                              -webkit-mask-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKAAAACgCAYAAACLz2ctAAAAAXNSR0IArs4c6QAAEm1JREFUeF7tnXt0HNV9x7+/2V0JYV4J2LTYJWA0srSyXTs0KQ9buyZAQtskkEBCwuM4TQgNOaGkeTUnPSStndPQtIlzeIQESutDy6Gpc0iagOMYox3hwHHdxC32jsSObHQ4BifIPn5ALFmrnV9zVyOxkne1s5q5OzO7d87Zv/Y+v/OZ+/zd3yWoRykQoAIUYN4qa6UAFIAKgkAVUAAGKr/KXAGoGAhUAQVgoPKrzBWAioFAFVAABiq/ylwBqBgIVAEFYKDyq8wVgIqBQBVQAAYqv8pcAagYCFQBBWCg8qvMFYCKgUAVUAAGKr/KXAGoGAhUAQVgoPKrzBWAioFAFVAABiq/ylwBqBgIVAEFYKDyq8wVgIqBQBVQAAYqv8pcAagYCFSBugLYnlzTrXHhYga1E2EJAzqAMwk4lYEzhBIEHGPgOIDDIFiwYTHxi3Hb3jkwsD0XqFrRyFzTk+nlAFaA0QmwDsKFAE4HcBaAeQDyAN5AUWc+BNBeEAYY1B8v4H8GBjJD9aqqVAAXL77yzNgp49cR+BoGVgE4z0vFCPg1gKdt8M9aoP3YNDNCxKZ/2ttXz0dCu56AK0G4wgHNiy5DTHgaoC2jR088uX//8yNeEpstrhQA25f2XK3Z9HEGrgOQkFT43xLwRIHwyN6s0Sspj9Amm06n4/uHcS0x3wLgGok6H2HCJhTwyOCA8bzfgvgGoBDk1d/YH2SirwGi6a/r80tiWp/rz/wXALuuOdc5s2Qy2ZLH/LUAvgCgvb7ZswHW1lv9maf9ytcXAPWlPR+ATf8A4CK/CjbHdPpZ47sG9/T9fI7xwxxN6+juuYWZ1gNYFGxBeQfb9Fk/WkRPAC5Z0nNhIUb300QXEJ6H8ESe6Y4hMyPGjJF/9KU9XbDpEQCXhKoyTBtjHPvcwMC2Q3Mt15wB1JPptQDfD+DUuWYuMx4Bh5m026xs7w9l5iM5ba29K30nEYveRdZY2msVDoDp1rl2yzUDuGjRpW1tZ7Q8AECMQ6Lw3LtwAf1VJpMZj0JhJ8soVhDip4xtZND7I1Fuxjqr3xDj/5rG4DUBeNHyyxZo44mfAHhnJESZLCQjUziRuHbfvqePRqHcnZ3pCwoabw5gMudVnk1t8da1L7zw89+6Tcg1gGK8Z8doawgmGm7rNi0cA7vHQVeHfVx4UVd6qUa8DcCCOVU08Ei8ozDa8m63H7srAB34ngWwMPD6eSvAUB50aVghdOATa5rneKtm0LHdQ1gVQKfbfS6qLd/MVyFaQns0sdrtF1qvV6kvW7UYhdiO6MM3Ne7ZMXIsv6baLsqsADoTjkzkxnzVqGFkFp5LV4VlYnL+slVvaS3ExEde7wX8akp5/X+TZRofnm1iMiuAejL1LxGa7dYq1r2WadxZayQJ4TW9K7UZhKslpB18koS7rayxrlJBKgKoJ1OfBPC94GsgsQSkXR/0OqHe1fMVUHF3o2EftrX04ECvUa6CZQF0Jh17wrrI7NebEovVY6BkUJOSizrXXKzF7B1gxPyqU0jTGSqMJlaUG3eXBVBPpgStPSGtjM/F4h9aZt/1PidaNTlhvPHKa/zfAFZWDdwAAYjwQC5rfHpmVU4CsKOr58NM9HgD1Nl9FZiumutWkvtMpods70rfRcTfnmv8aMajlZaZ+d/Ssk8DsPhVDnMOXLSgbZpHLM0MmoawIq7Ls3z51fNGxk/s98FwtC7l9S8TNiyzL10RQMfAQMx8m+4hputy/Zkf1aPielfqiyDcU4+8wpYH27is1IyrtAXU9GRqABPnNJrx2WmZhvQ9bmdtVZy5iOhWm1c0eItl9r1nMpUpAB2j0iibLnlVBjbhCtnm/Xoy/RcAf9dzYaOcgMZJa09fv6jCmwAmU8Kc/b1RrpfXshPh0VzWuNVrOrPF15MpMfN9h8w8Qp820z1Wf+avpwAs7vcWEq82wXpUtXfzelu89fdrMSeqlmDp/52dqzoKWuzFWuI0aNgDlmmIYwV2sQXs6O75NDPd16CVralaDL550Oz795oiuQzcnuz5KqF4aEs9ztJXEUBddb9TQMjshlX3W/LdOd2wAFDMfg/D8UygPk3st0zjD/zWoXhIvy1/SA1zppTdZZnG26mjO/UOZoiBsXocBWJ2YYnfbkD0rjV/CrJ/qkR+U4HCaOIsagqrlxrfOgMfGjSN/6wx2qzB1fjvZHmElQzp3ekNYP5LP8WOelpM+Opg1vg7P+uhd6UeA+EjfqYZ9bSYcQe1J1NPhe5gecDKypiI6MnUr5rF8sX16yPeILpg4fKsWbffKmnl+7acnkwdBHC265fTHAE3CQCF+4pzm6O+rmvZb5lG0nVoFwH1ZIpdBGuyIGwIAIUzyLYmq3m16vq6FJNMpk/Lg1+vlmkT/r9LAKi+zJPf/OuWaRQ9tvrxXJBM/14CfMCPtBosjSEFYIU3aplG1TPTbmFQAFZUqgig6oLL6OMngKoLrgjgUTUJqaBNAnS6nz6o1VCnrNBFANUyTBltxDaRn+471DJM+S9dLURXaAFpPLYol3vmFbfjvGrh1EJ0BQDVVlx5YWI2XejnfRlqK64CgMoYtbwwJ2KFt768e7swU/PlUcYIFQFU5ljlpPF9DKjMscrJPEqOiwjh5dy3hVdfmoyAExk5NnZqNd92tRRx4tao/JFa4jRB2KPFxVZlEXPSqx6zTKPVbwCUSf5Jig6pQ0nlKfN1L3gyC727Zx2Y/sZvsCOc3q4igOpY5vRXKMtXjHPhjBlhYHwuOm+Z2u9U3XCpttPdR/ipuuqGS9Rk2jgFYFO6ZatIFj9omX2f8hO8ybSa0y1bBSUZ66YAdGbDontQ1tGML1n9hrgey/fHMUwQzomUdTToY9NMjtQJuQneZJyKKyW5GfxCu/lyi6fiSgOKu2jHMT/HwNvcJNCoYWymZXv7M8JHtpTHWRMUreBZUjKISKI8Zi84yeiyPZm+mcCPRqQOMoo5tnABzZN9h4gaC0I4KDpPOSmfgbCsJZiZX4pz8/n/NeDlNC4bhYmVhrIAOm7EhDPppjusRET/nMtmPuFSRU/B2jtTl1IMzzalv5gS50RlRWxWKxkiXpvL9m30RFYNkZt2d4S1P7P6e5+sdlWX8I9S9zs0anh/vgeV4ZioSiHFVV3bQJjmPd73ioUswZgdP2dgYNuhWQF01qy2A/jDkJVfVnGGLdOou/Pw9vbV87UWbWcTrT6Ylml0i5dY9ehhR8cVCzleENeIRv2u4KrQyvAJUzVTJ4CzT9zXONe1zlJz4g1Wtu+zrgAUgZxJyTONDqFM97xuQCzeHafZQufGts0suZmqags4KVwzQDg5LnEDi6wwDoQ/a+CWcDSB4TNN0xxz3QJOiu10x0825JiQkbH6jTWywKolXedj3wxgcS3xIhJWXGJ9w2RZXbeAkxGciYm4zqvBZsf0KcvMPBiWl9jZ+a6zCzQunFo21EXWTHTDYDazac4ATrWGE1c7CIuRU8Py0ryUw47nz937wnOveUlDQlxN7+r5MjT62wZZrB4dOTb21tKzNjW3gKUiO13FQ1G/W5iBzYOm8ScSAPIlST2ZXgHwI5H3sMq00erPrC0VxROAkwk5BgzfiOwsmbTrrWxv2O/JE9dpiC3CdVG96JBAq3NmRqwrTz2+AChSczbXBd1fFMdMfPn065PI8MIFdJ5s6xe/qiJu2zzl9NbbifhzAMR1V1F5phafpQA4mWjRsvqg/T7YJGC8BkA81AoRfd3KZiJ3Uq1ou0nnfIRt+mhEJip3WqZx70wWfGsBy0EmTtvFxls+xGAxk+sBcGbIYBzLg942ZGaEn+zIPmJ5zI7ZNxD4GhAuA3BayCpzpC3euqjcJZBSAZwhgtbRnbqYGSsB1gESTsDFOpdY9Z9XAqdwmCl+YkYqrIYvlwVuPU2v6gWE6IFefQ2X2MzLiNAJRieoqLNYrRBaT8L5BoBRBg4Q8BKAq6SZ35Vcz1rXFtCr6B1dPbcykTTTKIa2dNDszXotZ9Tj68n05wH+pqR6jOZBF1bqZerZAtZUv/Zkz0oCiRmTlHVGAv4tZxq31FSoBgysd6WvBPFWaVUrMTwol0coASx6ahhPPC9tK4pQiBUKSb8vJJT2EiUlrC9btRiFmLB0OkdSFqM8Zp8/OPjscKX0Qwegs9UnzJJWShIFjTj2q1UrYYNILdpzwjdVrXFdh2ess/qNu2cLHyoAxRpX2+ktT0m2Dn7djufbQ7jt5vq9eg3oHAvtlfmRAzjQFm/Vy818S8sfGgDrBJ84dS7N64FXMOoR34FPmHtdIjc/+phlZv61Wh6hALAoSmv+R5JbPqFFfwLDKyZt0aqJ02j/i24XLdo2ApbJrRvvsMw+sR5pV8sncAAdG8OfSO4OijpopK16Mdv7i2qiNOL/juGIsOWUN+abEG4UGr/d2tPX70bHQAF0llrENfbnuSmstzDyPF55K5f82B3J9CoGPyFxtvtmJVxMPEIxBnQWmb8ra51vxmsdKowmVvh58Yx8bPzJwXEBIuw2E/6kOGsquxIYvqSWIU7dW0BnmUVsSk+zC5MmDqGgQUs1W9frWFR/H4QPSNN2esI1db2TUesK4JLuNZfbbIuttfqZa9XYJdTpZUnNRp+4EkIcL6ibuRYz7hjsN0SPVtNTFwAnpv7j9wB8e02l8xp44qDRu9zMxrxmFYb4zuLyBgAfrXN5ph00qiVvqQA6Xlf//Hfjj6/XZQA8veZDMTv+R8L9Qy2CRDHshDHwgjsBFnaN9TZ5M9vire+stuBcSVdZAGodXT03MNHXAnI/NkKEVC5r7IwiUG7LXDS9GrZvYqb19exuS8p3JGYX/tjLnrqvABZ3M85oERYmwu1Cp1shfQ8XjTMec662mMiNMT5BxJ+RZrBRvXR5trWrBgd6jepBK4fwBcD25JpuIr4NzDcF0NVOqx2BP58z+/7JiyhhjTvhNYFvA/jGALra6bIQ32Rl+x7zqtWcARTQabDfLxx6h8ZTwiyWt16FCii+pifTy0H2B8EkHAEE16tM/8y/YJmZf/RDE9cATmzlxC8DOOWYb4fMW1ZD7HRo+tKeJbBpNRMuJ8Z7QncEk3C3lTXE0VBfHhJLJPG4fRrReEshhrOgYT5sbYEGPp8n7gwRZzfElxdaj01MeHgwa9zmiyKSEpnUWdPsRB50tkb8FtLshTbjAhAtJkaXo7U4HxPOR0IPQx3J1FC0HSNGo+XTkylxVWu9l0j8A9nnlm+yYNEGUMIX6d8bm55StAEk38Z8M/WNLIAE+kzOzNwnCxi/040ogHkQr/VjtltJzygCeJwJNw5mDWFDGJknggAeIdB7Z/py8VvwqAG4j6G9L4pneaMEoLish2KFa63d2/f5DVyUu+CnTsQKN7+8e/th2aLISD9CAD7WFm/95Fz3dmvVLgotYJ7AX86Zfd+OslVLBAAcAXDX7+5v+36tEHkJH3YATcdz/S4vlQxD3JADuCtmF270YlQwV43DCmAe4O+MHMvfXerOda6VDEO8kAI4AsLfJ3j4nlrM6P3UM4wA7mLwxwfNvsi3eqUvKoQAPguNb3d7es1P6ErTChOABwF8xTKNh6M81qv0okIE4H4Qf8nK9j0eBp3DAOBxgB8ojLasb+RTayEA8AgI32qLtX6rXjNcN61mkACOg+j+POMbUfdQ6kboAAF8A0z3xzj2zTAeTwgCwKMAP0Tj8Q253DOvuHl5jRAmAAAPMvg+jPEDs7lHC1rbegI4QOCH49C+Z5oZ4R62qZ46Aigmbw+OHBt7NAorCLIBFL6ef6CR9nCzHQyf+XVJBvAoQI/bNj20d6D3l1H6smUAeJyAn7LG/zFyJL85Cl9hPV6YBACPMuHHZGs/SNBvtga1judVO+8AEgpg7AF4K2vY2mIfzERVDK9izhbfM4ATOv8KxFuItS05MyO8m1Z1fyazTn6kXTuAhJcEcATssjX+hX28ZUcjL5/4IbJIYw4A7iPwbmbsBLQdbYmW58O0fOKXLqQnUzkA54oECTjMgLhI+AAYB0E0TOCXwbwXGu0bH0nkFGxzk15PpsRCe/HWKAKOMDACxq9BfAhEr8HGEGu0jwv00ryWxEAjwlZOOden4uYmu4qlFJhdAQWgIiRQBRSAgcqvMlcAKgYCVUABGKj8KnMFoGIgUAUUgIHKrzJXACoGAlVAARio/CpzBaBiIFAFFICByq8yVwAqBgJVQAEYqPwqcwWgYiBQBRSAgcqvMlcAKgYCVUABGKj8KnMFoGIgUAUUgIHKrzJXACoGAlVAARio/CpzBaBiIFAFFICByq8yVwAqBgJVQAEYqPwq8/8HTKiV/0H3cykAAAAASUVORK5CYII=);
                                                            ">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="testimonials-text-wrapper">
                                                                                                            <p>
                                                                                                                Design
                                                                                                                is a way
                                                                                                                of
                                                                                                                life, a
                                                                                                                point of
                                                                                                                view. It
                                                                                                                involves
                                                                                                                the
                                                                                                                whole
                                                                                                                complex
                                                                                                                of
                                                                                                                visual
                                                                                                                commun
                                                                                                                ications:
                                                                                                                talent,
                                                                                                                creative
                                                                                                                ability
                                                                                                                and
                                                                                                                technical
                                                                                                                knowledge.
                                                                                                            </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="testimonials_author_wrapper">
                                                                                                        <div
                                                                                                            class="testimonials_photo">
                                                                                                            <img decoding="async"
                                                                                                                class="rounded"
                                                                                                                src="/assets/img/home6_img_3-148x148.png"
                                                                                                                style="
                                                              width: 74px;
                                                              height: 74px;
                                                            " />
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="gt3_aside_title_wrap">
                                                                                                            <div
                                                                                                                class="testimonials_title">
                                                                                                                Tommy
                                                                                                                Dents
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="testimonials-sub_name">
                                                                                                                Customer
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="testimonials_item swiper-slide"
                                                                                            style="width: 654px"
                                                                                            role="tabpanel">
                                                                                            <div class="testimonial_item_wrapper"
                                                                                                style="position: relative">
                                                                                                <div
                                                                                                    class="testimonials_content">
                                                                                                    <div
                                                                                                        class="testimonials-text">
                                                                                                        <div
                                                                                                            class="testimonials-text-quote">
                                                                                                            <div class="testimonials-quote-icon-holder"
                                                                                                                style="
                                                              background-image: url(data:image/png;base64,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);
                                                              -webkit-mask-image: url(data:image/png;base64,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);
                                                            ">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="testimonials-text-wrapper">
                                                                                                            <p>
                                                                                                                Design
                                                                                                                is a way
                                                                                                                of
                                                                                                                life, a
                                                                                                                point of
                                                                                                                view. It
                                                                                                                involves
                                                                                                                the
                                                                                                                whole
                                                                                                                complex
                                                                                                                of
                                                                                                                visual
                                                                                                                commun
                                                                                                                ications:
                                                                                                                talen.t,
                                                                                                                creative
                                                                                                                ability
                                                                                                                manual
                                                                                                                skill.
                                                                                                            </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="testimonials_author_wrapper">
                                                                                                        <div
                                                                                                            class="testimonials_photo">
                                                                                                            <img decoding="async"
                                                                                                                class="rounded"
                                                                                                                src="/assets/img/home10_avatar-148x148.jpg"
                                                                                                                style="
                                                              width: 74px;
                                                              height: 74px;
                                                            " />
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="gt3_aside_title_wrap">
                                                                                                            <div
                                                                                                                class="testimonials_title">
                                                                                                                Denis
                                                                                                                Robinson
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="testimonials-sub_name">
                                                                                                                Customer
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="testimonials_item swiper-slide"
                                                                                            style="width: 654px"
                                                                                            role="tabpanel">
                                                                                            <div class="testimonial_item_wrapper"
                                                                                                style="position: relative">
                                                                                                <div
                                                                                                    class="testimonials_content">
                                                                                                    <div
                                                                                                        class="testimonials-text">
                                                                                                        <div
                                                                                                            class="testimonials-text-quote">
                                                                                                            <div class="testimonials-quote-icon-holder"
                                                                                                                style="
                                                              background-image: url(data:image/png;base64,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);
                                                              -webkit-mask-image: url(data:image/png;base64,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);
                                                            ">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="testimonials-text-wrapper">
                                                                                                            <p>
                                                                                                                Design
                                                                                                                is a way
                                                                                                                of
                                                                                                                life, a
                                                                                                                point of
                                                                                                                view. It
                                                                                                                involves
                                                                                                                the
                                                                                                                whole
                                                                                                                complex
                                                                                                                of
                                                                                                                visual
                                                                                                                commun
                                                                                                                ications:
                                                                                                                talent,
                                                                                                                creative
                                                                                                                ability
                                                                                                                and
                                                                                                                technical
                                                                                                                knowledge.
                                                                                                            </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="testimonials_author_wrapper">
                                                                                                        <div
                                                                                                            class="testimonials_photo">
                                                                                                            <img decoding="async"
                                                                                                                class="rounded"
                                                                                                                src="/assets/img/testimonials_09_1-148x148.jpg"
                                                                                                                style="
                                                              width: 74px;
                                                              height: 74px;
                                                            " />
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="gt3_aside_title_wrap">
                                                                                                            <div
                                                                                                                class="testimonials_title">
                                                                                                                Silviia
                                                                                                                Garden
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="testimonials-sub_name">
                                                                                                                Customer
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="testimonials_item swiper-slide"
                                                                                            style="width: 654px"
                                                                                            role="tabpanel">
                                                                                            <div class="testimonial_item_wrapper"
                                                                                                style="position: relative">
                                                                                                <div
                                                                                                    class="testimonials_content">
                                                                                                    <div
                                                                                                        class="testimonials-text">
                                                                                                        <div
                                                                                                            class="testimonials-text-quote">
                                                                                                            <div class="testimonials-quote-icon-holder"
                                                                                                                style="
                                                              background-image: url(data:image/png;base64,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);
                                                              -webkit-mask-image: url(data:image/png;base64,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);
                                                            ">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="testimonials-text-wrapper">
                                                                                                            <p>
                                                                                                                Design
                                                                                                                is a way
                                                                                                                of
                                                                                                                life, a
                                                                                                                point of
                                                                                                                view. It
                                                                                                                involves
                                                                                                                the
                                                                                                                whole
                                                                                                                complex
                                                                                                                of
                                                                                                                visual
                                                                                                                commun
                                                                                                                ications:
                                                                                                                talent,
                                                                                                                creative
                                                                                                                ability
                                                                                                                and
                                                                                                                technical
                                                                                                                knowledge.
                                                                                                            </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="testimonials_author_wrapper">
                                                                                                        <div
                                                                                                            class="testimonials_photo">
                                                                                                            <img decoding="async"
                                                                                                                class="rounded"
                                                                                                                src="/assets/img/home6_img_3-148x148.png"
                                                                                                                style="
                                                              width: 74px;
                                                              height: 74px;
                                                            " />
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="gt3_aside_title_wrap">
                                                                                                            <div
                                                                                                                class="testimonials_title">
                                                                                                                Tommy
                                                                                                                Dents
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="testimonials-sub_name">
                                                                                                                Customer
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="clear"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <div class="elementor-element elementor-element-5203ba5 elementor-widget elementor-widget-spacer"
                                                    data-id="5203ba5" data-element_type="widget"
                                                    data-widget_type="spacer.default">
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
                            </div>
                            <div class="clear"></div>
                            <div id="comments"></div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-elementor-type="wpda-footer" data-elementor-id="7803"
        class="elementor elementor-7803 wpda-builder-page-7803 wpda-builder wpda-footer-builder">
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-70be064 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="70be064" data-element_type="section" data-settings='{"background_background":"classic"}'>
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6550ca10"
                    data-id="6550ca10" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">

                        <div class="elementor-element elementor-element-73feaf10 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                            data-id="73feaf10" data-element_type="widget" data-widget_type="divider.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-divider">
                                    <span class="elementor-divider-separator"> </span>
                                </div>
                            </div>
                        </div>
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-36b79983 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="36b79983" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-extended">
                                <div class="elementor-column elementor-col-40 elementor-inner-column elementor-element elementor-element-415e9e5a"
                                    data-id="415e9e5a" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-3ee659aa elementor-widget elementor-widget-spacer"
                                            data-id="3ee659aa" data-element_type="widget"
                                            data-widget_type="spacer.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-spacer">
                                                    <div class="elementor-spacer-inner"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element-custom_font_weight elementor-element-custom_color elementor-element elementor-element-46108c3a elementor-widget elementor-widget-text-editor"
                                            data-id="46108c3a" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <h4>About</h4>
                                            </div>
                                        </div>
                                        <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element-custom_color elementor-element elementor-element-7555758f elementor-widget elementor-widget-text-editor"
                                            data-id="7555758f" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p>
                                                    We focus on the needs of small to middle market
                                                    businesses to improve and grow their return.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-3e52fb1f elementor-shape-square e-grid-align-left elementor-grid-0 elementor-widget elementor-widget-social-icons"
                                            data-id="3e52fb1f" data-element_type="widget"
                                            data-widget_type="social-icons.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-social-icons-wrapper elementor-grid">

                                                    <span class="elementor-grid-item">
                                                        <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook-f elementor-repeater-item-5ffa149"
                                                            href="#" target="_blank">
                                                            <span class="elementor-screen-only">Facebook-f</span>
                                                            <i class="fa-brands fa-facebook-f"></i>
                                                        </a>
                                                    </span>
                                                    <span class="elementor-grid-item">
                                                        <a class="elementor-icon elementor-social-icon elementor-social-icon-pinterest-p elementor-repeater-item-473615c"
                                                            href="#" target="_blank">
                                                            <span class="elementor-screen-only">Pinterest-p</span>
                                                            <i class="fa-brands fa-pinterest-p"></i>
                                                        </a>
                                                    </span>
                                                    <span class="elementor-grid-item">
                                                        <a class="elementor-icon elementor-social-icon elementor-social-icon-linkedin-in elementor-repeater-item-ababeec"
                                                            href="#" target="_blank">
                                                            <span class="elementor-screen-only">Linkedin-in</span>
                                                            <i class="fa-brands fa-linkedin-in"></i>
                                                        </a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-79dc8458"
                                    data-id="79dc8458" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-3a437120 elementor-widget elementor-widget-spacer"
                                            data-id="3a437120" data-element_type="widget"
                                            data-widget_type="spacer.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-spacer">
                                                    <div class="elementor-spacer-inner"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element-custom_font_weight elementor-element-custom_color elementor-element elementor-element-3c04219b elementor-widget elementor-widget-text-editor"
                                            data-id="3c04219b" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <h4>Services</h4>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-2e2cb06f wpda_alignment-left elementor-widget elementor-widget-wpda-builder-menu"
                                            data-id="2e2cb06f" data-element_type="widget"
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
                                                            <li id="menu-item-12026"
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12026">
                                                                <a href="#">SEO Marketing</a>
                                                            </li>
                                                            <li id="menu-item-12027"
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12027">
                                                                <a href="#">SEO Services</a>
                                                            </li>
                                                            <li id="menu-item-12028"
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12028">
                                                                <a href="#">Pay Per Click</a>
                                                            </li>
                                                            <li id="menu-item-12029"
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12029">
                                                                <a href="#">Social Media</a>
                                                            </li>
                                                            <li id="menu-item-12030"
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12030">
                                                                <a href="#">SEO Audit</a>
                                                            </li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-7512ac0a"
                                    data-id="7512ac0a" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-261f93ce elementor-widget elementor-widget-spacer"
                                            data-id="261f93ce" data-element_type="widget"
                                            data-widget_type="spacer.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-spacer">
                                                    <div class="elementor-spacer-inner"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element-custom_font_weight elementor-element-custom_color elementor-element elementor-element-7ec1e2c2 elementor-widget elementor-widget-text-editor"
                                            data-id="7ec1e2c2" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <h4>Community</h4>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-35f524d1 wpda_alignment-left elementor-widget elementor-widget-wpda-builder-menu"
                                            data-id="35f524d1" data-element_type="widget"
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
                                                            <li id="menu-item-12031"
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12031">
                                                                <a href="#">Our Product</a>
                                                            </li>
                                                            <li id="menu-item-12032"
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12032">
                                                                <a href="#">Documentation</a>
                                                            </li>
                                                            <li id="menu-item-12033"
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12033">
                                                                <a href="#">Our Services</a>
                                                            </li>
                                                            <li id="menu-item-12034"
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12034">
                                                                <a href="#">Company</a>
                                                            </li>
                                                            <li id="menu-item-12035"
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12035">
                                                                <a href="#">What We Do?</a>
                                                            </li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-5ee14e87"
                                    data-id="5ee14e87" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-2865ca4a elementor-widget elementor-widget-spacer"
                                            data-id="2865ca4a" data-element_type="widget"
                                            data-widget_type="spacer.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-spacer">
                                                    <div class="elementor-spacer-inner"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element-custom_font_weight elementor-element-custom_color elementor-element elementor-element-2db723de elementor-widget elementor-widget-text-editor"
                                            data-id="2db723de" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <h4>Quick Links</h4>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-4773ffed wpda_alignment-left elementor-widget elementor-widget-wpda-builder-menu"
                                            data-id="4773ffed" data-element_type="widget"
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
                                                                <a href="https://ewebotwp.com/home-02/">Home</a>
                                                            </li>
                                                            <li id="menu-item-12024"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12024">
                                                                <a href="https://ewebotwp.com/about-us/">About Us</a>
                                                            </li>
                                                            <li id="menu-item-12025"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12025">
                                                                <a href="https://ewebotwp.com/services/">Main
                                                                    Services</a>
                                                            </li>
                                                            <li id="menu-item-12021"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12021">
                                                                <a
                                                                    href="https://ewebotwp.com/pricing-plans/">Pricing</a>
                                                            </li>
                                                            <li id="menu-item-12022"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12022">
                                                                <a href="https://ewebotwp.com/our-case-studies/">Our
                                                                    Cases</a>
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
                        <div class="elementor-element elementor-element-90ddb52 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                            data-id="90ddb52" data-element_type="widget" data-widget_type="divider.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-divider">
                                    <span class="elementor-divider-separator"> </span>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element-custom_font_size elementor-element-custom_line_height elementor-element-custom_color elementor-element elementor-element-1d26260d elementor-widget elementor-widget-text-editor"
                            data-id="1d26260d" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <p>
                                    © 2025 – Ewebot by
                                    <a href="https://gt3themes.com/">GT3Themes</a>. All Rights
                                    Reserved.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="wpda-builder__burger_sidebar burger-id-3067e7d2">
        <div class="wpda-builder__burger_sidebar-cover"></div>
        <div class="wpda-builder__burger_container">
            <aside class="sidebar">
                <div id="custom_html-4" class="widget_text widget gt3_widget open widget_custom_html">
                    <div class="textwidget custom-html-widget">
                        <img class="alignnone size-full wp-image-1456" src="/assets/img/logo_retinablack.png"
                            alt="" width="149" height="48" />
                    </div>
                </div>
                <div id="custom_html-5" class="widget_text widget gt3_widget open widget_custom_html">
                    <div class="textwidget custom-html-widget">
                        <div class="textwidget">
                            <p>
                                Claritas est etiam processus dynamicus, qui sequitur
                                mutationem consuetudium lecto rum eleifend option congue nihil
                                doming. Espa notrle neumurit.
                            </p>
                        </div>
                    </div>
                </div>
                <div id="custom_html-6" class="widget_text widget gt3_widget open widget_custom_html">
                    <h4 class="widget-title">Contacts</h4>
                    <div class="textwidget custom-html-widget">
                        <div class="textwidget">
                            <p>
                                <a class="gt3_icon_link gt3_custom_color"
                                    style="
                      font-size: 17px;
                      color: #5747e4;
                      margin-right: 15px;
                      margin-top: -20px;
                    "
                                    href="#" target="_blank" rel="noopener noreferrer"
                                    data-color="#5747e4" data-hover-color="#f47215"><br />
                                    <i class="fa fa-phone" style="font-weight: bold"> </i><br />
                                </a>
                                8 800 2563 123
                            </p>
                            <p>
                                <a class="gt3_icon_link gt3_custom_color"
                                    style="
                      font-size: 17px;
                      color: #5747e4;
                      margin-right: 15px;
                      margin-top: -5px;
                    "
                                    href="#" target="_blank" rel="noopener noreferrer"
                                    data-color="#5747e4" data-hover-color="#f47215"><i
                                        class="fa fa-envelope">&nbsp;</i></a>
                                emil@yoursite.com
                            </p>
                            <p>
                                <a class="gt3_icon_link gt3_custom_color"
                                    style="
                      font-size: 17px;
                      margin-top: 7px;
                      margin-right: 15px;
                      margin-bottom: 20px;
                      float: left;
                      color: rgb(87, 71, 228);
                    "
                                    href="#" target="_blank" rel="noopener noreferrer"
                                    data-color="#5747e4" data-hover-color="#f47215"><img class="alignnone"
                                        src="https://ewebotwp.com/wp-content/uploads/2019/09/map_point.png"
                                        alt="" width="12" height="17"
                                        style="margin-right: 10px; margin-left: 3px" /></a>27 Division St, New York,
                                NY 10002, United States
                            </p>
                        </div>
                    </div>
                </div>
                <div id="block-7" class="widget gt3_widget open widget_block">
                    <p>
                        <script>
                            (function() {
                                window.mc4wp = window.mc4wp || {
                                    listeners: [],
                                    forms: {
                                        on: function(evt, cb) {
                                            window.mc4wp.listeners.push({
                                                event: evt,
                                                callback: cb,
                                            });
                                        },
                                    },
                                };
                            })();
                        </script>
                        <!-- Mailchimp for WordPress v4.10.3 - https://wordpress.org/plugins/mailchimp-for-wp/ -->
                    </p>
                    <form id="mc4wp-form-2" class="mc4wp-form mc4wp-form-9431" method="post" data-id="9431"
                        data-name="Subscription form">
                        <div class="mc4wp-form-fields">
                            <div class="mc_merge_var">
                                <input type="email" name="EMAIL" placeholder="Email Address"
                                    required="" />
                            </div>
                            <div class="mc_signup_submit">
                                <input type="submit" value="Sign up" />
                            </div>
                        </div>
                        <label style="display: none !important">Leave this field empty if you're human:
                            <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1"
                                autocomplete="off" /></label><input type="hidden" name="_mc4wp_timestamp"
                            value="1746667914" /><input type="hidden" name="_mc4wp_form_id"
                            value="9431" /><input type="hidden" name="_mc4wp_form_element_id"
                            value="mc4wp-form-2" />
                        <div class="mc4wp-response"></div>
                    </form>
                    <!-- / Mailchimp for WordPress Plugin -->
                    <p></p>
                </div>
                <div id="block-8" class="widget gt3_widget open widget_block">
                    <div class="textwidget">
                        <p>
                            <a class="gt3_icon_link gt3_custom_color"
                                style="
                    font-size: 16px;
                    color: rgb(151, 148, 180);
                    margin-right: 15px;
                    margin-top: 5px;
                  "
                                href="#" target="_blank" rel="noopener noreferrer" data-color="#9794b4"
                                data-hover-color="#00aced"><i class="fa fa-twitter">&nbsp;</i></a>&nbsp;<a
                                class="gt3_icon_link gt3_custom_color"
                                style="
                    font-size: 16px;
                    color: #9794b4;
                    margin-right: 15px;
                    margin-top: 5px;
                  "
                                href="#" target="_blank" rel="noopener noreferrer" data-color="#9794b4"
                                data-hover-color="#3b5998"><i class="fa fa-facebook">&nbsp;</i></a><a
                                class="gt3_icon_link gt3_custom_color"
                                style="
                    font-size: 16px;
                    color: #9794b4;
                    margin-right: 15px;
                    margin-top: 5px;
                  "
                                href="#" target="_blank" rel="noopener noreferrer" data-color="#9794b4"
                                data-hover-color="#f04b3f"><i class="fa fa-pinterest-p">&nbsp;</i></a>
                            <a class="gt3_icon_link gt3_custom_color"
                                style="
                    font-size: 16px;
                    color: #9794b4;
                    margin-right: 15px;
                    margin-top: 5px;
                  "
                                href="#" target="_blank" rel="noopener noreferrer" data-color="#9794b4"
                                data-hover-color="#007bb6"><i class="fa fa-linkedin">&nbsp;</i></a>
                        </p>
                    </div>
                </div>
            </aside>
        </div>
    </div>
    <style>
        .swiper-slide {
            width: 300px;
            /* hoặc kích thước phù hợp */
        }
    </style>
    <script>
        if (localStorage.getItem("gt3_gridlist_woo") === null) {
            localStorage.setItem("gt3_gridlist_woo", "grid");
        }
    </script>
    <script>
        (function() {
            function maybePrefixUrlField() {
                const value = this.value.trim();
                if (value !== "" && value.indexOf("http") !== 0) {
                    this.value = "http://" + value;
                }
            }

            const urlFields = document.querySelectorAll(
                '.mc4wp-form input[type="url"]'
            );
            for (let j = 0; j < urlFields.length; j++) {
                urlFields[j].addEventListener("blur", maybePrefixUrlField);
            }
        })();
    </script>
    <div id="yith-quick-view-modal" class="yith-quick-view yith-modal">
        <div class="yith-quick-view-overlay"></div>
        <div id="" class="yith-wcqv-wrapper">
            <div class="yith-wcqv-main">
                <div class="yith-wcqv-head">
                    <a href="#" class="yith-quick-view-close">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"></path>
                        </svg>
                    </a>
                </div>
                <div id="yith-quick-view-content" class="yith-quick-view-content woocommerce single-product"></div>
            </div>
        </div>
    </div>
    <script>
        // Patch to handle events with passive: true
        (function() {
            // Override addEventListener
            var originalAddEventListener = EventTarget.prototype.addEventListener;
            EventTarget.prototype.addEventListener = function(
                type,
                listener,
                options
            ) {
                if (type === "touchstart" || type === "touchmove") {
                    if (options === undefined) {
                        options = {
                            passive: true
                        };
                    } else if (typeof options === "object") {
                        options.passive = true;
                    }
                }
                originalAddEventListener.call(this, type, listener, options);
            };
        })();
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            if (window.innerWidth <= 768) {
                const images = document.querySelectorAll("img:not([loading])");
                images.forEach((img) => {
                    img.setAttribute("loading", "lazy");
                });

                const disableElement = document.querySelector(
                    '.gt3_disable_lazy [loading="lazy"]'
                );
                if (disableElement) {
                    disableElement.removeAttribute("loading");
                }
            }
        });
    </script>
    <div class="bubbles_wrap">
        <div class="bubble x1"></div>
        <div class="bubble x2"></div>
        <div class="bubble x3"></div>
        <div class="bubble x4"></div>
        <div class="bubble x5"></div>
        <div class="bubble x6"></div>
        <div class="bubble x7"></div>
        <div class="bubble x8"></div>
        <div class="bubble x9"></div>
        <div class="bubble x10"></div>
    </div>
    <div class="back_to_top_container">
        <a href="javascript:void(0)" class="gt3_back2top" id="back_to_top">Back to top</a>
    </div>
    <script>
        const lazyloadRunObserver = () => {
            const lazyloadBackgrounds = document.querySelectorAll(
                `.e-con.e-parent:not(.e-lazyloaded)`
            );
            const lazyloadBackgroundObserver = new IntersectionObserver(
                (entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            let lazyloadBackground = entry.target;
                            if (lazyloadBackground) {
                                lazyloadBackground.classList.add("e-lazyloaded");
                            }
                            lazyloadBackgroundObserver.unobserve(entry.target);
                        }
                    });
                }, {
                    rootMargin: "200px 0px 200px 0px"
                }
            );
            lazyloadBackgrounds.forEach((lazyloadBackground) => {
                lazyloadBackgroundObserver.observe(lazyloadBackground);
            });
        };
        const events = ["DOMContentLoaded", "elementor/lazyload/observe"];
        events.forEach((event) => {
            document.addEventListener(event, lazyloadRunObserver);
        });
    </script>
    <script type="text/javascript">
        (function() {
            var c = document.body.className;
            c = c.replace(/woocommerce-no-js/, "woocommerce-js");
            document.body.className = c;
        })();
    </script>

    <div class="pswp" tabindex="-1" role="dialog" aria-modal="true" aria-hidden="true">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--zoom" aria-label="Zoom in/out"></button>
                    <button class="pswp__button pswp__button--fs" aria-label="Toggle fullscreen"></button>
                    <button class="pswp__button pswp__button--share" aria-label="Share"></button>
                    <button class="pswp__button pswp__button--close" aria-label="Close (Esc)"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>
                <button class="pswp__button pswp__button--arrow--left" aria-label="Previous (arrow left)"></button>
                <button class="pswp__button pswp__button--arrow--right" aria-label="Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/template" id="tmpl-variation-template">
      {{-- <div class="woocommerce-variation-description">{{{ data.variation.variation_description }}}</div>
      <div class="woocommerce-variation-price">{{{ data.variation.price_html }}}</div>
      <div class="woocommerce-variation-availability">{{{ data.variation.availability_html }}}</div> --}}
    </script>
    <script type="text/template" id="tmpl-unavailable-variation-template">
      <p role="alert">Sorry, this product is unavailable. Please choose a different combination.</p>
    </script>

    <style data-typed-js-css="true">
        .typed-cursor {
            opacity: 1;
        }

        .typed-cursor.typed-cursor--blink {
            animation: typedjsBlink 0.7s infinite;
            -webkit-animation: typedjsBlink 0.7s infinite;
            animation: typedjsBlink 0.7s infinite;
        }

        @keyframes typedjsBlink {
            50% {
                opacity: 0;
            }
        }

        @-webkit-keyframes typedjsBlink {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="/assets/js/menu-mobile.js"></script>
    <script src="/assets/js/search-bar.js"></script>
    <script>
        const swiper = new Swiper(".swiper", {
            loop: true, // Bật chế độ lặp lại
            spaceBetween: 30, // Khoảng cách giữa các slide
            centeredSlides: true,
            autoplay: {
                delay: 5000, // Tự động chuyển slide sau 3 giây
                disableOnInteraction: false, // Nếu người dùng tương tác, autoplay không dừng
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            slidesPerView: 1,
            breakpoints: {
                768: {
                    slidesPerView: 3,
                },

            },

        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("typed_937c14f").innerHTML = "";

            const typed = new Typed("#typed_937c14f", {
                strings: ["Success", "Services", "Business"],
                typeSpeed: 60,
                backSpeed: 30,
                loop: true,
                smartBackspace: true,
                showCursor: false, // Tắt dấu nháy
            });
        });
    </script>
    <script>
        const swiperComment = new Swiper('.testimonials_rotator', {
            loop: true, // Nếu bạn muốn lặp lại các slide
            spaceBetween: 0, // Khoảng cách giữa các slide
            slidesPerView: 1, // Hiển thị một slide cùng lúc
            autoplay: {
                delay: 10000, // Tự động chuyển slide sau 3 giây
                disableOnInteraction: false, // Nếu người dùng tương tác, autoplay không dừng
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true, // Cho phép người dùng click vào pagination để chuyển slide
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggleBtn = document.querySelector('.wpda-mobile-navigation-toggle');
            const targetMenu = document.querySelector('.elementor-element-f89fc0c');

            if (toggleBtn && targetMenu) {
                toggleBtn.addEventListener('click', function() {
                    targetMenu.classList.toggle('mobile_menu_active');
                });
            }
        });
    </script>
    <script>
        window.addEventListener('scroll', function() {
            const section = document.querySelector('.elementor-element-1c7d0e5b');

            if (window.scrollY > 10) { // 100px là ngưỡng cuộn, bạn có thể chỉnh
                section.classList.add('sticky_enabled');
            } else {
                section.classList.remove('sticky_enabled');
            }
        });
    </script>

</body>

</html>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const backToTopButton = document.getElementById("back_to_top");
        const scrollThreshold = 300; // Số pixel cuộn xuống để hiển thị nút

        window.addEventListener("scroll", function() {
            if (window.scrollY > scrollThreshold) {
                backToTopButton.style.display = "block";
            } else {
                backToTopButton.style.display = "none";
            }
        });

        backToTopButton.addEventListener("click", function() {
            window.scrollTo({
                top: 0,
                behavior: "smooth",
            });
        });
    });
</script>
