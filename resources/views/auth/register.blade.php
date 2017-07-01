@extends('partials._welcome')

@section('content')
<div class="container">
    @include('flash::message')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group has-feedback {{ $errors->has('name') ? ' has-error' : '' }}">

                            <div class="col-md-10 col-md-offset-1">
                                <input id="name" type="text" class="form-control" name="name" placeholder="Name" value="{{ old('name') }}" required autofocus>
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">

                            <div class="col-md-10 col-md-offset-1">
                                <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required>
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
                        </div>

                        <div class="form-group has-feedback">

                            <div class="col-md-10 col-md-offset-1">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm password" required>
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            </div>

                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-1 col-xs-8">
                                <p>By registering, I agree to <a href="#">Terms & Conditions</a>.</p>
                            </div>
                            <div class="col-md-4 col-xs-4">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Register
                                </button>
                            </div>
                            <a class="col-md-10 col-md-offset-1" href="{{ url('/login') }}">
                                Already have an account? Login here.
                            </a>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
