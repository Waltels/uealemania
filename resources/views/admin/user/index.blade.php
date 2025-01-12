@extends('layouts.main')
@section('section')

<div class="row">
    
    <div class="col-md-8 grid-margin stretch-card mx-auto">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">USUARIO REGISTRADOS</h6>
                <div class="table-responsive">
                <table id="dataTableExample" class="table w-full">
                    <thead>
                    <tr>
                        <th >N°</th>
                        <th >Nombre</th>
                        <th >Email</th>
                        <th class="text-center">Acciones</th>

                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr >
                            <td>{{$user->id}} </td>
                            <td>{{$user->name}} </td>
                            <td>{{$user->email}} </td>
                            <td class="text-center">
                                <a href="{{route('admin.users.edit', $user)}}" class="btn btn-icon-text btn-facebook"><i class="btn-icon-prepend" data-feather="settings"></i>Roles</a>
                                <a href="javascript:void(0)"  class="btn btn-outline btn-inverse-danger" title="Eliminar"><i data-feather="x-square"></i></a>
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