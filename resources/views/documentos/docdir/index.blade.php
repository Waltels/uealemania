@extends('layouts.main')
@section('section')
<div class="row">
    
    <div class="col-md-5 grid-margin stretch-card mx-auto">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">DOCUMENTOS REGISTRADOS POR DOCUMENTO</h6>
                <div class="table-responsive">
                <table id="dataTableExample" class="table">
                    <thead>
                    <tr>
                        <th>Documento</th>
                        <th>Acciones</th>

                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($docdocentes as $docdirue)
                        <tr>
                            <td>{{$docdirue->name}} </td>
                            <td>
                                <a href="{{route('documento.docdirue.show', $docdirue)}}" class="btn btn-outline btn-inverse-primary"><i data-feather="play"></i>Recividos</a> 

                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>



    <div class="col-md-7 grid-margin stretch-card mx-auto">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">DOCUMENTOS REGISTRADOS POR DOCENTE</h6>
                <div class="table-responsive">
                <table id="dataTableExample" class="table">
                    <thead>
                    <tr>
                        <th>Nombre del Docente</th>
                        <th>Acciones</th>

                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($docentes as $docdirued)
                        <tr>
                            <td>{{$docdirued->user->name}} </td>
                            <td>
                                <a href="{{route('documento.docdirued.show', $docdirued)}}" class="btn btn-outline btn-inverse-primary"><i data-feather="user"></i>Personales</a>
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