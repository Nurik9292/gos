<?php

namespace App\Http\Controllers\Admin\About\Image;

use App\Http\Controllers\Controller;
use App\Models\AboutImage;
use Illuminate\Http\Request;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function __invoke(): View
    {
        $page = 'about-image';

        $aboutImage = AboutImage::all()->first();

        return view('admin.about.image.index', compact('page', 'aboutImage'));
    }
}
