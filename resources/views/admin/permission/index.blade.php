@extends('layouts.main')
@section('section')

<div class="row">
    
    <div class="col-md-6 grid-margin stretch-card mx-auto">
        <div class="card">
            <a class="btn btn-primary" href="{{route('admin.permissions.create')}}"> NUEVO PERMISO</a>
            <div class="card-body">
                <h6 class="card-title">PERMISOS REGISTRADOS</h6>
                <div class="table-responsive">
                <table id="dataTableExample" class="table">
                    <thead>
                    <tr>
                        <th>N°</th>
                        <th>Permiso</th>
                        <th>Acciones</th>

                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($permissions as $permission)
                        <tr>
                            <td>{{$permission->id}} </td>
                            <td>{{$permission->name}} </td>
                            <td>
                                <a href="{{route('admin.permissions.edit', $permission)}}" class="btn btn-icon btn-outline btn-inverse-secondary"><i data-feather="edit"></i></a>
                                <a href="" class="btn btn-icon btn-outline btn-inverse-danger"><i data-feather="x-octagon"></i></a>
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