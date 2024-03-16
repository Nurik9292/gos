<?php

namespace App\Services\Gallery;

use App\Models\Gallery;
use App\Services\ImageProcessor;
use Illuminate\Support\Facades\Storage;

class Service
{
    private ImageProcessor $image;

    public function __construct(ImageProcessor $image)
    {
        $this->image = $image;
    }

    public function store(array $data): void
    {

        $data['image'] = $this->image->resize($data['image'], 'gallery');

        Gallery::create($data);
    }
}
