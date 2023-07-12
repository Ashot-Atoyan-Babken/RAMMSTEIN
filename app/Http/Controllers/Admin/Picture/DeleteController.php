<?php

namespace App\Http\Controllers\Admin\Picture;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\Concert;
use App\Models\Pictures;
use App\Models\Song;

class DeleteController extends BaseController
{
    public function __invoke(Pictures $pictures)
    {
        $pictures->delete();
        return redirect()->route('picture');
    }
}
