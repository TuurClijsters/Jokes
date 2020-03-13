@extends('layout')

@section('content')
<div id="formcontainer">

    <div id="left_form">

        <div id="titel-form">Sign In</div>
        <div id="form">
                <form method ='POST' action ="{{ route('login') }}" id="form">
                    @csrf

                    <div class="row">
                        <input type ="email" id="email" class="form_field" name="email" placeholder="EMail" value="{{ old('email') }}" required autocomplete="email">
                        <label for ="email" class="labelStyle">{{ __('E-Mail') }}</label>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <div class="row">
                        <input id="password" type="password" class="form_field @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
                        <label for="password" class="labelStyle">{{ __('Password') }}</label>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="">
                        <button type="submit" class="btn">Log in</button>
                        <!-- <input type="button" class="btn" value="Log In"> -->
                        @if (Route::has('password.request'))
                            <!-- <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a> -->
                        @endif
                    </div>


                </form>
        </div>
    </div>



    <div id="right_form">
        Lalala
    </div>
</div>


<!-- <div class="container">
    <div class="card">
        <div class="card-header">{{ __('Login') }}</div>

        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="okai">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</div> -->

@endsection
