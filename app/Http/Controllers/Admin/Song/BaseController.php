<?php

namespace App\Http\Controllers\Admin\Song;

use App\Http\Controllers\Controller;
use App\Service\Album\AlbumService;
use App\Service\Song\SongService;

class BaseController extends Controller
{
    public $service;

    public function __construct(SongService $service)
    {
        $this->service = $service;
    }
}
