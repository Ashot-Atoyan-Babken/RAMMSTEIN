<?php

namespace App\Http\Controllers\Admin\Concert;


use App\Http\Requests\Admin\Concert\StoreRequest;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {

        $data = $request->validated();
        $this->service->store($data);
        return redirect()->route('concert');
    }
}
