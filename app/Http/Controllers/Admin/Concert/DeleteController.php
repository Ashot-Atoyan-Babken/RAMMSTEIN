<?php

namespace App\Http\Controllers\Admin\Concert;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\Concert;
use App\Models\Song;

class DeleteController extends BaseController
{
    public function __invoke(Concert $concert)
    {
        $concert->delete();
        return redirect()->route('concert');
    }
}
