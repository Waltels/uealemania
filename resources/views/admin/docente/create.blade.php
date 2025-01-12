@extends('layouts.main')
@section('section')
<div class="row">
                        @error('user_id')
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

                        @error('ci')
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
                            title: "Debe registrar la Cedula de Identidad"
                            });
                        </script>
                        @enderror
                        @error('telefono')
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
                            title: "Debe registrar un teléfono"
                            });
                        </script>
                        @enderror
                        @error('direccion')
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
                            title: "Debe registrar una Dirección"
                            });
                        </script>
                        @enderror
                        
    <div class="col-md-6 grid-margin stretch-card mx-auto">
        <div class="card">
            <div class="card-body">

                <h6 class="card-title text-center">nuevo docente</h6>
                <hr>
                <form action="{{ route('admin.docente.store') }}" method="POST" class="forms-sample">
                    @csrf
                    <div class="row mb-3">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nombre</label>
                        <div class="col-sm-9">
                            <select name="user_id" class="js-example-basic-single form-select" data-width="100%">
                                @foreach ($users as $user)
                                    <option value="{{$user->id}}">{{$user->name}} </option>   
                                @endforeach
                                
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">C I</label>
                        <div class="col-sm-9">
                            <input type="text" name="ci" class="form-control" id="exampleInputUsername2" placeholder="Cédula de Identidad">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">Telefono</label>
                        <div class="col-sm-9">
                            <input type="text" name="telefono" class="form-control" id="exampleInputUsername2" placeholder="Numero de teléfono">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Direccion</label>
                        <div class="col-sm-9">
                            <input type="text" name="direccion" class="form-control" id="exampleInputUsername2" placeholder="Direccion actual">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Registrar</button>
                    <button class="btn btn-secondary">Cancel</button>
                </form>

            </div>
        </div>
    </div>
</div>
    
@endsection