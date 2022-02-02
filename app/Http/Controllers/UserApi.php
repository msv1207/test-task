<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserApi extends Controller
{
    public function getUsers(Request $request)
    {
        $perPage =$request->per_page ?: 20;
        $users = User::paginate($perPage);
        return $users;

    }
}
