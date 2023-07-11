<?php

namespace App\Http\Controllers\Admin\Concert;

use App\Models\Concert;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $concert = Concert::paginate(10);
        return view('admin.concert.index', compact('concert'));
    }
}
