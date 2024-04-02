<?php

namespace App\Http\Controllers\Admin\Gallery;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function __invoke(): View
    {
        $page = 'gallery';

        $galleries = Gallery::all();

        return view('admin.gallery.index', compact('page', 'galleries'));
    }
}
