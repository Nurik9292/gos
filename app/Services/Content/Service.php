<?php

namespace App\Services\Content;

use App\Models\Banner;
use App\Models\Content;
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

    public function update(array $data, Content $content): void
    {
        if(!empty($content->image))
            Storage::disk('public')->delete($content->image);

        $data['image'] = $this->image->resize($data['image'], 'content');

        $content->update($data);
    }
}
