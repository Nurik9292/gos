<?php

namespace App\Services\Gallery;

use App\Models\Gallery;
use App\Services\ImageProcessor;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class Service
{
    private ImageProcessor $image;

    public function __construct(ImageProcessor $image)
    {
        $this->image = $image;
    }

    public function store(array $data): void
    {

        $data['image'] = $this->saveImage($data['image']);

        Gallery::create($data);
    }

    private function saveImage(UploadedFile $image): string
    {
        $originalImageName = $image->getClientOriginalName();
        $resizedImageName = 'images/'. 'gallery' . '/' . $this->generateRandomName() . '-' . $originalImageName;
        Storage::disk('public')->put($resizedImageName, $image);
        return '/storage/' . $resizedImageName;
    }

    private function generateRandomName(int $length = 10): string {
        $characters = 'abcdefghijklmnopqrstuvwxyz';
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $randomString;
    }
}
