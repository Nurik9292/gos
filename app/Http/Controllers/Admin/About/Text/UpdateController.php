<?php

namespace App\Http\Controllers\Admin\About\Text;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AboutTextRequest;
use App\Models\AboutText;
use Illuminate\Http\RedirectResponse;

class UpdateController extends Controller
{
    public function __invoke(AboutTextRequest $request, AboutText $aboutText): RedirectResponse
    {
        $aboutText->update($request->validated());

        return redirect()->route("about-text.index");
    }
}
