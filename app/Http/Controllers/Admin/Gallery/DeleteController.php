<?php

namespace App\Http\Controllers\Admin\Gallery;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DeleteController extends Controller
{
    public function __invoke(Gallery $gallery):RedirectResponse
    {
        Storage::disk('public')->delete(public_path($gallery->image));

        $gallery->delete();
    }
}
