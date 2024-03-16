<?php

namespace App\Http\Controllers\Admin\Banner;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function __invoke(): View
    {
        $page = 'banner';

        $banners = Banner::all();

        return view('admin.banner.index', compact('page', 'banners'));
    }
}
