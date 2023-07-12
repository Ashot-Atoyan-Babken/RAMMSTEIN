<?php

namespace App\Http\Controllers\Admin\Picture;

use App\Http\Requests\Admin\Picture\UpdateRequest;
use App\Models\Pictures;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request,Pictures $pictures)
    {
        $data = $request->validated();
        $this->service->update($data, $pictures);
        return redirect()->route('picture');
    }
}
