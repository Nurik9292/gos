<?php

namespace App\Http\Controllers\Admin\Footer;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function __invoke(): View
    {
        $page = 'footer';

        $footer = Footer::all()->first();

        return view('admin.footer.index', compact('page', 'footer'));
    }
}
