<?php

namespace App\Services\Logo;

use App\Models\Logo;
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

    public function update(UploadedFile $image, Logo $logo): void
    {

        if(!empty($logo->image))
            Storage::disk('public')->delete($logo->image);

        $data = ['image' => $this->image->resize($image, 'logo')];

        $logo->update($data);
    }
}
