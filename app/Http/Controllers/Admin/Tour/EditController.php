<?php

namespace App\Http\Controllers\Admin\Tour;

use App\Models\Tour;

class EditController extends BaseController
{
    public function __invoke(Tour $tour)
    {
        return view('admin.tour.edit', compact('tour'));
    }
}
