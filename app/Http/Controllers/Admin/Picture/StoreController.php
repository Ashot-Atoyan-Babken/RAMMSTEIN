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
        $data['photos'] = Storage::disk('public')->put('/pictures', $data['photos']);
        Pictures::firstOrCreate($data);
        dd($data);
        $this->service->store($data);
        return redirect()->route('picture');
    }
}
