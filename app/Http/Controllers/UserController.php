<?php

namespace App\Http\Controllers;

use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function edit()
    {
        $user = auth()->user();
        return view('profile.edit', get_defined_vars());
    }



    public function update(Request $request, UserRepositoryInterface $repository)
    {
        $user_id = auth()->id();
        $repository->updateData($user_id, $request->all());
    }
}
