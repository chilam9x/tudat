@extends('layouts.app')

@section('content')

<div class="m-login__container">
    <div class="m-login__logo">
        <a href="#">
            <img src="public/assets/app/media/img//logos/logo-1.png">
        </a>
    </div>
    <div class="m-login__signin">
        <div class="m-login__head">
            <h3 class="m-login__title">
                Sign In To Admin
            </h3>
        </div>
        <form class="m-login__form m-form" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group m-form__group">
                <input class="form-control m-input {{ $errors->has('email') ? ' is-invalid' : '' }}"  id="email" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus autocomplete="off">
                @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
            </div>
            <div class="form-group m-form__group">
                <input class="form-control m-input m-login__form-input--last {{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" type="password" placeholder="Password" name="password" required>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group  m-form__group">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>
            <div class="m-login__form-action">
                <button type="submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn m-login__btn--primary" >
                    Sign In
                </button>
            </div>
        </form>
    </div>

</div>
@endsection
