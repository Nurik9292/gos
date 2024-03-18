<?php

namespace App\Http\Controllers\Admin\Banner;

use App\Http\Requests\Admin\BannerRequest;
use App\Models\Banner;
use Illuminate\Http\RedirectResponse;

class UpdateController extends BaseController
{
    public function __invoke(BannerRequest $request, Banner $banner)
    {

        $data = $request->validated();

        dd($data);

        $this->service->update($data, $banner);

        return redirect()->route('banner.index');
    }
}
