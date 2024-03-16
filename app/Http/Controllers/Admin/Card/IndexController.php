<?php

namespace App\Http\Controllers\Admin\Card;

use App\Http\Controllers\Controller;
use App\Models\Card;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function __invoke(): View
    {
        $page = 'card';

        $cards = Card::all();

        return view('admin.card.index', compact('page', 'cards'));
    }
}
