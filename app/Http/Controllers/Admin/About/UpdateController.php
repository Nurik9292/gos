<?php

namespace App\Http\Controllers\Admin\About;


use App\Http\Requests\Admin\AboutRequest;
use App\Models\About;
use Illuminate\Http\RedirectResponse;

class UpdateController extends BaseController
{
    public function __invoke(AboutRequest $request, About $about): RedirectResponse
    {
        $this->service->update($request->validated(), $about);

        return redirect()->route('about.index');
    }
}
