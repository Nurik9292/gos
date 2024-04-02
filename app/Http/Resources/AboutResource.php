<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AboutResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $data = [
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


        if ($this->whenLoaded('aboutText')) {
            $data['text'] = [
                'tm' => $this->aboutText->tm_text,
                'ru' => $this->aboutText->ru_text,
                'en' => $this->aboutText->en_text,
            ];
        }

        return $data;
    }
}
