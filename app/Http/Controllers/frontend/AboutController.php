<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Category;
use App\Models\CustomerReview;

class AboutController extends Controller
{
    public function about()
    {
        $aboutUs = AboutUs::query()->get();

        $categoryService = Category::where('type', 'product')
            ->where('status', 1)
            ->orderByDesc('location')
            ->get();


        $categoryBlog = Category::query()
            ->where('status', 1)
            ->where('type', 'blog')
            ->get();

        return view('frontend.pages.about.about', compact('aboutUs', 'categoryService', 'categoryBlog'));
    }
}