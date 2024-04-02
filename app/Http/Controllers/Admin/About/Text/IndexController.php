<?php

namespace App\Http\Controllers\Admin\About\Text;

use App\Http\Controllers\Controller;
use App\Models\AboutText;
use Illuminate\Http\Request;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function __invoke(): View
    {
        $page = 'about-text';

        $aboutText = AboutText::all()->first();

        return view("admin.about.text.index", compact('page', 'aboutText'));
    }
}
