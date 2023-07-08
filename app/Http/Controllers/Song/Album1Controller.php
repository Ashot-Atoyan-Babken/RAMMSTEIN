<?php

namespace App\Http\Controllers\Song;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\Song;

class Album1Controller extends Controller
{
    public function __invoke()
    {

        $album = Album::find(2);
        $songs = Song::where("album_id", $album->id)->get();
        return view('songs.album1', compact('album', 'songs'));
    }
}
