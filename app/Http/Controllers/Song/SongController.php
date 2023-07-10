<?php

namespace App\Http\Controllers\Song;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\Song;

class SongController extends Controller
{
    public function __invoke()
    {
        $id=request()->get('id');
        $albums=Album::find($id);
        $songs=Song::where('album_id',$albums->id)->get()->toArray();
        return view('songs.song',compact('songs','albums'));
    }
}
