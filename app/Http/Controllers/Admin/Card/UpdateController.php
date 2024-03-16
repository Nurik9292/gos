<?php

namespace App\Http\Controllers\Admin\Card;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CardRequest;
use App\Models\Card;
use Illuminate\Http\RedirectResponse;

class UpdateController extends Controller
{
    public function __invoke(CardRequest $request, Card $card): RedirectResponse
    {
        $card->update($request->validated());

        return redirect()->route('card.index');
    }
}
