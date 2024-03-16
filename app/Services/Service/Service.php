<?php

namespace App\Services\Service;

use App\Models\Service as ModelService;
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

    public function update(array $data, ModelService $service): void
    {
        if(!empty($service->image))
            Storage::disk('public')->delete($service->image);

        $data['image'] = $this->image->resize($data['image'], 'service');

        $service->update($data);
    }
}
