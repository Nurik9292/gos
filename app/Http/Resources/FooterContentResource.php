<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FooterContentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $data = [
            'tel' => $this->tel,
            'email' => $this->email,
            'address' => [
                'tm' => $this->address_tm,
                'ru' => $this->address_ru,
                'en' => $this->address_en,
            ],
            'work' => [
                'tm' => $this->work_tm,
                'ru' => $this->work_ru,
                'en' => $this->work_en,
            ],
        ];


        return $data;
    }
}
