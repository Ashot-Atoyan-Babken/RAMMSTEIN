<?php

namespace App\Http\Controllers\Admin\Song;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\Song;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $song = Song::all();
        return view('admin.song.index', compact('song'));
    }
}
