<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
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

        $customerReviews = CustomerReview::query()->get();
        // dd($customerReviews);

        return view('frontend.pages.home.home', compact('highViewNews', 'customerReviews'));
    }
}