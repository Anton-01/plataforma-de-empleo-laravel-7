@extends('layouts.app')

@section('content')
<div class="col-md-8 col-lg-6 col-xl-4">
    <!-- Sign In Block -->
    <div class="block block-themed block-fx-shadow mb-0">
        <div class="block-header">
            <h3 class="block-title">{{ __('Login') }}</h3>
            <div class="block-options">
                @if(Route::has('password.request'))
                <a class="btn-block-option font-size-sm"
                    href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                @endif
                <a class="btn-block-option" href="{{ route('register')}}" data-toggle="tooltip" data-placement="left"
                    title="Nueva Cuenta">
                    <i class="fa fa-user-plus"></i>
                </a>
            </div>
        </div>
        <div class="block-content">
            <div class="p-sm-3 px-lg-4 py-lg-5">
                <h1 class="mb-2">Sefeco</h1>
                <p>Bienvenido, accede a tu cuenta.</p>
                <form class="js-validation-signin" action="{{ route('login') }}" method="POST" novalidate>
                    @csrf
                    <div class="py-3">
                        <div class="form-group">
                            <label for="email" class="text-md-right">{{ __('E-Mail Address') }} <span class="campo-obligatorio">(Campo obligatorio)</span></label>
                            <input type="text" class="form-control form-control-alt form-control-lg" id="email"
                                placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ old('email') }}"
                                autocomplete="email" autofocus>
                            @error('email')
                            <div class="alert bg-danger alert-dismissable text-white rounded mt-2" role="alert">
                                <p class="mb-0">{{ $message }}</p>
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-md-right">{{ __('Password') }} <span class="campo-obligatorio">(Campo obligatorio)</span></label>
                            <input type="password" class="form-control form-control-alt form-control-lg" id="password"
                                placeholder="******************" name="password" autocomplete="current-password">
                            @error('password')
                            <div class="alert bg-danger alert-dismissable text-white rounded mt-2" role="alert">
                                <p class="mb-0">{{ $message }}</p>
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 col-xl-5">
                            <button type="submit" class="btn btn-block btn-color-sefeco">
                                <i class="fa fa-fw fa-sign-in-alt mr-1"></i> {{ __('Login') }}
                            </button>
                        </div>
                    </div>
                </form>
                <!-- END Sign In Form -->
            </div>
        </div>
    </div>
    <!-- END Sign In Block -->
</div>
@endsection
