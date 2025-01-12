@extends('layouts.main')
@section('section')
<div class="row">
    
    <div class="col-md-10 grid-margin stretch-card mx-auto">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">DOCUMENTOS REGISTRADOS bbbb</h6>
                <div class="table-responsive">
                <table id="dataTableExample" class="table">
                    <thead>
                    <tr>
                        <th>N° de documento</th>
                        <th>Maestro emisor</th>
                        <th>documento</th>
                        <th>Fecha de recepción</th>
                        <th class="text-center">Acciones</th>

                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($documentos as $documento)
                        <tr>
                            <td>{{$documento->id}} </td>
                            <td>{{$documento->docente->user->name}} </td>
                            <td>{{$documento->docdocente->name}} </td>
                            <td>{{$documento->created_at}} </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="{{url($documento->doc_path)}}" target="_blank" class="btn btn-primary btn-icon-text"><i class="btn-icon-prepend" data-feather="play"></i></a>
                                    <a href="{{url($documento->doc_path)}}" download="" class="btn btn-success btn-icon-text"><i class="btn-icon-prepend" data-feather="download"></i></a>
                                   
                                </div>
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