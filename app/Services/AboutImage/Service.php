<?php

namespace App\Services\AboutImage;

use App\Models\AboutImage;
use App\Services\ImageProcessor;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class Service
{
    private ImageProcessor $image;

    public function __construct(ImageProcessor $image)
    {
        $this->image = $image;
    }

    public function update(UploadedFile $image, AboutImage $aboutImage): void
    {

        if(!empty($aboutImage->image))
            Storage::disk('public')->delete($aboutImage->image);

        $data = ['image' => $this->image->resize($image, 'about-image')];

        $aboutImage->update($data);
    }
}
