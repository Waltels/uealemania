<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Diplomado;
use App\Models\Personaldoc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DiplomadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $diplomados= Diplomado::all();
        return view('admin.diplomado.index', compact('diplomados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.diplomado.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'descripcion'=>'required',
            'emisor'=>'required',
            'ndoc'=> 'required|unique:diplomados,ndoc',
            
            
        ]);
        $name = $request->name .'_'. $request->ndoc.'.'.$request->file('file')->getClientOriginalExtension();
        $user_id=Auth::id();

        $doc_path = $request->file('file')->storeAs('public/doc', $name);
        $array = explode('public', $doc_path);
        
        $save = new Diplomado();
        $save->docente_id = $user_id;
        $save->descripcion = $request->string('descripcion');
        $save->emisor = $request->string('emisor');
        $save->ndoc = $request->string('ndoc');
        $save->doc_path = 'storage/public'.$array[1];
        $save->save();
        
        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'El certificado de Diplomado se registro  correctamente'
        ]);

        return Redirect()->route('admin.diplomados.index');
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
    public function edit(Diplomado $diplomado)
    {
        return view('admin.diplomado.edit', compact('diplomado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Diplomado $diplomado)
    {
        $request->validate([

            'file'=> 'required',      
        ]);

        $name = $request->name .'_'. $request->ndoc.'.'.$request->file('file')->getClientOriginalExtension();
        $user_id=Auth::id();

            $url = str_replace('storage/public', 'public', $request->url);
            Storage::delete($url);

            $doc_path = $request->file('file')->storeAs('public/doc', $name);
            $array = explode('public', $doc_path);

            $diplomado->docente_id = $user_id;
            $diplomado->descripcion = $request->string('descripcion');
            $diplomado->emisor = $request->string('emisor');
            $diplomado->ndoc = $request->string('ndoc');
            $diplomado->doc_path = 'storage/public'.$array[1];
            $diplomado->save();

            
            
            session()->flash('swal',[
                'icon'=>'success',
                'title'=>'Muy bien!!',
                'text'=>'El certificado de Diplomado se actualizo  correctamente'
            ]);
    
            return Redirect()->route('admin.diplomados.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
