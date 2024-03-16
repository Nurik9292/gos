<?php

namespace App\Http\Controllers\Admin\Card;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Card;
use Illuminate\View\View;

class EditController extends Controller
{
    public function __invoke(Card $card): View
    {
        $page = 'card';

        return view('admin.card.edit', compact('page', 'card'));
    }
}
