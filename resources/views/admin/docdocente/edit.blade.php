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
                            title: "El Docente ya se encuantra registrado"
                            });
                        </script>
                        @enderror
                        
    <div class="col-md-6 grid-margin stretch-card mx-auto">
        <div class="card">
            <div class="card-body">

                <h6 class="card-title text-center">ACTUALIZAR documentos</h6>
                <hr>
                <form action="{{ route('admin.docdocentes.update', $docdocente) }}" method="POST" class="forms-sample">
                    @method('PUT')
                    @csrf
                    <div class="row mb-3">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Nombre</label>
                        <div class="col-sm-9">
                            <input type="text" name="nombre" class="form-control" id="exampleInputUsername2" value="{{$docdocente->name}}">
                            <input type="text" name="estado" class="form-control" id="exampleInputUsername2" value="{{$docdocente->estado}}" hidden>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Actualizar</button>
                    <a href="{{ route('admin.docdocentes.index')}}" class="btn btn-secondary">Cancelar</a>
                </form>

            </div>
        </div>
    </div>
</div>
    
@endsection