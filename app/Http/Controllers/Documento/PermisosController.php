<?php

namespace App\Http\Controllers\Documento;

use App\Http\Controllers\Controller;
use App\Models\Permisos;
use Illuminate\Http\Request;

class PermisosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permisos = Permisos::all();
        return view('documentos.permisos.index', compact('permisos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('documentos.permisos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([    
            'nombre'=>'required|unique:permisos,name',
            'normativa'=>'required',
        ]);

        $save = new Permisos();
        $save->name = $request->string('nombre');
        $save->normativa = $request->string('normativa');

        $save->save();

        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'El permiso se registro  correctamente'
        ]);
        
        return Redirect()->route('documento.permisos.index');
    }

    /**
     * Display the specified resource.
     */
    public function edit(Permisos $permiso)
    {
        return view('documentos.permisos.edit', compact('permiso'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Permisos $permiso)
    {
        $request->validate([    
            'nombre'=>'required',
            'normativa'=>'required',
            'estado'=>'required'
        ]);

        $permiso->name = $request->string('nombre');
        $permiso->normativa = $request->string('normativa');
        $permiso->estado = $request->string('estado');

        $permiso->save();

        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'El permiso se actualizo  correctamente'
        ]);
        
        return Redirect()->route('documento.permisos.index');
    }
}
