<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ServiceResource;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function __invoke(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        $services = Service::all();

        return ServiceResource::collection($services);
    }
}
