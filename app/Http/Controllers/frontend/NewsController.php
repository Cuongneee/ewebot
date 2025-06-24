<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Carbon\Carbon;

class NewsController extends Controller
{
    public function listNews()
    {
        $allNews = News::query()
            ->where('posted_at', '<=', Carbon::now())
            ->where('status', '=', '1')
            ->latest('posted_at')
            ->paginate(6);


        $allCategory = Category::where('type', '=', 'blog')
            ->where('status', '=', '1')
            ->latest()
            ->get();

        $latestNews = News::query()
            ->where('posted_at', '<=', Carbon::now())
            ->where('status', '=', '1')
            ->latest('posted_at')
            ->take(3)
            ->get();
        // dd($latestNews);

        return view('frontend.pages.news.news', compact('allNews', 'allCategory', 'latestNews'));
    }

    public function listNewsByCategory($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();

        $allNewsCategory = News::query()
            ->where('category_id', $category->id)
            ->where('posted_at', '<=', Carbon::now())
            ->where('status', '=', '1')
            ->latest('posted_at')
            ->paginate(4);


        return view('frontend.pages.news.news-by-category', compact('allNewsCategory', 'category'));
    }

    public function detailNews($slug)
    {
        $allCategory = Category::where('type', '=', 'blog')
            ->where('status', '=', '1')
            ->latest()
            ->get();

        $latestNews = News::query()
            ->where('posted_at', '<=', Carbon::now())
            ->where('status', '=', '1')
            ->latest('posted_at')
            ->take(3)
            ->get();

        $news = News::where('slug', $slug)->firstOrFail();
        $news->increment('view_count');
        
        $relatedNews = News::where('category_id', $news->category_id)
            ->where('id', '!=', $news->id) // Không lấy chính nó
            ->where('status', 1)
            ->where('posted_at', '<=', Carbon::now())
            ->latest('posted_at')
            ->take(4)
            ->get();
        // dd($news);

        return view('frontend.pages.news.news-detail', compact('allCategory', 'latestNews', 'news', 'relatedNews'));
    }

}