<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AboutImageResource;
use App\Models\AboutImage;
use Illuminate\Http\Request;

class AboutImageController extends Controller
{
    public function __invoke(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        return AboutImageResource::collection(AboutImage::all()->first());
    }
}
