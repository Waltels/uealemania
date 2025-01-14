<?php

namespace App\Http\Controllers\Documento;

use App\Http\Controllers\Controller;
use App\Models\Docente;
use App\Models\Faltadocentes;
use App\Models\Faltas;
use App\Models\Meses;
use Illuminate\Http\Request;

class FaltadocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faltadocentes= Faltadocentes::latest()->get();
        return view('documentos.faltadocente.index', compact('faltadocentes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $docentes=Docente::all();
        $faltas=Faltas::all();
        $mess=Meses::all();
        return view('documentos.faltadocente.create', compact('docentes', 'faltas', 'mess'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            
            'fecha'=>'required',
            'descripcion'=>'required',
            'acciones'=>'required',
 

        ]);
    
        $save = new Faltadocentes();
        $save->docente_id = $request->string('docente_id');
        $save->falta_id = $request->string('falta_id');
        $save->mes_id = $request->string('mes_id');
        $save->fecha = $request->string('fecha');
        $save->descripcion = $request->string('descripcion');
        $save->acciones = $request->string('acciones');
        $save->save();
        
        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'La fata se registro  correctamente'
        ]);
        
        return Redirect()->route('documento.faltadocentes.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Faltadocentes $faltadocente)
    {
  
        return view('documentos.faltadocente.show', compact('faltadocente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Faltadocentes $faltadocente)
    {
        $docentes=Docente::all();
        $faltas=Faltas::all();
        $mess=Meses::all();
        return view('documentos.faltadocente.edit', compact('faltadocente','docentes', 'faltas', 'mess'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Faltadocentes $faltadocente)
    {
        $request->validate([
            
            'fecha'=>'required',
            'descripcion'=>'required',
            'acciones'=>'required',
 

        ]);
    
        
        $faltadocente->docente_id = $request->string('docente_id');
        $faltadocente->falta_id = $request->string('falta_id');
        $faltadocente->mes_id = $request->string('mes_id');
        $faltadocente->fecha = $request->string('fecha');
        $faltadocente->descripcion = $request->string('descripcion');
        $faltadocente->acciones = $request->string('acciones');
        $faltadocente->save();
        
        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'La fata se actualizo  correctamente'
        ]);
        
        return Redirect()->route('documento.faltadocentes.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
