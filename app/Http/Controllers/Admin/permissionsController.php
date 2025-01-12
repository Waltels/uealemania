<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class permissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permissions = Permission::all();
        return view('admin.permission.index', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.permission.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            
            'name'=>['required', 'unique:permissions,name']
        ]);
    

        $save = new Permission();
        $save->name = $request->string('name');

        $save->save();
        
        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'El Permiso se registro correctamente'
        ]);
        
        return Redirect()->route('admin.permissions.index');
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
    public function edit(Permission $permission)
    {
        return view('admin.permission.edit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Permission $permission)
    {
        $request->validate([
            'name'=> ['required', 'unique:permissions,name,'. $permission->id],
        ]);
        $permission->update($request->all());


        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'Se actualizo el permiso correctamente'
        ]);

        return redirect()->route('admin.permissions.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
