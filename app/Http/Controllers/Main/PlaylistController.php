<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Album;

class PlaylistController extends Controller
{
    public function __invoke()
    {
        $albums = Album::all();

        return view('main.playlist', compact('albums'));
    }
}
