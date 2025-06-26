<aside class='sidebar'>
    <div id="custom_html-11" class="widget_text widget gt3_widget open widget_custom_html">

    </div>
    <div id="search-2" class="widget gt3_widget open widget_search">

        <form role="search" method="get" class="search_form gt3_search_form" action="{{route('search')}}">
            <label for="search-form-6850d8694a614">Tìm iếm</label>
            <input class="search_text" id="search-form-6850d8694a614" type="search" name="s"
                placeholder="Tìm kiếm">
            <input class="search_submit" type="submit" value="Search">
        </form>
    </div>
    <div id="categories-2" class="widget gt3_widget open widget_categories">
        <h4 class="widget-title">Categories</h4>
        <ul>
            @foreach ($allCategory as $category)
                <li class="cat-item cat-item-36"><a
                        href="{{ route('listNewsByCategory', ['slug' => $category->slug]) }}">{{ $category->name }}</a>
                </li>
            @endforeach
        </ul>
    </div>


    <div id="posts-2" class="widget gt3_widget open widget_posts">
        <h4 class="widget-title">Bài viết mới nhất</h4>
        <ul class="recent_posts">
            @foreach ($latestNews as $news)
                <li class="with_img">
                    <div class="recent_posts_content no_content">
                        <a href="https://ewebotwp.com/how-to-increase-your-roi-through-scientific-sem-2/"><img
                                src="{{ $news->image }}" alt="How to Increase Your ROI Through scientific SEM?"></a>
                        <div class="recent_posts_wrapinner">
                            <div class="listing_meta">
                                <span>{{ $news->posted_at->format('d-m-Y') }}</span>
                            </div>
                            <div class="post_title"><a href="">
                                    {{ $news->title }}</a></div>

                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</aside>
