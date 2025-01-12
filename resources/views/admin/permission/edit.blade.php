@extends('layouts.main')
@section('section')
<div class="row">

    <div class="col-md-6 grid-margin stretch-card mx-auto">
        <div class="card">
            <div class="card-body">

                <h6 class="text-center">Se actualizara el <strong>PERMISO</strong>.</h6>
                <hr>
                <form action="{{route('admin.permissions.update', $permission)}}" method="POST" class="forms-sample">
                    @method('PUT')
                    @csrf
                    <div class="row mb-3">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Permiso</label>
                        <div class="col-sm-9">
                            <input type="text" name="name" class="form-control" value="{{$permission->name}}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Registrar</button>
                    <a href="{{route('admin.permissions.index')}}" class="btn btn-secondary">Cancel</a>
                </form>

            </div>
        </div>
    </div>
</div>
    
@endsection

