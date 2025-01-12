@extends('layouts.main')
@section('section')
<div class="row">
    
    <div class="col-md-6 grid-margin stretch-card mx-auto">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">DOCUMENTOS REGISTRADOS</h6>
                <div class="table-responsive">
                <table id="dataTableExample" class="table">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Documento</th>
                        <th class="text-center">Acciones</th>

                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($docfiles as $docfileue)
                            <td>{{$docfileue->id}} </td>
                            <td>{{$docfileue->name}} </td>
                            <td>
                                <a href="{{route('documento.docfileues.show', $docfileue)}}" class="btn btn-outline btn-inverse-primary"><i data-feather="play"></i>Recividos</a> 

                            </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>


<div class="col-md-6 grid-margin stretch-card mx-auto">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">DOCUMENTOS REGISTRADOS POR DOCENTE</h6>
                <div class="table-responsive">
                <table id="dataTableExample" class="table">
                    <thead>
                    <tr>
                        <th>Nombre del Docente</th>
                        <th class="text-center">Acciones</th>

                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($docentes as $docfiled)
                        <tr>
                            <td>{{$docfiled->user->name}} </td>
                            <td class="text-center">
                                <a href="{{route('documento.docfileues.showd', $docfiled)}}" class="btn btn-outline btn-inverse-primary"><i data-feather="play"></i>Personales</a> 
                                <a href="{{route('documento.docfileued.diplomado', $docfiled)}}" class="btn btn-outline btn-inverse-success"><i data-feather="file-text"></i>Diplomados</a>
                                <a href="{{route('documento.docfileued.curso', $docfiled)}}" class="btn btn-outline btn-inverse-secondary"><i data-feather="file"></i>Cursos</a>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>     
@endsection