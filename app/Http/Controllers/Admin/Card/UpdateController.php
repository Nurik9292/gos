<?php

namespace App\Http\Controllers\Admin\Card;

use App\Http\Requests\Admin\CardRequest;
use App\Models\Card;
use Illuminate\Http\RedirectResponse;

class UpdateController extends BaseController
{
    public function __invoke(CardRequest $request, Card $card): RedirectResponse
    {
        $this->service->update($request->validated(), $card);

        return redirect()->route('card.index');
    }
}
