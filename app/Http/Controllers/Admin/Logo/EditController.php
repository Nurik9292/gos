<?php

namespace App\Http\Controllers\Admin\Logo;

use App\Http\Controllers\Controller;
use App\Models\Logo;
use Illuminate\View\View;

class EditController extends Controller
{
    public function __invoke(Logo $logo): View
    {
        $page = 'logo';

        return view('admin.logo.edit', compact('logo', 'page'));
    }
}
