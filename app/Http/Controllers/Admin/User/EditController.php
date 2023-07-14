<?php

namespace App\Http\Controllers\Admin\User;

use App\Models\Concert;
use App\Models\Tour;
use App\Models\User;

class EditController extends BaseController
{
    public function __invoke(User $user)
    {
        $roles = User::getRoles();
        return view('admin.user.edit', compact('user', 'roles'));
    }
}
