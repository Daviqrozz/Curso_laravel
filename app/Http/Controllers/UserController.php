<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function users() {
        $users = User::all();

        return view('users.users',[
            'users' => $users
        ]);
    }

    public function create_user(){
        return view('users.create_user');
    }

    public function store_user(Request $request){

        $input = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        User::create($input);

        return redirect()->route('users')->with('status','Usuario criado com sucesso');
    }

    public function delete_user(User $user){
        $user->delete();

        return back()->with('status','Usuario deletado com sucesso');
    }
}
