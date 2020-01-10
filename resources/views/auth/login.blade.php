@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-body login-card-body">

        <form class=" m-form" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="input-group mb-3">
                <input style="bor" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus autocomplete="off">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
                @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>
            <div class="input-group mb-3">
                <input class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" type="password" placeholder="Password" name="password" required>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
                @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>
            <div class="row">
                <div class="col-8">
                    <div class="icheck-primary">
                        <input type="checkbox" id="remember">
                        <label for="remember">
                            Remember Me
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                </div>
                <!-- /.col -->
            </div>
        </form>


    </div>
    <!-- /.login-card-body -->
</div>
@endsection
