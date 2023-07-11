<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function __invoke()
    {
        $tours=Tour::all();
        return view('main.tour',compact('tours'));
    }
}
