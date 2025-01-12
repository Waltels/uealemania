@extends('layouts.main')
@section('section')
<div class="row">

                        @error('ndoc')
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
                            title: "Deve incluir un número y un archivo o ya se registro el documento"
                            });
                        </script>
                        @enderror 
    <div class="col-md-6 grid-margin stretch-card mx-auto">
        <div class="card">
            <div class="card-body">

                <h6 class="text-center">Se agregaran documentos de la Maestra o Maestro:</h6>
                <h4 class="text-center">{{auth()->user()->name}}</h4>
                <hr>
                <form action="{{ route('admin.personaldocs.store') }}" method="POST" class="forms-sample" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="name" value="{{auth()->user()->name}}" hidden>
                    <p class="text-center">Seleccione el Documento que decea incluir al FILE de la maestra o maestro</p> <hr>
                    <div class="row mb-3">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Documento</label>
                        <div class="col-sm-9">
                            <select name="documentofile_id" class="js-example-basic-single form-select" data-width="100%">
                                @foreach ($documentos as $documento)
                                @if ($documento->estado==1)
                                    <option value="{{$documento->id}}">{{$documento->name}}</option>
                                @endif                                 
                                @endforeach  
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">N° de Documento</label>
                        <div class="col-sm-9">
                            <input type="text" name="ndoc" class="form-control" placeholder="N° de Documento">
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