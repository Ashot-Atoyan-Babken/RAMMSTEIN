<?php

namespace App\Http\Controllers\Admin\Song;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\Song;

class EditController extends BaseController
{
    public function __invoke(Song $song)
    {
        $albums=Album::all();
        return view('admin.song.edit', compact('song','albums'));
    }
}
