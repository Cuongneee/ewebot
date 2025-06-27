<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Customer;
use App\Models\CustomerReview;
use App\Models\News;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        // Top 3 bài viết view cao
        $highViewNews = News::orderBy('view_count', 'desc')
            ->where('posted_at', '<=', Carbon::now())
            ->where('status', '=', '1')
            ->take(3)
            ->get();

        $categoryService = Category::where('type', 'product')
            ->where('status', 1)
            ->orderByDesc('location')
            ->get();

        $customerReviews = CustomerReview::query()->get();

        $banner = Banner::first();

        $customers = Customer::query()->get();
        $categoryBlog = Category::query()
            ->where('status', 1)
            ->where('type', 'blog')
            ->get();

        // dd(vars: $customers);

        return view('frontend.pages.home.home', compact(
            'highViewNews',
            'customerReviews',
            'categoryService',
            'categoryBlog',
            'banner',
            'customers'
        ));
    }
}