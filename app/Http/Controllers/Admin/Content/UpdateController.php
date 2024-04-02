<?php

namespace App\Http\Controllers\Admin\Content;

use App\Http\Requests\Admin\BannerRequest;
use App\Models\Content;
use Illuminate\Http\RedirectResponse;

class UpdateController extends BaseController
{
    public function __invoke(BannerRequest $request, Content $content): RedirectResponse
    {
        $this->service->update($request->validated(), $content);

        return redirect()->route('content.index');
    }
}
