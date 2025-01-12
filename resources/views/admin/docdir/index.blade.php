@extends('layouts.main')
@section('section')
<div class="row">
    <div class="col-xl-10 main-content ps-xl-4 pe-xl-5">
        <a class="btn btn-primary btn-icon-text" href="{{route('admin.docdireccions.create')}}">
            <i class="btn-icon-prepend" data-feather="file"></i>
            NUEVO DOCUMENTO A ENVIAR A DIRECCION
        </a>
        <h4 class="text-center">DOCUMENTOS REGISTRADOS DE LA MAESTRA O MAESTRO</h4>
        <div class="example">
            <div class="row">
                @foreach ($docdireccions as $docdireccion)
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="card">
                        <img src="{{asset('img/file.jpg')}}"  class="mx-auto mt-3" width="80%"  alt="...">
                        <div class="card-body">
                        <h5 class="card-title text-center">{{$docdireccion->docdocente->name}} <br> N° de Doc<strong> {{$docdireccion->id}} </strong></h5>
                       
                            <div class="btn-group">
                                <a href="{{url($docdireccion->doc_path)}}" target="_blank" class="btn btn-primary btn-icon-text"><i class="btn-icon-prepend" data-feather="play"></i></a>
                                <a href="{{url($docdireccion->doc_path)}}" download="" class="btn btn-primary btn-icon-text"><i class="btn-icon-prepend" data-feather="download"></i></a>
                                <a href="{{route('admin.docdireccions.edit', $docdireccion)}}" class="btn btn-primary btn-icon-text"><i class="btn-icon-prepend" data-feather="edit"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>   
@endsection