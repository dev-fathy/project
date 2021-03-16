@extends('layouts.back.login-master')

@section('title')
<title>Customer Registration</title>
@endsection
@section('content')

@section('content')
<div class="login-wrap">
    <div class="login-content">
        <div class="login-logo">
            <a href="#">
                <h3> {{ __('Customer Registeration') }} </h3>
            </a>
        </div>

        <div class="login-form">
        <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group">
                    <label for="name">{{ __('Customer Name') }}</label>
                    <input class="au-input au-input--full" type="text" name="name" placeholder="Name"
                        value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">{{ __('E-Mail Address') }}</label>
                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email"
                        value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="website">{{ __('Customer Website') }}</label>
                    <input class="au-input au-input--full" type="text" name="website" placeholder="website"
                        value="{{ old('website') }}" required autocomplete="website" autofocus>
                    @error('website')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="password">{{ __('Password') }}</label>
                    <input id="password" type="password"
                        class="au-input au-input--full @error('password') is-invalid @enderror" name="password" required
                        autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group login-checkbox">

                    <label for="password-confirm"
                        class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                        required autocomplete="new-password">


                </div>

                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">{{ __('Register') }}</button>



            </form>
        </div>
    </div>
</div>
</div>

@endsection
