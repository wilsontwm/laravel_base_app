@extends('general.layout')

@section('content')
    <section class="content-header">
        <h1>{!! $contentTitle !!}</h1>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Edit profile</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                {!! Form::model($user, ['url' => route('user.profile.update'), 'method' => 'PATCH', 'class' => 'form-horizontal']) !!}
                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    <label class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                    <label class="col-sm-2 control-label">Phone</label>
                    <div class="col-sm-10">
                        {!! Form::text('phone', null, ['class' => 'form-control']) !!}
                        {!! $errors->first('phone', '<span class="help-block">:message</span>') !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
                    <label class="col-sm-2 control-label">Address</label>
                    <div class="col-sm-10">
                        {!! Form::textarea('address', null, ['class' => 'form-control', 'rows' => '5']) !!}
                        {!! $errors->first('address', '<span class="help-block">:message</span>') !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has('country_id') ? 'has-error' : '' }}">
                    <label class="col-sm-2 control-label">Country</label>
                    <div class="col-sm-10">
                        {!! Form::select('country_id', $countries, null, ['class' => 'form-control']) !!}
                        {!! $errors->first('country_id', '<span class="help-block">:message</span>') !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has('birthday') ? 'has-error' : '' }}">
                    <label class="col-sm-2 control-label">Birthday</label>
                    <div class="col-sm-10">
                        {!! Form::date('birthday', null, ['class' => 'form-control']) !!}
                        {!! $errors->first('birthday', '<span class="help-block">:message</span>') !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has('gender') ? 'has-error' : '' }}">
                    <label class="col-sm-2 control-label">Gender</label>
                    <div class="col-sm-10">
                        {!! Form::select('gender', $gender, null, ['class' => 'form-control']) !!}
                        {!! $errors->first('gender', '<span class="help-block">:message</span>') !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has('bio') ? 'has-error' : '' }}">
                    <label class="col-sm-2 control-label">Bio</label>
                    <div class="col-sm-10">
                        {!! Form::textarea('bio', null, ['class' => 'form-control', 'rows' => '5']) !!}
                        {!! $errors->first('bio', '<span class="help-block">:message</span>') !!}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        {!! Form::submit('Save', ['class' => 'margin-r-5 btn btn-primary']) !!}
                        <a href="{{ url()->previous() }}" class="btn btn-default">Cancel</a>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
            <!-- /.box-body -->

        </div>
    </section>
@endsection