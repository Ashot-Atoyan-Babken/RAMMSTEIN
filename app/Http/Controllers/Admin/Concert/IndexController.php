<?php

namespace App\Http\Controllers\Admin\Concert;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\Concert;
use App\Models\Song;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $concert = Concert::paginate(10);
        return view('admin.concert.index', compact('concert'));
    }
}
