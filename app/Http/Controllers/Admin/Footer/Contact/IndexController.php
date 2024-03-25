<?php

namespace App\Http\Controllers\Admin\Footer\Contact;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use App\Models\FooterContent;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function __invoke(): View
    {
        $page = 'footer-contact';

        $footerContent = FooterContent::all()->first();

        return view('admin.footer.contact.index', compact('page', 'footerContent'));
    }
}
