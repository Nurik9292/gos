<?php

namespace App\Http\Controllers\Admin\Content;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function __invoke(): View
    {
        $page = 'content';

        $content = Content::all()->first();

        return view('admin.content.index', compact('page', 'content'));
    }
}
