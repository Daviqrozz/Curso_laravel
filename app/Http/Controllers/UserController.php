<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function users() {
        $users = User::all();

        return view('users.users',[
            'users' => $users
        ]);
    }

    public function create_users(){
        return view('users.create_users');
    }
}
