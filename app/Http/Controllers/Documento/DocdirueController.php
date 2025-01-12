<?php

namespace App\Http\Controllers\Documento;

use App\Http\Controllers\Controller;
use App\Models\Diplomado;
use App\Models\Docdireccion;
use App\Models\Docdocente;
use App\Models\Docente;
use Illuminate\Http\Request;

class DocdirueController extends Controller
{
    public function index()
    {
        $docdocentes = Docdocente::all();
        $docentes = Docente::all();
        return view('documentos.docdir.index', compact('docdocentes', 'docentes'));
    }

    public function show(Docdireccion $docdireccion, $docdirue)
    {
        $docdir = $docdirue;

        $documentos = Docdireccion::where('docdocente_id', $docdir)->get();
        return view('documentos.docdir.show', compact('documentos'));
    }

    public function showd(Docdireccion $docdireccion, $docdirued)
    {
        $docdir = $docdirued;

        $documentos = Docdireccion::where('docente_id', $docdir)->get();
        return view('documentos.docdir.showd', compact('documentos'));
    }

    public function diplomado(Diplomado $diplomado, $docdirued)
    {
        $docdir = $docdirued;

        $documentos = Diplomado::where('docente_id', $docdir)->get();
        return view('documentos.docdir.showdd', compact('documentos'));
    }

    // public function showdp(Docdireccion $docdireccion, $docdirued)
    // {
    //     $docdir = $docdirued;

    //     $documentos = Docdireccion::where('docente_id', $docdir)->get();
    //     return view('documentos.docdir.showd', compact('documentos'));
    // }

} 
