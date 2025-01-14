<?php

namespace App\Http\Controllers\Documento;

use App\Http\Controllers\Controller;
use App\Models\Docente;
use App\Models\Meses;
use App\Models\Permisodocentes;
use App\Models\Permisos;
use Illuminate\Http\Request;

class PermisodocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permisos=Permisodocentes::latest()->get();
        return view('documentos.permisodocente.index', compact('permisos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $docentes=Docente::all();
        $permisos=Permisos::all();
        $meses=Meses::all();
        return view('documentos.permisodocente.create', compact('docentes', 'permisos', 'meses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            
            'motivo'=>'required',
            'dias'=>'required',
            'mes'=>'required',
            'dia1'=>'required',
            'dia2'=>'nullable',
            'dia3'=>'nullable',
            'fecha'=>'required',
            'descripcion'=>'required',
            'path'=>'nullable',

        ]);

        $path = $request->file('file')->store('public/doc');
        $array = explode('public', $path);
        

        $save = new Permisodocentes();
        $save->docente_id = $request->string('docente_id');
        $save->permiso_id = $request->string('motivo');
        $save->mes_id = $request->string('mes');
        $save->dias = $request->string('dias');
        $save->dia1 = $request->string('dia1');
        $save->dia2 = $request->string('dia2');
        $save->dia3 = $request->string('dia3');
        $save->fecha= $request->string('fecha');
        $save->descripcion = $request->string('descripcion');
        $save->path = 'storage/public'.$array[1];

        $save->save();
        
        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'El permiso se registro  correctamente'
        ]);
        
        return Redirect()->route('documento.permisodocentes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Permisodocentes $permisodocente)
    {
        return view('documentos.permisodocente.show', compact('permisodocente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
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
