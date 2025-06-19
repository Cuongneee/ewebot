<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function services()
    {
        return view('frontend.pages.services.service');
    }
}