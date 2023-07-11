<?php

namespace App\Http\Controllers\Admin\Tour;

use App\Http\Controllers\Controller;
use App\Service\Tour\TourService;

class BaseController extends Controller
{
    public $service;

    public function __construct(TourService $service)
    {
        $this->service = $service;
    }
}
