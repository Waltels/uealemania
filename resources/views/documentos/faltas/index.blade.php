@extends('layouts.main')
@section('section')

<div class="row">
    
    <div class="col-md-6 grid-margin stretch-card mx-auto">
        <div class="card">
            <a class="btn btn-primary" href="{{route('documento.faltas.create')}}"> REGISTAR NUEVA FALTA</a>
            <div class="card-body">
                <h6 class="card-title">DOCUMENTOS REGISTRADOS</h6>
                <div class="table-responsive">
                <table id="dataTableExample" class="table">
                    <thead>
                    <tr>
                        <th>N°</th>
                        <th>Nombre</th>
                        <th>Acciones</th>

                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($faltas as $falta)
                        <tr>
                            <td>{{$falta->id}} </td>
                            <td>{{$falta->name}} </td>
                            <td>
                                <a href="{{route('documento.faltas.edit', $falta)}}" class="btn btn-icon btn-outline btn-inverse-secondary"><i data-feather="edit"></i></a>
                                
                                @if ($falta->estado==1)
                                <a href="" class="btn btn-outline btn-inverse-primary" data-bs-toggle="modal" data-bs-target="#editardocfile{{$falta->id}}"><i data-feather="check"></i>Activo</a> 
                                @else
                                <a href="" class="btn btn-outline btn-inverse-danger" data-bs-toggle="modal" data-bs-target="#editardocfile{{$falta->id}}"><i data-feather="alert-circle"></i>Inactivo</a> 
                                @endif
                                
                                
        
                                {{-- Modal estado --}}
                                <div class="modal fade" id="editardocfile{{$falta->id}}" tabindex="-1" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                      <div class="modal-content">
                                        <div class="modal-header mx-auto">
                                            @if ($falta->estado==1)
                                            <h6 class="modal-title text-center">Estado actual <strong><samp class="modal-title h4"> ACTIVO</samp></strong></h6>
                                            @else
                                            <h6 class="modal-title text-center">Estado actual <strong><samp class="modal-title h4"> INACTIVO</samp></strong></h6>
                                            @endif
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('documento.faltas.update', $falta) }}" method="POST" class="forms-sample">
                                                @method('PUT')
                                                @csrf
                                                <div class="row mb-3 ">
                                                    <div class="col-sm-6">
                                                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Nuevo estado</label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="nombre" class="form-control"  value="{{$falta->name}}" hidden>
                                                        <input type="text" name="normativa" class="form-control"  value="{{$falta->normativa}}" hidden>
                                                        <select name="estado" id="" class="js-example-basic-single form-select" data-width="100%">
                                                            <option value="1">Activo</option>
                                                            <option value="0">Inactivo</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary me-2">Actualizar</button>
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        
                                            </div>
                                            </form>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                            </td>
    
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
