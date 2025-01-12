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
                        <h6 class="text-center">Se ACTUALIZARAN documentos de la Maestra o Maestro:</h6>
                        <h4 class="text-center">{{auth()->user()->name}}</h4>
                        <hr>
                        <form action="{{route('admin.personaldocs.update', $personaldoc)}}" method="POST" class="forms-sample" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <input type="text" name="name" value="{{auth()->user()->name}}" hidden>
                            <div class="row mb-3">
                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Documento</label>
                                <div class="col-sm-9">
                                    <select name="docs" class="js-example-basic-single form-select" data-width="100%">
                                        @foreach ($documentos as $documento)
                                        <option value="{{ $documento->name }}"
                                        @if ($documento->name == $personaldoc->docs)
                                        selected="selected"
                                        @endif
                                        >{{ $documento->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">N° de Documento</label>
                                <div class="col-sm-9">
                                    <input type="text" name="ndoc" class="form-control" placeholder="N° de Documento" value="{{$personaldoc->ndoc}}">
                                </div>

                                <input type="text" name="url" class="form-control" placeholder="N° de Documento" value="{{$personaldoc->doc_path}}" hidden>
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
                        <iframe src="{{url($personaldoc->doc_path)}}"  width="250" height="410"></iframe>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection