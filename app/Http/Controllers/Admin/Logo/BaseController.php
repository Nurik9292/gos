<?php

namespace App\Http\Controllers\Admin\Logo;

use App\Http\Controllers\Controller;
use App\Services\Logo\Service;

class BaseController extends Controller
{
    protected Service $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
