<?php

namespace App\Http\Controllers\Admin\Gallery;

use App\Http\Requests\Admin\GalleryRequest;
use Illuminate\Http\RedirectResponse;

class StoreController extends BaseController
{
    public function __invoke(GalleryRequest $request): RedirectResponse
    {
        $this->service->store($request->validated());



        return redirect()->route('gallery.index');
    }
}
