<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\CustomerReview;

class AboutController extends Controller
{
    public function about()
    {
        $aboutUs = AboutUs::query()->get();

        return view('frontend.pages.about.about', compact('aboutUs'));
    }
}