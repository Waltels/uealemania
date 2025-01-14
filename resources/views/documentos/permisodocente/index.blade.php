@extends('layouts.main')
@section('section')
    <div class=" card col-md-5 mx-auto mb-2">
    <a class="btn btn-primary px-2" href="{{route('documento.permisodocentes.create')}}">Registrar solicitud de permiso</a>
    </div>

    <div class="row">
        <div class="col-md-9 grid-margin stretch-card mx-auto">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title text-center">historial de registros de permisos a la dirección de la Unidad Educativa Alemania</h6>
                    <p class="mb-5 text-gray-400 text-center"> en esta seccion se encuentra todos los permisos recividos por los docentes</p>
                    <div class="table-responsive">
                    <table id="dataTableExample" class="table">
                        <thead>
                        <tr>
                            <th>Docente</th>
                            <th>MOtivo del permiso</th>
                            <th>Dias de permiso</th>
                            <th>Fecha de alta</th>
                            <th>Acción</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($permisos as $permiso)
                        <tr>
                            <td>{{$permiso->docente->user->name}}</td>
                            <td>{{$permiso->permiso->name}}</td>
                            <td>{{$permiso->dias}}</td>
                            <td>{{$permiso->created_at}}</td>

                            <td>
                                <a href="{{route('documento.permisodocentes.show', $permiso)}}" class="btn btn-sm btn-primary" ><i data-feather="eye"></i></a>
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