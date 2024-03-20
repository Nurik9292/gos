<?php

namespace App\Services\Card;

use App\Models\Card;
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

    public function update(array $data, Card $card): void
    {
        if(!empty($card->image))
            Storage::disk('public')->delete($card->image);

        if(isset($data['image']))
            $data['image'] = $this->image->resize($data['image'], 'card');


        $card->update($data);
    }
}
