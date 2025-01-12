@extends('layouts.main')
@section('section')
<div class="row">
                        @error('descripcion')
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
                            title: "Deve incluir un Título del Curso"
                            });
                        </script>
                        @enderror 
                        @error('file')
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
                            title: "Deve incluir un archivo del Curso"
                            });
                        </script>
                        @enderror 
    <div class="col-md-6 grid-margin stretch-card mx-auto">
        <div class="card">
            <div class="card-body">

                <h6 class="text-center">Se agregaran documentos  de <strong>CURSOS</strong> de la Maestra o Maestro:</h6>
                <h4 class="text-center">{{auth()->user()->name}}</h4>
                <hr>
                <form action="{{ route('admin.cursos.store') }}" method="POST" class="forms-sample" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="name" value="{{auth()->user()->name}}" hidden>
                    
                    <div class="row mb-3">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Título</label>
                        <div class="col-sm-9">
                            <input type="text" name="descripcion" class="form-control" placeholder="Título del Certificado del Curso">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Emisor</label>
                        <div class="col-sm-9">
                            <input type="text" name="emisor" class="form-control" placeholder="Institución emisora del Certificado del Curso">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">Archivo</label>
                        <div class="col-sm-9">
                            <input type="file" name="file" accept="pdf/jpeg,image/png/jpg" id="myDropify"/>
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