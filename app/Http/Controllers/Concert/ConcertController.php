<?php

namespace App\Http\Controllers\Concert;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\Concert;
use App\Models\Song;
use App\Models\Tour;

class ConcertController extends Controller
{
    public function __invoke()
    {
        $id = request()->get('id');
        $tours = Tour::find($id);
        $concerts = Concert::where('tour_id', $tours->id)->get()->toArray();
        return view('concerts.concert', compact('concerts', 'tours'));
    }
}
