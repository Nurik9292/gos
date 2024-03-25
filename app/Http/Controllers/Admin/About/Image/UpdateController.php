<?php

namespace App\Http\Controllers\Admin\About\Image;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AboutImageRequest;
use App\Models\AboutImage;
use Illuminate\Http\Request;

class UpdateController extends BaseController
{
    public function __invoke(AboutImageRequest $request, AboutImage $aboutImage): \Illuminate\Http\RedirectResponse
    {
        $this->service->update($request->validated()['image'], $aboutImage);

        return redirect()->route("about-image.index");
    }
}
