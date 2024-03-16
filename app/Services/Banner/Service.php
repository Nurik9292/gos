<?php

namespace App\Services\Banner;

use App\Models\Banner;
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

    public function update(array $data, Banner $banner): void
    {
        if(!empty($banner->image))
            Storage::disk('public')->delete($banner->image);

        $data['image'] = $this->image->resize($data['image'], 'banner');

        $banner->update($data);
    }
}
