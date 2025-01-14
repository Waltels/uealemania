@extends('layouts.main')
@section('section')

<div class=" card col-md-5 mx-auto mb-2">
    <a class="btn btn-primary px-2" href="{{route('documento.faltadocentes.create')}}">REGISTRAR NUEVA FALTA</a>
    </div>

    <div class="row">
        <div class="col-md-9 grid-margin stretch-card mx-auto">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title text-center">historial de registros de faltas de Docentes de la Unidad Educativa Alemania</h6>
                    <p class="mb-5 text-gray-400 text-center"> en esta seccion se encuentra todos las faltas cometidas por los Docentes</p>
                    <div class="table-responsive">
                    <table id="dataTableExample" class="table">
                        <thead>
                        <tr>
                            <th>Docente</th>
                            <th>MOtivo de la falta</th>
                            <th>Fecha de la falta</th>
                            <th>Fecha de registro</th>
                            <th>Acción</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($faltadocentes as $faltadocente)
                        <tr>
                            <td>{{$faltadocente->docente->user->name}}</td>
                            <td>{{$faltadocente->falta->name}}</td>
                            <td>{{$faltadocente->fecha}}</td>
                            <td>{{$faltadocente->created_at}}</td>

                           <td width='10px'>
                                <a href="{{route('documento.faltadocentes.show', $faltadocente)}}" class="btn btn-sm btn-primary" ><i data-feather="eye"></i></a>
                            </td>
                            <td width='10px'>
                                <a href="{{route('documento.faltadocentes.edit', $faltadocente)}}" class="btn btn-success"><i data-feather="edit"></i></a>
                            </td> 
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