<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ServicePricing;
use Carbon\Carbon;

class ServiceController extends Controller
{
    public function services()
    {
        $categories = Category::where('type', 'product')
        ->where('status', '1')
            ->with([
                'services' => function ($query) {
                    $query
                        ->where('posted_at', '<=', now())
                        ->where('status', '1')
                        ->orderBy('order')
                        ->latest('posted_at');
                }
            ])
            ->get();

        return view('frontend.pages.services.service', compact('categories'));
    }

}