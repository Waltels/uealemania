@extends('layouts.main')
@section('section')

<div class="row">
    
    <div class="col-md-5 grid-margin stretch-card mx-auto">
        <div class="card">
            <a class="btn btn-primary" href="{{route('admin.roles.create')}}"> NUEVO ROL</a>
            <div class="card-body">
                <h6 class="card-title">ROLES REGISTRADOS</h6>
                <div class="table-responsive">
                <table id="dataTableExample" class="table w-full">
                    <thead>
                    <tr>
                        <th>N°</th>
                        <th>Roles del usuario</th>
                        <th class="text-center">Acciones</th>

                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $role)
                        <tr >
                            <td>{{$role->id}} </td>
                            <td>{{$role->name}} </td>
                            <td class="text-center">
                                <a href="{{route('admin.roles.edit', $role)}}" class="btn btn-icon-text btn-facebook"><i class="btn-icon-prepend" data-feather="settings"></i>Permisos</a>
                                <a href="" class="btn btn-outline btn-inverse-danger"><i data-feather="x-square"></i></a>
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