<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Pagination\Cursor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cursos= Curso::all();
        return view('admin.curso.index', compact('cursos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.curso.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'descripcion'=>'required',
            'emisor'=>'nullable',
            'file'=> 'required',
            
            
        ]);
        $name = $request->descripcion.'.'.$request->file('file')->getClientOriginalExtension();
        $user_id=Auth::id();

        $doc_path = $request->file('file')->storeAs('public/doc', $name);
        $array = explode('public', $doc_path);
        
        $save = new Curso();
        $save->docente_id = $user_id;
        $save->descripcion = $request->string('descripcion');
        $save->emisor = $request->string('emisor');
        $save->doc_path = 'storage/public'.$array[1];

        $save->save();
        
        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'El certificado del curso se registro  correctamente'
        ]);

        return Redirect()->route('admin.cursos.index');
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
    public function edit(Curso $curso)
    {
        return view('admin.curso.edit', compact('curso'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Curso $curso)
    {
        $request->validate([

            'file'=> 'required',      
        ]);

        $name = $request->descripcion.'.'.$request->file('file')->getClientOriginalExtension();
        $user_id=Auth::id();

            $url = str_replace('storage/public', 'public', $request->url);
            Storage::delete($url);

            $doc_path = $request->file('file')->storeAs('public/doc', $name);
            $array = explode('public', $doc_path);

            $curso->docente_id = $user_id;
            $curso->descripcion = $request->string('descripcion');
            $curso->emisor = $request->string('emisor');
            $curso->doc_path = 'storage/public'.$array[1];
    
            $curso->save();
            
            session()->flash('swal',[
                'icon'=>'success',
                'title'=>'Muy bien!!',
                'text'=>'El certificado del Curso se actualizo  correctamente'
            ]);
    
            return Redirect()->route('admin.cursos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
