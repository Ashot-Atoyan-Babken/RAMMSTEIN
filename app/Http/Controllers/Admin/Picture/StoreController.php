<?php

namespace App\Http\Controllers\Admin\Picture;


use App\Http\Requests\Admin\Picture\StoreRequest;
use App\Models\Pictures;
use Illuminate\Support\Facades\Storage;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {

        $data = $request->validated();
        $this->service->store($data);
        return redirect()->route('picture');
    }
}
