<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\News;

class HomeController extends Controller
{
    public function index()
    {
        // Top 3 bài viết view cao
        $highViewNews = News::orderBy('view_count', 'desc')->take(3)->get();
        // dd($highViewNews);
        return view('frontend.pages.home.home', compact('highViewNews'));
    }
}