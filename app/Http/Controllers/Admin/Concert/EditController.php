<?php

namespace App\Http\Controllers\Admin\Concert;

use App\Models\Concert;
use App\Models\Tour;

class EditController extends BaseController
{
    public function __invoke(Concert $concert)
    {
        $tours=Tour::all();
        return view('admin.concert.edit', compact('concert','tours'));
    }
}
