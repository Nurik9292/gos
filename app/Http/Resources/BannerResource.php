<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BannerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'image' => $this->image,
            'title' => [
                'tm' => $this->tm_title,
                'ru' => $this->ru_title,
                'en' => $this->en_title,
            ],
            'content' => [
                'tm' => $this->tm_content,
                'ru' => $this->ru_content,
                'en' => $this->en_content,
            ],
        ];
    }
}
