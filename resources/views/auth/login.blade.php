@extends('layouts/master')

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>Login</h1>

            <form method="POST" action="/auth/login">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" value="{{ old('password') }}">
                </div>

                <form-group>
                    <input type="checkbox" name="remember">
                    <label for="remember">Remember me</label>
                </form-group>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>

            @include('partials/errors')
        </div>
    </div>
@stop