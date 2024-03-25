<?php

namespace App\Http\Controllers\Admin\Footer\Text;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function __invoke(): View
    {
        $page = 'footer-text';

        $footer = Footer::all()->first();

        return view('admin.footer.text.index', compact('page', 'footer'));
    }
}
