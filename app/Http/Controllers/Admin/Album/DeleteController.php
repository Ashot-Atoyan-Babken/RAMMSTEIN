<?php

namespace App\Http\Controllers\Admin\Album;

use App\Http\Controllers\Controller;
use App\Models\Album;

class DeleteController extends BaseController
{
    public function __invoke(Album $album)
    {
        $album->delete();
        return redirect()->route('album');

    }
}
