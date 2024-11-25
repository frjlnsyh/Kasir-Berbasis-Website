@extends('layouts.app')

@section('content')
<div class="container">
    <div class="brand">
        <img src="{{asset('user/asset/logo.png')}}" alt="">
        <h1>Sulasa</h1>
        <div class="text-brand">
            Ayam Tepung Paling Mantab
        </div>
    </div>
    <div class="log active">
        <div class="show">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="brand-log">
                    Masuk
                </div>
                <div class="row mb-3">
                    <label for="email">Email</label>
                    <div class="log-error">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-md-6">

                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-8 offset-md-4 but-log">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>
                        <button type="button" class="but1">Daftar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="reg">
        <div class="hide">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="brand-log">
                    Daftar
                </div>
                <div class="row mb-3">
                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

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

                <div class="row mb-3">
                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-6 offset-md-4  but-log">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Daftar') }}
                        </button>
                        <button type="button" class="but2">Masuk</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="{{asset('js/auth-animated.js')}}"></script>
@endsection