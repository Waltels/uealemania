<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::paginate();
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $roles = Role::all();
        return view('admin.user.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name'=>'required|string|max:250',
            'email'=>"required|string|email|max:2025|unique:users,email,{$user->id})",
            'password'=> 'nullable|string|min:8|confirmed'
        ]);
        

        $user->name = $request->name;
        $user->email = $request->email;

        if ($user->password) {
            $user->password = bcrypt($request->password);
        }
        $user->save();

        $user->roles()-> sync($request->roles);
        
        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'Se asigno Roles al usuario correctamente'
        ]);
        return redirect()->route('admin.users.edit', $user);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        
    }
}
