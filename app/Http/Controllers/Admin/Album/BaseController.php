<?php

namespace App\Http\Controllers\Admin\Album;

use App\Http\Controllers\Controller;
use App\Service\Album\AlbumService;

class BaseController extends Controller
{
    public $service;

    public function __construct(AlbumService $service)
    {
        $this->service = $service;
    }
}
