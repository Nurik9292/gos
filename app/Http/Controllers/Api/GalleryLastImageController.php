<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\GalleryResource;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryLastImageController extends Controller
{
    public function __invoke(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        $allGalleries = Gallery::all();

        $sortedGalleries = $allGalleries->sortByDesc('created_at');

        $galleries = $sortedGalleries->take(8);

        return GalleryResource::collection($galleries);
    }
}
