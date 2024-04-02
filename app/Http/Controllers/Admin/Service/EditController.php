<?php

namespace App\Http\Controllers\Admin\Service;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\View\View;

class EditController extends Controller
{
    public function __invoke(Service $service): View
    {
        $page = 'service';

        return view('admin.service.edit', compact('page', 'service'));
    }
}
