@extends('layouts.main')
@section('section')


                         @error('dia1')
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

                        @error('path')
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
                            title: "Deve incluir un archivo del permiso"
                            });
                        </script>
                        @enderror 

    <div class="row justify-content-center">
        <div class="col-md-8 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title mb-1">datos del solicitante</h6>

                        <form method="POST" id="permisos" action="{{route('documento.permisodocentes.store')}}" enctype="multipart/form-data">
                            @csrf 
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label">Docente</label>
                                        <select name="docente_id" id="user_id" class="form-control" aria-label="Default select example">
                                            @foreach ($docentes as $docente)
                                            <option value="{{$docente->user->id}}">{{$docente->user->name}}</option>
                                            @endforeach    
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label" >Motivo</label>
                                        <select name="motivo" id="motivo" class="form-control" aria-label="Default select example">
                                            @foreach ($permisos as $permiso)
                                            <option value="{{$permiso->id}}">{{$permiso->name}}</option>
                                            @endforeach 
                                          </select>
                                    </div>
                                </div>
                                
                                <div class="col-sm-1">
                                    <div class="mb-3">
                                        <label class="form-label">Dias</label>
                                        <select name="dias" id="dias" class="form-control" aria-label="Default select example">
                                            <option value="1">1</option>
                                            <option value="2">2 </option>
                                            <option value="3">3</option>
                                          </select>
                                    </div>
                                </div>

                                <div class="col-sm-3 text-center">
                                    <div class="mb-2">
                                        <p class="form-label">Fecha de registro</p>
                                        <div class="input-group flatpickr" id="dashboardDate">
                                            <input name="fecha"  type="text" class="form-control" placeholder="Fecha" data-input >
                                            
                                        </div>
                                    </div>
                                </div>
                                
                            </div><!-- Row -->
                            <div class="row">
                                <h4 class="card-title mb-1">FECHAS DE PERMISOS</h4>
                                <div class="col-sm-3 text-center">
                                    <div class="mb-3">
                                        <p class="form-label">MES</p>
                                        <select name="mes"  class="form-control" aria-label="Default select example">
                                            @foreach ($meses as $mes)
                                            <option value="{{$mes->id}}">{{$mes->name}}</option>
                                            @endforeach 
                                          </select>
                                    </div>
                                </div>
                                <div class="col-sm-3 text-center">
                                    <div class="mb-3">
                                        <p class="form-label">Fecha 1</p>
                                        <div class="input-group flatpickr" id="flatpickr-date">
                                            <input name="dia1"  type="text" class="form-control" placeholder="Fecha" data-input>
                                            <span class="input-group-text input-group-addon" data-toggle><i data-feather="calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 text-center">
                                    <div class="mb-3">
                                        <label class="form-label">Fecha 2</label>
                                        <div class="input-group flatpickr" id="flatpickr-date">
                                            <input name="dia2" id="dias2" type="text" class="form-control" placeholder="Fecha" data-input>
                                            <span class="input-group-text input-group-addon" data-toggle><i data-feather="calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 text-center">
                                    <div class="mb-3">
                                        <label class="form-label">Fecha 3</label>
                                        <div class="input-group flatpickr" id="flatpickr-date">
                                            <input name="dia3" id="dias3" type="text" class="form-control" placeholder="Fecha" data-input>
                                            <span class="input-group-text input-group-addon" data-toggle><i data-feather="calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Row -->
                            <div class="row">
                                <div class="col-sm-7">
                                    <h4 class="card-title">Descricion de la solicitud de permiso</h4>
                                    <textarea class="form-control" name="descripcion" id="tinymceExample" rows="15"></textarea>
                                </div>
                                <div class="col-sm-5">
                                    <label class="form-label">Archivo adjunto</label>
                                    <input name="file" type="file" id="myDropify">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary submit mt-2">Registrar Permisos</button>
                            <a href="{{route('documento.permisodocentes.index')}}" class="btn btn-success mt-2">Cancelar</a>
                        </form>
                        
                </div>
            </div>
        </div>
    </div>
@endsection