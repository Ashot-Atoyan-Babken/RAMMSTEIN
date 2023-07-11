<?php

namespace App\Http\Controllers\Admin\Concert;

use App\Models\Concert;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $concerts=Concert::all();
        return view('admin.concert.create',compact('concerts'));
    }
}
