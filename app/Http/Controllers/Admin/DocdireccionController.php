<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Docdireccion;
use App\Models\Docdocente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Return_;

class DocdireccionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $docdireccions= Docdireccion::all();
        return view('admin.docdir.index', compact('docdireccions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $docdocentes = Docdocente::all();
        return view('admin.docdir.create', compact('docdocentes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
    
            'file'=>'required'
            
            
        ]);
        $name = $request->name .'_'.$request->docdocente_id.'.'.$request->file('file')->getClientOriginalExtension();
        $user_id=Auth::id();

        $doc_path = $request->file('file')->storeAs('public/doc', $name);
        $array = explode('public', $doc_path);
        
        $save = new Docdireccion();
        $save->docente_id = $user_id;
        $save->docdocente_id = $request->string('docdocente_id');
        $save->doc_path = 'storage/public'.$array[1];

        $save->save();
        
        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'El Documento se registro  correctamente'
        ]);

        return Redirect()->route('admin.docdireccions.index');
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
    public function edit(Docdireccion $docdireccion)
    {
        $docdocentes = Docdocente::all();
        return view('admin.docdir.edit', compact('docdireccion', 'docdocentes'));
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
