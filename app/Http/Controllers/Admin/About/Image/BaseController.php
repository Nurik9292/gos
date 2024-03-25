<?php

namespace App\Http\Controllers\Admin\About\Image;

use App\Http\Controllers\Controller;
use App\Services\AboutImage\Service;

class BaseController extends Controller
{
    protected Service $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
