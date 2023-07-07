<?php

namespace App\Http\Controllers\Admin\Album;

use App\Http\Controllers\Controller;
use App\Models\Album;

class IndexController extends BaseController
{
    public function __invoke()
    {
$album=Album::all();
        return view('admin.album.index',compact('album'));

    }
}
