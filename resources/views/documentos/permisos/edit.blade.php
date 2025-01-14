@extends('layouts.main')
@section('section')
<div class="row">
                        @error('nombre')
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
                            title: "Ingrese el nombre del permiso o este permiso ya se encuantra registrado"
                            });
                        </script>
                        @enderror

                        @error('normativa')
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
                            title: "Ingrese una normativa que sustente el permiso"
                            });
                        </script>
                        @enderror
                        
    <div class="col-md-6 grid-margin stretch-card mx-auto">
        <div class="card">
            <div class="card-body">

                <h6 class="card-title text-center">ACTUALIZAR FALTAS</h6>
                <hr>
                <form action="{{ route('documento.permisos.update', $permiso) }}" method="POST" class="forms-sample">
                   @method('PUT')
                    @csrf
                    <div class="row mb-3">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Nombre</label>
                        <div class="col-sm-9">
                            <input type="text" name="nombre" class="form-control" value="{{$permiso->name}}">
                            <input type="text" name="estado" class="form-control" id="exampleInputUsername2" value="{{$permiso->estado}}" hidden>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Normativa</label>
                        <div class="col-sm-9">
                            <input type="text" name="normativa" class="form-control"  value="{{$permiso->normativa}}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Actualizar</button>
                    <a href="{{ route('documento.permisos.index')}}" class="btn btn-secondary">Cancelar</a>
                </form>

            </div>
        </div>
    </div>
</div>
    
@endsection