@extends('layouts.main')
@section('section')

    <nav class="page-breadcrumb">
    

                         @error('fecha')
                        <script>
                            const Toast = Swal.mixin({
                            toast: true,
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.onmouseenter = Swal.stopTimer;
                                toast.onmouseleave = Swal.resumeTimer;
                            }
                            });
                            Toast.fire({
                            icon: "error",
                            title: "Deve incluir almenos la fecha1 de permiso"
                            });
                        </script>
                        @enderror    
                        
                        @error('descripcion')
                        <script>
                            const Toast = Swal.mixin({
                            toast: true,
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.onmouseenter = Swal.stopTimer;
                                toast.onmouseleave = Swal.resumeTimer;
                            }
                            });
                            Toast.fire({
                            icon: "error",
                            title: "Deve incluir descripcion del permiso"
                            });
                        </script>
                        @enderror

    </nav>
    <div class="row justify-content-center">
        <div class="col-md-8 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title mb-1">datos del solicitante</h6>

                        <form method="POST" id="faltasdoc" action="{{route('documento.faltadocentes.store')}}" enctype="multipart/form-data">
                            @csrf 
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="mb-3">
                                        <label class="form-label">Nombre</label>
                                        <select name="docente_id"  class="form-control" aria-label="Default select example">
                                            @foreach ($docentes as $docente)
                                            <option value="{{$docente->user->id}}">{{$docente->user->name}}</option>
                                            @endforeach    
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="mb-3">
                                        <label class="form-label" >Motivo de la Falta</label>
                                        <select name="falta_id"  class="form-control" aria-label="Default select example">
                                            @foreach ($faltas as $falta)
                                            <option value="{{$falta->id}}">{{$falta->name}}</option>
                                            @endforeach 
                                          </select>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="mb-3">
                                        <label class="form-label text-center" >Mes</label>
                                        <select name="mes_id"  class="form-control" aria-label="Default select example">
                                            @foreach ($mess as $mes)
                                            <option value="{{$mes->id}}">{{$mes->name}}</option>
                                            @endforeach 
                                          </select>
                                    </div>
                                </div>

                            </div><!-- Row -->
                            <div class="row">
                                <h4 class="card-title mb-1">FECHA DE LA FALTA</h4>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label" >Fecha</label>
                                        <div class="input-group flatpickr" id="flatpickr-date">
                                            <input name="fecha" type="text" class="form-control" placeholder="Fecha" data-input>
                                            <span class="input-group-text input-group-addon" data-toggle><i data-feather="calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label" >Acción a tomar</label>
                                        <div class="input-group flatpickr" id="flatpickr-date">
                                            <textarea class="form-control" name="acciones"  rows="2"></textarea>
                                        </div>
                                    </div>
                                </div>

                            </div><!-- Row -->
                            <div class="mb-3">
                                <div class="col-sm-12">
                                    <h4 class="card-title">Descricion de la Falta</h4>
                                    <textarea class="form-control" name="descripcion" id="tinymceExample" rows="3"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary submit">Registrar la Falta</button>
                            <a href="{{route('documento.faltadocentes.index')}}" class="btn btn-success">Cancelar</a>
                        </form>  
                </div>
            </div>
        </div>
    </div>
  
@endsection