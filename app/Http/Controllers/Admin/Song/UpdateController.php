<?php

namespace App\Http\Controllers\Admin\Song;

use App\Http\Requests\Admin\Song\UpdateRequest;
use App\Models\Song;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Song $song)
    {
        $data = $request->validated();
        $this->service->update($data, $song);
        return redirect()->route('song');
    }
}
