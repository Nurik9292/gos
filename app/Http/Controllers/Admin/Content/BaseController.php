<?php

namespace App\Http\Controllers\Admin\Content;

use App\Http\Controllers\Controller;
use App\Services\Content\Service;

class BaseController extends Controller
{
    protected Service $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
