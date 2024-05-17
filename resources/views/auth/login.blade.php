@extends('layouts.merge.dashboardWithoutMenu')
<link rel="shortcut icon" href="/site/assets/img/favicon-uan.png" />

<title>FH-UAN</title>
<div class="row">

        <div style="background-image: url(/site/assets/img/Licenciatura-resize.jpg);background-position:center;background-size:cover;width:100%;
        height:100vh;" class="col-md-7 col-12 d-none d-md-flex align-items-stretch justify-content-center">

        </div>
        <div style="padding-left: 0px;" class="col-md-5 col-12">

            <x-guest-layout>
                <x-auth-card >
                    <x-slot name="logo">
                        <a href="{{ route('site.home') }}">
                            {{-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> --}}
                            <img src="/site/assets/img/Logo_Humanos.png" alt="Logo" width="150">
                        </a>
                    </x-slot>

                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4 alert alert-info" :status="session('status')" />

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4 alert alert-danger" :errors="$errors" />

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email Address -->
                        <div>
                            <x-label for="email" :value="__('Email')" />

                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                                autofocus />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-label for="password" :value="__('Password')" />

                            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                                autocomplete="current-password" />
                        </div>

                        <!-- Remember Me -->
                        <div class="block mt-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox"
                                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    name="remember">
                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div>

                        <div class=" mb-4">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                    href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-3">
                                {{ __('Log in') }}
                            </x-button>
                        </div>
                    </form>


                </x-auth-card>
            </x-guest-layout>

        </div>


</div>


</body>
</html>
