<?php

namespace App\Http\Controllers\Documento;

use App\Http\Controllers\Controller;
use App\Models\Meses;
use Illuminate\Http\Request;

class MesesController extends Controller
{
    public function index(){
        $mess=Meses::all();
        return view('documentos.meses', compact('mess'));
    }

    public function update(Request $request, Meses $mese)
    {
        $request->validate([    
            'nombre'=>'required',
            'estado'=>'required'
        ]);

        $mese->name = $request->string('nombre');
        $mese->estado = $request->string('estado');

        $mese->save();

        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'El mes se actualizo  correctamente'
        ]);
        
        return Redirect()->route('documento.meses.index');
    }

}