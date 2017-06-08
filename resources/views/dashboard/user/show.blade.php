@extends('general.layout')

@section('content')
    <section class="content-header">
        <h1>{!! $contentTitle !!}</h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-3">
                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle" src="{{ $user->getProfileImageUrl() }}" alt="User profile picture">

                        <h3 class="profile-username text-center">{{ $user->name }}</h3>

                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Friends</b> <a class="pull-right">2,318</a>
                            </li>
                            <li class="list-group-item">
                                <b>Following</b> <a class="pull-right">462</a>
                            </li>
                        </ul>

                        <a href="mailto:{{ $user->email }}" class="btn btn-primary btn-block"><b>Email</b></a>
                    </div>
                    <!-- /.box-body -->
                </div>

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">About Me</h3>
                        @if(Auth::user() == $user)
                        <div class="box-tools pull-right">
                            {!! link_to_route_html('user.profile.edit', '<button type="button" class="btn btn-default btn-flat"><i class="fa fa-edit"></i></button>', array(), ['class' => '']) !!}
                        </div>
                        @endif
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <strong><i class="fa fa-birthday-cake margin-r-5"></i> Birthday</strong>

                        <p class="text-muted">{{ $user->getBirthday() }}</p>

                        <hr>

                        <strong><i class="fa fa-venus-mars margin-r-5"></i> Gender</strong>

                        <p class="text-muted">{{ $user->getGender() }}</p>

                        <hr>

                        <strong><i class="fa fa-phone margin-r-5"></i> Phone</strong>

                        <p class="text-muted">{{ $user->phone }}</p>

                        <hr>

                        <strong><i class="fa fa-map-marker margin-r-5"></i> Address</strong>

                        <p class="text-muted">{{ $user->address }}</p>

                        <hr>

                        <strong><i class="fa fa-globe margin-r-5"></i> Country</strong>

                        <p class="text-muted">{{ $user->getCountry() }}</p>

                        <hr>

                        <strong><i class="fa fa-file-text-o margin-r-5"></i> Bio</strong>

                        <p class="text-muted">{{ $user->bio }}</p>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>

            <div class="col-md-9">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#timeline" data-toggle="tab">Timeline</a></li>
                        <li><a href="#system" data-toggle="tab">System</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="active tab-pane" id="timeline">

                        </div>

                        <div class="active tab-pane" id="system">
                            {!! Form::model($user, ['url' => route('user.system.update', [$user]), 'method' => 'PATCH', 'class' => 'form-horizontal']) !!}
                            <div class="form-group {{ $errors->has('role_id') ? 'has-error' : '' }}">
                                <label class="col-sm-2 control-label">Role</label>
                                <div class="col-sm-10">
                                    {!! Form::select('role_id', $roles, null, ['class' => 'form-control']) !!}
                                    {!! $errors->first('role_id', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Status</label>
                                <div class="col-sm-10">
                                    <div class="form-control no-border">Active</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    {!! Form::submit('Update', ['class' => 'margin-r-5 btn btn-primary']) !!}
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>

                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
        </div>
    </section>
@endsection