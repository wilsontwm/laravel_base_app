@extends('partials._welcome')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">

                            <div class="col-md-10 col-md-offset-1">
                                <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">

                            <div class="col-md-10 col-md-offset-1">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <a class="col-md-10 col-md-offset-1" href="{{ route('password.request') }}">
                                Forgot your password?
                            </a>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-1 col-xs-8">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-4 col-xs-4">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Login
                                </button>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <p class="text-center">- OR -</p>
                                <a href="{{ url('/redirect/facebook') }}" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
                                    Facebook</a>
                                <a href="{{ url('/redirect/google') }}" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
                                    Google+</a>
                            </div>

                            <a class="col-md-10 col-md-offset-1" href="{{ url('/register') }}">
                                Don't have an account? Sign up here.
                            </a>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
