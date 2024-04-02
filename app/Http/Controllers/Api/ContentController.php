<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ContentResource;
use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function __invoke(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        $contents = Content::all();

        return ContentResource::collection($contents);
    }
}
