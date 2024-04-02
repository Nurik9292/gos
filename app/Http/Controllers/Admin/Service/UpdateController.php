<?php

namespace App\Http\Controllers\Admin\Service;

use App\Http\Requests\Admin\ServiceRequest;
use App\Models\Service;
use Illuminate\Http\RedirectResponse;

class UpdateController extends BaseController
{
    public function __invoke(ServiceRequest $request, Service $service): RedirectResponse
    {
        $this->service->update($request->validated(), $service);

        return redirect()->route('service.index');
    }
}
