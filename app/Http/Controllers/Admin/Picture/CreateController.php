<?php

namespace App\Http\Controllers\Admin\Picture;

use App\Models\Concert;
use App\Models\Song;
use App\Models\Tour;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $concerts = Concert::all();
        return view('admin.pictures.create', compact('concerts'));
    }
}
