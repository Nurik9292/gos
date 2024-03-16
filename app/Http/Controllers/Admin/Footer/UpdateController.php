<?php

namespace App\Http\Controllers\Admin\Footer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\FooterRequest;
use App\Models\Footer;

class UpdateController extends Controller
{
    public function __invoke(FooterRequest $request, Footer $footer): \Illuminate\Http\RedirectResponse
    {
        $footer->update($request->validated());

        return redirect()->route('footer.index');
    }
}
