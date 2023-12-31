<?php

namespace App\Http\Controllers\Admin\Concert;

use App\Http\Controllers\Controller;
use App\Service\Concert\UserService;

class BaseController extends Controller
{
    public $service;

    public function __construct(UserService $service)
    {
        $this->service = $service;
    }
}
