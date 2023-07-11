<?php

namespace App\Http\Controllers\Admin\Tour;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\Tour;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $tour = Tour::all();
        return view('admin.tour.index', compact('tour'));
    }
}
