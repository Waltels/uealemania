@extends('layouts.main')
@section('section')

<div class="row justify-content-center">
    <div class="col-md-10 stretch-card">
        <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-8">
                    <div class="d-flex align-items-center justify-content-between p-3 border-bottom tx-16">
                      <div class="d-flex align-items-center">
                        <i data-feather="user-x" class="text-primary icon-lg me-2"></i>
                        <span>DETALLES DEL PERMISO</span>
                      </div>
                      <div>
                        <a class="me-2" type="button" data-bs-toggle="tooltip" data-bs-title="Forward"><i data-feather="share" class="text-muted icon-lg"></i></a>
                        <a class="me-2" type="button" data-bs-toggle="tooltip" data-bs-title="Print"><i data-feather="printer" class="text-muted icon-lg"></i></a>
                        <a type="button" data-bs-toggle="tooltip" data-bs-title="Delete"><i data-feather="trash" class="text-muted icon-lg"></i></a>
                      </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between flex-wrap px-3 py-2 border-bottom">
                      <div class="d-flex align-items-center">
                        <div class="me-2">
                          <img src="{{ Auth::user()->profile_photo_url }}" alt="Avatar" class="rounded-circle img-xs">
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="mx-2 text-muted">DOCENTE</span> 
                            <span class="text-body">{{$permisodocente->docente->user->name}}</span>
                        </div>
                      </div>
                    </div>
                    <div class="p-4 border-bottom">
                        <p>El docente <span class="text-body">{{$permisodocente->docente->user->name}}</span>, presenta los siguientes datos de permiso solicitados a la Dirección de la Unidad Educativa Alemania.</p>
                        <br>
                        <p>Motivo del permiso solicitado: <span class="text-body"> <strong>{{$permisodocente->permiso->name}}</strong></span>.</p>
                        <p>El docente solicito <span class="text-body font-semibold"><strong> {{$permisodocente->dias}}</strong></span> día(s) de permiso, el o los mismos que se concedieron en las siguientes fechas:</p> </p>
                        <ul>
                            <li><span class="text-body">{{$permisodocente->dia1}}</span></li>
                            <li><span class="text-body">{{$permisodocente->dia2}}</span></li>
                            <li><span class="text-body">{{$permisodocente->dia3}}</span></li>
                        </ul>
                        <p C>Para la solicitud del permiso se tiene las siguientes consideraciones: <span class="text-body  text-cyan-950">{!!$permisodocente->descripcion!!}</span></p>
                    </div>
                    <div class="p-3">
                        <p>Si el permiso estuvo solicitado de manera escrita se adjunta el documento:</p>
                        <p><strong>Registrado por</strong>:<br> DIRECCION DE UNIDAD EDUCATIVA, en fecha: {{$permisodocente->fecha}}</p>
                    </div>
                    
               </div>
               <div class="col-lg-4 border-lg">
                <div class="aside-content">
                  <div class="d-flex align-items-center justify-content-between">
                    <button class="navbar-toggle btn btn-icon border d-block d-lg-none" data-bs-target=".email-aside-nav" data-bs-toggle="collapse" type="button">
                      <span class="icon"><i data-feather="chevron-down"></i></span>
                    </button>
                  </div>
                  <div class="d-grid my-3">
                    <a class="btn btn-primary" href="{{route('documento.permisodocentes.index')}}">CERRAR</a>
                  </div>
                  <div class="order-first text-center">
                    <h6 class="">ARCHIVO ADJUNTO</h3>
                    
                    <iframe src="{{url($permisodocente->path)}}"  width="280" height="330"></iframe>
                  </div>
                
                </div>
               </div>
            </div>
        </div>
    </div>
</div>

@endsection