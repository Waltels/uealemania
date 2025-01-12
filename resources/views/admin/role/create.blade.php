@extends('layouts.main')
@section('section')
<div class="row">

                        @error('name')
                        <script>
                            const Toast = Swal.mixin({
                            toast: true,
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 4000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.onmouseenter = Swal.stopTimer;
                                toast.onmouseleave = Swal.resumeTimer;
                            }
                            });
                            Toast.fire({
                            icon: "error",
                            title: "Deve incluir un nombre al permiso"
                            });
                        </script>
                        @enderror 

    <div class="col-md-6 grid-margin stretch-card mx-auto">
        <div class="card">
            <div class="card-body">

                <h6 class="text-center">Se agregara un nuevo <strong>Rol</strong>.</h6>
                <hr>
                <form action="{{ route('admin.roles.store') }}" method="POST" class="forms-sample">
                    @csrf
                    <div class="row mb-3">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Role</label>
                        <div class="col-sm-9">
                            <input type="text" name="name" class="form-control" placeholder="Nombre del Rol">
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

