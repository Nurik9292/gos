<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AboutResource;
use App\Models\About;
use App\Models\AboutText;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use function Laravel\Prompts\text;

class AboutController extends Controller
{

    public function __invoke(): AnonymousResourceCollection
    {
        $abouts = About::with("aboutText")->get();

        return AboutResource::collection($abouts);
    }
}
