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
        return view('frontend.pages.news.news-detail', compact('allCategory', 'latestNews'));
    }

}