<?php

namespace App\Http\Controllers\Admin\Song;

use App\Http\Requests\Admin\Song\StoreRequest;
use App\Models\Album;
use App\Models\Song;
use Illuminate\Support\Facades\Storage;


class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {

        $data = $request->validated();
        $data['song_name'] = Storage::disk('public')->put('/songs', $data['song_name']);
        Song::firstOrCreate($data);
        dd($data);
        $this->service->store($data);
        return redirect()->route('song');
    }
}
