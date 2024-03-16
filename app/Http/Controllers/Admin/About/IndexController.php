<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function __invoke(): View
    {
        $page = 'about';

        $abouts = About::all();

        return view('admin.about.content.index', compact('page', 'abouts'));
    }
}
