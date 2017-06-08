@extends('general.layout')

@section('content')
    <section class="content-header">
        <h1>{!! $contentTitle !!}</h1>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Change password</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                {!! Form::model($user, ['url' => route('user.password.update'), 'method' => 'PATCH', 'class' => 'form-horizontal']) !!}
                <div class="form-group {{ $errors->has('old_password') ? 'has-error' : '' }}">
                    <label class="col-sm-2 control-label">Old password</label>
                    <div class="col-sm-10">
                        {!! Form::password('old_password', ['class' => 'form-control']) !!}
                        {!! $errors->first('old_password', '<span class="help-block">:message</span>') !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has('new_password') ? 'has-error' : '' }}">
                    <label class="col-sm-2 control-label">New password</label>
                    <div class="col-sm-10">
                        {!! Form::password('new_password', ['class' => 'form-control']) !!}
                        {!! $errors->first('new_password', '<span class="help-block">:message</span>') !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has('confirm_password') ? 'has-error' : '' }}">
                    <label class="col-sm-2 control-label">Confirm password</label>
                    <div class="col-sm-10">
                        {!! Form::password('confirm_password', ['class' => 'form-control']) !!}
                        {!! $errors->first('confirm_password', '<span class="help-block">:message</span>') !!}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
            <!-- /.box-body -->

        </div>
    </section>
@endsection