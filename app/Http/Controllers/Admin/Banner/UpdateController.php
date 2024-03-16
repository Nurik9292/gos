<?php

namespace App\Http\Controllers\Admin\Banner;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BannerRequest;
use App\Models\Banner;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class UpdateController extends BaseController
{
    public function __invoke(BannerRequest $request, Banner $banner): RedirectResponse
    {
        $this->service->update($request->validated(), $banner);

        return redirect()->route('banner.index');
    }
}
