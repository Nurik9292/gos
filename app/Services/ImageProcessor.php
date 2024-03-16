<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ImageProcessor
{
    public  function resize(UploadedFile $image, string $path): string
    {
        $originalImageName = $image->getClientOriginalName();
        $resizedImage = Image::make($image);
        $newImage = $resizedImage->fit((int)($resizedImage->width() * 0.8), (int)($resizedImage->height() * 0.8))->encode('jpg', 80);;
        $resizedImageName = 'images/'.  $path . '/' . $this->generateRandomName() . '-' . $originalImageName;
        Storage::disk('public')->put($resizedImageName, $newImage);
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

