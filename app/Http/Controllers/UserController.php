<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Auth\Access\Gate;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function users(Request $request) {
        $users = User::query();

        $users->when($request->keyword,function($query,$keyword){
            $query->where(function($q) use ($keyword){
                $q->where('name','like',"%" .$keyword .'%')
                ->orWhere('email','like',"%" .$keyword .'%');
            });
        });

        $users = $users->paginate();

        return view('users.users',[
            'users' => $users
        ]);
    }

    public function create_user(){
        return view('users.create_user');
    }

    public function store_user(Request $request){
        
    //Uso do db:transaction para criar usuario e preencher os campos de perfil como null, para habilitar a edição    
    DB::transaction(function () use ($request) {
        // 1. Cria o usuário
        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // 2. Cria o perfil
        $user->profile()->create([
            'address' => $request->address,
            'type'    => $request->type,
        ]);
        //3.Cria os interesses
        $user->interests()->create([
            'interests' => $request->name
        ]);
    });

        return redirect()->route('users')->with('status','Usuario criado com sucesso');
    }
    
    public function edit_user(User $user){
        
        Gate::authorize('edit',User::class);
        
        $user->load(['profile','interests']);
        $roles = Role::all();
        return view('users.edit',[
            'user' => $user,
            'roles' => $roles
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
         'type' => 'nullable',
         'address' => 'nullable',
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

    public function update_roles(User $user,Request $request){

         $validated = $request->validate([
            'roles' => 'required|array'
        ]);

        $user->roles()->sync($validated['roles']);
        return back()->with('status','Cargos editado com sucesso');
    }

    public function delete_user(User $user){
        $user->delete();

        return back()->with('status','Usuario deletado com sucesso');
    }
}
