<?php

namespace App\Http\Controllers\Admin\Song;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\Song;

class DeleteController extends BaseController
{
    public function __invoke(Song $song)
    {
        $song->delete();
        return redirect()->route('song');

    }
}
