@extends('layouts.app')

@section('content')

<div class="container mx-auto">
    <div class="flex flex-wrap justify-center">
        <div class="w-full max-w-sm">
            <div class="flex flex-col break-words bg-white border border-2 shadow-md mt-20">
                <div class="bg-gray-300 text-gray-700 uppercase text-center py-3 px-6 mb-0">
                    {{ __('Login') }}
                </div>
            </div>

            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{ route('login') }}" method="POST" novalidate>
                @csrf
                <div class="mb-6 flex flex-wrap">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="{{ __('E-Mail Address') }}">
                        {{ __('E-Mail Address') }}
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline  @error('email') border-red-500 @enderror" id="email" type="text" placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>
                    @error('email')
                        <span class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-3 text-sm">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-6 flex flex-wrap">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="{{ __('Password') }}">
                        {{ __('Password') }}
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('password') border-red-500 @enderror" id="password" type="password" placeholder="******************" name="password"  autocomplete="current-password">
                    @error('password')
                        <span class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-3 text-sm">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="md:w-2/3 block text-gray-500 font-bold">
                    <input class="mr-2 leading-tight" type="checkbox">
                        <span class="text-sm">
                            {{ __('Remember Me') }}
                        </span>
                    </label>
                </div>

                <div class="flex flex-column flex-wrap">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full mb-3" type="submit">
                        {{ __('Login') }}
                    </button>
                    @if (Route::has('password.request'))
                        <a class="inline-block align-baseline font-bold text-sm text-gray-500 hover:text-gray-600" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>

            </form>

            <p class="text-center text-gray-500 text-xs">
                &copy;2020 Anton Ortiz. All rights reserved.
            </p>

        </div>
    </div>
</div>
@endsection
