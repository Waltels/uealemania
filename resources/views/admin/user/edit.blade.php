@extends('layouts.main')
@section('section')
<div class="row">

    <div class="col-md-6 grid-margin stretch-card mx-auto">
        <div class="card">
            <div class="card-body">

                <h6 class="text-center">Se ingresara los <strong>ROLES</strong> al Usuario</h6>
                <hr>
                <form action="{{route('admin.users.update', $user)}}" method="POST" class="forms-sample">
                    @method('PUT')
                    @csrf
                    <div class="row mb-3">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Usuario</label>
                        <div class="col-sm-9">
                            <input type="text" name="name" class="form-control" value="{{$user->name}}" >
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="text" name="email" class="form-control" value="{{$user->email}}" >
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Contraseña</label>
                        <div class="col-sm-9">
                            <input type="password" name="password" class="form-control" placeholder="Contraseña">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Conf Contraseña</label>
                        <div class="col-sm-9">
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmar Contraseña">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="exampleInputEmail2" class="col-sm-3">Agregar Roles</label>
                        <div class="col-md-9">
                            @foreach ($roles as $role)
                            <div class="checkbox">
                                <label for="example-checkbox1">
                                    <x-checkbox 
                                        name="roles[]" 
                                        value="{{$role->id}}"
                                        :checked="in_array($role->id, old('roles', $user->roles->pluck('id')->toArray()))"/>
                                        {{$role->name}}
                                </label>
                            </div>                            
                        @endforeach
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Registrar Roles</button>
                    <a href="{{route('admin.users.index')}}" class="btn btn-secondary">Ir  a lista de Usuarios</a>
                </form>

            </div>
        </div>
    </div>
</div>
    
@endsection

