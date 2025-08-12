<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserProfile;
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
    
    public function edit_user(User $user){
        $user->load(['profile','interests']);

        return view('users.edit',[
            'user' => $user
        ]);
    }

    public function update_user(User $user, Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'nullable|min:6'
        ]);

        if (empty($validated['password'])) {
            unset($validated['password']);
        } else {
            $validated['password'] = bcrypt($validated['password']);
        }

        $user->fill($validated)->save();

        return back()->with('status', 'Usuário editado com sucesso');
    }

    public function update_profile(User $user, Request $request) {

      $validated = $request->validate([
         'type' => 'required',
         'address' => 'required',
     ]);

        $user->profile()->updateOrCreate(
        ['user_id' => $user->id],
        $validated
        );

        return back()->with('status', 'Perfil editado com sucesso');
    }

    public function update_interests(User $user,Request $request){

        $validated = $request->validate([
            'interests' => 'nullable|array'
        ]);

        $user->interests()->delete();

        if (!empty($validated['interests'])) {
            $user->interests()->createMany($validated['interests']);
        }

        

        return back()->with('status','Interesses editado com sucesso');

    }


    public function delete_user(User $user){
        $user->delete();

        return back()->with('status','Usuario deletado com sucesso');
    }
}
