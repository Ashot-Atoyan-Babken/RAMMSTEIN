<?php

namespace App\Http\Controllers\Admin\Tour;

use App\Http\Requests\Admin\Tour\UpdateRequest;
use App\Models\Tour;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Tour $tour)
    {
        $data = $request->validated();
        $this->service->update($data, $tour);
        return redirect()->route('tour');
    }
}
