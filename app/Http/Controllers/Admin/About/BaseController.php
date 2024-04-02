<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Controller;
use App\Services\About\Service;

class BaseController extends Controller
{
    protected Service $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
