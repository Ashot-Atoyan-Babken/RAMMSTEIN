<?php

namespace App\Http\Controllers\Admin\Picture;

use App\Models\Pictures;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $pictures = Pictures::paginate(10);
        return view('admin.pictures.index', compact('pictures'));
    }
}
