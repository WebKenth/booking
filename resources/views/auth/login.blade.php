@extends('layouts.login')

@section('content')
<section class="hero is-success is-fullheight">
    <div class="hero-body">
        <div class="container has-text-centered">
        <div class="column is-4 is-offset-4">
            <h1 class="title has-text-grey">Login</h1>
            <p class="subtitle has-text-grey">Please login to proceed.</p>
            <div class="box">
            <figure class="avatar">
                <img src="https://placehold.it/128x128">
            </figure>
            <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                <div class="field">
                    <div class="control">
                        <input class="input is-large" type="email" name="email" placeholder="Your Email" autofocus="">
                    </div>
                </div>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
                <div class="field">
                    <div class="control">
                        <input class="input is-large" type="password" name="password" placeholder="Your Password">
                    </div>
                </div>
                <div class="field">
                    <label class="checkbox">
                        <input type="checkbox" name="remember">
                        Remember me
                    </label>
                </div>
                <button class="button is-block is-info is-large" type="submit">Login</button>
            </form>
            </div>
            <p class="has-text-grey">
            <a href="{{ route('register') }}">Sign Up</a> &nbsp;·&nbsp;
            <a href="{{ route('password.request') }}">Forgot Password</a>
            </p>
        </div>
        </div>
    </div>
</section>
@endsection
