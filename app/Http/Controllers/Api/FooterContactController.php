<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\FooterContentResource;
use App\Models\FooterContent;

class FooterContactController extends Controller
{
    public function __invoke(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        $footerContact = FooterContent::all();

        return FooterContentResource::collection($footerContact);
    }
}
