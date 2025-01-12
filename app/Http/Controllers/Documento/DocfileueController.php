<?php

namespace App\Http\Controllers\Documento;

use App\Http\Controllers\Controller;
use App\Models\Curso;
use App\Models\Diplomado;
use App\Models\Docente;
use App\Models\Documentofile;
use App\Models\Personaldoc;
use Illuminate\Http\Request;

class DocfileueController extends Controller
{
    public function index()
    {
        $docfiles = Documentofile::all();
        $docentes = Docente::all();
        return view('documentos.docfile.index', compact('docfiles', 'docentes'));
    }

    public function show(Personaldoc $personaldoc, $docfileue)
    {

        $docfile = $docfileue;
        $documentofiles = Personaldoc::where('documentofile_id', $docfile)->get();
        return view('documentos.docfile.show', compact('documentofiles'));
    }

    public function showd(Personaldoc $personaldoc, $docfileued)
    {

        $docfile = $docfileued;
        $documentofileds = Personaldoc::where('docente_id', $docfile)->get();

        return view('documentos.docfile.showd', compact('documentofileds'));
    }

    public function diplomado(Diplomado $diplomado, $docfileued)
    {
        $docdir = $docfileued;

        $documentofileds = Diplomado::where('docente_id', $docdir)->get();
        return view('documentos.docfile.showdd', compact('documentofileds'));
    }

    public function curso(Curso $curso, $docfileued)
    {
        $docdir = $docfileued;

        $documentofileds = Curso::where('docente_id', $docdir)->get();
        return view('documentos.docfile.showdp', compact('documentofileds'));
    }

}

