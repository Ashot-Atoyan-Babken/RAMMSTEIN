<?php

namespace App\Http\Controllers\Admin\Tour;

class CreateController extends BaseController
{
    public function __invoke()
    {
        return view('admin.tour.create');
    }
}
