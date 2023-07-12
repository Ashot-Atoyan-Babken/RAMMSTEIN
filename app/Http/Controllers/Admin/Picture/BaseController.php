<?php

namespace App\Http\Controllers\Admin\Picture;

use App\Http\Controllers\Controller;
use App\Service\Pictures\PictureService;

class BaseController extends Controller
{
    public $service;

    public function __construct(PictureService $service)
    {
        $this->service = $service;
    }
}
