<?php
use Illuminate\Filesystem\FilesystemAdapter;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

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

function uploadImages($flieName, string $directory = 'images', $resize = false, $isArray = false, $width = 150, $height = 150, $quality = 80)
{
    $paths = [];

    $images = request()->file($flieName);
    if (!is_array($images)) {
        $images = [$images];
    }

    $manager = new ImageManager(['driver' => 'gd']);
    $storagePath = storage_path('app/public/' . trim($directory, '/'));

    if (!file_exists($storagePath)) {
        mkdir($storagePath, 0777, true);
    }

    foreach ($images as $key => $image) {
        if ($image instanceof \Illuminate\Http\UploadedFile) {
            $img = $manager->make($image->getRealPath());

            // Resize nếu $resize = true, giữ tỷ lệ
            if ($resize) {
                $img->resize($width, $height, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize(); // Không phóng to ảnh nhỏ
                });
            }

            $filename = time() . uniqid() . '.webp';

            // Encode với chất lượng 80 (bạn có thể chỉnh từ 60 đến 90)
            Storage::disk('public')->put($directory . '/' . $filename, $img->encode('webp', $quality));

            $paths[$key] = $directory . '/' . $filename;
        }
    }

    return $isArray ? $paths : $paths[0] ?? null;
}

function deleteImage($path)
{
    if ($path && Storage::disk('public')->exists($path)) {
        Storage::disk('public')->delete($path);
    }
}

function saveImage($request, string $inputName, string $directory = 'images')
{
    if ($request->hasFile($inputName)) {
        $image = $request->file($inputName);
        $filename = time() . uniqid() . '.' . $image->getClientOriginalExtension();
        Storage::disk('public')->put($directory . '/' . $filename, file_get_contents($image->getPathName()));
        return $directory . '/' . $filename;
    }
}