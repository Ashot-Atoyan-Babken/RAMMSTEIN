<?php

namespace App\Http\Controllers\Admin\Picture;

use App\Models\Concert;
use App\Models\Pictures;

class EditController extends BaseController
{
    public function __invoke(Pictures $pictures)
    {
        $concerts = Concert::all();
        return view('admin.pictures.edit', compact('concerts', 'pictures'));
    }
}
