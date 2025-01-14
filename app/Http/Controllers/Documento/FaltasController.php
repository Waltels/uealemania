<?php

namespace App\Http\Controllers\Documento;

use App\Http\Controllers\Controller;
use App\Models\Faltas;
use Illuminate\Http\Request;

class FaltasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faltas = Faltas::all();
        return view('documentos.faltas.index', compact('faltas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('documentos.faltas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([    
            'nombre'=>'required|unique:faltas,name',
            'normativa'=>'required',
        ]);

        $save = new Faltas();
        $save->name = $request->string('nombre');
        $save->normativa = $request->string('normativa');

        $save->save();

        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'La falta se registro  correctamente'
        ]);
        
        return Redirect()->route('documento.faltas.index');
    }

    /**
     * Display the specified resource.
     */
    public function edit(Faltas $falta)
    {
        return view('documentos.faltas.edit', compact('falta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Faltas $falta)
    {
        $request->validate([    
            'nombre'=>'required',
            'normativa'=>'required',
            'estado'=>'required'
        ]);

        $falta->name = $request->string('nombre');
        $falta->normativa = $request->string('normativa');
        $falta->estado = $request->string('estado');

        $falta->save();

        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'La falta se actualizo  correctamente'
        ]);
        
        return Redirect()->route('documento.faltas.index');
    }

    
}
