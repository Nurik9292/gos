<?php

namespace App\Services\About;

use App\Models\About;
use App\Models\Banner;
use App\Services\ImageProcessor;
use Illuminate\Support\Facades\Storage;

class Service
{
    private ImageProcessor $image;

    public function __construct(ImageProcessor $image)
    {
        $this->image = $image;
    }

    public function update(array $data, About $about): void
    {
        if(!empty($about->image))
            Storage::disk('public')->delete($about->image);

        $data['image'] = $this->image->resize($data['image'], 'about');

        $about->update($data);
    }
}
