<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;

class ContactController extends Controller
{
    public function contact()
    {

        $categoryService = Category::where('type', 'product')
            ->where('status', 1)
            ->orderByDesc('location')
            ->get();


        $categoryBlog = Category::query()
            ->where('status', 1)
            ->where('type', 'blog')
            ->get();
        return view('frontend.pages.contact.contact', compact('categoryService', 'categoryBlog'));
    }
}