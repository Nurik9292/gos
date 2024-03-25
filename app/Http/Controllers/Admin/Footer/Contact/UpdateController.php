<?php

namespace App\Http\Controllers\Admin\Footer\Contact;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\FooterContentRequest;
use App\Models\FooterContent;

class UpdateController extends Controller
{
    public function __invoke(FooterContentRequest $request, FooterContent $footerContact): \Illuminate\Http\RedirectResponse
    {
        $footerContact->update($request->validated());

        return redirect()->route('footer-contact.index');
    }
}
