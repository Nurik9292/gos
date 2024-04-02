<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\View\View;

class EditController extends Controller
{
    public function __invoke(About $about): View
    {
        $page = 'about';

        return view('admin.about.content.edit', compact('page', 'about'));
    }
}
