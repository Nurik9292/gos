<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BannerResource;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function __invoke(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        $banners = Banner::all();

        return BannerResource::collection($banners);
    }
}
