<?php

namespace App\Http\Controllers\Admin\Album;

class CreateController extends BaseController
{
    public function __invoke()
    {
        return view('admin.album.create');
    }
}
