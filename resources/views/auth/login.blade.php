@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" align="center">
        <div class="col-md-12" align="center" >
            <div align="center">
                <a href="index.html" class="mb-5 d-block auth-logo">
                    <img src="{{ url('/assets/images/logo-dark.png') }}" alt="" height="22" class="logo logo-dark">
                    <img src="{{ url('/assets/images/logo-light.png') }}" alt="" height="22" class="logo logo-light">
                </a>
            </div>
        </div>
    </div>
    
    <div class="row justify-content-center"> 
        <div class="col-md-8">
        
            <div class="card">

                <div class="card-header">{{ __('Login') }}
                
                </div>

                <div class="card-body">

{{-- @if(isset($flash_failure)) 
                <div class="alert alert-danger text-end">
                	{{$flash_failure ?? ''}}
                </div>
               @endif
                @if(isset($flash_success)) 
                <div class="alert alert-success text-end">
                	{{$flash_success ?? ''}}
                </div>
              @endif --}}

                    <form method="POST" action="{{ route('backend.login.post') }}">
                        @csrf

                        <!-- Email Address -->
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required >

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- <div class="row mb-3">
                            <label for="remember_me" class="col-md-4 col-form-label text-md-end">{{ __('Remember me') }}</label>

                            <div class="col-md-6">
                                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember_me" required >

                                @error('remember_me')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div> -->


                        <!-- Remember Me -->
                        <!-- <div class="block mt-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div> -->

                        <div class="row mb-3">
                            <div class="col-md-6 text-start">
                                @if (Route::has('register'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                                   Don't have an account?  {{ __('Register') }}
                                </a>
                                @endif
                            </div>

                            <div class="col-md-6 text-end">
                                @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                                @endif
                            </div>
                        </div>


                        <!-- <div class="flex items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                            @endif
                        </div> -->

                        <div class="row">
                            <button type="submit" class="btn btn-primary ">
                                {{ __('Log in') }}
                            </button>
                        </div>

                       


                        <input type="hidden" id="webside" name="webside" value="backend">

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
