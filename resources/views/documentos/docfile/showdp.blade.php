@extends('layouts.main')
@section('section')
<div class="row">
    
    <div class="col-md-8 grid-margin stretch-card mx-auto">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">CURSOS REGISTRADOS</h6>
                <div class="table-responsive">
                <table id="dataTableExample" class="table">
                    <thead>
                    <tr>
                        <th>N° de documento</th>
                        <th>Maestro emisor</th>
                        <th>documento file</th>
                        <th>acciones</th>


                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($documentofileds as $documento)
                        <tr>
                            <td>{{$documento->id}} </td>
                            <td>{{$documento->docente->user->name}}</td>
                            <td>{{$documento->descripcion}}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{url($documento->doc_path)}}" target="_blank" class="btn btn-inverse-primary btn-icon btn-xs"><i class="btn-icon-prepend" data-feather="play"></i></a> 
                                    <a href="{{url($documento->doc_path)}}" download="" class="btn btn-inverse-success btn-icon btn-xs"><i class="btn-icon-prepend" data-feather="download"></i></a>
                                </div>
                            </td>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>     
@endsection