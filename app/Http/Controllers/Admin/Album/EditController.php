<?php

namespace App\Http\Controllers\Admin\Album;

use App\Http\Controllers\Controller;
use App\Models\Album;

class EditController extends BaseController
{
    public function __invoke(Album $album)
    {
        return view('admin.album.edit', compact('album'));
    }
}
