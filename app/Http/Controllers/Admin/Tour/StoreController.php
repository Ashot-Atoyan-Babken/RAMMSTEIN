<?php

namespace App\Http\Controllers\Admin\Tour;


use App\Http\Requests\Admin\Tour\StoreRequest;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data);
        return redirect()->route('tour');
    }
}
