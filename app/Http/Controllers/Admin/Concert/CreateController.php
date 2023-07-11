<?php

namespace App\Http\Controllers\Admin\Concert;

use App\Models\Concert;
use App\Models\Song;
use App\Models\Tour;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $tours = Tour::all();
        return view('admin.concert.create', compact('tours'));
    }
}
