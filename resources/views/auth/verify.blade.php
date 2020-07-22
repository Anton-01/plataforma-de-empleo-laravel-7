@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-20 text-center">

                <div class="card-header text-2xl my-5">{{ __('Verify Your Email Address') }}</div>


                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
        @csrf
        <button type="submit" class=" mt-5 max-w-sm bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline mb-3">{{ __('click here to request another') }}</button>
    </form>
</div>
@endsection
