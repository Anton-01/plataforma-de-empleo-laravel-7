@extends('layouts.app')

@section('content')
<div class="col-md-10">
    <div class="block block-themed block-fx-shadow mb-0">
    <div class="block-header">
        <h3 class="block-title">{{ __('Register') }}</h3>
        <div class="block-options">
            <a class="btn-block-option js-tooltip-enabled" href="{{ route('login') }}" data-toggle="tooltip"
                data-placement="left" title="" data-original-title="Sign In">
                <i class="fa fa-sign-in-alt"></i> Ingresar
            </a>
        </div>
    </div>
    <div class="block-content">
        <div class="p-sm-3 px-lg-4 py-lg-5">
            <h1 class="mb-2">Sefeco</h1>
            <p>Complete los siguientes detalles para crear una nueva cuenta.</p>
            <form class="js-validation-signin" action="{{ route('register') }}" method="POST">
                @csrf
                <div class="py-3">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Nombre de la empresa</label>
                                <input id="name" type="text"
                                    class="form-control form-control-alt form-control-lg @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" autofocus>
                                @error('name')
                                <div class="alert bg-danger alert-dismissable text-white rounded mt-2" role="alert">
                                    <p class="mb-0">{{ $message }}</p>
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="contacto">Nombre del contacto</label>
                                <input id="contacto" type="text"
                                    class="form-control form-control-alt form-control-lg @error('contacto') is-invalid @enderror" name="contacto"
                                    value="{{ old('contacto') }}" autofocus>
                                @error('contacto')
                                <div class="alert bg-danger alert-dismissable text-white rounded mt-2" role="alert">
                                    <p class="mb-0">{{ $message }}</p>
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="telefono">Teléfono</label>
                                <input id="telefono" type="text"
                                    class="form-control form-control-alt form-control-lg @error('telefono') is-invalid @enderror" name="telefono"
                                    value="{{ old('telefono') }}"autofocus>
                                @error('telefono')
                                <div class="alert bg-danger alert-dismissable text-white rounded mt-2" role="alert">
                                    <p class="mb-0">{{ $message }}</p>
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Correo electrónico</label>
                                <input id="email" type="email"
                                    class="form-control form-control-alt form-control-lg @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" autofocus>
                                @error('email')
                                <div class="alert bg-danger alert-dismissable text-white rounded mt-2" role="alert">
                                    <p class="mb-0">{{ $message }}</p>
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="direccion">Dirección</label>
                        <input id="direccion" type="text"
                            class="form-control form-control-alt form-control-lg @error('direccion') is-invalid @enderror" name="direccion"
                            value="{{ old('direccion') }}" autofocus>
                        @error('direccion')
                        <div class="alert bg-danger alert-dismissable text-white rounded mt-2" role="alert">
                            <p class="mb-0">{{ $message }}</p>
                        </div>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input id="password" type="password" class="form-control form-control-alt form-control-lg @error('password') is-invalid @enderror" name="password">
                                @error('password')
                                <div class="alert bg-danger alert-dismissable text-white rounded mt-2" role="alert">
                                    <p class="mb-0">{{ $message }}</p>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="password-confirm">Repetir contraseña</label>
                                <input type="password" class="form-control form-control-alt form-control-lg" name="password_confirmation" id="password-confirm">
                                @error('password_confirmation')
                                <div class="alert bg-danger alert-dismissable text-white rounded mt-2" role="alert">
                                    <p class="mb-0">{{ $message }}</p>
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-block btn-primary">
                            <i class="fa fa-fw fa-plus mr-1"></i> {{ __('Register') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>
@endsection
