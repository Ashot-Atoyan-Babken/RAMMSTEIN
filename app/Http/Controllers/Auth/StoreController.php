<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Login\StoreRequest;
use App\Models\Admin;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Admin::firstOrCreate($data);
        dd('ok');
    }
}
