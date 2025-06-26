<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        $banner = Banner::firstOrCreate();
        return view('backend.banner.index', compact('banner'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = uploadImages('image', 'banner');
        }

        if (!empty($data['animated_texts'])) {
            $data['animated_texts'] = (array_filter($data['animated_texts']));
        } else {
            $data['animated_texts'] = ([]);
        }

        $banner = Banner::first();
        $banner->update($data);

        session()->flash('success', 'Lưu thay đổi thành công.');

        return redirect()->back();
        // dd($data);
    }
}