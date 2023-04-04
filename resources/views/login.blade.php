@extends('layouts.auth')

@section('content')
    <h5>Sign in</h5>

    <!-- form -->
    <form action="/login" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <input type="text" name="email" class="form-control" placeholder="Username or email" required autofocus>
            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" name="password" required>
            @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
        </div>
        <div class="form-group d-flex justify-content-between">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" checked="" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember me</label>
            </div>
            {{-- <a href="{{ route('login') }}">Reset password</a> --}}
        </div>
        <button type="submit" class="btn btn-primary btn-block">Sign in</button>

        <hr>
        <p class="text-muted">Don't have an account?</p>
        <a href="" class="btn btn-outline-light btn-sm">Register now!</a>
    </form>
    <!-- ./ form -->
@endsection
