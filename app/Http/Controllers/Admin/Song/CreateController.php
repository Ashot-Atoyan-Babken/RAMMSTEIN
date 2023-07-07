<?php

namespace App\Http\Controllers\Admin\Song;

use App\Models\Album;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $albums=Album::all();
        return view('admin.song.create',compact('albums'));
    }
}
