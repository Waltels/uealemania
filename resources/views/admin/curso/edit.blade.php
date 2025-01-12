@extends('layouts.main')
@section('section')
<div class="row">

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
                            title: "Deve incluir un nuevo archivo al documento"
                            });
                        </script>
                        @enderror 
    <div class="col-md-8 grid-margin stretch-card mx-auto">
        <div class="card">
            <div class="row">
                <div class="col-md-8">
                    <div class="card-body">
                        <h6 class="text-center">Se actualizara el CURSO de la Maestra o Maestro:</h6>
                        <h4 class="text-center">{{auth()->user()->name}}</h4>
    
                        <form action="{{route('admin.cursos.update', $curso)}}" method="POST" class="forms-sample" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <input type="text" name="name" value="{{auth()->user()->name}}" hidden>
                            <hr>
                            <div class="row mb-3">
                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Titulo</label>
                                <div class="col-sm-9">
                                    <input type="text" name="descripcion" class="form-control" placeholder="N° de Documento" value="{{$curso->descripcion}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Emisor</label>
                                <div class="col-sm-9">
                                    <input type="text" name="emisor" class="form-control" placeholder="N° de Documento" value="{{$curso->emisor}}">
                                </div>
                                <input type="text" name="url" class="form-control" placeholder="N° de Documento" value="{{$curso->doc_path}}" hidden>
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
                <div class="col-md-4">
                    <div class="order-first text-center mt-4">
                        <h6 class="">ARCHIVO ADJUNTO</h3>
                        <iframe src="{{url($curso->doc_path)}}"  width="250" height="410"></iframe>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection