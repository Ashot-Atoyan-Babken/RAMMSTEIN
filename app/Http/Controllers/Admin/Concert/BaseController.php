<?php

namespace App\Http\Controllers\Admin\Concert;

use App\Http\Controllers\Controller;
use App\Service\Concert\ConcertService;

class BaseController extends Controller
{
    public $service;

    public function __construct(ConcertService $service)
    {
        $this->service = $service;
    }
}
