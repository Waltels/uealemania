@extends('layouts.main')
@section('section')
<div class="row">

    <div class="col-md-6 grid-margin stretch-card mx-auto">
        <div class="card">
            <div class="card-body">

                <h6 class="text-center">Se actualizara el <strong>ROL</strong> con los permisos que tendra</h6>
                <hr>
                <form action="{{route('admin.roles.update', $role)}}" method="POST" class="forms-sample">
                    @method('PUT')
                    @csrf
                    <div class="row mb-3">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Rol</label>
                        <div class="col-sm-9">
                            <input type="text" name="name" class="form-control" value="{{$role->name}}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="exampleInputEmail2" class="col-sm-3">Agregar permisos</label>
                        <div class="col-md-9">
                            @foreach ($permissions as $permission)
                                <div class="checkbox">
                                    <label for="example-checkbox1">
                                        <x-checkbox 
                                            name="permissions[]" 
                                            value="{{$permission->id}}"
                                            :checked="in_array($permission->id, $role->permissions->pluck('id')->toArray())"/>
                                            {{$permission->name}}
                                    </label>
                                </div>                            
                            @endforeach
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Registrar</button>
                    <a href="{{route('admin.roles.index')}}" class="btn btn-secondary">Cancel</a>
                </form>

            </div>
        </div>
    </div>
</div>
    
@endsection

