<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\LogoResource;
use App\Models\Logo;
use Illuminate\Http\Request;

class LogoController extends Controller
{
    public function __invoke(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        $logos = Logo::all();

        return LogoResource::collection($logos);
    }
}
