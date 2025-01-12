<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Documento;
use App\Models\Documentofile;
use App\Models\Personaldoc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Laravel\Sanctum\PersonalAccessToken;

use function Livewire\store;

class PersonaldocController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personaldocs= Personaldoc::all();
        return view('admin.personaldoc.index', compact('personaldocs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $documentos=Documentofile::all();
        return view('admin.personaldoc.create', compact('documentos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'documentofile_id'=>'required',
            'ndoc'=> 'required|unique:personaldocs,ndoc',
            
            
        ]);
        $name = $request->name .'_'. $request->documentofile_id.'.'.$request->file('file')->getClientOriginalExtension();
        $user_id=Auth::id();

        $doc_path = $request->file('file')->storeAs('public/doc', $name);
        $array = explode('public', $doc_path);
        
        $save = new Personaldoc();
        $save->docente_id = $user_id;
        $save->documentofile_id = $request->string('documentofile_id');
        $save->ndoc = $request->string('ndoc');
        $save->doc_path = 'storage/public'.$array[1];

        $save->save();
        
        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'El Documento se registro  correctamente'
        ]);

        return Redirect()->route('admin.personaldocs.index');
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
    public function edit(Personaldoc $personaldoc)
    {
        $documentos=Documentofile::all();
        return view('admin.personaldoc.edit', compact('personaldoc', 'documentos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Personaldoc $personaldoc)
    {
        $request->validate([

            'file'=> 'required',      
        ]);

        $name = $request->name .'_'. $request->docs.'.'.$request->file('file')->getClientOriginalExtension();
        $user_id=Auth::id();

            $url = str_replace('storage/public', 'public', $request->url);
            Storage::delete($url);

            $doc_path = $request->file('file')->storeAs('public/doc', $name);
            $array = explode('public', $doc_path);

        $personaldoc->docente_id = $user_id;
        $personaldoc->docs = $request->string('docs');
        $personaldoc->ndoc = $request->string('ndoc');
        $personaldoc->doc_path = 'storage/public'.$array[1];
        $personaldoc->save();
        
        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'El Documento se actualizo  correctamente'
        ]);

        return Redirect()->route('admin.personaldocs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
