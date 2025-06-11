<?php
use Illuminate\Filesystem\FilesystemAdapter;
use Illuminate\Support\Facades\Storage;

if (!function_exists('activeMenu')) {
    function activeMenu($routeName)
    {
        return request()->routeIs($routeName) ? 'active' : '';
    }
}

if (!function_exists('showImage')) {
    function showImage($image)
    {
        /** @var FilesystemAdapter $storage */
        $storage = Storage::disk('public');

        if ($image && $storage->exists($image)) {
            return $storage->url($image);
        }

        return asset('backend/assets/img/image-default.jpg');
    }
}
