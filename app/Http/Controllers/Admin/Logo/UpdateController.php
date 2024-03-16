<?php

namespace App\Http\Controllers\Admin\Logo;

use App\Http\Requests\Admin\LogoRequest;
use App\Models\Logo;
use Illuminate\Http\RedirectResponse;

class UpdateController extends BaseController
{
    public function __invoke(LogoRequest $request, Logo $logo): RedirectResponse
    {
        $this->service->update($request->validated()['image'], $logo);

        return redirect()->route('logo.index');
    }
}
