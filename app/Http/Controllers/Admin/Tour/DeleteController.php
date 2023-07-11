<?php

namespace App\Http\Controllers\Admin\Tour;

use App\Models\Tour;

class DeleteController extends BaseController
{
    public function __invoke(Tour $tour)
    {
        $tour->delete();
        return redirect()->route('tour');

    }
}
