<?php

namespace App\Http\Controllers\Admin\Banner;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\View\View;

class EditController extends Controller
{
    public function __invoke(Banner $banner): View
    {
        $page = 'banner';

        return view('admin.banner.edit', compact('page', 'banner'));
    }
}
