<?php

namespace App\Http\Controllers\Photos;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\Concert;
use App\Models\Pictures;
use App\Models\Song;
use App\Models\Tour;

class PhotosController extends Controller
{
    public function __invoke()
    {
        $id = request()->get('id');
        $concerts = Concert::find($id);
        $photos = Pictures::where('concert_id', $concerts->id)->get();
        return view('pictures.pictures', compact('concerts', 'photos'));
    }
}
