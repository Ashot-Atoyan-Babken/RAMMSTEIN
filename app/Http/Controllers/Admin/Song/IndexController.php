<?php

namespace App\Http\Controllers\Admin\Song;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\Song;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $song = Song::paginate(10);
        return view('admin.song.index', compact('song'));
    }
}
