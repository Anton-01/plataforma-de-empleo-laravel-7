@extends('layouts.app')

@section('content')
<div class="block block-themed block-fx-shadow mb-0">
    <div class="block-header">
        <h3 class="block-title">{{ __('Reset Password') }}</h3>
        <div class="block-options">
            <a class="btn-block-option" href="{{ route('login') }}" data-toggle="tooltip" data-placement="left"
                title="{{ __('Login') }}">
                <i class="fa fa-sign-in-alt"></i>
            </a>
        </div>
    </div>
    <div class="block-content">
        @if(session('status'))
            <div class="alert alert-success d-flex align-items-center" role="alert">
                <div class="flex-00-auto">
                    <i class="fa fa-fw fa-check"></i>
                </div>
                <div class="flex-fill ml-3">
                    <p class="mb-0">{{ session('status') }}</p>
                </div>
            </div>
        @endif
        <div class="p-sm-3 px-lg-4 py-lg-5">
            <h1 class="mb-2">Sefeco</h1>
            <p>Proporcione el correo electrónico de su cuenta y le enviaremos su contraseña.</p>
            <form class="js-validation-reminder" method="POST" action="{{ route('password.email') }}" novalidate>
                @csrf
                <div class="form-group py-3">
                    <label for="email" class="text-md-right">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email"
                        class="form-control form-control-lg form-control-alt @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" required autocomplete="email" placeholder="Correo Electrónico" autofocus>

                    @error('email')
                    <div class="alert bg-danger alert-dismissable text-white rounded mt-2" role="alert">
                        <p class="mb-0">{{ $message }}</p>
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-primary">
                        <i class="fa fa-fw fa-envelope mr-1"></i> {{ __('Send Password Reset Link') }}
                    </button>
                </div>
            </form>
            <!-- END Reminder Form -->
        </div>
    </div>
</div>
@endsection
