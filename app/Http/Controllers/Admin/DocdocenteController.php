<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Docdocente;
use Illuminate\Http\Request;

class DocdocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $docdocentes = Docdocente::all();
        return view('admin.docdocente.index', compact('docdocentes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.docdocente.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([    
            'nombre'=>'required|unique:docdocentes,name',
        ]);

        $save = new Docdocente();
        $save->name = $request->string('nombre');

        $save->save();

        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'El Documento se registro  correctamente'
        ]);
        
        return Redirect()->route('admin.docdocentes.index');
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
    public function edit(Docdocente $docdocente)
    {
        return view('admin.docdocente.edit', compact('docdocente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Docdocente $docdocente)
    {

        $request->validate([    
            'nombre'=>'required',
            'estado'=>'required'
        ]);

        $docdocente->name = $request->string('nombre');
        $docdocente->estado = $request->string('estado');

        $docdocente->save();

        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'El Documento se actualizo  correctamente'
        ]);
        
        return Redirect()->route('admin.docdocentes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
