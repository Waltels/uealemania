@extends('layouts.main')
@section('section')

<div class="row">
    
    <div class="col-md-8 grid-margin stretch-card mx-auto">
        <div class="card">
            <a class="btn btn-primary" href="{{route('admin.docente.create')}}"> NUEVO DOCENTE</a>
            <div class="card-body">
                <h6 class="card-title">dOCENTES REGISTRADOS</h6>
                <div class="table-responsive">
                <table id="dataTableExample" class="table">
                    <thead>
                    <tr>
                        <th>N°</th>
                        <th>Nombre</th>
                        <th>C I.</th>
                        <th>telefono</th>
                        <th>Acciones</th>

                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($docentes as $docente)
                        <tr>
                            <td>{{$docente->id}} </td>
                            <td>{{$docente->user->name}} </td>
                            <td>{{$docente->ci}}</td>
                            <td>{{$docente->telefono}}</td>
                            <td>
                                <a href="" class="btn btn-icon btn-outline btn-inverse-secondary"><i data-feather="edit"></i></a>
                                <a href="" class="btn btn-icon btn-outline btn-inverse-danger"><i data-feather="x-octagon"></i></a>
                                <a href="" class="btn btn-inverse-success">Detalles</a>
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