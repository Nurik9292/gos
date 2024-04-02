<?php

namespace App\Http\Controllers\Admin\Gallery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CreateController extends Controller
{
    public function __invoke(): View
    {
        $page = 'gallery';

        return view('admin.gallery.create', compact('page'));
    }
}
