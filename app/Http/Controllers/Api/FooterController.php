<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\FooterResource;
use App\Models\Footer;

class FooterController extends Controller
{
    public function __invoke(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        $footers = Footer::all();

        return FooterResource::collection($footers);
    }
}
