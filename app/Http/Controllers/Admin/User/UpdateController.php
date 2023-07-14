<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Requests\Admin\User\UpdateRequest;
use App\Models\Concert;
use App\Models\User;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request,User $user)
    {
        $data = $request->validated();
        $this->service->update($data, $user);
        return redirect()->route('user');
    }
}