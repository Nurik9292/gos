<?php

namespace App\Http\Controllers\Admin\Logo;

use App\Http\Controllers\Controller;
use App\Models\Logo;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function __invoke(): View
    {
        $page = 'logo';

        $logos = Logo::all();


        return view('admin.logo.index', compact('page', 'logos'));
    }
}
