<?php

namespace App\Http\Controllers\Admin\Concert;

use App\Http\Requests\Admin\Concert\UpdateRequest;
use App\Models\Concert;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request,Concert $concert)
    {
        $data = $request->validated();
        $this->service->update($data, $concert);
        return redirect()->route('concert');
    }
}
