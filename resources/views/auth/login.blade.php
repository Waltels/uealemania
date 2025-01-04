{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ms-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout> --}}
@extends('layouts.maind')
@section('auth')
<div class="row w-100 mx-0 auth-page">
    <div class="col-md-5 col-xl-3 mx-auto">
        <div class="card">
            <div class="row">

                <div class="col-md-12 ps-md-0">
                    <div class="auth-form-wrapper px-4 py-5">
                        <a href="#" class="noble-ui-logo d-block mb-2"><span>UE</span> Alemania</a>
                        <h5 class="text-muted fw-normal mb-4">¡Bienvenido! Inicie sesión en su cuenta.</h5>
                        <form class="forms-sample" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="userEmail" class="form-label">Dirección de correo electrónico</label>
                                <input type="email" id="email" name="email" class="form-control" id="userEmail" placeholder="Correo">
                            </div>
                            <div class="mb-3">
                                <label for="userPassword" class="form-label">Contraseña</label>
                                <input type="password" id="password" name="password"  class="form-control" id="userPassword" autocomplete="current-password" placeholder="Contraseña">
                            </div>
                            
                            <div>
                                <button type="submit" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
                                <i class="btn-icon-prepend" data-feather="play-circle"></i>
                                Iniciar sesión
                                </button>
                            </div>
                            <a href="{{route('register')}}" class="d-block mt-3 text-muted">¿No es un usuario? Regístrate</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection