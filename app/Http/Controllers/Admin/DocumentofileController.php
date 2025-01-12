<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Documentofile;
use Illuminate\Http\Request;

class DocumentofileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $documentofiles = Documentofile::all();
        return view('admin.docfile.index', compact('documentofiles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.docfile.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([    
            'nombre'=>'required|unique:documentofiles,name',
        ]);

        $save = new Documentofile();
        $save->name = $request->string('nombre');

        $save->save();

        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'El Documento se registro  correctamente'
        ]);
        
        return Redirect()->route('admin.documentofiles.index');
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
    public function edit(Documentofile $documentofile)
    {
        return view('admin.docfile.edit', compact('documentofile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Documentofile $documentofile)
    {
        $request->validate([    
            'nombre'=>'required',
            'estado'=>'required'
        ]);

        $documentofile->name = $request->string('nombre');
        $documentofile->estado = $request->string('estado');

        $documentofile->save();

        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'El Documento se actualizo  correctamente'
        ]);
        
        return Redirect()->route('admin.documentofiles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
