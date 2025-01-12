<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Docente;
use App\Models\User;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $docentes= Docente::all();
        return view('admin.docente.index', compact('docentes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        return view('admin.docente.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([    
            'user_id'=>'required|unique:docentes,user_id',
            'ci'=>'required',
            'telefono'=>'required',
            'direccion'=>'required',
        ]);

        $save = new Docente();
        $save->user_id = $request->string('user_id');
        $save->ci = $request->string('ci');
        $save->telefono = $request->string('telefono');
        $save->direccion = $request->string('direccion');

        $save->save();

        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'El Docente se registro  correctamente'
        ]);
        
        return Redirect()->route('admin.docente.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Docente $docente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Docente $docente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Docente $docente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
