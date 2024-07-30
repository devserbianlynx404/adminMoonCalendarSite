@extends('layouts.welcome')

@section('content')
    <body class="theme-blush">
    <div class="authentication">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <form class="card auth_form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="header">
                            <img class="logo" src="{{asset('assets/images/logo1.png')}}" alt="">
                            <h5>Log in</h5>
                        </div>
                        <div class="body">
                            <div class="input-group mb-3">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="input-group mb-3">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="checkbox">
                                <input id="remember_me" type="checkbox" name="remember">
                                <label for="remember_me">Remember Me</label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">SIGN IN</button>
                        </div>
                    </form>
                </div><div class="col-lg-8 col-sm-12">
                    <div class="card">
                        <img src="{{asset('assets/images/signin1.svg')}}" alt="Sign In"/>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
